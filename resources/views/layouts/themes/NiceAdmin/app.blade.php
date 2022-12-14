<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta content="" name="description">
	<meta content="" name="keywords">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons -->
	<link href="ICO/favicon.png" rel="icon">

    <!-- Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="CSS/NiceAdmin/main.css">
    @stack('CSS')
</head>
<body>

	@include('layouts.themes.NiceAdmin.navbar')

	@include('layouts.themes.NiceAdmin.sidebar')

	<main id="main" class="main">
        
		@yield('breadcrumb')

        <section class="section">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            @yield('page-title')<span> @yield('page-subtitle') </span>
                        </h5>
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>

	</main>

	@include('layouts.themes.NiceAdmin.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
        
    @stack('JS')
</body>