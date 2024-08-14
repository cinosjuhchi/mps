<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Visi, Misi, Moto'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Visi, Misi, Moto
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php if(Auth::user()->jawatan_app != 6): ?>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
        <i class='bx bxs-edit'></i> Edit
    </button>
    <?php endif; ?>

    <!-- Modal Edit -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Edit - Visi dan Misi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="visi" class="form-label">Visi</label>
                            <input type="text" class="form-control" id="visi">
                        </div>
                        <div class="mb-3">
                            <label for="Misi" class="form-label">Misi</label>
                            <input type="text" class="form-control" id="Misi">
                        </div>
                        <div class="mb-3">
                            <label for="Moto" class="form-label">Moto</label>
                            <input type="text" class="form-control" id="Moto">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-warning">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>




    <div class="text-center">
        <div class="mb-5">
            <div class="d-flex align-items-center justify-content-center">
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
                <h5>Visi</h5>
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
            </div>
            <p>Pendidikan berkualiti Insan Terdidik Negara Sejahtera</p>
        </div>

        <div class="mb-5">
            <div class="d-flex align-items-center justify-content-center">
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
                <h5>Misi</h5>
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
            </div>
            <p>Melestarikan Sistem Pendidikan Yang Berkualiti Untuk Membangun Potensi Individu Bagi Memenuhi Aspirasi
                Negara</p>
        </div>
        <div class="mb-5">
            <div class="d-flex align-items-center justify-content-center">
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
                <h5>Moto</h5>
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
            </div>
            <p>Super admin menulis moto sekolah disini</p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/visi-misi-moto.blade.php ENDPATH**/ ?>