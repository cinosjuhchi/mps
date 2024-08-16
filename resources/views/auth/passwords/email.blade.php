@extends('layouts.master-without-nav')

@section('title')
@lang('translation.Recover_Password') 2
@endsection

@section('css')
<!-- owl.carousel css -->
<link rel="stylesheet" href="{{ URL::asset('/build/libs/owl.carousel/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/build/libs/owl.carousel/assets/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('build/css/style.css') }}">
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
                                <div class="mb-4 mb-md-5 mx-auto">
                                    <a href="index" class="d-block auth-logo">
                                        <img src="{{ URL::asset('images/Logo_MPS.png') }}" alt="" width="40" class="auth-logo-dark">
                                        <img src="{{ URL::asset('images/Logo_MPS.png') }}" alt="" width="40" class="auth-logo-light">
                                    </a>
                                </div>
                                <div class="my-auto">

                                    <div class="step" id="step1">
                                        <div class="text-center">
                                            <h5 class="fw-bold"> Verifikasi E-mel</h5>
                                            <p class="text-muted">Sahkan identiti anda!</p>
                                        </div>

                                        <div class="alert alert-success" role="alert">
                                            Masukkan E-mel anda dan arahan akan dihantar kepada anda!
                                        </div>

                                        <div class="mt-4">
                                            @if (session('status'))
                                            <div class="alert alert-success text-center mb-4" role="alert">
                                                {{ session('status') }}
                                            </div>
                                            @endif
                                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">E-mel *</label>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" name="email" placeholder="Masukkan e-mel" value="{{ old('email') }}" id="useremail">
                                                    <span class="text-danger d-none" id="emelalert">
                                                        <strong>Harus masukkan e-mel. *</strong>
                                                    </span>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="text-end">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="button" id="btn-register">Seterusnya</button>
                                                </div>
                                            </form>
                                            <div class="mt-5 text-center">
                                                <p>Ingat akaun? Klik <a href="{{ url('login') }}" class="font-weight-medium text-primary text-decoration-underline">di
                                                        sini</a> untuk log masuk.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="step" id="step2">
                                        <div class="text-center">
                                            <h5 class="fw-bold">Kod OTP</h5>
                                            <p class="text-muted">Masukkan Kod OTP yang dikirimke e-mel rob***.com</p>
                                        </div>

                                        <div class="mt-4">
                                            @if (session('status'))
                                            <div class="alert alert-success text-center mb-4" role="alert">
                                                {{ session('status') }}
                                            </div>
                                            @endif
                                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Kod OTP *</label>
                                                    <input type="number" class="form-control @error('email') is-invalid @enderror" id="useremail" name="email" placeholder="Masukkan kod OTP" value="{{ old('email') }}" id="email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="text-end">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="button" onclick="nextStep(1)">Seterusnya</button>
                                                </div>
                                            </form>
                                            <div class="mt-5 text-center">
                                                <p>Ingat akaun? Klik <a href="{{ url('login') }}" class="font-weight-medium text-primary text-decoration-underline">di
                                                        sini</a> untuk log masuk.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="step" id="step3">
                                        <div class="text-center">
                                            <h5 class="fw-bold">Reset Kata Laluan</h5>
                                            <p class="text-muted">Reset kata laluan anda.</p>
                                        </div>

                                        <div class="mt-4">
                                            @if (session('status'))
                                            <div class="alert alert-success text-center mb-4" role="alert">
                                                {{ session('status') }}
                                            </div>
                                            @endif
                                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="userpassword" class="form-label">Kata Laluan Baharu
                                                        *</label>
                                                    <div class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="userpassword" value="123456" placeholder="Masukkan kata laluan baharu" aria-label="Password" aria-describedby="password-addon">
                                                        <button class="btn btn-light password-addon" type="button"><i class="mdi mdi-eye-outline"></i></button>
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="userpassword" class="form-label">Ulang Kata Laluan
                                                        Baharu *</label>
                                                    <div class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="userpassword" value="123456" placeholder="Masukkan kata laluan baharu" aria-label="Password" aria-describedby="password-addon">
                                                        <button class="btn btn-light password-addon" type="button"><i class="mdi mdi-eye-outline"></i></button>
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="text-end">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="button" onclick="nextStep(2)">Seterusnya</button>
                                                </div>
                                            </form>
                                            <div class="mt-5 text-center">
                                                <p>Ingat akaun? Klik <a href="{{ url('login') }}" class="font-weight-medium text-primary text-decoration-underline">di
                                                        sini</a> untuk log masuk.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="step" id="step4">
                                        <div class="text-center">
                                            <h5 class="fw-bold">Tahniah!</h5>
                                            <p class="text-muted">Reset kata laluan anda telah berjaya</p>
                                        </div>
                                        <a href="{{ url('login') }}" class="btn btn-primary w-100">Log Masuk</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-8">
                    <div class="auth-full-bg pt-lg-5 p-4 d-none d-xl-block">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">


                                <div class="p-4 mt-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
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
    <script src="{{ asset('build/js/style.js') }}"></script>
    <script>
        showStep(0); // Menampilkan langkah pertama saat halaman dimuat
    </script>
    @endsection