<x-app-layout>
    <x-slot name="header">
        {{-- <a href="{{ route('booking.index') }}">
            Mundur</a> --}}
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Buat Booking Baru') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div id="alert-border-3"
            class="absolute z-50 mb-4 flex w-full items-center border-t-4 border-red-300 bg-red-50 p-4 text-red-800 dark:border-red-800 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg class="h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ml-3 text-sm font-medium">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button type="button"
                class="-mx-1.5 -my-1.5 ml-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-red-50 p-1.5 text-red-500 hover:bg-red-200 focus:ring-2 focus:ring-red-400 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    <section class="bg-white px-10 pb-10 pt-5 dark:bg-gray-900">

        <form class="grid gap-y-9 bg-white" action="{{ route('booking.store') }}" method="post">

            @csrf
            @method('POST')

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
                        <span class="text-2xl font-medium">Buat Booking Baru</span>
                    </div>
                </div>

                <div class="item-start flex self-stretch">

                    <div class="item-start flex w-52 flex-col self-stretch py-5">
                        <span class="text-xs font-normal text-gray-400">
                            Total Tarif
                        </span>
                        <div class="flex items-start text-xl font-semibold text-red-700">

                            <span id="tarif">0</span><span class="ml-1">IDR</span>
                        </div>
                    </div>

                    <div class="item-start flex w-40 flex-col self-stretch py-5">

                        <button type="submit"
                            class="item-self flex justify-center rounded-lg border bg-red-700 px-[51px] py-[18px] text-white">
                            Booking
                        </button>
                    </div>



                </div>
            </div>

            {{-- DETAIL PENGIRIMAN --}}

            <div class="grid w-full gap-3">
                <h2 class="align-self-lg-stretch text-base font-bold text-gray-900 dark:text-white">Detail
                    Pengiriman
                </h2>

                <div class="grid grid-cols-1 justify-between gap-x-4 gap-y-3 md:grid-cols-2 md:gap-y-0">

                    {{-- KOLOM PENGIRIM --}}

                    <div class="grid w-full max-w-full grid-cols-1 gap-y-4">

                        <div class="relative">
                            <label for="shipper-name"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama
                                Pengirim</label>

                            <input type="text" name="shipper_name" id="shipper-name"
                                class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                autocomplete="off" placeholder="Masukkan Nama Pengirim"
                                value="{{ old('shipper_name') }}" required>

                            <ul id="shipper-data-suggestions"
                                class="top-19 absolute left-0 z-10 hidden max-h-32 w-full overflow-y-auto rounded-lg border border-gray-300 bg-white shadow-md">
                            </ul>

                        </div>

                        <div class="">
                            <label for="shipper-price"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">No. Telephone
                                Pengirim
                            </label>
                            <input type="number" name="shipper_phone" id="shipper-phone"
                                class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                autocomplete="off" placeholder="Contoh : 08xxxxxxxxx" value="{{ old('shipper_phone') }}"
                                required>
                        </div>

                        <div class="">
                            <label for="shipper-address"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat
                                Pengirim</label>
                            <textarea maxlength="200" id="shipper-address" name="shipper_address" rows="8"
                                class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                autocomplete="off" placeholder="Your description here">{{ old('shipper_address') }}</textarea>
                        </div>

                        <div class="">
                            <label for="category"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kelurahan,
                                Kecamatan,
                                Kabupaten Asal</label>
                            <select id="category" disabled
                                class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
                                <option selected="">CIPINANG, PULO GADUNG, JAKARTA TIMUR</option>
                            </select>
                        </div>

                        <div class="mb-4 flex items-center">
                            <input id="save-data-checkbox1" name="save_data1" type="checkbox" value="save-data"
                                class="h-5 w-5 rounded border-gray-300 bg-gray-100 text-red-600 focus:ring-2 focus:ring-red-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-red-600">
                            <label for="save-data-checkbox1"
                                class="ml-4 text-sm font-medium text-gray-900 dark:text-gray-300">Simpan Data
                                Pengirim</label>
                        </div>
                    </div>

                    {{-- KOLOM PENERIMA --}}

                    <div class="grid w-full max-w-full grid-cols-1 gap-y-4 pt-4 md:pt-0">

                        <div class="relative">
                            <label for="recipient-name"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama
                                Penerima</label>
                            <input type="text" name="recipient_name" id="recipient-name"
                                class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                autocomplete="off" placeholder="Masukkan Nama Penerima"
                                value="{{ old('recipient_name') }}" required>

                            <ul id="recipient-data-suggestions"
                                class="top-19 absolute left-0 z-10 hidden max-h-32 w-full overflow-y-auto rounded-lg border border-gray-300 bg-white shadow-md">
                            </ul>
                        </div>

                        <div class="w-full">
                            <label for="recipient-price"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">No. Telephone
                                Penerima
                            </label>
                            <input type="number" name="recipient_phone" id="recipient-phone"
                                class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                autocomplete="off" placeholder="Contoh : 08xxxxxxxxx"
                                value="{{ old('recipient_phone') }}" required>
                        </div>

                        <div class="">
                            <label for="recipient-address"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat
                                Penerima</label>
                            <textarea maxlength="200" id="recipient-address" name="recipient_address" rows="8"
                                class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                autocomplete="off" placeholder="Your description here">{{ old('recipient_address') }}</textarea>
                        </div>



                        <div class="relative">
                            <label for="searchInputDestination"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kelurahan,
                                Kecamatan,
                                Kabupaten Asal</label>

                            <input type="hidden" id="destination" name="bkg_destination">

                            <input type="text" id="searchInputDestination"
                                class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                autocomplete="off" placeholder="Masukkan Nama Penerima" required>

                            <ul id="suggestions"
                                class="absolute left-0 top-20 z-10 hidden max-h-32 w-full overflow-y-auto rounded-lg border border-gray-300 bg-white shadow-md">
                            </ul>


                        </div>

                        <div class="mb-4 flex items-center">
                            <input id="save-data-checkbox2" name="save_data2" type="checkbox" value="save-data"
                                class="h-5 w-5 rounded border-gray-300 bg-gray-100 text-red-600 focus:ring-2 focus:ring-red-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-red-600">
                            <label for="save-data-checkbox2"
                                class="ml-4 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Simpan Data Penerima
                            </label>
                        </div>

                    </div>
                </div>

            </div>

            <hr class="">

            {{-- DETAIL BARANG --}}
            <div class="grid w-full gap-3">
                <h2 class="col align-self-lg-stretch text-base font-bold text-gray-900 dark:text-white">Detail Barang
                </h2>

                <div class="col justify-content-between grid grid-cols-1 grid-rows-2 gap-4">

                    {{-- JENIS PENGIRIMAN --}}
                    <div class="w-full">
                        <label for="booking_product"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            Jenis Pengiriman
                        </label>

                        <ul class="grid w-full gap-x-6 md:grid-cols-2">
                            <li>
                                <input type="radio" id="product1" name="bkg_service" value="1"
                                    class="peer hidden" required>
                                <label for="product1"
                                    class="inline-flex w-full cursor-pointer items-center justify-center rounded-lg border border-gray-200 bg-white p-5 text-gray-500 hover:border-wisend-red hover:bg-gray-100 hover:text-gray-600 peer-checked:border-wisend-red peer-checked:bg-red-100 peer-checked:text-wisend-red dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-red-500">
                                    <div class="block text-center">
                                        <div class="w-full text-lg font-semibold">Kilat</div>
                                        <div class="w-full text-gray-600">Good for small websites</div>
                                    </div>
                                    {{-- <svg class="ml-3 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg> --}}
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="product2" name="bkg_service" value="2"
                                    class="peer hidden">
                                <label for="product2"
                                    class="inline-flex w-full cursor-pointer items-center justify-center rounded-lg border border-gray-200 bg-white p-5 text-gray-500 hover:border-wisend-blue hover:bg-gray-100 hover:text-gray-600 peer-checked:border-blue-600 peer-checked:bg-blue-100 peer-checked:text-blue-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-blue-500">
                                    <div class="block text-center">
                                        <div class="w-full text-lg font-semibold">Same Day</div>
                                        <div class="w-full text-gray-600">Good for large websites</div>
                                        {{-- </div>
                                <svg class="ml-3 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg> --}}
                                </label>
                            </li>
                        </ul>

                    </div>

                    {{-- KALKULASI BERAT ITEM --}}
                    <div class="grid w-full grid-cols-3 gap-9">

                        {{-- INPUT BERAT AKTUAL --}}
                        <div class="col">
                            <label for="item-weight"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Berat Barang <span
                                    class="text-gray-400">(/kg)</span>
                            </label>

                            <input type="number" name="actual_weight" id="item-weight"
                                class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                autocomplete="off" placeholder="0" value="0" step="any" min="0"
                                max="20" required>
                        </div>

                        {{-- INPUT DIMENSI --}}
                        <div class="col">
                            <label for="item-dimension"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Berat Barang
                                <span class="text-gray-400">(/kg)</span>
                            </label>


                            {{-- P X L X T --}}
                            <div class="block">
                                <div class="grid grid-cols-5 gap-2">
                                    <div class="col">

                                        {{-- INPUT P --}}
                                        <input type="number" name="p" id="P"
                                            class="focus:ring-primary-600 noscroll focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 w-12 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                            autocomplete="off" placeholder="0" value="10" min="1"
                                            required>
                                    </div>

                                    <div class="col my-auto justify-center text-center">X</div>

                                    {{-- INPUT L --}}
                                    <div class="col">
                                        <input type="number" name="l" id="L"
                                            class="focus:ring-primary-600 noscroll focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 w-12 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                            autocomplete="off" placeholder="0" value="10" min="1"
                                            required>
                                    </div>

                                    <div class="col my-auto justify-center text-center">X</div>

                                    {{-- INPUT T --}}
                                    <div class="col">
                                        <input type="number" name="t" id="T"
                                            class="focus:ring-primary-600 noscroll focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 w-12 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                            autocomplete="off" placeholder="0" value="10" min="1"
                                            required>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Perlu buat keterangan hasil berat --}}

                        {{-- Berat Dimensi --}}
                        <div class="col">
                            <label for="total-item-dimension"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Berat Barang <span
                                    class="text-gray-400">(/kg)</span>
                            </label>
                            {{-- <input type="hidden" id="total-item-dimension" name="dimensional_weight"> --}}
                            <input name="dimensional_weight" type="number" id="total-item-dimension"
                                class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                value="0" step="any">
                        </div>
                    </div>
                </div>

            </div>

            <hr class="">

            {{-- TOTAL BERAT --}}

            {{-- <input type="text" id="test3" name="item_weight"> --}}

            {{-- Total Price --}}

            {{-- <input type="text" id="test"> --}}
            <input class="hidden" type="number" id="test3" name="weight_charge">
            <input class="hidden" type="number" id="test2" name="ovl_cost">
            <input class="hidden" type="number" step="any" id="distance" name="dist_charge">


            {{-- <button type="submit" class="w-2/3 bg-wisend-red">Booking</button> --}}

        </form>

        {{-- @if (session('error'))
            <div class="text-red-700">
                {{ session('error') }}
            </div>
        @endif --}}
    </section>
    {{--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> --}}

    @if (session('id'))
        <script>
            // Buka tab baru setelah redirect
            window.open("{{ route('print.resi.pdf', ['booking' => session('id')]) }}", '_blank');

            // Hapus session 'id' setelah digunakan
            setTimeout(function() {
                fetch("{{ route('clear.session') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            key: 'id'
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Session cleared:', data);
                    })
                    .catch(error => {
                        console.error('Error clearing session:', error);
                    });
            }, 1000); // Menunggu 1 detik sebelum menghapus session
        </script>
    @endif

    <script>
        const uniqueSuggestions = new Set();

        const searchInputShipperData = document.getElementById("shipper-name");
        const shipperDataSuggestionList = document.getElementById("shipper-data-suggestions");

        function getShipperData() {
            const inputValue = searchInputShipperData.value.trim();

            shipperDataSuggestionList.innerHTML = "";

            // Lakukan panggilan API menggunakan fetch
            fetch(`http://wisend-app.test/api/customer-data?q=${inputValue}`)
                .then((response) => response.json()).then((data) => {
                    result = data.data;

                    // Membersihkan setiap kali ada perubahan input
                    uniqueSuggestions.clear();

                    result.forEach((item) => {
                        filter = item.name;
                        if (filter.toLowerCase().includes(inputValue.toLowerCase())) {
                            uniqueSuggestions.add(item);
                        }
                    });

                    // Bersihkan daftar saran
                    shipperDataSuggestionList.innerHTML = "";

                    // Buat elemen <li> untuk setiap saran unik
                    uniqueSuggestions.forEach((item) => {
                        const suggestion = document.createElement("li");
                        suggestion.textContent = item.name + ", " + item.phone;
                        suggestion.classList.add(
                            "cursor-pointer",
                            "hover:bg-gray-100",
                            "p-2"
                        );

                        suggestion.addEventListener("click", () => {
                            const shipperPhone = document.getElementById("shipper-phone");
                            const shipperAddress = document.getElementById("shipper-address");

                            searchInputShipperData.value = item.name;
                            shipperPhone.value = item.phone;
                            shipperAddress.value = item.address;


                            shipperDataSuggestionList.innerHTML = ""; // Bersihkan daftar saran
                            shipperDataSuggestionList.classList.add("hidden");
                        });

                        shipperDataSuggestionList.appendChild(suggestion);
                    });

                    if (uniqueSuggestions.size > 0) {
                        shipperDataSuggestionList.classList.remove("hidden");
                    } else {
                        shipperDataSuggestionList.classList.add("hidden");
                    }

                })
                .catch((error) => {
                    console.error("Terjadi kesalahan:", error);
                });
        }

        searchInputShipperData.addEventListener("input", getShipperData);

        // RECIPIENT SUGGESTIONS LIST

        const searchInputRecipientData = document.getElementById("recipient-name");
        const recipientDataSuggestionList = document.getElementById("recipient-data-suggestions");

        function getRecipientData() {
            const inputValue = searchInputRecipientData.value.trim();

            recipientDataSuggestionList.innerHTML = "";

            // Lakukan panggilan API menggunakan fetch
            fetch(`http://wisend-app.test/api/customer-data?q=${inputValue}`)
                .then((response) => response.json()).then((data) => {
                    result = data.data;

                    // Membersihkan setiap kali ada perubahan input
                    uniqueSuggestions.clear();

                    result.forEach((item) => {
                        filter = item.name;
                        if (filter.toLowerCase().includes(inputValue.toLowerCase())) {
                            uniqueSuggestions.add(item);
                        }
                    });

                    // Bersihkan daftar saran
                    recipientDataSuggestionList.innerHTML = "";

                    // Buat elemen <li> untuk setiap saran unik
                    uniqueSuggestions.forEach((item) => {
                        const suggestion = document.createElement("li");
                        suggestion.textContent = item.name + ", " + item.phone;
                        suggestion.classList.add(
                            "cursor-pointer",
                            "hover:bg-gray-100",
                            "p-2"
                        );

                        suggestion.addEventListener("click", () => {
                            const recipientPhone = document.getElementById("recipient-phone");
                            const recipientAddress = document.getElementById("recipient-address");

                            searchInputRecipientData.value = item.name;
                            recipientPhone.value = item.phone;
                            recipientAddress.value = item.address;


                            recipientDataSuggestionList.innerHTML = ""; // Bersihkan daftar saran
                            recipientDataSuggestionList.classList.add("hidden");
                        });

                        recipientDataSuggestionList.appendChild(suggestion);
                    });

                    if (uniqueSuggestions.size > 0) {
                        recipientDataSuggestionList.classList.remove("hidden");
                    } else {
                        recipientDataSuggestionList.classList.add("hidden");
                    }

                })
                .catch((error) => {
                    console.error("Terjadi kesalahan:", error);
                });
        }

        searchInputRecipientData.addEventListener("input", getRecipientData);





        const searchInputDestination = document.getElementById("searchInputDestination");
        const suggestionsList = document.getElementById("suggestions");
        const distance = document.getElementById("distance");
        let tarif = document.getElementById("tarif");
        tarif.textContent = 0;

        // Set locale ke bahasa Indonesia

        function getSuggestions() {
            const inputValue = searchInputDestination.value.trim();

            // Hapus saran sebelumnya
            suggestionsList.innerHTML = "";

            // Lakukan panggilan API menggunakan fetch
            fetch(`http://wisend-app.test/api/distance-location?q=${inputValue}`)
                .then((response) => response.json())
                .then((data) => {
                    result = data.data;

                    // Membersihkan setiap kali ada perubahan input
                    uniqueSuggestions.clear();

                    result.forEach((item) => {
                        filter = item.kelurahan;
                        if (filter.toLowerCase().includes(inputValue.toLowerCase())) {
                            uniqueSuggestions.add(item);
                        }
                    });

                    // Bersihkan daftar saran
                    suggestionsList.innerHTML = "";

                    // Buat elemen <li> untuk setiap saran unik
                    uniqueSuggestions.forEach((item) => {
                        const suggestion = document.createElement("li");
                        suggestion.textContent = item.kelurahan + ", " + item.kecamatan + ", " + item.kabupaten;
                        suggestion.classList.add(
                            "cursor-pointer",
                            "hover:bg-gray-100",
                            "p-2"
                        );

                        suggestion.addEventListener("click", () => {
                            searchInputDestination.value = item.kelurahan + ", " + item.kecamatan +
                                ", " + item.kabupaten;
                            distance.value = item.jarak;
                            const destination = document.getElementById("destination");
                            destination.value = item.id;

                            let totalBiaya =
                                parseFloat(
                                    totalBiayaJarak(pembulatanHasilJarak(item.jarak))
                                ) +
                                totalBiayaBerat(
                                    pembulatanHasilBerat(
                                        perbandinganBerat(
                                            parseFloat(input_weight.value),
                                            hasilDimensi()
                                        )
                                    )
                                );

                            // let formatted = totalBiaya.toLocalString('id-ID');

                            document.getElementById("test2").value = totalBiaya;
                            tarif.textContent = totalBiaya.toLocaleString('id-ID');
                            document.getElementById("test3").value =
                                pembulatanHasilBerat(
                                    perbandinganBerat(
                                        parseFloat(input_weight.value),
                                        hasilDimensi()
                                    )
                                );
                            suggestionsList.innerHTML = ""; // Bersihkan daftar saran
                            suggestionsList.classList.add("hidden");
                        });

                        suggestionsList.appendChild(suggestion);
                    });

                    if (uniqueSuggestions.size > 0) {
                        suggestionsList.classList.remove("hidden");
                    } else {
                        suggestionsList.classList.add("hidden");
                    }
                })
                .catch((error) => {
                    console.error("Terjadi kesalahan:", error);
                });
        }

        searchInputDestination.addEventListener("input", getSuggestions);
        distance.addEventListener("change", getSuggestions);

        const input_weight = document.getElementById("item-weight");
        const input_P = document.getElementById("P");
        const input_L = document.getElementById("L");
        const input_T = document.getElementById("T");
        const totalDimension = document.getElementById("total-item-dimension");

        function hasilDimensi(p, l, t) {
            p = parseFloat(input_P.value) || 0;
            l = parseFloat(input_L.value) || 0;
            t = parseFloat(input_T.value) || 0;

            const hasil = (p * l * t) / 6000;
            return hasil.toFixed(2);
        }

        function pembulatanHasilBerat(a) {
            if (a < 1) {
                return 1;
            } else {
                const nilaiDesimal = a - Math.floor(a);
                if (nilaiDesimal >= 0.51) {
                    return Math.ceil(a);
                } else {
                    return Math.floor(a);
                }
            }
        }

        function perbandinganBerat(beratKotor, beratDimensi) {
            if (beratKotor > beratDimensi) {
                return beratKotor;
            } else {
                return beratDimensi;
            }
        }

        function totalBiayaBerat(a) {
            return a * 1000;
        }

        input_weight.addEventListener("input", updateTotalDimension);
        input_P.addEventListener("input", updateTotalDimension);
        input_L.addEventListener("input", updateTotalDimension);
        input_T.addEventListener("input", updateTotalDimension);

        function updateTotalDimension() {
            totalDimension.value = hasilDimensi();
            // totalDimension.value = perbandinganBerat(
            //     input_weight.value,
            //     hasilDimensi()
            // );

            let totalBiaya =
                parseFloat(totalBiayaJarak(pembulatanHasilJarak(distance.value))) +
                totalBiayaBerat(
                    pembulatanHasilBerat(
                        perbandinganBerat(
                            parseFloat(input_weight.value),
                            hasilDimensi()
                        )
                    )
                );

            document.getElementById("test2").value = totalBiaya;
            tarif.textContent = totalBiaya.toLocaleString('id-ID');

            document.getElementById("test3").value = pembulatanHasilBerat(
                perbandinganBerat(parseFloat(input_weight.value), hasilDimensi())
            );
        }

        updateTotalDimension();

        function pembulatanHasilJarak(a) {
            if (a < 1) {
                return 1;
            } else {
                const nilaiDesimal = a - Math.floor(a);
                if (nilaiDesimal >= 0.31) {
                    return Math.ceil(a);
                } else {
                    return Math.floor(a);
                }
            }
        }

        function totalBiayaJarak(a, b = 2500) {
            a = parseFloat(a);
            return a * b;
        }
    </script>

</x-app-layout>
