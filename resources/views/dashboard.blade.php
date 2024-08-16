@extends('layouts.master')

@section('title')
    @lang('Dashboard')
@endsection

@section('css')
    <link href="{{ URL::asset('build/libs/@fullcalendar/core/main.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/@fullcalendar/daygrid/main.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/@fullcalendar/bootstrap/main.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/@fullcalendar/timegrid/main.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- tui charts Css -->
    <link href="{{ URL::asset('build/libs/tui-chart/tui-chart.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<<<<<<< HEAD
    <!-- subscribeModal -->
    <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <div class="avatar-md mx-auto mb-4">
                            <div class="avatar-title bg-light rounded-circle text-warning h1">
                                <i class="mdi mdi-clock-alert"></i>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <h4 class="text-dark fw-bolder">Program anda tinggal 10 hari lagi !</h4>
                                <p class="text-muted font-size-14 mb-4">Segera ikuti perkembangan program anda</p>
                                <div class="bg-light text-start rounded p-3">
                                    <div class="mb-3">
                                        <h5 class="text-dark fw-bold">Program dan Aktiviti</h5>
                                        <p class="text-muted font-size-14">Mesyuarat Jawatankuasa Induk Pengurusan Sekolah Bil.1/2023</p>
                                    </div>                                    
                                    <div class="mb-3">
                                        <h5 class="text-dark fw-bold">Komponen</h5>
                                        <p class="text-muted font-size-14">Pengurusan dan Pentadbiran</p>
                                    </div>                                    
                                    <div class="mb-3">
                                        <h5 class="text-dark fw-bold">Tarikh</h5>
                                        <p class="text-muted font-size-14">04/06/2024</p>
                                    </div>                                    
                                </div>
                                <div class="mt-3 w-100">
                                    <button type="button" class="btn btn-primary w-100 waves-effect waves-light" data-bs-dismiss="modal" aria-label="Close">Mengerti</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
