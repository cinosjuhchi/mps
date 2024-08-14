<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('translation.Login'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- owl.carousel css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('/build/libs/owl.carousel/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('/build/libs/owl.carousel/assets/owl.theme.default.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<body class="auth-body-bg">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="wrapper">
            <div class="card border border-secondary border-opacity-25 border-2" style="width: 25rem;">
                <div class="card-header bg-primary bg-opacity-25 d-flex justify-content-between align-items-center p-4">
                    <div>
                        <p class="mb-1 fs-5"><span class="fw-bold">MPS</span>online</p>
                        <small class="fw-bold">Manual Pengurusan Sekolah Online 2023.1</small>
                    </div>
                    <img src="<?php echo e(asset('build/images/companies/img-1.png')); ?>" alt="Logo MPS" width="150px" height="80px">
                </div>
                <div class="card-body p-5 mb-4  ">
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-4">
                            <label for="" class="form-label fw-bold mb-0">E-mel *</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukkan e-mel" value="<?php echo e(old('email', 'admin@themesbrand.com')); ?>">
                        </div>
                        <div class="mb-5">
                            <label for="" class="form-label fw-bold mb-0">Kata Laluan *</label>
                            <div class="input-group auth-pass-inputgroup ">
                                <input type="password" name="password" class="form-control" id="userpassword" value="123456" placeholder="Masukkan kata laluan" aria-label="Password" aria-describedby="password-addon">
                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                            </div>
                        </div>
                        <div class="mb-5">
                             <button type="submit" class="btn btn-primary w-100">Log Masuk</button>
                        </div>
                        <p class="text-center">Lupa kata laluan? Klik <span><a class="text-decoration-underline" href="<?php echo e(route("password.request")); ?>">di sini</a></span></p>
                    </form>
                </div>
            </div>
            <p class="text-center">Belum punyai akaun? Klik <span><a class="text-decoration-underline" href="<?php echo e(route("register")); ?>">di sini</a></span> untuk mendaftar</p>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
    <!-- owl.carousel js -->
    <script src="<?php echo e(URL::asset('/build/libs/owl.carousel/owl.carousel.min.js')); ?>"></script>
    <!-- auth-2-carousel init -->
    <script src="<?php echo e(URL::asset('/build/js/pages/auth-2-carousel.init.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\neaca\OneDrive\Dokumen\fauzan\SMKN_12\ekstrakulikuler\PROJEK\mps\resources\views/auth/login.blade.php ENDPATH**/ ?>