

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
        
        <div class="mt-4">
            <h4 class="">Selamat Sultan</h4>
            <p class="fs-5">
                Lanjutkan Usia Al-Sultan Kami
                <br> Sultan Kelantan Raja Ikrami
                <br> Aman Sentosa Tuhan Sirami
                <br> Kekal Memerintah Kami
                <br> Kasih Dan Taat Setia Disembahkan
                <br> Keriangan Diucapkan
                <br> Segala Kebesaran Allah Cucurkan
                <br> Bertambah Kemuliaan
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\mpsOnline\mps\resources\views/lagu-kebangsaan-negeri.blade.php ENDPATH**/ ?>