=======
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
    <div class="row">
        <div class="col">
            @if (session('change-role-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="text-dark">{{ session('change-role-success') }}
                        <b>{{ session('ubahKe') }}!</b></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-capitalize">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    @if (Auth::user()->jawatan_app != 0 and Auth::user()->jawatan_app != 1)
        {{-- BAGIAN CARD --}}
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-h-100 shadow-none border border-secondary border-opacity-25 text-bg-primary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <span class="mb-3 lh-2 d-block">KOMPONEN PENGURUSAN DAN PENTADBIRAN</span>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('build/icons/computer-icon.png') }}" alt="Icon Comp" width="60px"
                                    height="50px" class="position-relative" style="right: 50px; opacity: .1;">
                            </div>
                        </div>
                        <ul class="list-unstyled pb-4">
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Rancang (24 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
<<<<<<< HEAD
                                    <i class='bx bx-right-arrow-circle me-1'></i> Selesai (14 Program)
=======
                                    <i class='bx bx-right-arrow-circle me-1'></i> Siap (14 Program)
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
<<<<<<< HEAD
=======
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Tunda (4 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Hapus (1 Program)
                                </span>
                            </li>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                        </ul>
                        <div class="card-footer position-absolute bottom-0 end-0 start-0">
                            <div class="text-end align-middle">
                                <a href="" class="text-decoration-none text-light">Lihat Semua <i
                                        class='bx bxs-right-arrow-circle'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-h-100 shadow-none border border-secondary border-opacity-25 text-bg-info">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <span class="mb-3 lh-2 d-block">KOMPONEN KURIKULUM</span>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('build/icons/link-icon.png') }}" alt="Icon Comp" width="50px"
                                    class="position-relative" style="right: 40px; opacity: .1;">
                            </div>
                        </div>
                        <ul class="list-unstyled pb-4">
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Rancang (24 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
<<<<<<< HEAD
                                    <i class='bx bx-right-arrow-circle me-1'></i> Selesai (14 Program)
=======
                                    <i class='bx bx-right-arrow-circle me-1'></i> Siap (14 Program)
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
<<<<<<< HEAD
=======
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Tunda (4 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Hapus (1 Program)
                                </span>
                            </li>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                        </ul>
                        <div class="card-footer position-absolute bottom-0 end-0 start-0">
                            <div class="text-end align-middle">
                                <a href="" class="text-decoration-none text-light">Lihat Semua <i
                                        class='bx bxs-right-arrow-circle'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-h-100 shadow-none border border-secondary border-opacity-25 text-bg-warning">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <span class="mb-3 lh-2 d-block">KOMPONEN HAL EHWAL MURID</span>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('build/icons/group-icon.png') }}" alt="Icon Comp" width="50px"
                                    class="position-relative" style="right: 40px; opacity: .1;">
                            </div>
                        </div>
                        <ul class="list-unstyled pb-4">
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Rancang (24 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
<<<<<<< HEAD
                                    <i class='bx bx-right-arrow-circle me-1'></i> Selesai (14 Program)
=======
                                    <i class='bx bx-right-arrow-circle me-1'></i> Siap (14 Program)
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
<<<<<<< HEAD
=======
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Tunda (4 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Hapus (1 Program)
                                </span>
                            </li>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                        </ul>
                        <div class="card-footer position-absolute bottom-0 end-0 start-0">
                            <div class="text-end align-middle">
                                <a href="" class="text-decoration-none text-light">Lihat Semua <i
                                        class='bx bxs-right-arrow-circle'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div
                    class="card card-h-100 shadow-none border border-secondary border-opacity-25 position-relative text-bg-danger">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <span class="mb-3 lh-2 d-block">KOMPONEN KOKURIKULUM</span>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('build/icons/clock-icon.png') }}" alt="Icon Comp" width="50px"
                                    class="position-relative" style="right: 40px; opacity: .1;">
                            </div>
                        </div>
                        <ul class="list-unstyled pb-4">
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Rancang (24 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
<<<<<<< HEAD
                                    <i class='bx bx-right-arrow-circle me-1'></i> Selesai (14 Program)
=======
                                    <i class='bx bx-right-arrow-circle me-1'></i> Siap (14 Program)
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
<<<<<<< HEAD
=======
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Tunda (4 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Hapus (1 Program)
                                </span>
                            </li>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                        </ul>
                        <div class="card-footer position-absolute bottom-0 end-0 start-0">
                            <div class="text-end align-middle">
                                <a href="" class="text-decoration-none text-light">Lihat Semua <i
                                        class='bx bxs-right-arrow-circle'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- AKHIR BAGIAN CARD --}}

        {{-- BAGIAN TABEL --}}
        <div class="row">
            <div class="col-md-9">
                {{-- Todo List --}}
                <div class="table-responsive">
<<<<<<< HEAD
                    <table class="table table-bordered table-borderless">
                        <thead class="table-dark">
                            <div class="d-flex justify-content-between align-items-center bg-dark text-white p-3">
                                <span>To Do</span>
                                <div class="icon-action d-flex">
                                    <i class='bx bx-right-arrow-circle me-1'></i>
                                    <i class='bx bx-right-arrow-circle me-1'></i>
                                    <i class='bx bx-right-arrow-circle me-1'></i>
                                    <i class='bx bx-right-arrow-circle me-1'></i>
                                </div>
=======
                    <table class="table bg-white table-bordered table-borderless">
                        <thead class="table-dark">
                            <div class="d-flex justify-content-between align-items-center bg-dark text-white p-3">
                                <span>To Do</span>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                            </div>
                        </thead>
                        <thead class="table-white">
                            <tr>
                                <th><i class="bi bi-bookmark-check-fill"></i>#</th>
                                <th>Program dan Aktiviti</th>
                                <th>Komponen</th>
                                <th>Tarikh</th>
                                <th>Tindakan</th>
                                <th>Status</th>
<<<<<<< HEAD

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" id="check1" onchange="toggleLabel('check1')"></td>
                                <td><label for="check1" id="label1">Mesyuarat Jawatankuasa Induk
                                        Pengurusan Sekolah Bil.1/2023</label></td>
                                <td>Pengurusan dan Pentadbiran</td>
                                <td>02/03/2024</td>
                                <td>Setia Usaha Induk</td>
                                <td><p class="bg-warning bg-opacity-75 rounded p-1 text-white">Belum Selesai</p></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check2" onchange="toggleLabel('check2')"></td>
                                <td><label for="check2" id="label2">Mesyuarat Jawatankuasa Induk Pengurusan Sekolah
                                        Bil.1/2023</label></td>
                                <td>Kurikulum/JK Panitia Mata Pelajaran</td>
                                <td>22/04/2024</td>
                                <td>Setia Usaha Induk</td>
                                <td><p class="bg-success bg-opacity-75 rounded p-1 text-white">Selesai</p></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check3" onchange="toggleLabel('check3')"></td>
                                <td><label for="check3" id="label3">Mesyuarat Jawatankuasa Induk Pengurusan Sekolah
                                        Bil.1/2023</label></td>
                                <td>Kokurikulum/JK Usaha Tahunan</td>
                                <td>15/02/2024</td>
                                <td>Setia Usaha Sukan</td>
                                <td><p class="bg-danger bg-opacity-75 rounded p-1 text-white">Gagal</p></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check4" onchange="toggleLabel('check4')"></td>
                                <td><label for="check4" id="label4">Mesyuarat Jawatankuasa Induk Pengurusan Sekolah
                                        Bil.1/2023</label></td>
                                <td>Hal Ehwal Murid/JP Rancangan Makanan Tambahan</td>
                                <td>02/02/2024</td>
                                <td>Setia Usaha Induk</td>
                                <td><p class="bg-success bg-opacity-75 rounded p-1 text-white">Selesai</p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- END Todo List --}}

                {{-- Kalendar --}}
                <div class="card border border-opacity-10 border-secondary">                                                             
                    <div class="card-header text-bg-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold">Kalendar</span>
                            <div class="icon-action d-flex">
                                <i class='bx bx-right-arrow-circle me-1'></i>
                                <i class='bx bx-right-arrow-circle me-1'></i>
                                <i class='bx bx-right-arrow-circle me-1'></i>
                                <i class='bx bx-right-arrow-circle me-1'></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>                    
                </div>                                        
            </div>            
            {{-- END Kalendar --}}            
            <div class="col-md-3">
                <div class="table-responsive">
                    <table class="table table-bordered">
=======
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($currentItems as $item)
                            <tr>
                                <td><input type="checkbox" id="check{{ $loop->index }}" onchange="toggleLabel('check{{ $loop->index }}')"></td>
                                <td><label for="check{{ $loop->index }}" id="label{{ $loop->index }}">{{ $item['program_aktiviti'] }}</label></td>
                                <td>{{ $item['komponen'] }}</td>
                                <td>{{ $item['tarikh'] }}</td>
                                <td>{{ $item['tindakan'] }}</td>
                                <td>
                                    <p class="bg-{{ $item['status_color_class'] }} bg-opacity-75 rounded p-1 text-white">
                                        {{ $item['status'] }}
                                    </p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end mb-3">
                    @for ($i = 1; $i <= $pages; $i++)
                        <a href="{{ url()->current() }}?page={{ $i }}" class="btn mx-1 {{ $i == $page ? 'btn-dark' : 'btn-light border border-secondary' }}">{{ $i }}</a>
                    @endfor
                </div>
                {{-- END Todo List --}}

                {{-- Kalendar --}}
                <div class="card border border-opacity-10 border-secondary">
                    <div class="card-header text-bg-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold">Kalendar</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="external-events" class="mt-2"></div>

                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
            {{-- END Kalendar --}}
            <div class="col-md-3">
                <div class="table-responsive">
                    <table class="table bg-white table-bordered">
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                        <thead class="table-dark">
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Pautan Rasmi</span>
<<<<<<< HEAD
                                        <div class="icon-action d-flex">
                                            <i class='bx bx-right-arrow-circle me-1'></i>
                                            <i class='bx bx-right-arrow-circle me-1'></i>
                                            <i class='bx bx-right-arrow-circle me-1'></i>
                                            <i class='bx bx-right-arrow-circle me-1'></i>
                                        </div>
=======
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="fw-bold">HRMIS 2.0</span></td>
                            </tr>
                            <tr>
                                <td><span class="fw-bold">SKPMg</span></td>
                            </tr>
                            <tr>
                                <td><span class="fw-bold">eMISOnline</span></td>
                            </tr>
                            <tr>
                                <td><span class="fw-bold">e-Operasi</span></td>
                            </tr>
                            <tr>
                                <td><span class="fw-bold">APDM</span></td>
                            </tr>
                            <tr>
                                <td><span class="fw-bold">e-Perolehan</span></td>
                            </tr>
                            <tr>
                                <td><span class="fw-bold">eGTukar</span></td>
                            </tr>
                            <tr>
                                <td><span class="fw-bold">SSDM 2.0</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
<<<<<<< HEAD
                <div class="card border border-opacity-10 border-secondary">
                    <div class="card-header text-bg-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold">Action Kalendar</span>
                            <div class="icon-action d-flex">
                                <i class='bx bx-right-arrow-circle me-1'></i>
                                <i class='bx bx-right-arrow-circle me-1'></i>
                                <i class='bx bx-right-arrow-circle me-1'></i>
                                <i class='bx bx-right-arrow-circle me-1'></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Auth::user()-> jawatan_app != 0 AND Auth::user()-> jawatan_app != 1 )
                        <div class="d-grid">
                            <button class="btn font-16 btn-primary" id="btn-new-event"><i
                                class="mdi mdi-plus-circle-outline"></i> Tambah acara</button>
                        </div>
                        @endif        
                        <div id="external-events" class="mt-2">
                            <div class="row mb-5">
                                @if (Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0)
                                <p class=" ms-2">Seret dan lepas acara atau klik pada petak kalendar</p>
                                @endif
                                @if (Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0)
                                <div class="external-event fc-event bg-success w-100" data-class="bg-success">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Umum
                                </div>
                                @endif
                                @if (Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0)
                                <div class="external-event fc-event bg-info w-100" data-class="bg-info">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Pengurusan dan Pentadbiran
                                </div>
                                @endif
                                @if (Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0)
                                <div class="external-event fc-event bg-warning w-100" data-class="bg-warning">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Kurikulum
                                </div>
                                @endif
                                @if (Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0)
                                <div class="external-event fc-event bg-danger w-100" data-class="bg-danger">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Hal Ehwal Murid
                                </div>
                                @endif
                                @if (Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0)
                                <div class="external-event fc-event bg-purple w-100" data-class="bg-purple">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Kokurikulum
                                </div>
                                @endif

                                <div class="external-event fc-event bg-green w-100" data-class="bg-green">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Kalendarku
                                </div>
                            </div>
                            @if (Auth::user()->jawatan_app != 6 )
                            <div class="row">
                                <p class="ms-2">Hari cuti</p>
                                <div class="external-event fc-event bg-grey w-100 text-dark fw-bold" data-class="bg-grey">
                                    <i class=" font-size-11 me-2"></i>Hari Kelepasan Am Persekutuan
                                </div>
                                <div class="external-event fc-event bg-violet w-100 text-dark fw-bold " data-class="bg-violet">
                                    <i class=" font-size-11 me-2"></i>Hari Kelepasan Am Negeri
                                </div>
                                <div class="external-event fc-event bg-cream w-100 text-dark fw-bold" data-class="bg-cream">
                                    <i class=" font-size-11 me-2"></i>Cuti Peristiwa
                                </div>
                                <div class="external-event fc-event bg-cutipenggal w-100 text-dark fw-bold" data-class="bg-cutipenggal">
                                    <i class=" font-size-11 me-2"></i>Cuti Penggal
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>    
                <div class="modal fade" id="event-modal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header py-3 px-4 border-bottom-0">
                                <h5 class="modal-title" id="modal-title">Event</h5>
        
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
        
                            </div>
                            <div class="modal-body p-4">
                                <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Event Name</label>
                                                <input class="form-control" placeholder="Insert Event Name" type="text"
                                                    name="title" id="event-title" required value="" />
                                                <div class="invalid-feedback">Please provide a valid event name</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">Jam Mulai</label>
                                                <input class="form-control" type="time" name="" id="event-time">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">Jam Selesai</label>
                                                <input class="form-control" type="time" name="" id="event-time">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Mulai</label>
                                                <input class="form-control" type="date" name="" id="event-time">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Selesai</label>
                                                <input class="form-control" type="date" name="" id="event-time">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Category</label>
                                                <select class="form-control form-select" name="category" id="event-category">
                                                    <option selected> --Select-- </option>
                                                    @if (Auth::user()->jawatan_app != 0 AND Auth::user()->jawatan_app !=6 )
                                                    <option value="bg-success">Umum</option>
                                                    <option value="bg-primary">Pengurusan dan Pentadbiran</option>
                                                    <option value="bg-warning">Kurikulum</option>
                                                    <option value="bg-danger">Hal Ehwal Murid</option>
                                                    <option value="bg-purple">Kokurikulum</option>
                                                    @endif
                                                    <option value="bg-green">Kalendarku</option>
                                                    @if (Auth::user()->jawatan_app != 6 )
                                                    <option value="bg-grey">Hari Kelepasan Am Persekutuan</option>
                                                    <option value="bg-violet">Hari Kelepasan Am Negeri</option>
                                                    <option value="bg-cream">Cuti Peristiwa</option>
                                                    <option value="bg-cutipenggal">Cuti Penggal</option>
                                                    @endif
                                                </select>
                                                <div class="invalid-feedback">Please select a valid event category</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="btn btn-light me-1"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end modal-content-->
                    </div> <!-- end modal dialog-->
                </div>                            
            </div>
            
=======
            </div>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
        </div>
        {{-- AKHIR BAGIAN TABEL --}}
    @elseif (Auth::user()->jawatan_app == 0)
        {{-- BAGIAN CARD --}}
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-h-100 shadow-none border border-secondary border-opacity-25 text-bg-primary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <span class="mb-2 lh-2 d-block">JUMLAH USER</span>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('build/icons/group-icon.png') }}" alt="Icon Users" width="60px"
                                    height="50px" class="position-relative" style="right: 50px; opacity: .1;">
                            </div>
                        </div>
                        <p class="fs-3 fw-bold text-white">327</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-h-100 shadow-none border border-secondary border-opacity-25 text-bg-info">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <span class="mb-2 lh-2 d-block">JUMLAH SEKOLAH</span>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('build/icons/school-icon.png') }}" alt="Icon Comp" width="50px"
                                    class="position-relative" style="right: 40px; opacity: .1;">
                            </div>
                        </div>
                        <p class="fs-3 fw-bold text-white">327</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col">
                <div class="card card-h-100 shadow-none border border-secondary border-opacity-25 text-bg-warning">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <span class="mb-2 lh-2 d-block">JUMLAH PENDAPATAN</span>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('build/icons/dollar-icon.png') }}" alt="Icon Dollar" width="50px"
                                    class="position-relative" style="right: 40px; opacity: .1;">
                            </div>
                        </div>
                        <p class="fs-3 fw-bold text-white">RM 12.50</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- STATISTIK PERBANDINGAN STATUS AKAUN --}}
        <h3 class="card-title my-4">Statistik Perbandingan Status Akaun</h3>

        {{-- SEKOLAH RENDAH --}}
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-success bg-opacity-10">
                        <h5>Sekolah Rendah</h5>
                    </div>
                    <div class="card-body">
                        <div id="sekolah-rendah-chart"
                            data-colors='["--bs-success","--bs-primary", "--bs-danger", "--bs-warning"]' dir="ltr"
                            class="mw-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- SEKOLAH MENENGAH --}}
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary bg-opacity-10">
                        <h5>Sekolah Menengah</h5>
                    </div>
                    <div class="card-body">
                        <div id="sekolah-menengah-chart"
                            data-colors='["--bs-success","--bs-primary", "--bs-danger", "--bs-warning"]' dir="ltr"
                            class="mw-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-4">
                <h4 class="mb-4">Recent User</h4>
                <table class="table align-middle table-nowrap table-hover dt-responsive nowrap w-100"
                    id="recentUser-table">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" style="width: 40px;">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Status Akaun</th>
                            <th scope="col">Masa Aktif</th>
                            <th scope="col">Peran</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="mb-4">
                    <h4>Percentage Kategori Sekolah</h4>
                    <span class="text-muted">Bulan Ini</span>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="text-center" dir="ltr">
                            <input class="knob" data-width="150" data-height="150" data-linecap=round
                                data-fgColor="#198754" value="76.23" data-skin="tron" data-readOnly=true
                                data-thickness=".1" />
                            <div class="d-flex align-items-center">
                                <div class="bg-success rounded-circle me-1" style="width:20px; height: 20px"></div>
                                <h5 class="font-size-14 my-3">Sekolah Rendah</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center" dir="ltr">
                            <input class="knob" data-width="150" data-height="150" data-linecap=round
                                data-fgColor="#3B71CA" value="23.87" data-skin="tron" data-readOnly=true
                                data-thickness=".1" />
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle me-1" style="width:20px; height: 20px"></div>
                                <h5 class="font-size-14 my-3">Sekolah Menengah</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- AKHIR BAGIAN CARD --}}
    @endif
