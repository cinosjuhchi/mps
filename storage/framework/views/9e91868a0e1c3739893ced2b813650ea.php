<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('Surat Siaran'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Punca Kuasa <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Surat Siaran <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

    <?php if(Auth::user()->jawatan_app == 0): ?>
    <div class="action d-flex justify-content-between">
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                <i class='bx bx-plus'></i> Tambah Surat
            </button>
        </div>

        <div>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
                <i class='bx bxs-edit'></i>
            </button>
            <button type="button" class="btn btn-danger">
                <i class='bx bxs-trash'></i>
            </button>
        </div>
    </div>
    <?php endif; ?>

<!-- Modal Create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editLabel">Tambah Surat Siaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="surat-pekeliling-ikhtisas" class="form-label">Surat Siaran</label>
                        <input type="text" class="form-control" id="surat-pekeliling-ikhtisas">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Tambah Surat </button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editLabel">Edit Surat Siaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="surat-pekeliling-ikhtisas" class="form-label">Surat Siaran</label>
                        <input type="text" class="form-control" id="surat-pekeliling-ikhtisas">
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




<div class="row mt-3">
    <p class="text-center">Contrary to popular belief, Lorem Ipsum is not simply random text,a Latin professor at Hampden-Sydney College in Virginia.</p>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mpsonline_current\resources\views/surat-siaran.blade.php ENDPATH**/ ?>