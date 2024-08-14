<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('Falsafah Pendidikan Kebangsaan'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Maklumat Sekolah <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Falsafah Pendidikan Kebangsaan <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php if(Auth::user()->jawatan_app != 6): ?>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
        <i class='bx bxs-edit'></i> Edit
    </button>
<?php endif; ?>

<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editLabel">Edit Falsafah Pendidikan Kebangsaan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="falsafah-pendidikan" class="form-label">Falsafah Pendidikan Kebangsaan</label>
                        <input type="text" class="form-control" id="falsafah-pendidikan">
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

<div class="mt-3">
    <div class="mb-3 text-center">
       <p class="fw-bold">Pendidikan di Malaysia ialah</p>
    </div>
    <div class="mb-3 text-center">
        <p>Satu usaha berterusan ke arah memperkembangkan lagi potensi   individu secara menyeluruh dan bersepadu untuk mewujudkan   Insan yang seimbang dan harmonis dari segi intelek, rohani, emosi  dan jasmani berdasarkan kepercayaan dan kepatuhan kepada   Tuhan. Usaha ini adalah bagi melahirkan rakyat Malaysia yang berilmu, bertanggung jawab dan berkeupayaan mencapai   kesejahteraan diri serta memberi sumbangan terhadap  keharmonian dan kemakmuran masyarakat serta Negara </p>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/falsafah-pendidikan-kebangsaan.blade.php ENDPATH**/ ?>