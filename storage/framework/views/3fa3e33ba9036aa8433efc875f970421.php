

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Lagu Guru Malaysia'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Lagu</a></li>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Lagu Guru Malaysia
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="text-center">
        
        <div class="mt-4">
            <h4 class="">Lagu Guru Malaysia</h4>
            <p class="fs-5">
                Kami guru Malaysia 
                <br> Berikrar dan berjanji
                <br> Mendidik dan memimpin
                <br> Putra putri negara kita
                <br> Pada Seri Paduka
                <br> Kami tumpahkan setia
                <br> Rukun Negara kita
                <br> Panduan hidup kami semua
                <br><br> Di bidang pembangunan
                <br>Kami tetap bersama
                <br>Membantu, membina
                <br>Negara yang tercinta
                <br><br>Amanah yang diberi
                <br>Kami tak persiakan
                <br>Apa yang kami janji
                <br>Tunai tetap kami tunaikan
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\mpsOnline\mps\resources\views/lagu-guru-malaysia.blade.php ENDPATH**/ ?>