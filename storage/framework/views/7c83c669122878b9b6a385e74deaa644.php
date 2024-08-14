<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Program | Komponen Kurikulum'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-capitalize">Program dan Aktiviti Tahunan - Kurikulum</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">Pengurusan Komponen</li>
                        <li class="breadcrumb-item">Kurikulum</li>
                        <li class="breadcrumb-item active">Program</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal"
                data-bs-target="#tambahProgram">
                <i class='bx bx-plus-circle'></i> Tambah Program
            </button>
            <table class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Program</th>
                        <th>Tarikh Mulai</th>
                        <th>Tarikh Selesai</th>
                        <th>Tindakan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mensyuarat Perancangan Tahunu 2023 Bil.1/2022</td>
                        <td>12/10/2022</td>
                        <td>12/11/2022</td>
                        <td>GPK Kurikulum</td>
                        <td>
                            <span class="text-white bg-success bg-opacity-75 py-1 px-2 rounded">Selesai</span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mensyuarat Perancangan Tahunu 2023 Bil.1/2022</td>
                        <td>12/10/2022</td>
                        <td>12/11/2022</td>
                        <td>GPK Kurikulum</td>
                        <td>
                            <span class="text-white bg-danger bg-opacity-75 py-1 px-2 rounded">Gagal</span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mensyuarat Perancangan Tahunu 2023 Bil.1/2022</td>
                        <td>12/10/2022</td>
                        <td>12/11/2022</td>
                        <td>GPK Kurikulum</td>
                        <td>
                            <span class="text-white bg-warning bg-opacity-75 py-1 px-2 rounded">Belum Selesai</span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah Program -->
    <div class="modal fade" id="tambahProgram" tabindex="-1" aria-labelledby="tambahProgramLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahProgramLabel">Tambah Program</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="program" class="form-label">Nama Program</label>
                            <input type="text" class="form-control" id="program" name="namaProgram"
                                placeholder="Masukkan nama program">
                        </div>
                        <div class="mb-3">
                            <label for="tarikhMulai" class="form-label">Tarikh Mulai</label>
                            <input type="date" class="form-control" id="tarikhMulai" name="tarikhMulai">
                        </div>
                        <div class="mb-3">
                            <label for="tarikhSelesai" class="form-label">Tarikh Selesai</label>
                            <input type="date" class="form-control" id="tarikhSelesai" name="tarikhSelesai">
                        </div>
                        <div class="mb-3">
                            <label for="tindakan" class="form-label">Tindakan</label>
                            <input type="text" class="form-control" id="tindakan" name="tindakan"
                                placeholder="Masukkan tindakan">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="" id="" class="form-select">
                                <option value="">Gagal</option>
                                <option value="">Belum Selesai</option>
                                <option value="">Selesai</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Tambah Program</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Modal Tambah Program -->

    <!-- Modal Edit Program -->
    <div class="modal fade" id="editProgram" tabindex="-1" aria-labelledby="editProgramLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editProgramLabel">Edit Program</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="program" class="form-label">Nama Program</label>
                            <input type="text" class="form-control" id="program" name="namaProgram"
                                placeholder="Masukkan nama program">
                        </div>
                        <div class="mb-3">
                            <label for="tarikhMulai" class="form-label">Tarikh Mulai</label>
                            <input type="date" class="form-control" id="tarikhMulai" name="tarikhMulai">
                        </div>
                        <div class="mb-3">
                            <label for="tarikhSelesai" class="form-label">Tarikh Selesai</label>
                            <input type="date" class="form-control" id="tarikhSelesai" name="tarikhSelesai">
                        </div>
                        <div class="mb-3">
                            <label for="tindakan" class="form-label">Tindakan</label>
                            <input type="text" class="form-control" id="tindakan" name="tindakan"
                                placeholder="Masukkan tindakan">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="" id="" class="form-select">
                                <option value="">Gagal</option>
                                <option value="">Belum Selesai</option>
                                <option value="">Selesai</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Modal Edit Program -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\Putra\Projek\Website\mps\resources\views/program-kurikulum.blade.php ENDPATH**/ ?>