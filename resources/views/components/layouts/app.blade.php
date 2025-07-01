<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        @livewireStyles
    </head>
    <body class="flex min-h-screen w-full flex-col bg-gray-100 sm:flex-row">
        <div class="w-64 px-4 pt-6">
            @livewire('sidebar')
        </div>

        <main class="font-poppins rounded sm:flex-1">
            <div class="mx-auto w-full max-w-5xl px-4">
                {{ $slot }}
            </div>
        </main>
        @livewireScripts
    </body>
</html>
