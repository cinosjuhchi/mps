

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Dashboard'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/@fullcalendar/core/main.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/@fullcalendar/daygrid/main.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/@fullcalendar/bootstrap/main.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/@fullcalendar/timegrid/main.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')); ?>"
        rel="stylesheet" type="text/css" />
    <!-- tui charts Css -->
    <link href="<?php echo e(URL::asset('build/libs/tui-chart/tui-chart.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
    <div class="row">
        <div class="col">
            <?php if(session('change-role-success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="text-dark"><?php echo e(session('change-role-success')); ?>

                        <b><?php echo e(session('ubahKe')); ?>!</b></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
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

    <?php if(Auth::user()->jawatan_app != 0 and Auth::user()->jawatan_app != 1): ?>
        
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-h-100 shadow-none border border-secondary border-opacity-25 text-bg-primary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <span class="mb-3 lh-2 d-block">KOMPONEN PENGURUSAN DAN PENTADBIRAN</span>
                            </div>
                            <div class="col-2">
                                <img src="<?php echo e(asset('build/icons/computer-icon.png')); ?>" alt="Icon Comp" width="60px"
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
                                    <i class='bx bx-right-arrow-circle me-1'></i> Siap (14 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
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
                                <img src="<?php echo e(asset('build/icons/link-icon.png')); ?>" alt="Icon Comp" width="50px"
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
                                    <i class='bx bx-right-arrow-circle me-1'></i> Siap (14 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
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
                                <img src="<?php echo e(asset('build/icons/group-icon.png')); ?>" alt="Icon Comp" width="50px"
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
                                    <i class='bx bx-right-arrow-circle me-1'></i> Siap (14 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
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
                                <img src="<?php echo e(asset('build/icons/clock-icon.png')); ?>" alt="Icon Comp" width="50px"
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
                                    <i class='bx bx-right-arrow-circle me-1'></i> Siap (14 Program)
                                </span>
                            </li>
                            <li>
                                <span class="align-middle">
                                    <i class='bx bx-right-arrow-circle me-1'></i> Gagal (10 Program)
                                </span>
                            </li>
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
        

        
        <div class="row">
            <div class="col-md-9">
                
                <div class="table-responsive">
                    <table class="table bg-white table-bordered table-borderless">
                        <thead class="table-dark">
                            <div class="d-flex justify-content-between align-items-center bg-dark text-white p-3">
                                <span>To Do</span>
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
                            <?php $__currentLoopData = $currentItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="checkbox" id="check<?php echo e($loop->index); ?>" onchange="toggleLabel('check<?php echo e($loop->index); ?>')"></td>
                                <td><label for="check<?php echo e($loop->index); ?>" id="label<?php echo e($loop->index); ?>"><?php echo e($item['program_aktiviti']); ?></label></td>
                                <td><?php echo e($item['komponen']); ?></td>
                                <td><?php echo e($item['tarikh']); ?></td>
                                <td><?php echo e($item['tindakan']); ?></td>
                                <td>
                                    <p class="bg-<?php echo e($item['status_color_class']); ?> bg-opacity-75 rounded p-1 text-white">
                                        <?php echo e($item['status']); ?>

                                    </p>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end mb-3">
                    <?php for($i = 1; $i <= $pages; $i++): ?>
                        <a href="<?php echo e(url()->current()); ?>?page=<?php echo e($i); ?>" class="btn mx-1 <?php echo e($i == $page ? 'btn-dark' : 'btn-light border border-secondary'); ?>"><?php echo e($i); ?></a>
                    <?php endfor; ?>
                </div>
                

                
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
            
            <div class="col-md-3">
                <div class="table-responsive">
                    <table class="table bg-white table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Pautan Rasmi</span>
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
        
    <?php elseif(Auth::user()->jawatan_app == 0): ?>
        
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-h-100 shadow-none border border-secondary border-opacity-25 text-bg-primary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <span class="mb-2 lh-2 d-block">JUMLAH USER</span>
                            </div>
                            <div class="col-2">
                                <img src="<?php echo e(asset('build/icons/group-icon.png')); ?>" alt="Icon Users" width="60px"
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
                                <img src="<?php echo e(asset('build/icons/school-icon.png')); ?>" alt="Icon Comp" width="50px"
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
                                <img src="<?php echo e(asset('build/icons/dollar-icon.png')); ?>" alt="Icon Dollar" width="50px"
                                    class="position-relative" style="right: 40px; opacity: .1;">
                            </div>
                        </div>
                        <p class="fs-3 fw-bold text-white">RM 12.50</p>
                    </div>
                </div>
            </div>
        </div>

        
        <h3 class="card-title my-4">Statistik Perbandingan Status Akaun</h3>

        
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
        
    <?php endif; ?>

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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- plugin js -->
    <script src="<?php echo e(URL::asset('build/libs/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/jquery-ui-dist/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/@fullcalendar/core/main.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/@fullcalendar/bootstrap/main.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/@fullcalendar/daygrid/main.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/@fullcalendar/timegrid/main.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/@fullcalendar/interaction/main.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/pages/calendars-full.init.js')); ?>"></script>

    <!-- tui charts plugins -->
    <script src="<?php echo e(URL::asset('build/libs/tui-chart/tui-chart-all.min.js')); ?>"></script>
    <!-- tui charts map -->
    <script src="<?php echo e(URL::asset('build/libs/tui-chart/maps/usa.js')); ?>"></script>
    <!-- tui charts plugins -->
    <script src="<?php echo e(URL::asset('build/js/pages/tui-charts.init.js')); ?>"></script>
    <!-- select2 js -->
    <script src="<?php echo e(URL::asset('build/libs/select2/js/select2.min.js')); ?>"></script>
    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>

    <!-- Responsive examples -->
    <script src="<?php echo e(URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>
    <!-- Datatable init js -->
    <script src="<?php echo e(URL::asset('/build/js/pages/datatables.init.js')); ?>"></script>
    <script>
        $('#recentUser-table').DataTable();
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var myModal = new bootstrap.Modal(document.getElementById('subscribeModal'));
                myModal.show();
            }, 3000); // Delay in milliseconds
        });
    </script>

    <script src="<?php echo e(URL::asset('build/libs/jquery-knob/jquery.knob.min.js')); ?>"></>
    <script src="<?php echo e(URL::asset('build/js/pages/jquery-knob.init.js')); ?>"></scrip>
    <script src="<?php echo e(URL::asset('/build/js/pages/jquery-knob.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mps\resources\views/dashboard.blade.php ENDPATH**/ ?>