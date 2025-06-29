<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="min-h-screen bg-gray-100 sm:flex sm:flex-row">
        <!-- Sidebar -->
        <div class="w-64 px-6 pt-6">
            @livewire('sidebar')
        </div>

        <!-- Main content -->
        <main class="font-poppins flex-1 sm:p-8">
            <div class="w-full rounded-lg">
                {{ $slot }}
            </div>
        </main>
    </body>
</html>
