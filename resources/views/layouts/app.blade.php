<!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles


    </head>
    <body>
        @include('layouts.header.header-master')
        <main>
            @yield('content')
        </main>

        <footer>

           @include('layouts.footer.footer-master')
           @if(Request::is('/'))
            @include('layouts.schema.home')
            @else
            {{-- Incluir schema parea otras páginas o blog futuro --}}
            @endif
        </footer>
    </body>
</html>
