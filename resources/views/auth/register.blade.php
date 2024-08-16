@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Register')
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('/build/libs/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/build/libs/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link href="{{ URL::asset('/build/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('build/css/style.css') }}">
@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">

                    <div class="col-xl-4 overflow-y-auto">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column flex h-100">
                                    <div class="mb-4 mb-md-5 mx-auto">
                                        <a href="index" class="d-block auth-logo">
                                            <img src="{{ URL::asset('images/Logo_MPS.png') }}" alt="" width="40"
                                                class="auth-logo-dark">
                                            <img src="{{ URL::asset('images/Logo_MPS.png') }}" alt="" width="40"
                                                class="auth-logo-light">
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="step" id="step1">
                                            <div class="text-center">
                                                <h5 class="fw-bold">Daftar Akaun</h5>
                                                <p class="text-muted">Daftar sekarang. Akaun anda hanya bermula pada hari
                                                    pertama Sesi Persekolahan 2024/2025.</p>
                                            </div>

                                            <div class="mt-4">
                                                <form method="POST" class="form-horizontal"
                                                    action="{{ route('register') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama *</label>
                                                        <input type="text"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            id="nama" value="{{ old('nama') }}" name="nama"
                                                            placeholder="Masukkan nama" autofocus required>
                                                        @error('nama')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="useremail" class="form-label">E-mel *</label>
                                                        <input type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            id="useremail" value="{{ old('email') }}" name="email"
                                                            placeholder="Masukkan e-mel" autofocus required>
                                                        <span class="text-danger d-none" id="emelalert">
                                                            <strong>Harus masukkan e-mel. *</strong>
                                                        </span>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="userpassword" class="form-label">Kata Laluan *</label>
                                                        <div
                                                            class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                            <input type="password" name="password"
                                                                class="form-control  @error('password') is-invalid @enderror"
                                                                id="userpassword" placeholder="Masukkan kata laluan"
                                                                aria-label="Password" aria-describedby="password-addon">
                                                            <button class="btn btn-light password-addon " type="button"><i
                                                                    class="mdi mdi-eye-outline"></i></button>
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="confirmpassword" class="form-label">Ulang Kata Laluan
                                                            *</label>
                                                        <div
                                                            class="input-group auth-pass-inputgroup @error('password_confirmation') is-invalid @enderror">
                                                            <input type="password" name="password_confirmation"
                                                                class="form-control  @error('password') is-invalid @enderror"
                                                                id="confirmpassword"
                                                                placeholder="Masukkan ulang kata laluan"
                                                                aria-label="Password" aria-describedby="password-addon">
                                                            <button class="btn btn-light password-addon " type="button"><i
                                                                    class="mdi mdi-eye-outline"></i></button>
                                                            @error('password_confirmation')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="mt-4 d-grid">
                                                        <button class="btn btn-primary waves-effect waves-light"
                                                            type="button" id="btn-register">Seterusnya</button>
                                                    </div>
                                                </form>

                                                <div class="mt-3 text-center">
                                                    <p>Telah punyai akaun? Klik <a href="{{ url('login') }}"
                                                            class="fw-medium text-primary text-decoration-underline">di
                                                            sini</a> untuk login</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="step" id="step2">
                                            <div class="text-center">
                                                <h5 class="fw-bold">Kod Sekolah</h5>
                                                <p class="text-muted">Masukkan kod sekolah untuk memproses langkah daftar.
                                                </p>
                                            </div>

                                            <div class="mt-4">
                                                <form method="POST" class="form-horizontal"
                                                    action="{{ route('register') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="kod_sekolah" class="form-label">Kod Sekolah *</label>
                                                        <input type="text"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            id="kod_sekolah" value="{{ old('nama') }}" name="nama"
                                                            placeholder="Masukkan kod sekolah" autofocus required>
                                                        @error('nama')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div>
                                                        <p>
                                                            <b>DBA1069</b> <br>
                                                            Sekolah Kebangsaan Langgar. <br>
                                                            Jalan Sultan Yahya Petra, <br>
                                                            Kota Bharu, Kelantan
                                                        </p>
                                                    </div>

                                                    <div class="mt-4 d-grid">
                                                        <button class="btn btn-primary waves-effect waves-light"
                                                            type="button" onclick="nextStep(1)">Seterusnya</button>
                                                    </div>
                                                </form>

                                                <div class="mt-3 text-center">
                                                    <p>Telah punyai akaun? Klik <a href="{{ url('login') }}"
                                                            class="fw-medium text-primary text-decoration-underline">di
                                                            sini</a> untuk login</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step" id="step3">
                                            <div class="mb-4">
                                                <h3>Payment</h3>
                                                <h5>Buat bayaran untuk mendaftar</h5>
                                            </div>
                                            <div class="d-flex mb-4">
                                                <div class="form-group me-3">
                                                    <input class="form-check-input" type="radio" name="media"
                                                        id="tab1" checked>
                                                    <label class="form-check-label" for="tab1">
                                                        Kad Kredit
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-check-input" type="radio" name="media"
                                                        id="tab2">
                                                    <label class="form-check-label" for="tab2">
                                                        FPX
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="content1">
                                                    <form action="" method="post">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="" class="form-label fw-bold mb-0">Nombor
                                                                kad *</label>
                                                            <input type="number" class="form-control"
                                                                placeholder="0000 0000 0000 0000">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label fw-bold mb-0">Nama
                                                                pada kad *</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Masukkan nama pada kad">
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <label for=""
                                                                    class="form-label fw-bold mb-0">Tarikh luput
                                                                    *</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="MM/YY">
                                                            </div>
                                                            <div class="col">
                                                                <label for="" class="form-label fw-bold mb-0">Kod
                                                                    CVV
                                                                    *</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Masukkan cvv kod">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4">
                                                            <button type="button" class="btn btn-primary w-100"
                                                                onclick="nextStep(2)">Bayar</button>
                                                        </div>
                                                        <span>Telah mempunyai akaun? Klik <a href="{{ route('login') }}"
                                                                class="text-decoration-underline">di sini</a> untuk
                                                            login.</span>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="content2">
                                                    <span class="fw-bold text-center d-block mb-3">FPX Online
                                                        Payment</span>
                                                    <div
                                                        class="border border-primary border-opacity-25 text-center py-3 px-2">
                                                        <p class="mb-1">Bayar sebelum 26 Juni 2023 10:26AM</p>
                                                        <span class="text-primary fs-4">RM 70</span>
                                                    </div>
                                                    <div class="row g-1 text-center banks">
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/maybank.png') }}"
                                                                    class="mx-auto mb-1" style="width: 40px;"></img>
                                                                <small class="fw-bold text-muted">MayBank2U</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/cimb-bank.png') }}"
                                                                    class="mx-auto mb-1" style="width: 70px;"></img>
                                                                <small class="fw-bold text-muted">CIMB</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/bank-islam.png') }}"
                                                                    class="mx-auto mb-1" style="width: 70px;"></img>
                                                                <small class="fw-bold text-muted">Bank Islam</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/bank-rakyat.png') }}"
                                                                    class="mx-auto mb-1" style="width: 40px;"></img>
                                                                <small class="fw-bold text-muted">Bank Rakyat</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/ambank.png') }}"
                                                                    class="mx-auto mb-1" style="width: 60px;"></img>
                                                                <small class="fw-bold text-muted">AmBank</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/rhb-bank.png') }}"
                                                                    class="mx-auto mb-1" style="width: 60px;"></img>
                                                                <small class="fw-bold text-muted">RHB</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/affin-bank.png') }}"
                                                                    class="mx-auto mb-1" style="width: 60px;"></img>
                                                                <small class="fw-bold text-muted">Affin</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/agrobank.svg') }}"
                                                                    class="mx-auto mb-1" style="width: 40px;"></img>
                                                                <small class="fw-bold text-muted">Agrobank</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/alliance-bank.jpeg') }}"
                                                                    class="mx-auto mb-1" style="width: 40px;"></img>
                                                                <small class="fw-bold text-muted">Alliance Bank</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/bank-muamalat.png') }}"
                                                                    class="mx-auto mb-1" style="width: 40px;"></img>
                                                                <small class="fw-bold text-muted">Bank Muamalat</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/bsn.png') }}"
                                                                    class="mx-auto mb-1" style="width: 60px;"></img>
                                                                <small class="fw-bold text-muted">Bank Simpanan
                                                                    Nasional</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/hongleong.png') }}"
                                                                    class="mx-auto mb-1" style="width: 60px;"></img>
                                                                <small class="fw-bold text-muted">Hong Leong</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/hsbc.svg') }}"
                                                                    class="mx-auto mb-1" style="width: 50px;"></img>
                                                                <small class="fw-bold text-muted">HSBC</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/kfh.png') }}"
                                                                    class="mx-auto mb-1" style="width: 40px;"></img>
                                                                <small class="fw-bold text-muted">KFH</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/maybank.png') }}"
                                                                    class="mx-auto mb-1" style="width: 40px;"></img>
                                                                <small class="fw-bold text-muted">Maybank2E</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/ocbc.png') }}"
                                                                    class="mx-auto mb-1" style="width: 40px;"></img>
                                                                <small class="fw-bold text-muted">OCBC</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/public-bank.png') }}"
                                                                    class="mx-auto mb-1" style="width: 30px;"></img>
                                                                <small class="fw-bold text-muted">Public Bank</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/sc.png') }}"
                                                                    class="mx-auto mb-1" style="width: 20px;"></img>
                                                                <small class="fw-bold text-muted">Standard
                                                                    Chartered</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 p-1" style="height: 102px">
                                                            <div onclick="changeStyle(this)"
                                                                class="bank d-flex flex-column justify-content-center align-items-center border border-dark border-opacity-25 d-block py-2 text-dark w-100 h-100">
                                                                <img src="{{ asset('images/bank_logo/uob.png') }}"
                                                                    class="mx-auto mb-1" style="width: 50px;"></img>
                                                                <small class="fw-bold text-muted">UOB</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-primary w-100 mt-3"
                                                        onclick="nextStep(2)">Bayar</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step" id="step4">
                                            <div class="mb-3">
                                                <h1>Tahniah!</h1>
                                                <p>Pendaftaran akaun anda telah berjaya. <br>Sila semak e-mel anda.</p>
                                            </div>
                                            <a href="{{ route('login') }}" class="btn btn-primary w-50">Log Masuk</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-8 overflow-hidden">
                        <div class="auth-full-bg pt-lg-5 p-4 d-none d-xl-block">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">
                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7"></div>
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
        <script src="{{ URL::asset('/build/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/build/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/build/js/pages/auth-2-carousel.init.js') }}"></script>
        <script src="{{ asset('build/js/style.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.form-check-input').change(function() {
                    var target = $(this).attr('id').replace('tab', 'content');
                    $('.tab-pane').removeClass('show active');
                    $('#' + target).addClass('show active');
                });
            });

            var previousDiv = null;

            function changeStyle(element) {
                if (previousDiv !== null) {
                    previousDiv.classList.remove('clicked');
                }
                element.classList.add('clicked');
                previousDiv = element;
            }
            showStep(0); // Menampilkan langkah pertama saat halaman dimuat
        </script>
    @endsection
