<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('Admin/media/favicons/ ')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('Admin/media/favicons/favicon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('Admin/media/favicons/apple-touch-icon-180x180.png')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{ asset('Admin/css/codebase.min.css')}}">


        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('Admin/js/plugins/datatables/dataTables.bootstrap4.css')}}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <link rel="stylesheet" id="css-theme" href="{{ asset('Admin/css/themes/flat.min.css')}}">
        <!-- END Stylesheets -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('Admin/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
        <link rel="stylesheet" href="{{ asset('Admin/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
        <link rel="stylesheet" href="{{ asset('Admin/js/plugins/select2/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{ asset('Admin/js/plugins/jquery-tags-input/jquery.tagsinput.min.css')}}">
        <link rel="stylesheet" href="{{ asset('Admin/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css')}}">
        <link rel="stylesheet" href="{{ asset('Admin/js/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
        <link rel="stylesheet" href="{{ asset('Admin/js/plugins/flatpickr/flatpickr.min.css')}}">


        {{-- plugin Editor --}}
        <link rel="stylesheet" href="{{ asset('Admin/js/plugins/summernote/summernote-bs4.css')}}">
        <link rel="stylesheet" href="{{ asset('Admin/js/plugins/simplemde/simplemde.min.css')}}">


        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{ asset('Admin/css/codebase.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
        @yield('css')
    </head>
    <body>
