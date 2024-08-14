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
                                    <i class='bx bx-right-arrow-circle me-1'></i> Selesai (14 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
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
                                    <i class='bx bx-right-arrow-circle me-1'></i> Selesai (14 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
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
                                    <i class='bx bx-right-arrow-circle me-1'></i> Selesai (14 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
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
                                    <i class='bx bx-right-arrow-circle me-1'></i> Selesai (14 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
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
                        <div id="external-events" class="mt-2"></div>

                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
            {{-- END Kalendar --}}
            <div class="col-md-3">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Pautan Rasmi</span>
                                        <div class="icon-action d-flex">
                                            <i class='bx bx-right-arrow-circle me-1'></i>
                                            <i class='bx bx-right-arrow-circle me-1'></i>
                                            <i class='bx bx-right-arrow-circle me-1'></i>
                                            <i class='bx bx-right-arrow-circle me-1'></i>
                                        </div>
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
            </div>
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

    <script src="{{ URL::asset('build/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/jquery-knob.init.js') }}"></script>
    <script src="{{ URL::asset('/build/js/pages/jquery-knob.init.js') }}"></script>
@endsection
