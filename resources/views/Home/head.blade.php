<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Title -->
      <title>TOUR DU LỊCH TOUR NÈ !!</title>

      <!-- Required Meta Tags Always Come First -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('Admin/image/avatar/favi.png') }}">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&display=swap" rel="stylesheet">
      <style>
        
      </style>
      <!-- CSS Implementing Plugins -->
      <link rel="stylesheet" href="{{ asset('Home/vendor/font-awesome/css/fontawesome-all.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Home/css/font-mytravel.css')}}">
      <link rel="stylesheet" href="{{ asset('Home/vendor/animate.css/animate.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Home/vendor/hs-megamenu/src/hs.megamenu.css')}}">
      <link rel="stylesheet" href="{{ asset('Home/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
      <link rel="stylesheet" href="{{ asset('Home/vendor/flatpickr/dist/flatpickr.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Home/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Home/vendor/slick-carousel/slick/slick.css')}}">
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
      {{--  <link rel="stylesheet" id="css-main" href="{{ asset('Admin/css/codebase.min.css')}}">  --}}
      <style>
        .tab_color .active .number_tab{
          background-color: #297cbb;
          color: white !important;
          border: #67747c !important;
          
        }
        .tab_color .active .text_tab{
          color: #297cbb !important;
        }
        .text-primary {
          color: #0d9cbf !important;
        }
      </style>

      <!-- CSS MyTravel Template -->
      <link rel="stylesheet" href="{{ asset('Home/css/theme.css')}}">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      @yield('css')
      
  </head>
  <body>
