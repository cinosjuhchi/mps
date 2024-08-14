<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Program | Komponen Hal Ehwal Murid'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-capitalize">Program dan Aktiviti Tahunan - Hal Ehwal Murid</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">Pengurusan Komponen</li>
                        <li class="breadcrumb-item">Hal Ehwal Murid</li>
                        <li class="breadcrumb-item active">Program</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Program</th>
                        <th>Tarikh Mulai</th>
                        <th>Tarikh Selesai</th>
                        <th>Tindakan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mensyuarat Perancangan Tahunu 2023 Bil.1/2022</td>
                        <td>12/10/2022</td>
                        <td>12/11/2022</td>
                        <td>GPK Hal Ehwal Murid</td>
                        <td>
                            <span class="text-bg-success py-1 px-2 rounded">Selesai</span>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mensyuarat Perancangan Tahunu 2023 Bil.1/2022</td>
                        <td>12/10/2022</td>
                        <td>12/11/2022</td>
                        <td>GPK Hal Ehwal Murid</td>
                        <td>
                            <span class="text-bg-danger py-1 px-2 rounded">Gagal</span>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mensyuarat Perancangan Tahunu 2023 Bil.1/2022</td>
                        <td>12/10/2022</td>
                        <td>12/11/2022</td>
                        <td>GPK Hal Ehwal Murid</td>
                        <td>
                            <span class="text-bg-warning py-1 px-2 rounded">Belum Selesai</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/program-hal-ehwal-murid.blade.php ENDPATH**/ ?>