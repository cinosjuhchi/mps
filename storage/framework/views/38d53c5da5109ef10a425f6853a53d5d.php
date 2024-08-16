<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Cuti Peristiwa'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Cuti Peristiwa</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Takwim</a></li>
                        <li class="breadcrumb-item active">Cuti</li>
                        <li class="breadcrumb-item active">Cuti Peristiwa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
        <i class="mdi mdi-plus me-1"></i>Tambah Cuti
    </button>

    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Tambah Cuti</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="Bulan" class="form-label">Bulan</label>
                            <input type="text" class="form-control" id="Bulan">
                        </div>
                        <div class="mb-3">
                            <label for="Tarikh" class="form-label">Tarikh</label>
                            <input type="text" class="form-control" id="Tarikh">
                        </div>
                        <div class="mb-3">
                            <label for="Hari" class="form-label">Hari</label>
                            <input type="text" class="form-control" id="Hari">
                        </div>
                        <div class="mb-3">
                            <label for="Cuti" class="form-label">Cuti</label>
                            <input type="text" class="form-control" id="Cuti">
                        </div>
                        <div class="mb-3">
                            <label for="Negeri" class="form-label">Negeri</label>
                            <input type="text" class="form-control" id="Negeri">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Tambah Cuti</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="mt-4">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button fw-medium text-dark bg-white bg-opacity-75" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Januari
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">New Year's Day</td>
                                            <td>National except johor, Kedah, Kelantan, Perlis & Terengganu</td>\
                                        </tr>
                                        <tr>
                                            <td>2 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                        <tr>
                                            <td>14 Jan</td>
                                            <td>Sat</td>
                                            <td class="text-danger">YPDB Negeri Sembilan's Birthday</td>
                                            <td>Negeri Sembilan</td>
                                        </tr>
                                        <tr>
                                            <td>22 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Chinese New Year</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>23 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>24 Jan</td>
                                            <td>Tue</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button fw-medium collapsed text-dark bg-white bg-opacity-75"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Februari
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Feb</td>
                                            <td>Wed</td>
                                            <td class="text-danger">Federal Terirtory Day</td>
                                            <td>Kuala Lumpur, Labuan, & Putrajaya</td>

                                        </tr>
                                        <tr>
                                            <td>5 Feb</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Thaipusam</td>
                                            <td>Johor, Kuala Lumpur, Negeri Sembilan, Penang, Perak, Putrajaya, & Selangor
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6 Feb</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Thaipusam Holiday</td>
                                            <td>Kuala Lumpur, Negeri Sembilan, Penang, Perak, Putrajaya & Selangor</td>

                                        </tr>
                                        <tr>
                                            <td>18 Feb</td>
                                            <td>Sat</td>
                                            <td class="text-danger">Israk and Mikeaj</td>
                                            <td>Kedah, Negeri Sembilan, Perlis & Terengganu </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button fw-medium collapsed text-dark bg-white bg-opacity-75"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Mac
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">New Year's Day</td>
                                            <td>National except johor, Kedah, Kelantan, Perlis & Terengganu</td>

                                        </tr>
                                        <tr>
                                            <td>2 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                        <tr>
                                            <td>14 Jan</td>
                                            <td>Sat</td>
                                            <td class="text-danger">YPDB Negeri Sembilan's Birthday</td>
                                            <td>Negeri Sembilan</td>

                                        </tr>
                                        <tr>
                                            <td>22 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Chinese New Year</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>23 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>24 Jan</td>
                                            <td>Tue</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button fw-medium collapsed text-dark bg-white bg-opacity-75"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse4"
                                aria-expanded="false" aria-controls="collapse4">
                                April
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">New Year's Day</td>
                                            <td>National except johor, Kedah, Kelantan, Perlis & Terengganu</td>

                                        </tr>
                                        <tr>
                                            <td>2 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                        <tr>
                                            <td>14 Jan</td>
                                            <td>Sat</td>
                                            <td class="text-danger">YPDB Negeri Sembilan's Birthday</td>
                                            <td>Negeri Sembilan</td>

                                        </tr>
                                        <tr>
                                            <td>22 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Chinese New Year</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>23 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>24 Jan</td>
                                            <td>Tue</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button fw-medium collapsed text-dark bg-white bg-opacity-75"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse5"
                                aria-expanded="false" aria-controls="collapse5">
                                Mei
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">New Year's Day</td>
                                            <td>National except johor, Kedah, Kelantan, Perlis & Terengganu</td>

                                        </tr>
                                        <tr>
                                            <td>2 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                        <tr>
                                            <td>14 Jan</td>
                                            <td>Sat</td>
                                            <td class="text-danger">YPDB Negeri Sembilan's Birthday</td>
                                            <td>Negeri Sembilan</td>

                                        </tr>
                                        <tr>
                                            <td>22 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Chinese New Year</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>23 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>24 Jan</td>
                                            <td>Tue</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button fw-medium collapsed text-dark bg-white bg-opacity-75"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse6"
                                aria-expanded="false" aria-controls="collapse6">
                                Jun
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">New Year's Day</td>
                                            <td>National except johor, Kedah, Kelantan, Perlis & Terengganu</td>

                                        </tr>
                                        <tr>
                                            <td>2 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                        <tr>
                                            <td>14 Jan</td>
                                            <td>Sat</td>
                                            <td class="text-danger">YPDB Negeri Sembilan's Birthday</td>
                                            <td>Negeri Sembilan</td>

                                        </tr>
                                        <tr>
                                            <td>22 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Chinese New Year</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>23 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>24 Jan</td>
                                            <td>Tue</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading7">
                            <button class="accordion-button fw-medium collapsed text-dark bg-white bg-opacity-75"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse7"
                                aria-expanded="false" aria-controls="collapse7">
                                Julai
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">New Year's Day</td>
                                            <td>National except johor, Kedah, Kelantan, Perlis & Terengganu</td>

                                        </tr>
                                        <tr>
                                            <td>2 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                        <tr>
                                            <td>14 Jan</td>
                                            <td>Sat</td>
                                            <td class="text-danger">YPDB Negeri Sembilan's Birthday</td>
                                            <td>Negeri Sembilan</td>

                                        </tr>
                                        <tr>
                                            <td>22 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Chinese New Year</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>23 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>24 Jan</td>
                                            <td>Tue</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading8">
                            <button class="accordion-button fw-medium collapsed text-dark bg-white bg-opacity-75"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse8"
                                aria-expanded="false" aria-controls="collapse8">
                                Ogos
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">New Year's Day</td>
                                            <td>National except johor, Kedah, Kelantan, Perlis & Terengganu</td>

                                        </tr>
                                        <tr>
                                            <td>2 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                        <tr>
                                            <td>14 Jan</td>
                                            <td>Sat</td>
                                            <td class="text-danger">YPDB Negeri Sembilan's Birthday</td>
                                            <td>Negeri Sembilan</td>

                                        </tr>
                                        <tr>
                                            <td>22 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Chinese New Year</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>23 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>24 Jan</td>
                                            <td>Tue</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading9">
                            <button class="accordion-button fw-medium collapsed text-dark bg-white bg-opacity-75"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse9"
                                aria-expanded="false" aria-controls="collapse9">
                                September
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">New Year's Day</td>
                                            <td>National except johor, Kedah, Kelantan, Perlis & Terengganu</td>

                                        </tr>
                                        <tr>
                                            <td>2 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                        <tr>
                                            <td>14 Jan</td>
                                            <td>Sat</td>
                                            <td class="text-danger">YPDB Negeri Sembilan's Birthday</td>
                                            <td>Negeri Sembilan</td>

                                        </tr>
                                        <tr>
                                            <td>22 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Chinese New Year</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>23 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>24 Jan</td>
                                            <td>Tue</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading10">
                            <button class="accordion-button fw-medium collapsed text-dark bg-white bg-opacity-75"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse10"
                                aria-expanded="false" aria-controls="collapse10">
                                Oktober
                            </button>
                        </h2>
                        <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">New Year's Day</td>
                                            <td>National except johor, Kedah, Kelantan, Perlis & Terengganu</td>

                                        </tr>
                                        <tr>
                                            <td>2 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                        <tr>
                                            <td>14 Jan</td>
                                            <td>Sat</td>
                                            <td class="text-danger">YPDB Negeri Sembilan's Birthday</td>
                                            <td>Negeri Sembilan</td>

                                        </tr>
                                        <tr>
                                            <td>22 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Chinese New Year</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>23 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>24 Jan</td>
                                            <td>Tue</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading11">
                            <button class="accordion-button fw-medium collapsed text-dark bg-white bg-opacity-75"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse11"
                                aria-expanded="false" aria-controls="collapse11">
                                November
                            </button>
                        </h2>
                        <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">New Year's Day</td>
                                            <td>National except johor, Kedah, Kelantan, Perlis & Terengganu</td>

                                        </tr>
                                        <tr>
                                            <td>2 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                        <tr>
                                            <td>14 Jan</td>
                                            <td>Sat</td>
                                            <td class="text-danger">YPDB Negeri Sembilan's Birthday</td>
                                            <td>Negeri Sembilan</td>

                                        </tr>
                                        <tr>
                                            <td>22 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Chinese New Year</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>23 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>24 Jan</td>
                                            <td>Tue</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading12">
                            <button class="accordion-button fw-medium collapsed text-dark bg-white bg-opacity-75"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse12"
                                aria-expanded="false" aria-controls="collapse12">
                                Disember
                            </button>
                        </h2>
                        <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-white table-responsive">
                                <table class="table table-responsive mb-0  align-middle text-center"
                                    data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr class="bg-secondary text-white bg-opacity-75">
                                            <th>Tarikh</th>
                                            <th>Hari</th>
                                            <th>Cuti</th>
                                            <th>Negeri</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">New Year's Day</td>
                                            <td>National except johor, Kedah, Kelantan, Perlis & Terengganu</td>

                                        </tr>
                                        <tr>
                                            <td>2 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                        <tr>
                                            <td>14 Jan</td>
                                            <td>Sat</td>
                                            <td class="text-danger">YPDB Negeri Sembilan's Birthday</td>
                                            <td>Negeri Sembilan</td>

                                        </tr>
                                        <tr>
                                            <td>22 Jan</td>
                                            <td>Sun</td>
                                            <td class="text-danger">Chinese New Year</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>23 Jan</td>
                                            <td>Mon</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National</td>
                                        </tr>
                                        <tr>
                                            <td>24 Jan</td>
                                            <td>Tue</td>
                                            <td class="text-danger">Chinese New Year Holiday</td>
                                            <td>National except johor, Kedah, Kelantan, & Terengganu</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end accordion -->
            </div>
        </div>
        <!-- end col -->



        <!-- end col -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mps_old\resources\views/cuti-peristiwa.blade.php ENDPATH**/ ?>