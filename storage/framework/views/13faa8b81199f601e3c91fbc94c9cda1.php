<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Minda Guru Besar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Minda Guru Besar</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Minda Guru Besar</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card border">
                <div class="card-body">
                    <div class="">
                        <div class="text-center mb-3">
                            <h4>Guru Insani Pemangkin Generasi Madani</h4>
                        </div>
                        <div class="mb-4">
                            <img src="<?php echo e(asset('images/1641266225.jpg')); ?>" alt=""
                                class="img-thumbnail mx-auto d-block">
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="ps-2">
                                <h6 class="mb-2">Date</h6>
                                <p class="text-muted font-size-15">20 June, 2022</p>
                            </div>
                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editMinda">
                                        <i class='bx bxs-edit'></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editMinda" tabindex="-1" aria-labelledby="editMindaLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="editMindaLabel">Edit Minda</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="button" class="btn btn-warning">Simpan Perubahan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mt-4">
                            <div class="font-size-14">
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                    velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam enim
                                    ad minima veniam quis</p>

                                <p class="mb-4">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                    suscipit laboriosam, nisi ut aliquid ex ea reprehenderit qui in ea voluptate velit esse
                                    quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                                    pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                                    sint occaecati cupiditate non provident, similique sunt</p>

                                <blockquote class="p-4 border-light border rounded mb-4">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <i class="bx bxs-quote-alt-left text-body font-size-24"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0"> At vero eos et accusamus et iusto odio dignissimos ducimus
                                                qui blanditiis praesentium deleniti atque corrupti quos dolores et quas
                                                molestias excepturi sint quidem rerum facilis est</p>
                                        </div>
                                    </div>

                                </blockquote>

                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus
                                    maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut
                                    perspiciatis unde omnis iste natus error sit</p>


                                <div class="mt-4">
                                    <h5 class="mb-3">Title: </h5>

                                    <div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6">
                                                <div>
                                                    <ul class="ps-4">
                                                        <li class="py-1">Donec sodales sagittis</li>
                                                        <li class="py-1">Sed consequat leo eget</li>
                                                        <li class="py-1">Aliquam lorem ante</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div>
                                                    <ul class="ps-4">
                                                        <li class="py-1">Aenean ligula eget</li>
                                                        <li class="py-1">Cum sociis natoque</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="row">
                <div class="card border">
                    <div class="card-body">
                        <div class="search-box">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-3">Search</h5>
                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                        <a href="#" class="btn btn-light"><i class="bx bx-plus me-1"></i> Tambah
                                            Minda</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="position-relative px-2">
                                <input type="text" class="form-control rounded bg-light border-light"
                                    placeholder="Search...">
                                <i class="mdi mdi-magnify search-icon"></i>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h5 class="mb-3">HANTARAN TERDAHULU</h5>
                            <div class="list-group list-group-flush">
                                <a href="javascript: void(0);" class="list-group-item text-muted pb-3 pt-0 px-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="<?php echo e(asset('images/img1.jpg')); ?>" alt=""
                                                class="avatar-lg h-auto d-block rounded">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-13 text-truncate">Selangkah, Sederap kita bersama</h5>
                                            <p class="mb-0 text-truncate">5 Januari 2023 <span class="">/ 05:00
                                                    AM</span></p>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="<?php echo e(asset('images/img1.jpg')); ?>" alt=""
                                                class="avatar-lg h-auto d-block rounded">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-13 text-truncate">Persediaan Tahun Baharu 2023</h5>
                                            <p class="mb-0 text-truncate">12 Desember 2022 <span class="">/ 05:05
                                                    AM</span></p>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="<?php echo e(asset('images/img1.jpg')); ?>" alt=""
                                                class="avatar-lg h-auto d-block rounded">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-13 text-truncate">Tahniah, Para Guruku</h5>
                                            <p class="mb-0 text-truncate">10 Oktober 2022 <span class="">/ 05:10
                                                    PM</span></p>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="<?php echo e(asset('images/img1.jpg')); ?>" alt=""
                                                class="avatar-lg h-auto d-block rounded">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-13 text-truncate">Kejayaan kita karena usaha bersama</h5>
                                            <p class="mb-0 text-truncate">12 Ogos 2022 <span class="">/ 05:30
                                                    PM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>

    </div> <!-- container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mps-main\resources\views/minda-guru-besar.blade.php ENDPATH**/ ?>