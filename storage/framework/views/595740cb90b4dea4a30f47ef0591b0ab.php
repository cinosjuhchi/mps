<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Profil Sekolah'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Profil Sekolah
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>    
    <div class="row">        
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">                    
                    <form>
                        <div class="mb-3">
                            <h4 class="text-dark fw-normal fs-6">Nama Sekolah</h4>
                            <p class="text-dark fs-5 fw-bold">Sekolah Menengah Kebangsaan Pinggiran Cyberjaya</p>
                        </div>                        
                        <div class="mb-3">
                            <h4 class="text-dark fw-normal fs-6">Kod Sekolah</h4>
                            <p class="text-dark fs-5 fw-bold">ZY343</p>
                        </div>                        
                        <div class="mb-3">
                            <h4 class="text-dark fw-normal fs-6">Kategori Sekolah</h4>
                            <p class="text-dark fs-5 fw-bold">Sekolah Menengah(SM)</p>
                        </div>                        
                        <div class="mb-3">
                            <h4 class="text-dark fw-normal fs-6">Jenis Sekolah</h4>
                            <p class="text-dark fs-5 fw-bold">Sekolah Kebangsaan()SK)</p>
                        </div>                        
                        <div class="mb-3">
                            <h4 class="text-dark fw-normal fs-6">PPD</h4>
                            <p class="text-dark fs-5 fw-bold">PPD Kota Baharu</p>
                        </div>                        
                        <div class="mb-3">
                            <h4 class="text-dark fw-normal fs-6">Negeri</h4>
                            <p class="text-dark fs-5 fw-bold">Kelantan</p>
                        </div>                        
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>                            
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Informasi Sekolah</h4>
    
                    <form>
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Grade</label>
                            <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Grad Input">
                        </div>
                        <div class="mb-3">
                            <label for="formrow-inputSession" class="form-label">Sesi Persekolahan</label>
                            <select id="formrow-inputSession" class="form-select">
                                <option selected>Pilih Sesi</option>
                                <option>Sesi 1</option>
                                <option>Sesi 2</option>
                            </select>
                        </div>                        
                        <div class="mb-3">
                            <label for="formrow-address-input" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="formrow-address-input" placeholder="Input Alamat">
                        </div>
                        <div class="mb-3">
                            <label for="formrow-kodpos-input" class="form-label">Kod Pos</label>
                            <input type="number" class="form-control" id="formrow-kodpos-input" placeholder="Input Kod Pos">
                        </div>
                        <div class="mb-3">
                            <label for="formrow-bandar-input" class="form-label">Bandar</label>
                            <input type="text" class="form-control" id="formrow-bandar-input" placeholder="Input Kod Pos">
                        </div>                                                                                                    
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>                            
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Hubungi Sekolah</h4>
    
                    <form>
                        <div class="mb-3">
                            <label for="formrow-telefon-input" class="form-label">No. Telefon</label>
                            <input type="text" class="form-control" id="formrow-telefon-input" placeholder="Input No. Telefon">
                        </div>
                        <div class="mb-3">
                            <label for="formrow-faksimili-input" class="form-label">No. Faksimili</label>
                            <input type="text" class="form-control" id="formrow-faksimili-input" placeholder="Input faksimili">
                        </div>
                        <div class="mb-3">
                            <label for="formrow-email-input" class="form-label">E-mel</label>
                            <input type="text" class="form-control" id="formrow-email-input" placeholder="Input E-mel">
                        </div>
                        <div class="mb-3">
                            <label for="formrow-email-input" class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="formrow-email-input" placeholder="Input Instagram">
                        </div>
                        <div class="mb-3">
                            <label for="formrow-email-input" class="form-label">Twitter/X</label>
                            <input type="text" class="form-control" id="formrow-email-input" placeholder="Input Twitter">
                        </div>
                        <div class="mb-3">
                            <label for="formrow-email-input" class="form-label">Youtube</label>
                            <input type="text" class="form-control" id="formrow-email-input" placeholder="Input Youtube">
                        </div>                                                                        
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>                        
        <div class="row justify-content-end">
            <button class="btn btn-primary text-white text-bolder col-2" type="submit">Simpan Perubahan</button>
        </div>    
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MPS\mps-online\resources\views/profil-sekolah.blade.php ENDPATH**/ ?>