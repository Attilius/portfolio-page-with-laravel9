<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-bind:class="{'dark' : darkMode === true}"
      x-data="{ darkMode: false }" x-init="
        if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
          localStorage.setItem('darkMode', JSON.stringify(true));
        }
        darkMode = JSON.parse(localStorage.getItem('darkMode'));
        $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Attilius Page</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <script src="https://apis.google.com/js/platform.js"></script>

    </head>
    <body class="antialiased bg-gray-200 dark:bg-slate-800 text-gray-800 dark:text-gray-200">
        <div class="@if($page_not_found) pt-0 @else pt-24 @endif min-h-screen bg-gray-100 dark:bg-gray-900">
            @if($page_not_found)
                <x-page-not-found></x-page-not-found>
            @else
            <x-layout.navbar></x-layout.navbar>
                {{ $slot }}
            <x-layout.footer></x-layout.footer>
            @endif
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
