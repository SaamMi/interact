<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'interact' }}</title>



        
           <!-- Scripts -->
           @vite(['resources/css/app.css', 'resources/js/app.js'])

          <!-- Styles -->
           @livewireStyles
    </head>
    <body>
        {{ $slot }}


        
        @livewireScripts
    </body>
</html>
