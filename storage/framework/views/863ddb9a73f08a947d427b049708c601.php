<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Ikrar Penjawat Awam'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Ikrar Penjawat Awam
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php if(Auth::user()->jawatan_app != 6): ?>
        <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#edit">
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
                <form action="">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="ikrar-penjawat-awam" class="form-label">Ikrar Penjawat Awam</label>
                            <input type="text" class="form-control" id="ikrar-penjawat-awam">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-warning">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <p>Kami yang telah dilantik dengan kerajaan Malaysia membuat ikrar di sini bahawa semasa dan selagi kami berkhidmat
        dengan kerajaan, kami akan patuh dengan mengamalkan teras-teras perkhidmatan semasa menjalankan tugas.</p>
    <p>ke arah ini kami: </p>
    <ul>
        <li>Beragam meningkatkan mutu perkhidmatan</li>
        <li>Berkeja dengan penuh tanggungjawab</li>
        <li>Berusaha mengikis sikap mementingkan diri sendiri</li>
        <li>Berkhidmat dengan penuh muhibah dan kemesraan</li>
        <li>Bekerja ke arah memajukan pemikiran rakyat dan pembangunan negara</li>
        <li>Bekerjasama dalam membanteras kelemahan dan musuh-musuh negara</li>
        <li>Berpegang teguh kepada ajaran agama</li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/ikrar-penjawat-awam.blade.php ENDPATH**/ ?>