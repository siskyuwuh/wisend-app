<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Receipt;
use App\Models\CustomerData;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\DistanceLocation;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Carbon\Carbon;
use Exception;
// use PDF;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
// use Illuminate\Foundation\Exceptions;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Booking $booking)
    {
        //

        return view('booking.index', [
            'booking' => $booking->latest()->paginate(10),
        ]);
    }

    public function byShipmentId()
    {
        //

        return view('booking.partner');
    }


    public function generatePDF(Booking $booking)
    {
        // $destination = DistanceLocation::where('id', $booking->booking_destination)->first();
        $data = [
            'noResi' => $booking->receipt->receipt_id,
            'bkdTime' => Carbon::parse($booking->created_at)->format('d M Y'),
            'shipperName' => $booking->shipper_name,
            'shipperPhone' => $booking->shipper_phone,
            'shipperAddress' => $booking->shipper_address,
            'product' => $booking->booking_product,
            'recipientName' => $booking->recipient_name,
            'recipientPhone' => $booking->recipient_phone,
            'recipientAddress' => $booking->recipient_address,
            'service' => $booking->bkg_service,
            'cod_fee' => ($booking->receipt->cod_fee === null) ? 'Non Cod' : $booking->receipt->cod_fee,
            'totalPrice' => $booking->receipt->ovl_cost,
            'p' => $booking->p,
            'l' => $booking->l,
            't' => $booking->t,
            'dimentionalWeight' => $booking->dimentional_weight,
            'grossWeight' => $booking->actual_weight,
            'weightCharge' => $booking->receipt->weight_charge,
            'destination' => $booking->destination->kelurahan . ', ' . $booking->destination->kecamatan . ', ' . $booking->destination->kabupaten,
            'distance' => $booking->destination->jarak,
            'distance_charge' => $booking->receipt->dist_charge,
        ];
        // Max Name 20 letters
        // Max address 250 letters
        // left: 0px;
        // top: 123px;

        $pdf = FacadePdf::loadView('components.pdf', $data);

        // Opsional: Konfigurasi tambahan seperti ukuran dan orientasi halaman
        $pdf->setPaper('A6', 'portrait');
        // $pdf->setPaper(array(150, 100, 150, 100), 'portrait');
        $pdf->setOption(['defaultFont' => 'sans-serif', 'isHtml5ParserEnabled' => true, 'isPhpEnabled' => true]);

        // $pdf->render();
        return $pdf->stream("document.pdf", array("Attachment" => false));
        // Simpan PDF ke file atau kirim ke browser
        // return response($pdf->output())
        //     ->header('Content-Type', 'application/pdf')
        //     ->header('Content-Disposition', 'inline;');
    }

    public function clearSession()
    {
        request()->session()->forget('id');

        return response()->json(['status' => 'success']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        // dd($request);
        $validator = Validator::make($request->except(['save_data1', 'save_data2', 'weight_charge', 'ovel_cost', 'dist_charge']), $request->rules());

        if ($validator->stopOnFirstFailure()->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validate();


        DB::beginTransaction();

        try {

            // dd($validated);
            // Simpan booking
            $booking = Booking::create($validated);

            $nomorTerakhir = DB::table('receipts')->max('receipt_id');
            $last8Characters = Str::substr($nomorTerakhir, -13);

            $promos = NULL;
            $nomorBaru = (int)$last8Characters + 1;
            $nomorDiformat = str_pad($nomorBaru, 13, '0', STR_PAD_LEFT);
            // Simpan receipt
            Receipt::create([
                'booking_id' => $booking->id, // Mengaitkan receipt dengan booking
                // 'receipt_id' => "WS" . Carbon::now()->format('dmY') . $nomorDiformat,
                'receipt_id' => "WS" . $nomorDiformat,
                'shipment_status' => 1,
                'weight_charge' => $request->input('weight_charge'),
                'dist_charge' => $request->input('dist_charge'),
                // 'promo' => $promos,
                'ovl_cost' => $request->input('ovl_cost'),
            ]);

            // STATUS
            // BKD: Booked (Barang sedang dalam proses pemesanan atau reservasi)
            // PCK: Packed (Barang sudah dipacking)
            // SHP: Shipped (Barang sudah dikirim)
            // DEL: Delivered (Barang sudah diterima)
            // PND: Pending (Pemesanan masih menunggu konfirmasi atau proses selanjutnya)
            // CAN: Cancelled (Pemesanan dibatalkan)
            // RTN: Returned (Barang dikembalikan ke pengirim)
            // ONS: Onsite (Barang sudah sampai di lokasi pengguna)
            // RJT: Rejected (Pemesanan ditolak atau tidak dapat diproses)
            // FAI1: Failed Attempt 1 (Gagal dikirim, percobaan pertama)
            // FAI2: Failed Attempt 2 (Gagal dikirim, percobaan kedua)
            // FAI3: Failed Attempt 3 (Gagal dikirim, percobaan ketiga)
            // DRP: Dropped (Barang telah di-drop)
            // 0 = CNX
            // 1 = BKD
            // 2 = POD
            // 3 =
            // 4 =
            // 5 =

            if ($request->input('save_data1') === 'save-data') {

                CustomerData::create([
                    'name' => $validated['shipper_name'],
                    'phone' => $validated['shipper_phone'],
                    'address' => $validated['shipper_address'],
                ]);
            }

            if ($request->input('save_data2') === 'save-data') {

                CustomerData::create([
                    'name' => $validated['recipient_name'],
                    'phone' => $validated['recipient_phone'],
                    'address' => $validated['recipient_address'],
                ]);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            // Handle kesalahan jika terjadi
            return redirect()->back()->with([
                'error' => 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.',
            ])->withInput();
        }

        return redirect()->route('booking.create')->with([
            'success' => 'Booking Berhasil!',
            'id' => $booking->id,
        ])->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
        // $destination = DistanceLocation::where('id', $booking->booking_destination)->first();
        // dd($booking);
        return view('booking.show', [
            'data' => $booking,
            // 'destination' => $destination
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
