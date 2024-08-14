<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Logo Sekolah'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Logo</a></li>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Logo Sekolah
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php if(Auth::user()->jawatan_app != 6): ?>
        <div>
            <button class="btn btn-warning d-block me-auto mb-3"><i class='bx bxs-edit'></i> Edit Logo</button>
        </div>
    <?php endif; ?>
    <img src="<?php echo e(asset('images/logo-sri-angkasa.png')); ?>" alt="" srcset=""class="img-fluid d-block m-auto"
        style="width:12rem;">
    <?php if(Auth::user()->jawatan_app != 6): ?>
        <h3>Deskripsi Logo</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero molestiae quisquam accusantium sed? Ex,
            perferendis asperiores nulla dicta maiores distinctio, totam laboriosam omnis assumenda laudantium officiis,
            optio quidem. Voluptatum quasi delectus cum nemo itaque nam suscipit provident similique, incidunt earum,
            numquam nihil laboriosam ex eius aut doloremque vero. Illo saepe labore odio nulla ab, quae a neque doloremque.
            Hic rerum cupiditate fugit corporis impedit voluptate doloribus, temporibus repudiandae quis non tempora quo,
            similique pariatur laboriosam aut excepturi consequuntur molestiae enim minima ut commodi fuga ex voluptas
            vitae! Hic aspernatur repellendus veniam, accusantium quod quisquam amet odio, culpa odit atque nesciunt.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mps-main\resources\views/logo-sekolah.blade.php ENDPATH**/ ?>