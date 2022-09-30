<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans  antialiased">
        <div class="min-h-screen bg-secondary flex">
            <div class="basis-1/5 bg-primary rounded-r-lg">
                @include('layouts.navigation')
            </div>

            <main class="basis-4/5">
                <div class="border-0 border-b border-primary p-2 flex  justify-end ">
                    <div class="rounded-circle shadow mr-8 w-10 h-10 border-3 border-default">

                    </div>
                </div>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
