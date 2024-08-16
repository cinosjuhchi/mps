<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('Surat Siaran'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Punca Kuasa <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Surat Siaran <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="action d-flex justify-content-between mb-3">
    <div>
        <div class="btn-group">
            <button class="btn btn-secondary" id="btn-grid" onclick="switchToGrid()"><i class="bx bx-grid"></i></button>
            <button class="btn btn-outline-secondary" id="btn-list" onclick="switchToList()"><i class="bx bx-list-ul"></i></button>
        </div>
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

<div class="container" id="senarai-container">
    <div id="senarai-grid">
        <div class="row">
            <div class="col-md-3">
                <div class="card  shadow">
                    <div class="card-body p-0">
                        <div class="mx-auto">
                            <img src="<?php echo e(asset('images/foto_guru/guru-besar.png')); ?>" alt="Foto Diri" class="" style="height: 200px; width: 100%; object-fit: cover">
                        </div>
                        <div class="d-flex align-items-center gap-2 p-2">
                            <i class="bx bxs-file-pdf fs-2"></i>
                            <div>
                                <p class="m-0 fw-bold">Certificate</p>
                                <small>27 Jul 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card  shadow">
                    <div class="card-body p-0">
                        <div class="mx-auto">
                            <img src="<?php echo e(asset('images/foto_guru/guru-besar.png')); ?>" alt="Foto Diri" class="" style="height: 200px; width: 100%; object-fit: cover">
                        </div>
                        <div class="d-flex align-items-center gap-2 p-2">
                            <i class="bx bxs-file-pdf fs-2"></i>
                            <div>
                                <p class="m-0 fw-bold">Certificate</p>
                                <small>27 Jul 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card  shadow">
                    <div class="card-body p-0">
                        <div class="mx-auto">
                            <img src="<?php echo e(asset('images/foto_guru/guru-besar.png')); ?>" alt="Foto Diri" class="" style="height: 200px; width: 100%; object-fit: cover">
                        </div>
                        <div class="d-flex align-items-center gap-2 p-2">
                            <i class="bx bxs-file-pdf fs-2"></i>
                            <div>
                                <p class="m-0 fw-bold">Certificate</p>
                                <small>27 Jul 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card  shadow">
                    <div class="card-body p-0">
                        <div class="mx-auto">
                            <img src="<?php echo e(asset('images/foto_guru/guru-besar.png')); ?>" alt="Foto Diri" class="" style="height: 200px; width: 100%; object-fit: cover">
                        </div>
                        <div class="d-flex align-items-center gap-2 p-2">
                            <i class="bx bxs-file-pdf fs-2"></i>
                            <div>
                                <p class="m-0 fw-bold">Certificate</p>
                                <small>27 Jul 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card  shadow">
                    <div class="card-body p-0">
                        <div class="mx-auto">
                            <img src="<?php echo e(asset('images/foto_guru/guru-besar.png')); ?>" alt="Foto Diri" class="" style="height: 200px; width: 100%; object-fit: cover">
                        </div>
                        <div class="d-flex align-items-center gap-2 p-2">
                            <i class="bx bxs-file-pdf fs-2"></i>
                            <div>
                                <p class="m-0 fw-bold">Certificate</p>
                                <small>27 Jul 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card  shadow">
                    <div class="card-body p-0">
                        <div class="mx-auto">
                            <img src="<?php echo e(asset('images/foto_guru/guru-besar.png')); ?>" alt="Foto Diri" class="" style="height: 200px; width: 100%; object-fit: cover">
                        </div>
                        <div class="d-flex align-items-center gap-2 p-2">
                            <i class="bx bxs-file-pdf fs-2"></i>
                            <div>
                                <p class="m-0 fw-bold">Certificate</p>
                                <small>27 Jul 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="senarai-list" class="d-none">
        <table class="table bg-white table-bordered">
            <thead class="table-primary">
                <tr>
                    <th class="text-center align-middle">#</th>
                    <th>Tajuk</th>
                    <th>Tarikh</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center align-middle">1</td>
                    <td><i class="bx bxs-file-pdf"></i> Filename</td>
                    <td>21 Jul 2024</td>
                </tr>
                <tr>
                    <td class="text-center align-middle">2</td>
                    <td><i class="bx bxs-file-pdf"></i> Filename</td>
                    <td>21 Jul 2024</td>
                </tr>
                <tr>
                    <td class="text-center align-middle">3</td>
                    <td><i class="bx bxs-file-pdf"></i> Filename</td>
                    <td>21 Jul 2024</td>
                </tr>
                <tr>
                    <td class="text-center align-middle">4</td>
                    <td><i class="bx bxs-file-pdf"></i> Filename</td>
                    <td>21 Jul 2024</td>
                </tr>
                <tr>
                    <td class="text-center align-middle">5</td>
                    <td><i class="bx bxs-file-pdf"></i> Filename</td>
                    <td>21 Jul 2024</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editLabel">Tambah Surat Pekeliling Ikhtisas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="surat-pekeliling-ikhtisas" class="form-label">Surat Pekeliling Ikhtisas</label>
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
                <h1 class="modal-title fs-5" id="editLabel">Edit Surat Pekeliling Ikhtisas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="surat-pekeliling-ikhtisas" class="form-label">Surat Pekeliling Ikhtisas</label>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('build/js/style.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mps\resources\views/surat-siaran.blade.php ENDPATH**/ ?>