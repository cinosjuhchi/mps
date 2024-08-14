<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Piagam Pelanggan'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Piagam Pelanggan
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <img src="<?php echo e(asset('images/Logo_MPS.png')); ?>" alt="" srcset=""class="img-fluid d-block m-auto"
        style="width:4rem;">
    <?php if(Auth::user()->jawatan_app == 3 or Auth::user()->kategori_sekolah == 'sekolah_menengah'): ?>
        <h3 class="text-center mt-3">Piagam Sekolah <br>(Sekolah Menengah Kebangsaan Pinggiran Cyberjaya)</h3>
    <?php endif; ?>
    <?php if(Auth::user()->jawatan_app == 2 or Auth::user()->kategori_sekolah == 'sekolah_rendah'): ?>
        <h3 class="text-center mt-3">Piagam Sekolah <br>(Sekolah Rendah Sri Angkasa)</h3>
    <?php endif; ?>
    <?php if(Auth::user()->jawatan_app == 6): ?>
        <ul class="list-group list-group-numbered">
            <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur.</li>
            <li class="list-group-item border-0">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
            <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum!</li>
            <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, sapiente?
            </li>
        </ul>
    <?php endif; ?>

    <?php if(Auth::user()->jawatan_app != 6): ?>
        <form action="" method="post">
            <?php echo csrf_field(); ?>
            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control"
                placeholder="Sekolah Menengah Kebangsaan Pinggiran Cyberjaya">

            <div class="mt-3 mb-3">
                <input id="deskripsi-piagam_sekolah" type="hidden" name="deskripsi-piagam_sekolah" value="">
                <trix-editor input="deskripsi-piagam_sekolah" placeholder="Tulis Piagam Pelanggan"></trix-editor>
            </div>

            <button type="button" class="btn btn-primary w-100">Kemaskini</button>
        </form>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/piagam-pelanggan.blade.php ENDPATH**/ ?>