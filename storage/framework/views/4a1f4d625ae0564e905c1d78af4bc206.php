<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Kalendar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/@fullcalendar/core/main.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/@fullcalendar/daygrid/main.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/@fullcalendar/bootstrap/main.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/@fullcalendar/timegrid/main.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Kalendar</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Takwim</a></li>
                    <li class="breadcrumb-item active">Kalendar</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">

        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <?php if(Auth::user()-> jawatan_app != 0 AND Auth::user()-> jawatan_app != 1 ): ?>
                        <div class="d-grid">
                            <button class="btn font-16 btn-primary" id="btn-new-event"><i
                                class="mdi mdi-plus-circle-outline"></i> Tambah acara</button>
                        </div>
                        <?php endif; ?>


                        <div id="external-events" class="mt-2">
                            <div class="row mb-5">
                                <?php if(Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0): ?>
                                <p class=" ms-2">Seret dan lepas acara atau klik pada petak kalendar</p>
                                <?php endif; ?>
                                <?php if(Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0): ?>
                                <div class="external-event fc-event bg-success w-100" data-class="bg-success">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Umum
                                </div>
                                <?php endif; ?>
                                <?php if(Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0): ?>
                                <div class="external-event fc-event bg-info w-100" data-class="bg-info">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Pengurusan dan Pentadbiran
                                </div>
                                <?php endif; ?>
                                <?php if(Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0): ?>
                                <div class="external-event fc-event bg-warning w-100" data-class="bg-warning">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Kurikulum
                                </div>
                                <?php endif; ?>
                                <?php if(Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0): ?>
                                <div class="external-event fc-event bg-danger w-100" data-class="bg-danger">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Hal Ehwal Murid
                                </div>
                                <?php endif; ?>
                                <?php if(Auth::user()-> jawatan_app != 6 AND Auth::user()-> jawatan_app != 0): ?>
                                <div class="external-event fc-event bg-purple w-100" data-class="bg-purple">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Kokurikulum
                                </div>
                                <?php endif; ?>

                                <div class="external-event fc-event bg-green w-100" data-class="bg-green">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Kalendarku
                                </div>
                            </div>
                            <?php if(Auth::user()->jawatan_app != 6 ): ?>
                            <div class="row">
                                <p class="ms-2">Hari cuti</p>
                                <div class="external-event fc-event bg-grey w-100 text-dark fw-bold" data-class="bg-grey">
                                    <i class=" font-size-11 me-2"></i>Hari Kelepasan Am Persekutuan
                                </div>
                                <div class="external-event fc-event bg-violet w-100 text-dark fw-bold " data-class="bg-violet">
                                    <i class=" font-size-11 me-2"></i>Hari Kelepasan Am Negeri
                                </div>
                                <div class="external-event fc-event bg-cream w-100 text-dark fw-bold" data-class="bg-cream">
                                    <i class=" font-size-11 me-2"></i>Cuti Peristiwa
                                </div>
                                <div class="external-event fc-event bg-cutipenggal w-100 text-dark fw-bold" data-class="bg-cutipenggal">
                                    <i class=" font-size-11 me-2"></i>Cuti Penggal
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div> <!-- end col -->

        </div>

        <div style='clear:both'></div>


        <!-- Add New Event MODAL -->
        <div class="modal fade" id="event-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header py-3 px-4 border-bottom-0">
                        <h5 class="modal-title" id="modal-title">Event</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>

                    </div>
                    <div class="modal-body p-4">
                        <form class="needs-validation" name="event-form" id="form-event" novalidate>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Event Name</label>
                                        <input class="form-control" placeholder="Insert Event Name" type="text"
                                            name="title" id="event-title" required value="" />
                                        <div class="invalid-feedback">Please provide a valid event name</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Jam Mulai</label>
                                        <input class="form-control" type="time" name="" id="event-time">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Jam Selesai</label>
                                        <input class="form-control" type="time" name="" id="event-time">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Mulai</label>
                                        <input class="form-control" type="date" name="" id="event-time">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Selesai</label>
                                        <input class="form-control" type="date" name="" id="event-time">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select class="form-control form-select" name="category" id="event-category">
                                            <option selected> --Select-- </option>
                                            <?php if(Auth::user()->jawatan_app != 0 AND Auth::user()->jawatan_app !=6 ): ?>
                                            <option value="bg-success">Umum</option>
                                            <option value="bg-primary">Pengurusan dan Pentadbiran</option>
                                            <option value="bg-warning">Kurikulum</option>
                                            <option value="bg-danger">Hal Ehwal Murid</option>
                                            <option value="bg-purple">Kokurikulum</option>
                                            <?php endif; ?>
                                            <option value="bg-green">Kalendarku</option>
                                            <?php if(Auth::user()->jawatan_app != 6 ): ?>
                                            <option value="bg-grey">Hari Kelepasan Am Persekutuan</option>
                                            <option value="bg-violet">Hari Kelepasan Am Negeri</option>
                                            <option value="bg-cream">Cuti Peristiwa</option>
                                            <option value="bg-cutipenggal">Cuti Penggal</option>
                                            <?php endif; ?>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid event category</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-light me-1"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- end modal-content-->
            </div> <!-- end modal dialog-->
        </div>
        <!-- end modal-->

    </div>
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- plugin js -->
    <script src="<?php echo e(URL::asset('build/libs/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/jquery-ui-dist/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/@fullcalendar/core/main.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/@fullcalendar/bootstrap/main.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/@fullcalendar/daygrid/main.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/@fullcalendar/timegrid/main.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/@fullcalendar/interaction/main.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('build/js/pages/calendars-full.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/kalendar.blade.php ENDPATH**/ ?>