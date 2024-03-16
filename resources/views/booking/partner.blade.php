<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Booking') }}
        </h2>
    </x-slot> --}}


    <section class="dark:bg-gray-900">
        <div class="max-w-screen-xl px-10 pb-10 pt-5">
            <!-- Start coding here -->
            <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">

                <label for="shipper-name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                    Shipment ID</label>

                <input type="text" id="input-code"
                    class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                    autocomplete="off" placeholder="Masukkan
                    Shipment ID" value="">
            </div>
        </div>
    </section>

</x-app-layout>
