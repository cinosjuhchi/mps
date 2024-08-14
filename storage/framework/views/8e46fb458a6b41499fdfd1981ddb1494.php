<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Lagu Sekolah'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Lagu</a></li>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Lagu Sekolah
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php if(Auth::user()->jawatan_app != 6 and Auth::user()->jawatan_app != 1): ?>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#unggahLagu">
            <i class='bx bx-link'></i> Muat Naik
        </button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#unggahLirik">
            <i class='bx bx-file'></i> Masukkan Lirik
        </button>
    <?php endif; ?>

    <!-- Modal Lirik -->
    <div class="modal fade" id="unggahLirik" tabindex="-1" aria-labelledby="unggahLirikLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="unggahLirikLabel">Unggah Lirik Lagu Sekolah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Tajuk Lagu</label>
                            <input type="text" name="judul" id="judul" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="lirik" class="form-label">Lirik Lagu</label>
                            <textarea name="lirik" id="lirik" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Unggah</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="unggahLagu" tabindex="-1" aria-labelledby="unggahLaguLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="unggahLaguLabel">Muat Naik Lagu Sekolah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="link" class="form-label">Link Lagu</label>
                            <input type="text" class="form-control" id="link">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Unggah</button>
                </div>
            </div>
        </div>
    </div>

    
    <div class="text-center mt-3">
    
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/lagu-sekolah.blade.php ENDPATH**/ ?>