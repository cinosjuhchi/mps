<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Lagu Kebesaran Negeri'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Lagu</a></li>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Lagu Kebesaran Negeri
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="text-center">
        <video src="<?php echo e(asset('videos/Lagu_Negaraku.mp4')); ?>" class="w-75" controls></video>
        <div class="mt-4">
            <h5 class="text-decoration-underline">Lirik</h5>
            <p class="fs-4">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/lagu-kebesaran-negeri.blade.php ENDPATH**/ ?>