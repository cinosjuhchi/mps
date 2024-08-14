<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Jobs'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Dashboards
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Tetapan
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            
            <div class="card">
                <div class="card-body">
                    <div class="step-title">
                        <i class='bx bxs-check-circle'></i>
                        <h4 class="mb-3">A. Persediaan Asas</h4>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#" class="card stepper">
                                <div class="card-body step-body">
                                    <div class="step-number">1</div>
                                    <div class="step-description">
                                        <h5>Persediaan sekolah</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-check'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="card stepper">
                                <div class="card-body step-body">
                                    <div class="step-number">2</div>
                                    <div class="step-description">
                                        <h5>Memasukkan data guru</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-check'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="card">
                <div class="card-body">
                    <div class="step-title">
                        <i class='bx bxs-check-circle' style="color: lightgray"></i>
                        <h4 class="mb-3">B. persediaan profil</h4>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#" class="card stepper" style="color: gray">
                                <div class="card-body step-body">
                                    <div class="step-number" style="background-color: lightgray">4</div>
                                    <div class="step-description">
                                        <h5>Sediakan profil saya</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-chevron-right'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="card stepper" style="color: gray">
                                <div class="card-body step-body">
                                    <div class="step-number" style="background-color: lightgray">5</div>
                                    <div class="step-description">
                                        <h5>Input maklumat perkhidmatan</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-chevron-right'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="card stepper" style="color: gray">
                                <div class="card-body step-body">
                                    <div class="step-number" style="background-color: lightgray">6</div>
                                    <div class="step-description">
                                        <h5>Maklumat keahlian</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-chevron-right'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="card stepper" style="color: gray">
                                <div class="card-body step-body">
                                    <div class="step-number" style="background-color: lightgray">6</div>
                                    <div class="step-description">
                                        <h5>Surat aku janji</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-chevron-right'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end row-->


    <!--end row-->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BELAJAR-PROYEK\GRAVIX\mps_cino\mps\resources\views/tetapan.blade.php ENDPATH**/ ?>