<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Peta Susun Atur Premis'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Peta Susun Atur Premis
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>    


    <div class="row text-center">
        <h4 class="fs-4 text-dark fw-bold mb-3">Peta Atur Premis</h4>
        <img src="<?php echo e(asset('images/foto-premis.png')); ?>" class="img-fluid" alt="" srcset="">
    </div>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MPS\mps-online\resources\views/peta-susun-atur-premis.blade.php ENDPATH**/ ?>