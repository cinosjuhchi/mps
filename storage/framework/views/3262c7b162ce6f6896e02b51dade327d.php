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

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="btn-group">
            <button class="btn btn-secondary" id="btn-grid" onclick="switchToGrid()"><i class="bx bx-grid"></i></button>
            <button class="btn btn-outline-secondary" id="btn-list" onclick="switchToList()"><i class="bx bx-list-ul"></i></button>
        </div>
        <?php if(Auth::user()->jawatan_app != 6 and Auth::user()->jawatan_app != 1): ?>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahGuru"><i class='bx bx-plus'></i>Tambah Guru </button>
        <?php endif; ?>
    </div>
    <div class="container" id="senarai-container">
        <div id="senarai-grid">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/guru-besar.png')); ?>" alt="Foto Diri" class="card-img-top">
                            </div>
                            <h5 class="font-size-16 m-0"><a href="#" class="text-body">Rahimi bin Saufi</a></h5>
                            <p class="text-muted m-0 fw-bold">Guru Besar</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
            </div>

            <hr class="border border-secondary w-100 mb-4">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/GPK-Pentadbiran.png')); ?>" alt="Foto Diri" class="card-img-top">
                            </div>
                            <h5 class="font-size-16 m-0"><a href="#" class="text-body">Marina binti Idris</a></h5>
                            <p class="text-muted m-0 fw-bold font-size-14">GPK Pentadbiran</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>" alt="Foto Diri"
                                    class="card-img-top">
                            </div>
                            <h5 class="font-size-16 m-0"><a href="#" class="text-body">Norazidi bin Che Amat</a></h5>
                            <p class="text-muted m-0 fw-bold font-size-14">GPK Hal Ehwal Murid</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>" alt="Foto Diri" class="card-img-top">
                            </div>
                            <h5 class="font-size-16 mb-0"><a href="#" class="text-body">Lee Hock Chan</a></h5>
                            <p class="text-muted m-0 fw-bold font-size-14">GPK KoKurikulum</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>" alt="Foto Diri"
                                    class="card-img-top">
                            </div>
                            <h5 class="font-size-16 mb-0"><a href="#" class="text-body">Abdullah bin Zawawi</a></h5>
                            <p class="text-muted m-0 fw-bold font-size-14">GPK Pendidikan Khas</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
            </div>
            <hr class="border border-secondary w-100 mb-4">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>" alt="Foto Diri" class="card-img-top">
                            </div>
                            <h5 class="font-size-16 mb-0"><a href="#" class="text-body">Syarifah Zahrah binti Syed Akbar</a>
                            </h5>
                            <p class="text-muted m-0 fw-bold font-size-14">Guru Bimbingan</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
            </div>

            <hr class="border border-secondary w-100 mb-4">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/Guru-Penyelaras-Bestari.png')); ?>" alt="Foto Diri"
                                    class="card-img-top">
                            </div>
                            <h5 class="font-size-16 mb-0"><a href="#" class="text-body">Maliki bin Ayub Khan</a></h5>
                            <p class="text-muted m-0 fw-bold font-size-14">Guru Penyelaras Bestari</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/Guru-Perpustakaan-dan-Media.png')); ?>" alt="Foto Diri"
                                    class="card-img-top">
                            </div>
                            <h5 class="font-size-16 mb-0"><a href="#" class="text-body">Suzana binti Muhammad</a></h5>
                            <p class="text-muted m-0 fw-bold font-size-14">Guru Perpustakaan dan Media</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/Guru-Data.png')); ?>" alt="Foto Diri" class="card-img-top">
                            </div>
                            <h5 class="font-size-16 mb-0"><a href="#" class="text-body">Razuki bin Rauf</a></h5>
                            <p class="text-muted m-0 fw-bold font-size-14">Guru Data</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
                </div>

            <hr class="border border-secondary w-100 mb-4">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/Guru-Prasekolah.png')); ?>" alt="Foto Diri"
                                    class="card-img-top">
                            </div>
                            <h5 class="font-size-16 mb-0"><a href="#" class="text-body">Mazniyanti binti Zainudin</a></h5>
                            <p class="text-muted m-0 fw-bold font-size-14">Guru Prasekolah</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/Guru-Akademik-KSSR-1.png')); ?>" alt="Foto Diri"
                                    class="card-img-top">
                            </div>
                            <h5 class="font-size-16 mb-0"><a href="#" class="text-body">Farizul bin Nor Yaacob</a></h5>
                            <p class="text-muted m-0 fw-bold font-size-14">Guru Akademik KSSR</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border text-center p-0 mx-auto" style="width: 16rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="<?php echo e(asset('images/foto_guru/Guru-Akademik-KSSR-2.png')); ?>" alt="Foto Diri"
                                    class="card-img-top">
                            </div>
                            <h5 class="font-size-16 mb-0"><a href="#" class="text-body">Fauziah binti Ismail</a></h5>
                            <p class="text-muted m-0 fw-bold font-size-14">Guru Akademik KSSR</p>
                            <p class="text-muted m-0">rahimi.saufi.@moe.gov.my</p>
                            <p class="text-muted">019-7421 220</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile"><i class="uil uil-user me-1"></i> Lihat Tugas</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="senarai-list" class="d-none">
            <table class="table bg-white table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th class="text-center align-middle">#</th>
                        <th>Nama</th>
                        <th>Jawatan</th>
                        <th>Telepon</th>
                        <th>Emel</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center align-middle">1</td>
                        <td>Rahimi bin Saufi</td>
                        <td>Guru Besar</td>
                        <td>019-7421 220</td>
                        <td>rahimi.saufi.@moe.gov.my</td>
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
                        <td class="text-center align-middle">2</td>
                        <td>Zulaika binti Ahmad</td>
                        <td>GPK Pentadbiran</td>
                        <td>012-3456 789</td>
                        <td>zulaika.ahmad@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">3</td>
                        <td>Ahmad bin Salleh</td>
                        <td>GPK Hal Ehwal Murid</td>
                        <td>017-6543 210</td>
                        <td>ahmad.salleh@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">4</td>
                        <td>Siti binti Ismail</td>
                        <td>GPK KoKurikulum</td>
                        <td>019-8765 432</td>
                        <td>siti.ismail@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">5</td>
                        <td>Faizal bin Osman</td>
                        <td>GPK Pendidikan Khas</td>
                        <td>016-2345 678</td>
                        <td>faizal.osman@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">6</td>
                        <td>Aminah binti Latif</td>
                        <td>Guru Bimbingan</td>
                        <td>013-4321 987</td>
                        <td>aminah.latif@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">7</td>
                        <td>Muhammad bin Zainal</td>
                        <td>Guru Penyelaras Bestari</td>
                        <td>014-5678 321</td>
                        <td>muhammad.zainal@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">8</td>
                        <td>Farid bin Hassan</td>
                        <td>Guru Penyelaras Bestari</td>
                        <td>018-7654 321</td>
                        <td>farid.hassan@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">9</td>
                        <td>Noraini binti Abdullah</td>
                        <td>Guru Perpustakaan dan Media</td>
                        <td>019-9876 543</td>
                        <td>noraini.abdullah@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">10</td>
                        <td>Hafiz bin Mahmud</td>
                        <td>Guru Data</td>
                        <td>012-8765 432</td>
                        <td>hafiz.mahmud@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">11</td>
                        <td>Azizah binti Karim</td>
                        <td>Guru Prasekolah</td>
                        <td>017-4321 876</td>
                        <td>azizah.karim@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">12</td>
                        <td>Shahrul bin Mansor</td>
                        <td>Guru Akademik KSSR</td>
                        <td>019-2345 678</td>
                        <td>shahrul.mansor@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
                                <i class="bx bxs-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bx bx-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">13</td>
                        <td>Nadia binti Yusuf</td>
                        <td>Guru Akademik KSSR</td>
                        <td>016-9876 543</td>
                        <td>nadia.yusuf@moe.gov.my</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgram">
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


    <!-- Modal Profile -->
    <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="profileLabel">Rincian Tugas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis alias temporibus, iusto obcaecati neque quia vitae nostrum, repellendus in corrupti quidem explicabo perspiciatis magnam excepturi doloremque. Id incidunt recusandae optio eaque cupiditate assumenda ex quae quo officiis rem adipisci minus deserunt fugit culpa et beatae tenetur voluptate quisquam libero odit impedit totam, exercitationem quidem. Commodi totam ex a tempora quo debitis vitae beatae. Ut totam eveniet fuga voluptatem. Natus culpa dolore provident deserunt esse impedit animi ab odit! Doloremque culpa eius maiores, sequi tempore ratione facilis natus enim ab. Aliquam ipsa eum ipsum totam aut animi unde asperiores quaerat tenetur.</p>
                    <button class="btn-light btn w-100 mb-2 mt-3">019-7421 220</button>
                    <button class="btn-light btn w-100">rahimi.saufi.@moe.gov.my</button>
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
                    <h1 class="modal-title fs-5" id="tambahGuruLabel">Tambah Guru</h1>
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
                                placeholder="Masukkan nama guru">
                        </div>
                        <div class="mb-3">
                            <label for="peranan" class="form-label">Peranan</label>
                            <input type="text" name="peranan" id="peranan" class="form-control"
                                placeholder="Masukkan peranan guru">
                        </div>
                        <div class="mb-3">
                            <label for="telefon" class="form-label">Telefon</label>
                            <input type="telp" name="telefon" id="telefon" class="form-control"
                                placeholder="Masukkan telefon guru">
                        </div>
                        <div class="mb-3">
                            <label for="emel" class="form-label">Emel</label>
                            <input type="email" name="emel" id="emel" class="form-control"
                                placeholder="Masukkan emel guru">
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
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('build/js/style.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mps_old\resources\views/senarai-pekerja-kebersihan.blade.php ENDPATH**/ ?>