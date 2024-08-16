<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Senarai Pekerja Kebersihan'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Guru dan Kakitangan
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Senarai Pekerja Kebersihan
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php if(Auth::user()->jawatan_app != 6 and Auth::user()->jawatan_app != 1): ?>
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#tambahGuru"><i
                class='bx bx-plus'></i>
            Tambah Pekerja</button>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    <div class="mx-auto mb-4">
                        <img src="<?php echo e(asset('images/foto_guru/dummy.jpg')); ?>" alt="Foto Diri" style="width: 100%; height: 274px; object-fit: cover;">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Rahimah binti Kamrim</a></h5>
                    <p class="text-muted mb-4 font-size-14">Pekerja Kebersihan</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    <div class="mx-auto mb-4">
                        <img src="<?php echo e(asset('images/foto_guru/dummy.jpg')); ?>" alt="Foto Diri" style="width: 100%; height: 274px; object-fit: cover;">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Maniharah binti Aus</a></h5>
                    <p class="text-muted mb-4 font-size-14">Pekerja Kebersihan</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    <div class="mx-auto mb-4">
                        <img src="<?php echo e(asset('images/foto_guru/dummy.jpg')); ?>" alt="Foto Diri" style="width: 100%; height: 274px; object-fit: cover;">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Nazariah binti Abdul Aziz</a></h5>
                    <p class="text-muted mb-4 font-size-14">Pekerja Kebersihan</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
        </div>
        <div class="row">
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    <div class="mx-auto mb-4">
                        <img src="<?php echo e(asset('images/foto_guru/dummy.jpg')); ?>" alt="Foto Diri" style="width: 100%; height: 274px; object-fit: cover;">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Nik Farihan bin Nik Ramli</a></h5>
                    <p class="text-muted mb-4 font-size-14">Pekerja Kebersihan</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    <div class="mx-auto mb-4">
                        <img src="<?php echo e(asset('images/foto_guru/dummy.jpg')); ?>" alt="Foto Diri" style="width: 100%; height: 274px; object-fit: cover;">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Nablan bin Muhammad</a></h5>
                    <p class="text-muted mb-4 font-size-14">Pekerja Kebersihan</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
        </div>
    </div>


    <!-- Modal Profile -->
    <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="profileLabel">Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/dummy.jpg')); ?>" alt="Foto Diri"
                                    class="card-img-top">
                            </div>
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Nablan bin Muhammad</a>
                            </h5>
                            <p class="text-muted mb-2 font-size-14">Pekerja Kebersihan</p>
                        </div>
                        <button class="btn-primary btn w-100 mb-2 mt-3">019-7421 220</button>
                        <button class="btn-primary btn w-100">abc@mail.com</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Guru -->
    <div class="modal fade" id="tambahGuru" tabindex="-1" aria-labelledby="tambahGuruLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahGuruLabel">Tambah Pekerja Kebersihan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                placeholder="Masukkan nama pekerja kebersihan">
                        </div>
                        <div class="mb-3">
                            <label for="peranan" class="form-label">Peranan</label>
                            <input type="text" name="peranan" id="peranan" class="form-control"
                                placeholder="Masukkan peranan pekerja kebersihan">
                        </div>
                        <div class="mb-3">
                            <label for="telefon" class="form-label">Telefon</label>
                            <input type="telp" name="telefon" id="telefon" class="form-control"
                                placeholder="Masukkan telefon pekerja kebersihan">
                        </div>
                        <div class="mb-3">
                            <label for="emel" class="form-label">Emel</label>
                            <input type="email" name="emel" id="emel" class="form-control"
                                placeholder="Masukkan emel pekerja kebersihan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Unggah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mpsonline_current\resources\views/senarai-pekerja-kebersihan.blade.php ENDPATH**/ ?>