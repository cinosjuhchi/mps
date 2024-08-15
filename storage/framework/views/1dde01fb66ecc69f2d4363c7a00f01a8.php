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
    <?php if(Auth::user()->jawatan_app != 6): ?>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
        <i class='bx bxs-edit'></i> Kemaskini
    </button>
    <?php endif; ?>

    <!-- Modal Edit -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Edit - Visi dan Misi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="visi" class="form-label">Visi</label>
                            <input type="text" class="form-control" id="visi">
                        </div>
                        <div class="mb-3">
                            <label for="Misi" class="form-label">Misi</label>
                            <input type="text" class="form-control" id="Misi">
                        </div>
                        <div class="mb-3">
                            <label for="Moto" class="form-label">Moto</label>
                            <input type="text" class="form-control" id="Moto">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-warning">Kemaskini</button>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div class="mb-5">
            <div class="d-flex align-items-center justify-content-center">
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
                <h5>Visi</h5>
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
            </div>
            <p>Pendidikan berkualiti Insan Terdidik Negara Sejahtera</p>
        </div>

        <div class="mb-5">
            <div class="d-flex align-items-center justify-content-center">
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
                <h5>Misi</h5>
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
            </div>
            <p>Melestarikan Sistem Pendidikan Yang Berkualiti Untuk Membangun Potensi Individu Bagi Memenuhi Aspirasi
                Negara</p>
        </div>
        <div class="mb-5">
            <div class="d-flex align-items-center justify-content-center">
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
                <h5>Moto</h5>
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
            </div>
            <p>Super admin menulis moto sekolah disini</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Form Grid Layout</h4>
    
                    <form>
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Your First Name">
                        </div>
    
                        <div class="row">
    
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="formrow-email-input" placeholder="Enter Your Email ID">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="formrow-password-input" placeholder="Enter Your Password">
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="formrow-inputCity" placeholder="Enter Your Living City">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">State</label>
                                    <select id="formrow-inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="formrow-inputZip" placeholder="Enter Your Zip Code">
                                </div>
                            </div>
                        </div>
    
                        <div class="mb-3">
    
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Horizontal Form Layout</h4>
    
                    <form>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">First name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter Your ">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="horizontal-email-input" placeholder="Enter Your Email ID">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="horizontal-password-input" placeholder="Enter Your Password">
                            </div>
                        </div>
    
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
    
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="horizontalLayout-Check">
                                    <label class="form-check-label" for="horizontalLayout-Check">
                                        Remember me
                                    </label>
                                </div>
    
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MPS\mps-online\resources\views/visi-misi-moto.blade.php ENDPATH**/ ?>