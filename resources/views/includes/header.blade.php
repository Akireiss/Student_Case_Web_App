<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CZCMNHS') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Main --}}
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}"/>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Nucleo Icons -->
        <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Popper -->
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <!-- Main Styling -->

        {{-- Font Awesome Icon --}}
        <link href="{{ asset('assets/icons/css/all.css') }}" rel="stylesheet"  type="text/css"/>


        <!-- Styles -->
        @livewireStyles

    </head>

    {{-- Night: bg-gray-100 --}}
  <body>

