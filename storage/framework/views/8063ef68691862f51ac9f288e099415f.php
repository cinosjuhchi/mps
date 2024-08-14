<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('Ikrar Guru'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Maklumat Sekolah <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Ikrar Guru <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php if(Auth::user()->jawatan_app != 6): ?>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
        <i class='bx bxs-edit'></i> Kemaskini
    </button>
<?php endif; ?>

<!-- Modal Edit -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editLabel">Edit Ikrar Guru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="ikrar-guru" class="form-label">Ikrar Guru</label>
                        <input type="text" class="form-control" id="ikrar-guru">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-warning">Kemaskini</button>
            </div>
        </div>
    </div>
</div>

<div class="mt-3">
    <div class="mb-3">
       <p>Bahawasanya kami guru-guru negara Malaysia dengan ini berikrar:</p>
    </div>
    <div class="mb">
        <ul>
            <li>Mendukung terus cita-cita terhadap tugas kami</li>
            <li>Menyatakan keyakinan pada cita-cita murni pekerjaan kami</li>
            <li>Kami akan berbakti kepada masyarakat dan negara kami</li>
            <li>Kami senantiasa menjunjung Perlembangan Negara</li>
            <li>Kami mengamalkan Prinsip-prinsip Rukun Negara pada setiap masa</li>

        </ul>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/ikrar-guru.blade.php ENDPATH**/ ?>