<<<<<<< HEAD
        
=======


>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
    <script>
        function toggleLabel(checkboxId) {
            var label = document.getElementById("label" + checkboxId.slice(-1));
            if (label) {
                if (document.getElementById(checkboxId).checked) {
                    label.style.textDecoration = "line-through";
                } else {
                    label.style.textDecoration = "none";
                }
            }
        }
    </script>
@endsection

@section('script')
    <!-- plugin js -->
    <script src="{{ URL::asset('build/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jquery-ui-dist/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/@fullcalendar/core/main.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/@fullcalendar/bootstrap/main.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/@fullcalendar/daygrid/main.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/@fullcalendar/timegrid/main.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/@fullcalendar/interaction/main.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/calendars-full.init.js') }}"></script>

    <!-- tui charts plugins -->
    <script src="{{ URL::asset('build/libs/tui-chart/tui-chart-all.min.js') }}"></script>
    <!-- tui charts map -->
    <script src="{{ URL::asset('build/libs/tui-chart/maps/usa.js') }}"></script>
    <!-- tui charts plugins -->
    <script src="{{ URL::asset('build/js/pages/tui-charts.init.js') }}"></script>
    <!-- select2 js -->
    <script src="{{ URL::asset('build/libs/select2/js/select2.min.js') }}"></script>
    <!-- Required datatable js -->
    <script src="{{ URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/build/js/pages/datatables.init.js') }}"></script>
    <script>
        $('#recentUser-table').DataTable();
    </script>

<<<<<<< HEAD
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var myModal = new bootstrap.Modal(document.getElementById('subscribeModal'));
                myModal.show();
            }, 3000); // Delay in milliseconds
        });
    </script>

    <script src="{{ URL::asset('build/libs/jquery-knob/jquery.knob.min.js') }}"></>
    <script src="{{ URL::asset('build/js/pages/jquery-knob.init.js') }}"></scrip>
=======
    <script src="{{ URL::asset('build/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/jquery-knob.init.js') }}"></script>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
    <script src="{{ URL::asset('/build/js/pages/jquery-knob.init.js') }}"></script>
@endsection
