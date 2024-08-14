<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Recover_Password'); ?> 2
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('/build/libs/owl.carousel/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('/build/libs/owl.carousel/assets/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('build/css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <body class="auth-body-bg">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="wrapper">
            <div class="step" id="step1">
                <div class="card border border-secondary border-opacity-25 border-2" style="width: 25rem;">
                    <div class="card-header bg-primary bg-opacity-25 d-flex justify-content-between align-items-center p-4">
                        <div>
                            <p class="mb-1 fs-5">Verifikasi E-mel</p>
                            <small class="fw-bold">Sahkan identiti anda!</small>
                        </div>
                        <img src="<?php echo e(asset('build/images/companies/img-1.png')); ?>" alt="Logo MPS" width="150px" height="80px">
                    </div>
                    <div class="card-body p-5 mb-4  ">
                        <form action="<?php echo e(route('login')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold mb-0">E-mel *</label>
                                    <input type="text" class="form-control" name="email" placeholder="Masukkan e-mel">
                                </div>
                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary float-end w-50" onclick="nextStep(0)">Seterusnya</button>
                                </div>
                        </form>
                    </div>
                </div>
                <p class="text-center">Kembali ke <span><a class="text-decoration-underline" href="<?php echo e(route("login")); ?>">Log Masuk</a></span></p>
            </div>
            <div class="step" id="step2">
                <div class="card border border-secondary border-opacity-25 border-2" style="width: 25rem;">
                    <div class="card-header bg-primary bg-opacity-25 d-flex justify-content-between align-items-center p-4">
                        <div>
                            <p class="mb-1 fs-5">Kod OTP</p>
                            <small class="fw-bold">Masukkan Kod OTP yang dikirimke e-mel <b>rob***.com</b></small>
                        </div>
                        <img src="<?php echo e(asset('build/images/companies/img-1.png')); ?>" alt="Logo MPS" width="150px" height="80px">
                    </div>
                    <div class="card-body p-5 mb-4  ">
                        <form action="<?php echo e(route('login')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-4">
                                <label for="" class="form-label fw-bold mb-0">Kod OTP *</label>
                                <input type="number" class="form-control" name="email" placeholder="Masukkan Kod OTP">
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary float-end w-50" onclick="nextStep(1)">Seterusnya</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-center">Kembali ke <span><a class="text-decoration-underline" href="<?php echo e(route("login")); ?>">Log Masuk</a></span></p>
            </div>
            <div class="step" id="step3">
                <div class="card border border-secondary border-opacity-25 border-2" style="width: 25rem;">
                    <div class="card-header bg-primary bg-opacity-25 d-flex justify-content-between align-items-center p-4">
                        <div>
                            <p class="mb-1 fs-5">Reset Kata Laluan</p>
                            <small class="">Reset kata laluan anda</small>
                        </div>
                        <img src="<?php echo e(asset('build/images/companies/img-1.png')); ?>" alt="Logo MPS" width="150px" height="80px">
                    </div>
                    <div class="card-body p-5 mb-4  ">
                        <form action="<?php echo e(route('login')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-4">
                                <label for="" class="form-label fw-bold mb-0">Kata Laluan Baharu *</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan kata laluan baharu">
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label fw-bold mb-0">Ulang Kata Laluan Baharu *</label>
                                <input type="password" class="form-control" name="confirmpass" placeholder="Masukkan ulang kata laluan baharu">
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary w-100" onclick="nextStep(2)">Hantar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-center">Kembali ke <span><a class="text-decoration-underline" href="<?php echo e(route("login")); ?>">Log Masuk</a></span></p>
            </div>
            <div class="step" id="step4">
                <div class="mb-4">
                    <h1>Tahniah!</h1>
                    <p>Reset kata laluan anda telah berjaya</p>
                </div>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-primary w-100">Log Masuk</a>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('script'); ?>
        <!-- owl.carousel js -->
        <script src="<?php echo e(URL::asset('/build/libs/owl.carousel/owl.carousel.min.js')); ?>"></script>
        <!-- auth-2-carousel init -->
        <script src="<?php echo e(URL::asset('/build/js/pages/auth-2-carousel.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('/build/js/style.js')); ?>"></script>

        <script>
            showStep(0); // Menampilkan langkah pertama saat halaman dimuat
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\neaca\OneDrive\Dokumen\fauzan\SMKN_12\ekstrakulikuler\PROJEK\mps\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>