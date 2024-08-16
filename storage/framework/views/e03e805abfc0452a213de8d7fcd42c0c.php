

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Lagu Negaraku'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Lagu</a></li>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Lagu Negaraku
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="d-flex justify-content-center align-items-center mt-4">
        <div class="w-50 d-flex justify-content-center align-items-center text-start">
            
            <div class="mt-4">
                <h4 class="">Lagu Negaraku</h4>
                <p class="fs-5">
                    Negaraku
                    <br> Tanah tumpahnya darahku,
                    <br> Rakyat Hidup bersatu dan maju,
                    <br> Rahmat bahagia Tuhan kurniakan,
                    <br> Raja kita Selamat bertakhta,
                    <br> Rahmat bahagia Tuhan kurniakan,
                    <br> Raja kita Selamat bertakhta
                </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mps\resources\views/lagu-negaraku.blade.php ENDPATH**/ ?>