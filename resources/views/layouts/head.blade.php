<head>
    <link rel="stylesheet" href="{{asset('assets/libs/flatpickr/dist/flatpickr.min.css')}}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="#" />
    <meta name="keywords" content="#" />
    <meta name="author" content="#" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="{{asset('assets/fonts/feather/feather.css')}}">
    <link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
    <link rel="canonical" href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
     @livewireStyles
    <title>@yield('title')</title>
</head>
