<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Booking') }}
        </h2>
    </x-slot> --}}



    <section class="bg-white px-10 pb-10 pt-5 dark:bg-gray-900">

        <div class="grid gap-y-9 bg-white">



            <div class="flex h-auto w-full items-start justify-between border-b-2">

                <div class="flex items-start self-stretch">

                    {{-- BACK BUTTON --}}

                    <a href="{{ route('booking.index') }}" class="mx-4 py-9">
                        <svg class="h-6 w-6 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                    </a>

                    <div class="flex py-[27px]">
                        <span class="text-2xl font-medium">{{ $data->receipt->receipt_id }}</span>
                    </div>
                </div>

            </div>

            {{-- DETAIL PENGIRIMAN --}}

            <div class="grid w-full gap-3 rounded border p-6 shadow-lg">
                <h2 class="align-self-lg-stretch mb-4 text-xl font-bold text-gray-900 dark:text-white">Detail
                    Pengiriman
                </h2>

                <div class="grid grid-cols-1 justify-between gap-y-9">

                    {{-- KOLOM PENGIRIMAN --}}

                    <div class="grid w-full max-w-full grid-cols-1 gap-y-4">

                        <div class="relative">
                            <label for="shipper-name"
                                class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">Nomor Resi</label>

                            <span class="text-sm font-thin text-gray-700">{{ $data->receipt->receipt_id }}</span>

                        </div>


                        <div class="">
                            <label for="category"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kelurahan,
                                Kecamatan,
                                Kabupaten Asal</label>
                            <span
                                class="text-sm font-thin text-gray-700">{{ $data->destination->kelurahan . ', ' . $data->destination->kecamatan . ', ' . $data->destination->kabupaten }}</span>

                        </div>

                        <div class="">
                            <label for="category"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kelurahan,
                                Kecamatan,
                                Kabupaten Tujuan</label>
                            <span class="text-sm font-thin text-gray-700">Cipinang, Pulo Gadung, Jakarta Timur</span>

                        </div>

                    </div>

                    <hr class="border-gray-300">


                    {{-- KOLOM PENGIRIM --}}

                    <div class="grid w-full max-w-full grid-cols-1 gap-y-4">


                        <div class="relative">
                            <label for="shipper-name"
                                class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">Nama
                                Pengirim</label>

                            <span class="text-sm font-thin text-gray-700">{{ $data->shipper_name }}</span>

                        </div>

                        <div class="">
                            <label for="shipper-price"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">No. Telephone
                                Pengirim
                            </label>
                            <span class="text-sm font-thin text-gray-700">{{ $data->shipper_phone }}</span>

                        </div>

                        <div class="">
                            <label for="shipper-address"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat
                                Pengirim</label>
                            <span class="text-sm font-thin text-gray-700">{{ $data->shipper_address }}</span>

                        </div>
                    </div>

                    <hr class="border-gray-300">

                    {{-- KOLOM PENERIMA --}}

                    <div class="grid w-full max-w-full grid-cols-1 gap-y-4">


                        <div class="relative">
                            <label for="recipient-name"
                                class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">Nama
                                Penerima</label>

                            <span class="text-sm font-thin text-gray-700">{{ $data->recipient_name }}</span>

                        </div>

                        <div class="">
                            <label for="recipient-price"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">No. Telephone
                                Penerima
                            </label>
                            <span class="text-sm font-thin text-gray-700">{{ $data->recipient_phone }}</span>

                        </div>

                        <div class="">
                            <label for="recipient-address"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat
                                Penerima</label>
                            <span class="text-sm font-thin text-gray-700">{{ $data->recipient_address }}</span>

                        </div>
                    </div>


                </div>

            </div>

            <hr class="border-gray-300">

            {{-- DETAIL BARANG --}}
            <div class="grid w-full gap-3">
                <h2 class="align-self-lg-stretch mb-4 text-xl font-bold text-gray-900 dark:text-white">Detail Barang
                </h2>

                <div class="grid grid-cols-1 justify-between gap-y-9 md:grid-cols-2">


                    <div class="">
                        <label for=""
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Produk
                            Pengiriman</label>

                        @switch($data->booking_product)
                            @case(1)
                                <span
                                    class="me-2 rounded bg-red-100 px-4 py-1 text-base font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Instant</span>
                            @break

                            @case(2)
                                <span
                                    class="me-2 rounded bg-blue-100 px-4 py-1 text-base font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">Same
                                    Day</span>
                            @break

                            @default
                        @endswitch


                    </div>

                    <div class="">
                        <label for="" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            Dimensi (P x L x T)
                        </label>
                        <span
                            class="text-sm font-thin text-gray-700">{{ $data->p . ' x ' . $data->l . ' x ' . $data->t }}</span>

                    </div>

                    <div class="">
                        <label for="" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Berat
                            Barang</label>
                        <span class="text-sm font-thin text-gray-700">{{ $data->gross_weight }}</span>

                    </div>
                    <div class="">
                        <label for="" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Berat
                            Dimensi</label>
                        <span class="text-sm font-thin text-gray-700">{{ $data->dimentional_weight }}</span>

                    </div>
                    <div class="">
                        <label for="" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Berat
                            yang Dikenakan biaya</label>
                        <span class="text-sm font-thin text-gray-700">{{ $data->receipt->weight_charge }}</span>

                    </div>
                    <div class="">
                        <label for="" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jarak
                            Tujuan</label>
                        <span class="text-sm font-thin text-gray-700">{{ $data->destination->jarak }}</span>

                    </div>
                    <div class="">
                        <label for="" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jarak
                            yang dikenakan biaya</label>
                        <span class="text-sm font-thin text-gray-700">{{ $data->receipt->distance_charge }}</span>

                    </div>


                </div>

            </div>

            {{-- <button type="submit" class="w-2/3 bg-wisend-red">Booking</button> --}}

        </div>

        {{-- @if (session('error'))
            <div class="text-red-700">
                {{ session('error') }}
            </div>
        @endif --}}
    </section>


</x-app-layout>
