<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Register'); ?> 2
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('/build/libs/owl.carousel/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('/build/libs/owl.carousel/assets/owl.theme.default.min.css')); ?>">
    <link href="<?php echo e(URL::asset('/build/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo e(URL::asset('build/css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <body class="auth-body-bg">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>

    <div class="d-flex vh-100 justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="regist-pict col-md-6 d-none d-md-block"></div>
                <div class="col-md-6 px-4">
                    
                    <div class="step" id="step1">
                        <h1>Daftar Akaun</h1>
                        <p>Daftar Akaun. Akaun anda hanya bermula pada hari pertama Sesi Persekolahan 2024/2025.</p>
                        <form action="" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama *</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">E-mel *</label>
                                <input type="text" class="form-control" placeholder="Masukkan e-mel">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kod Sekolah *</label>
                                <select class="form-select">
                                    <option>Select</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kata Laluan *</label>
                                <input type="password" class="form-control" placeholder="Masukkan kata laluan">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Ulang Kata Lajuan *</label>
                                <input type="password" class="form-control" placeholder="Masukkan ulang kata laluan">
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary w-100" onclick="nextStep(0)">Seterusnya</button>
                            </div>
                            <span>Telah mempunyai akaun? Klik <a href="<?php echo e(route("login")); ?>" class="text-decoration-underline">di sini</a> untuk login.</span>
                        </form>
                    </div>

                    
                    <div class="step" id="step2">
                        <div class="d-flex flex-column aling-items-center justify-content-center text-center" style="height: 580px">
                            <div class="mb-3">
                                <i class="bx bx-envelope fs-1 border border-secondary border-2 border-opacity-25 rounded-circle p-2"></i>
                            </div>
                            <div class="mb-3">
                                <h3>Pengesahan Akaun</h3>
                            </div>
                            <div class="mb-3">
                                <p class="px-5">Kami telah menghantar e-mel pengesahan kepada anda <span><b>example@abc.com</b></span>, Sila semak e-mel tersebut</p>
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary" onclick="nextStep(1)">Mengesahkan Akaun</button>
                            </div>
                        </div>
                    </div>

                    
                    <div class="step" id="step3" style="height: 580px">
                        <div class="mb-4">
                            <h1>Payment</h1>
                            <h4>Buat bayaran untuk mendaftar</h4>
                        </div>
                        <div class="mb-4 d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="kad_kredit" id="kad_kredit" checked>
                                <label class="form-check-label" for="kad_kredit">
                                    Kad Kredit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    FPX
                                </label>
                            </div>
                        </div>
                        <form action="" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold mb-0">Nombor kad *</label>
                                <input type="number" class="form-control" placeholder="0000 0000 0000 0000">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold mb-0">Nama pada kad *</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama pada kad">
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="" class="form-label fw-bold mb-0">Tarikh luput *</label>
                                    <input type="text" class="form-control" placeholder="MM/YY">
                                </div>
                                <div class="col">
                                    <label for="" class="form-label fw-bold mb-0">Kod CVV *</label>
                                    <input type="text" class="form-control" placeholder="Masukkan cvv kod">
                                </div>
                            </div>
                            <div class="mb-4">
                                <button type="button" class="btn btn-primary w-100" onclick="nextStep(2)">Bayar</button>
                            </div>
                            <span>Telah mempunyai akaun? Klik <a href="<?php echo e(route("login")); ?>" class="text-decoration-underline">di sini</a> untuk login.</span>
                        </form>
                    </div>

                    
                    <div class="step" id="step4" style="height: 580px">
                        <div class="mb-3">
                            <h1>Tahniah!</h1>
                            <p>Pendaftaran akaun anda telah berjaya. <br>Sila semak e-mel anda.</p>
                        </div>
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary w-50">Log Masuk</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(URL::asset('/build/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
        <!-- owl.carousel js -->
        <script src="<?php echo e(URL::asset('/build/libs/owl.carousel/owl.carousel.min.js')); ?>"></script>
        <!-- auth-2-carousel init -->
        <script src="<?php echo e(URL::asset('/build/js/pages/auth-2-carousel.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('/build/js/style.js')); ?>"></script>

        <script>
            showStep(0); // Menampilkan langkah pertama saat halaman dimuat
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\neaca\OneDrive\Dokumen\fauzan\SMKN_12\ekstrakulikuler\PROJEK\mps\resources\views/auth/register.blade.php ENDPATH**/ ?>