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

    <?php if(Auth::user()->jawatan_app != 6): ?>
        <button class="btn btn-light d-block me-auto"><i class='bx bxs-edit'></i> Tambah Gambar</button>
    <?php endif; ?>

    <img src="<?php echo e(asset('images/peta-susun-sekolah.jpg')); ?>" alt="" srcset="" class="img-fluid d-block m-auto"
        style="width:14rem; transform: rotate(90deg);">


    <?php if(Auth::user()->jawatan_app != 6): ?>
        <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-warning mb-3 me-3"><i class='bx bxs-edit'></i> Edit</button>
            <button class="btn btn-danger mb-3"><i class='bx bxs-trash'></i> Delete</button>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/peta-susun-atur-premis.blade.php ENDPATH**/ ?>