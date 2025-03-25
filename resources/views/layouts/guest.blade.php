<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('template/tailadmin/style.css') }}">
    </head>
    <body
        x-data="@yield('data', "{ page: 'comingSoon', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }")"
        x-init="
            darkMode = JSON.parse(localStorage.getItem('darkMode'));
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'dark bg-gray-900': darkMode === true}"
    >
        <!-- ===== Preloader Start ===== -->
        <div
        x-show="loaded"
        x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
        class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black"
        >
            <div
            class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-brand-500 border-t-transparent"
            >
            </div>
        </div>
        <!-- ===== Preloader End ===== -->
        
        <!-- ===== Page Wrapper Start ===== -->
        <div class="relative p-6 bg-white z-1 dark:bg-gray-900 sm:p-0">
            {{ $slot }}
        </div>
        <!-- ===== Page Wrapper End ===== -->

        <!-- @livewireScripts -->
    </body>
</html>
