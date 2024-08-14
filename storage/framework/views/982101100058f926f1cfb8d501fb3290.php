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
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-xl-4">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 mx-auto">
                                    <a href="index" class="d-block auth-logo">
                                        <img src="<?php echo e(URL::asset('images/Logo_MPS.png')); ?>" alt="" width="40" class="auth-logo-dark">
                                        <img src="<?php echo e(URL::asset('images/Logo_MPS.png')); ?>" alt="" width="40" class="auth-logo-light">
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
                                            <?php if(session('status')): ?>
                                            <div class="alert alert-success text-center mb-4" role="alert">
                                                <?php echo e(session('status')); ?>

                                            </div>
                                            <?php endif; ?>
                                            <form class="form-horizontal" method="POST" action="<?php echo e(route('password.email')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">E-mel *</label>
                                                    <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="useremail" name="email" placeholder="Masukkan e-mel" value="<?php echo e(old('email')); ?>" id="useremail">
                                                    <span class="text-danger d-none" id="emelalert">
                                                        <strong>Harus masukkan e-mel. *</strong>
                                                    </span>
                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="text-end">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="button" id="btn-register">Seterusnya</button>
                                                </div>
                                            </form>
                                            <div class="mt-5 text-center">
                                                <p>Ingat akaun? Klik <a href="<?php echo e(url('login')); ?>" class="font-weight-medium text-primary text-decoration-underline">di
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
                                            <?php if(session('status')): ?>
                                            <div class="alert alert-success text-center mb-4" role="alert">
                                                <?php echo e(session('status')); ?>

                                            </div>
                                            <?php endif; ?>
                                            <form class="form-horizontal" method="POST" action="<?php echo e(route('password.email')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Kod OTP *</label>
                                                    <input type="number" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="useremail" name="email" placeholder="Masukkan kod OTP" value="<?php echo e(old('email')); ?>" id="email">
                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                <div class="text-end">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="button" onclick="nextStep(1)">Seterusnya</button>
                                                </div>
                                            </form>
                                            <div class="mt-5 text-center">
                                                <p>Ingat akaun? Klik <a href="<?php echo e(url('login')); ?>" class="font-weight-medium text-primary text-decoration-underline">di
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
                                            <?php if(session('status')): ?>
                                            <div class="alert alert-success text-center mb-4" role="alert">
                                                <?php echo e(session('status')); ?>

                                            </div>
                                            <?php endif; ?>
                                            <form class="form-horizontal" method="POST" action="<?php echo e(route('password.email')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <div class="mb-3">
                                                    <label for="userpassword" class="form-label">Kata Laluan Baharu
                                                        *</label>
                                                    <div class="input-group auth-pass-inputgroup <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                        <input type="password" name="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="userpassword" value="123456" placeholder="Masukkan kata laluan baharu" aria-label="Password" aria-describedby="password-addon">
                                                        <button class="btn btn-light password-addon" type="button"><i class="mdi mdi-eye-outline"></i></button>
                                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="userpassword" class="form-label">Ulang Kata Laluan
                                                        Baharu *</label>
                                                    <div class="input-group auth-pass-inputgroup <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                        <input type="password" name="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="userpassword" value="123456" placeholder="Masukkan kata laluan baharu" aria-label="Password" aria-describedby="password-addon">
                                                        <button class="btn btn-light password-addon" type="button"><i class="mdi mdi-eye-outline"></i></button>
                                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="text-end">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="button" onclick="nextStep(2)">Seterusnya</button>
                                                </div>
                                            </form>
                                            <div class="mt-5 text-center">
                                                <p>Ingat akaun? Klik <a href="<?php echo e(url('login')); ?>" class="font-weight-medium text-primary text-decoration-underline">di
                                                        sini</a> untuk log masuk.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="step" id="step4">
                                        <div class="text-center">
                                            <h5 class="fw-bold">Tahniah!</h5>
                                            <p class="text-muted">Reset kata laluan anda telah berjaya</p>
                                        </div>
                                        <a href="<?php echo e(url('login')); ?>" class="btn btn-primary w-100">Log Masuk</a>
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
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('script'); ?>
    <!-- owl.carousel js -->
    <script src="<?php echo e(URL::asset('/build/libs/owl.carousel/owl.carousel.min.js')); ?>"></script>
    <!-- auth-2-carousel init -->
    <script src="<?php echo e(URL::asset('/build/js/pages/auth-2-carousel.init.js')); ?>"></script>
    <script src="<?php echo e(asset('build/js/style.js')); ?>"></script>
    <script>
        showStep(0); // Menampilkan langkah pertama saat halaman dimuat
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>