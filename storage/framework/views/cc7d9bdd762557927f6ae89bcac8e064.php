

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Ikrar Guru'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center align-items-center">
        <div class="w-50">
            <h4>Ikrar Guru</h4>
            <p class="m-0">Bahawasanya kami guru-guru negara Malaysia dengan ini berikrar:</p>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BELAJAR-PROYEK\GRAVIX\mps_cino\mps\resources\views/ikrar-guru.blade.php ENDPATH**/ ?>