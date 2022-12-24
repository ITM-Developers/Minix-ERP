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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="CSS/NiceAdmin/main.css">
</head>

<body>
    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                @if (Route::has('index'))
                                    <a href="{{ route('index') }}" class="logo d-flex align-items-center w-auto">
                                        <img src="ICO/NiceAdmin/logo.png" alt="">
                                        <span class="d-none d-lg-block">NiceAdmin</span>
                                    </a>
                                @endif
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>

                                    <form method="POST" action="{{ route('register') }}"
                                        class="row g-3 needs-validation">
                                        @csrf
                                        <div class="col-12">
                                            <label for="name" class="form-label">
                                                Your Full Name
                                            </label>
                                            <input type="text" name="name" id="name" required
                                                class="form-control @error('name') is-invalid @enderror">
                                            <div class="invalid-feedback">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="valid-feedback">
                                                Looks Good!
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label">
                                                Your Email
                                            </label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" name="email" id="email" required
                                                    class="form-control @error('email') is-invalid @enderror">
                                                <div class="invalid-feedback">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks Good!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">
                                                Password
                                            </label>
                                            <input type="password" name="password" id="password" required
                                                class="form-control  @error('password') is-invalid @enderror">
                                            <div class="invalid-feedback">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="valid-feedback">
                                                Looks Good!
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password-confirm" class="form-label">Password</label>
                                            <input type="password" name="password_confirmation" id="password-confirm" required
                                                class="form-control  @error('password_confirmation') is-invalid @enderror">
                                            <div class="invalid-feedback">
                                                @error('password_confirmation')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="valid-feedback">
                                                Looks Good!
                                            </div>
                                        </div>


                                        @if (Route::has('terms-and-conditions'))
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="terms" type="checkbox"
                                                        value="" id="acceptTerms" required>
                                                    <label class="form-check-label @error('terms') is-invalid @enderror"
                                                        for="acceptTerms">
                                                        I agree and accept the
                                                        <a href="{{ route('terms-and-conditions') }}">
                                                            terms and conditions
                                                        </a>
                                                    </label>
                                                    @error('terms')
                                                        <div class="invalid-feedback">You must agree before submitting.
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endif

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>
                                        <div class="col-12">
                                            @if (Route::has('login'))
                                                <p class="small mb-0">
                                                    Already have an account? <a href="{{ route('login') }}">Log in</a>
                                                </p>
                                            @endif
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by <a target="_blank" href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
</body
