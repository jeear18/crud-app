<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <title>asdasdasd</title>
        @routes
        {{-- @vite('resources/js/app.js') --}}
        @inertiaHead
        @vite(['resources/css/app.css','resources/js/app.js'])
  
    </head>
    <body class=" bg-slate-300 dark:bg-gray-900 text-gray-700 dark:text-gray-300">

        @inertia
    </body>
</html>
