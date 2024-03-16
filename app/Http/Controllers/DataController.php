<?php

namespace App\Http\Controllers;

use App\Imports\ImportExcelDirection;
use App\Models\DistanceLocation;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Illuminate\Http\UploadedFile;

use Maatwebsite\Excel\Facades\Excel;
// use App\Imports\ImportExcelDirection; // Sesuaikan dengan import yang sesuai



class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DistanceLocation $distanceLocation)
    {
        return view('data.index', [
            'direction' => $distanceLocation->paginate(6),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DistanceLocation $distanceLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DistanceLocation $distanceLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DistanceLocation $distanceLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DistanceLocation $distanceLocation)
    {
        //
    }

    public function importExcelDirection(Request $request)
    {
        $this->validate($request, [
            'import_excel_destination' => 'required|mimes:csv,xls,xlsx',
        ]);
        $file = $request->file('import_excel_destination');

        // Validasi dan manipulasi file jika diperlukan

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_siswa', $nama_file);

        $import = new ImportExcelDirection; // Gantilah dengan import yang sesuai
        Excel::import($import, public_path('/file_siswa/' . $nama_file));

        return redirect()->back()->with('success', 'Data berhasil diimpor.');
    }
}
