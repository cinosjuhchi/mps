


<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Dasar Sekolah'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Dasar Perkhidmatan
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Dasar Sekolah
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    

    <?php if(Auth::user()->jawatan_app == 0): ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card border border-2">
                    <div class="card-header bg-light d-flex">
                        <h4 class="card-title mt-2">Create Dasar Sekolah</h4>
                        <div class="d-flex ms-auto">
                            <button class="btn btn-warning me-2">
                                <i class='bx bxs-edit'></i>
                                <span class="d-none d-md-inline">Edit</span>
                            </button>
                            <button class="btn btn-danger">
                                <i class='bx bxs-trash'></i>
                                <span class="d-none d-md-inline">Delete</span>
                            </button>
                        </div>

                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mt-3 mb-3">
                                <input id="dasar-sekolah" type="hidden" name="dasar-sekolah"
                                    value="">
                                <trix-editor input="dasar-sekolah" placeholder="Tulis Dasar Sekolah">
                                </trix-editor>
                            </div>

                            <button type="button" class="btn btn-primary w-100">Kemaskini</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    <?php endif; ?>

    <?php if(Auth::user()->jawatan_app != 0): ?>
        <div class="div" id="dasar-sekolah" role="div">
            <?php if(Auth::user()->jawatan_app != 6): ?>
                <button class="btn btn-warning me-2">
                    <i class='bx bxs-edit'></i>
                    <span class="d-none d-md-inline">Edit</span>
                </button>
            <?php endif; ?>
            <div class="text-center mb-3">
                <span class="fs-3 fw-bold">DASAR SEKOLAH</span>
            </div>
            <hr class="maklumat-hr my-3">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, distinctio minima! Culpa mollitia voluptas ut
                vitae unde, veniam tempora illo, minima distinctio quia nostrum excepturi animi odit aut, ex fugit
                necessitatibus quisquam deleniti ullam sint nulla magni rem! Sed nesciunt quidem totam commodi consequuntur
                delectus animi maxime fugit atque exercitationem id molestias, vitae nulla, inventore necessitatibus, enim
                doloribus sapiente suscipit cupiditate autem! Maiores ea libero corrupti excepturi fugiat, in molestias
                quisquam culpa vero aliquid numquam quo, facere at, fugit alias. Quas voluptas impedit libero in possimus
                eius voluptatem itaque perspiciatis repudiandae, porro sit odit ipsam accusamus rerum sequi deleniti maxime!
            </p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, expedita :</p>
            <ul class="list-group list-group-numbered">
                <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur.</li>
                <li class="list-group-item border-0">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum!</li>
                <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas,
                    sapiente?
                </li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, distinctio minima! Culpa mollitia voluptas ut
                vitae unde, veniam tempora illo, minima distinctio quia nostrum excepturi animi odit aut, ex fugit
                necessitatibus quisquam deleniti ullam sint nulla magni rem! Sed nesciunt quidem totam commodi consequuntur
                delectus animi maxime fugit atque exercitationem id molestias, vitae nulla, inventore necessitatibus, enim
                doloribus sapiente suscipit cupiditate autem! Maiores ea libero corrupti excepturi fugiat, in molestias
                quisquam culpa vero aliquid numquam quo, facere at, fugit alias. Quas voluptas impedit libero in possimus
                eius voluptatem itaque perspiciatis repudiandae, porro sit odit ipsam accusamus rerum sequi deleniti maxime!
            </p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, expedita :</p>
            <ul class="list-group list-group-numbered">
                <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur.</li>
                <li class="list-group-item border-0">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, distinctio minima! Culpa mollitia voluptas ut
                vitae unde, veniam tempora illo, minima distinctio quia nostrum excepturi animi odit aut, ex fugit
                necessitatibus quisquam deleniti ullam sint nulla magni rem! Sed nesciunt quidem totam commodi consequuntur
                delectus animi maxime fugit atque exercitationem id molestias, vitae nulla, inventore necessitatibus, enim
                doloribus sapiente suscipit cupiditate autem! Maiores ea libero corrupti excepturi fugiat, in molestias
                quisquam culpa vero aliquid numquam quo, facere at, fugit alias. Quas voluptas impedit libero in possimus
                eius voluptatem itaque perspiciatis repudiandae, porro sit odit ipsam accusamus rerum sequi deleniti maxime!
            </p>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BELAJAR-PROYEK\GRAVIX\mps_cino\mps\resources\views/dasar-sekolah.blade.php ENDPATH**/ ?>