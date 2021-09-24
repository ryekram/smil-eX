<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="{{ cache('theme') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        {{-- <main class="h-screen w-full grid grid-cols-12 "> --}}
        <main class="h-screen w-full flex dashboard">
            <!-- SIDEBAR -->
            <div class="dashboard__sidebar   xs:w-full xs:xh-15v md:relative md:h-full md:w-20v lg:w-14v">
                <x-sidebar-links>

                </x-sidebar-links>
            </div>

            <!-- Page Content -->
            <div class="dashboard__content flex-1">
                @yield('content')

            </div>



            @include('components.theme-btn')
        </main>


        <script>


            adminDropper = document.querySelector('.admin__dropper');
            adminLinks = document.querySelector('.admin__links');
            console.log()
            adminDropper.addEventListener('click', function() {
                if(window.location.pathname.indexOf('admin') === -1) {
                    adminDropper.classList.toggle('active');
                }
                adminLinks.classList.toggle('dropped');



            })
        </script>
    </body>
</html>
