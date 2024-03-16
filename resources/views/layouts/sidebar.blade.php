<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
    class="ml-3 mt-2 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden">
    <span class="sr-only">Open sidebar</span>
    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="logo-sidebar"
    class="fixed left-0 top-0 z-40 h-screen w-80 -translate-x-full transition-transform sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full overflow-y-auto bg-gray-100 px-0 py-0 shadow-2xl clearfix dark:bg-gray-800">

        <div class="flex w-full justify-center border-b-2 px-8 py-4">
            <a href="/" class="">
                <img src="{{ url('/images/Logo-01 3.png') }}" class="h-[90] w-[236px]" alt="Wisend Logo" />
                {{-- <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white">Flowbite</span> --}}
            </a>
        </div>

        <ul class="font-medium">

            <li class="">
                <x-sidebar-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">

                    <x-slot:icon viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </x-slot:icon>
                    <span class="ml-3">DASHBOARD</span>
                </x-sidebar-nav-link>
            </li>

            <li class="">
                <x-sidebar-nav-link :href="route('booking.index')" :active="request()->routeIs('booking*')">

                    <x-slot:icon viewBox="0 0 18 18">
                        <path
                            d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z" />

                    </x-slot:icon>
                    <span class="ml-3 flex-1 whitespace-nowrap">BOOKING</span>
                    {{-- <span class="ml-3">DASHBOARD</span> --}}
                </x-sidebar-nav-link>
                {{-- <a href="{{ route('dashboard') }}"
                    class="">
                </a> --}}
            </li>


            <li class="">
                <x-sidebar-nav-link :href="route('data.index')" :active="request()->routeIs('data*')">

                    <x-slot:icon viewBox="0 0 18 18">
                        <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                        <path
                            d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Z" />

                    </x-slot:icon>
                    <span class="ml-3 flex-1 whitespace-nowrap">ARCHIVE</span>
                    {{-- <span class="ml-3">DASHBOARD</span> --}}
                </x-sidebar-nav-link>
                {{-- <a href="{{ route('dashboard') }}"
                    class="">
                </a> --}}
            </li>

            {{-- <li class="">
                <a href="{{ route('data.index') }}"
                    class="group flex items-center rounded-lg px-4 py-6 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <svg class="mx-4 h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-red-700 dark:text-gray-400 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Inbox</span>
                </a>
            </li> --}}

            {{-- <li class="">
                <a href="#"
                    class="group flex items-center rounded-lg px-4 py-6 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <svg class="mx-4 h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-red-700 dark:text-gray-400 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Users</span>
                </a>
            </li>
            <li class="">
                <a href="#"
                    class="group flex items-center rounded-lg px-4 py-6 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <svg class="mx-4 h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-red-700 dark:text-gray-400 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Products</span>
                </a>
            </li>
            <li class="">
                <a href="#"
                    class="group flex items-center rounded-lg px-4 py-6 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <svg class="mx-4 h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-red-700 dark:text-gray-400 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Sign In</span>
                </a>
            </li>
            <li class="">
                <a href="#"
                    class="group flex items-center rounded-lg px-4 py-6 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <svg class="mx-4 h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-red-700 dark:text-gray-400 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                        <path
                            d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                        <path
                            d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Sign Up</span>
                </a>
            </li> --}}
        </ul>

        {{-- kontent ke 3 --}}
        <div class="absolute bottom-0 w-full border-t-2 p-4">
            <div class="flex max-w-full justify-start gap-3">
                <div class="flex h-[50px] w-[24px]">
                    <svg class="my-[13px] h-[24px] w-[24px] text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9"
                            d="M10 19a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 11 14H9a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 10 19Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>


                <button id="dropdownTopButton" data-dropdown-toggle="dropdownTop" data-dropdown-placement="top"
                    class="inline-flex w-full items-center" type="button">{{ auth()->user()->email }} <svg
                        class="ml-auto mr-2 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownTop"
                    class="z-10 hidden w-60 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTopButton">
                        <li>
                            <a href="{{ route('profile.edit') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                        </li>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log
                                    out</a>
                            </li>
                        </form>
                    </ul>
                </div>

                {{-- <div class="flex w-full "></div> --}}
            </div>
        </div>
    </div>
</aside>
