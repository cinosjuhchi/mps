@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Login')
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('/build/libs/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/build/libs/owl.carousel/assets/owl.theme.default.min.css') }}">
@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xl-4">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-3 mb-md-5 mx-auto">
                                    </div>
                                    <div class="my-auto">
                                        <p class="text-center mb-2">Selamat datang ke</p>
                                        <a href="index" class="d-block auth-logo">
                                            <img src="{{ URL::asset('images/Logo_MPS.png') }}" alt="" width="40"
                                                class="auth-logo-dark m-auto">
                                            <img src="{{ URL::asset('images/Logo_MPS.png') }}" alt="" width="40"
                                                class="auth-logo-light m-auto">
                                        </a>
                                        <div class="text-center">
                                            <p class="fs-3 mb-0"><span class="fw-bold">MPS</span><span>Online</span></p>
                                            <p class="text-muted">Manual Pengurusan Sekolah Online 2023.1</p>
                                        </div>

                                        <div class="mt-5">
                                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="e-mel" class="form-label">E-mel *</label>
                                                    <input name="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        value="{{ old('email', 'superadmin_backofice@gmail.com') }}" id="e-mel"
                                                        placeholder="Masukkan e-mel" autocomplete="email" autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        @if (Route::has('password.request'))
                                                            <a href="{{ route('password.request') }}"
                                                                class="text-muted">Lupa Kata Laluan?</a>
                                                        @endif
                                                    </div>
                                                    <label class="form-label">Kata Laluan *</label>
                                                    <div
                                                        class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                        <input type="password" name="password"
                                                            class="form-control  @error('password') is-invalid @enderror"
                                                            id="userpassword" value="123456"
                                                            placeholder="Masukkan kata laluan" aria-label="Password"
                                                            aria-describedby="password-addon">
                                                        <button class="btn btn-light " type="button" id="password-addon"><i
                                                                class="mdi mdi-eye-outline"></i></button>
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="remember"
                                                        {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">
                                                        Remember me
                                                    </label>
                                                </div>

                                                <div class="mt-3 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light"
                                                        type="submit">Log Masuk</button>
                                                </div>
                                            </form>
                                            <div class="mt-5 text-center">
                                                <p>Belum punyai akaun? Klik <a href="{{ url('register') }}"
                                                        class="fw-medium text-primary text-decoration-underline"> di sini
                                                    </a> untuk mendaftar. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-8 ">
                        <div class="auth-full-bg pt-lg-5 p-4 d-none d-xl-block">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">

                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-7">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
    @endsection
    @section('script')
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/build/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/build/js/pages/auth-2-carousel.init.js') }}"></script>
    @endsection
