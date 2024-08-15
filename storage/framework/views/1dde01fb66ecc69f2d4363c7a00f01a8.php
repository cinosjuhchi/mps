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

    <div class="row gap-5">
        <div class="card col p-3 sm-shadow rounded bg-white">
            <div class="mb-2">
                <h4 class="text-dark fw-bold fs-4">Visi</h4>   
                <p class="fw-lighter text-dark fs-5">Pendidikan berkualiti Insan Terdidik Negara Sejahtera</p>
            </div>
            <div>
                <h4 class="text-dark fw-bold fs-4">Misi</h4>   
                <p class="fw-lighter text-dark fs-5">Melestarikan Sistem Pendidikan Yang Berkualiti Untuk Membangun Potensi Individu Bagi Memenuhi Aspirasi Negara</p>
            </div>
        </div>
        <div class="card col p-3 bg-white rounded shadow-sm">            
            <div class="mb-2">
                <h4 class="text-dark fw-bold fs-4">Slogan</h4>   
                <div class="row">                    
                    <div>
                        <label class="form-label">Slogan</label>
                        <input class="form-control" type="text" placeholder="Slogan">
                    </div>            
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 w-100 text-end">
        <button type="button" class="btn btn-primary w-8 waves-effect waves-light">Simpan Perubahan</button>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MPS\mps-online\resources\views/visi-misi-moto.blade.php ENDPATH**/ ?>