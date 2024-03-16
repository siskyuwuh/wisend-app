<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Wisend-app') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    @php
        $bgLogin = URL::to('/');
    @endphp
    <body class="font-sans" style="
        background: url('{{ $bgLogin }}/images/chuttersnap-eqwFWHfQipg-unsplash 1.png');
        background-repeat:no-repeat;
        background-position:center;
        background-size:cover;

        ">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            {{-- <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> --}}

            <div class="w-full bg-white sm:max-w-md px-8 pt-8 sm:rounded-2xl shadow border border-neutral-400 grid gap-5">
                {{ $slot }}
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    </body>
</html>
