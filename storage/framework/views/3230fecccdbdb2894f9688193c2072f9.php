<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('Falsafah Pendidikan Kebangsaan'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Maklumat Sekolah <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Falsafah Pendidikan Kebangsaan <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row justify-content-center py-5">
    <div class="col-4">
    <h4 class="text-dark fs-4 fw-bold mb-3">Falsafah Pendidikan Kebangsaan</h4>
    <p class="text-dark fs-5 fw-normal text-start">
        Pendidikan di Malaysia ialah
        Satu usaha berterusan ke arah memperkembangkan lagi potensi individu
        secara menyeluruh dan bersepadu untuk mewujudkan insan yang
        seimbang dan harmonis dari segi intelek, rohani, emosi dan jasmani
        berdasarkan kepercayaan dan kepatuhan kepada Tuhan. Usaha ini adalah
        bagi melahirkan rakyat Malaysia yang berilmu, bertanggungjawab dan
        berkeupayaan mencapai kesejahteraan diri serta memberi sumbangan
        terhadap keharmonian dan kemakmuran masyarakat dan Negara.</p>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mps\resources\views/falsafah-pendidikan-kebangsaan.blade.php ENDPATH**/ ?>