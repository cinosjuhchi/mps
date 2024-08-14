

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Ikrar Rukun Negara'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Ikrar Rukun Negara
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php if(Auth::user()->jawatan_app != 6): ?>
        <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#edit">
            <i class='bx bxs-edit'></i> Kemaskini
        </button>
    <?php endif; ?>

    <!-- Modal Edit -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Edit Ikrar Rukun Negara</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="mb-3">,
                            <label for="ikrar-penjawat-awam" class="form-label">Ikrar Rukun Negara </label>
                            <input type="text" class="form-control" id="ikrar-penjawat-awam">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-warning">Kemaskini</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <p>Bahawasanya Negara Kita Malaysia mendukung cita-cita hendak: </p>
    <ul>
        <li>Mencapai perpaduan yang lebih erat dalam kalangan masyarakat</li>
        <li>Memelihara satu cara hidup demokratik </li>
        <li>Mencipta satu Masyarakat yang adil di mana kemakmuran Negara dapat dinikmati bersama secara adil dan saksama</li>
        <li>Membentuk satu sikap yang liberal terhadap tradisi kebudayaan yang kaya dan berbagai-bagai corak</li>
        <li>Membina sebuah masyarakat progresif yang akan menggunakan sains dan teknologi moden</li>
    </ul>

    <p>Maka KAMI, Rakyat Malaysia berikar akan menumpukan seluruh tenaga dan usaha kami untuk mencapai cita-cita tersebut berdasarkan atas prinsip-prinsip yang berikut:</p>

    <ul class="fw-bold">
        <li>KEPERCAYAAN KEPADA TUHAN</li>
        <li>KESETIAAN KEPADA RAJA DAN NEGARA</li>
        <li>KELUHAN PERLEMBANGAN</li>
        <li>KEDAULATAN UNDANG-UNDANG</li>
        <li>KESOPANAN DAN KESUSILAAN</li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\mpsOnline\mps\resources\views/ikrar-rukun-negara.blade.php ENDPATH**/ ?>