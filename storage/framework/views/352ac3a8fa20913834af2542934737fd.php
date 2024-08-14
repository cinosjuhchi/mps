<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Foto Galeri'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Foto Galeri
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php if(Auth::user()->jawatan_app != 6 and Auth::user()->jawatan_app != 1): ?>
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#uploadGambar">
            <i class='bx bx-upload'></i> Muat naik Gambar
        </button>
    <?php endif; ?>

    <!-- Modal Lirik -->
    <div class="modal fade" id="uploadGambar" tabindex="-1" aria-labelledby="uploadGambarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="uploadGambarLabel">Muat naik Gambar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Muat naik Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Muat naik</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-4 col-sm-6">
            <img src="<?php echo e(asset('images/img3.jpg')); ?>" alt="Image 1" class="gallery-item mb-2">
            <p class="card-text fw-bold fs-6">Pintu Pagar Utama</p>
        </div>
        <div class="col-md-4 col-sm-6">
            <img src="<?php echo e(asset('images/img2.jpg')); ?>" alt="Image 2" class="gallery-item mb-2">
            <p class="card-text fw-bold fs-6">Taman</p>
        </div>
        <div class="col-md-4 col-sm-6">
            <img src="<?php echo e(asset('images/img1.jpg')); ?>" alt="Image 3" class="gallery-item mb-2">
            <p class="card-text fw-bold fs-6">Tandas</p>
        </div>
        <div class="col-md-4 col-sm-6">
            <img src="<?php echo e(asset('images/img2.jpg')); ?>" alt="Image 3" class="gallery-item mb-2">
            <p class="card-text fw-bold fs-6">Pintu Pagar Utama</p>
        </div>
        <div class="col-md-4 col-sm-6">
            <img src="<?php echo e(asset('images/img3.jpg')); ?>" alt="Image 3" class="gallery-item mb-2">
            <p class="card-text fw-bold fs-6">Tandas</p>
        </div>
        <!-- Tambahkan lebih banyak kolom sesuai kebutuhan -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.gravix.id/resources/views/foto-galeri.blade.php ENDPATH**/ ?>