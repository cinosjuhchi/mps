

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-capitalize">Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">Pengurusan Komponen</li>
                        <li class="breadcrumb-item">pengurusan-dan-pentadbiran-jk-jp</li>
                        <li class="breadcrumb-item active">JK dan JP</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-1">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR01 - JK Pengurusan Sekolah</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="table mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                        <span class="text-muted fst-italic">(GPK Pentadbiran)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(1, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-2">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR02 - JK Pengurusan Sistem Maklumat</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="table mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                        <span class="text-muted fst-italic">(GPK Pentadbiran)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(2, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-3">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR03 - JK Pengurusan Sumber Manusia</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="table mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                        <span class="text-muted fst-italic">(GPK Pentadbiran)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(3, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-4">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR04 - JK Pengurusan Kewangan, Akaun dan Aset Sekolah</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="table mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                        <span class="text-muted fst-italic">(GPK Pentadbiran)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(4, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-5">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR05 - JK Standard Kualiti Pendidikan Malaysia</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="table mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                        <span class="text-muted fst-italic">(GPK Pentadbiran)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(05, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-6">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR06 - JK Pendidikan Khas</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="table mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                        <span class="text-muted fst-italic">(GPK Pentadbiran)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(6, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-7">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR07 - JK Pengurusan Prasekolah</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="table mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                        <span class="text-muted fst-italic">(GPK Pentadbiran)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(7, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-8">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR08 - JK Pengurusan Bencana Sekolah</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="table mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                        <span class="text-muted fst-italic">(GPK Pentadbiran)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(8, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-9">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR09 - JK Persatuan Ibu Bapa dan Guru</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="table mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Ex-Officio</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Yang Dipertua</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Nama</span>
                                        <br>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Naib Yang Dipertua</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Nama</span>
                                        <br>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Nama</span>
                                        <br>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Bendahari</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Nama</span>
                                        <br>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(9, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-10">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR10 - JK Kelab Kebajikan Guru dan Kakitangan</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="table mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Penasihat</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Pengerupsi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Nama</span>
                                        <br>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerupsi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Nama</span>
                                        <br>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Nama</span>
                                        <br>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Bendahari</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Nama</span>
                                        <br>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(10, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-11">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR11 - JK Pengurusan Murid Orang Asal </span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="table mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(11, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        
        <div class="show-detail col-md-6 d-none" id="detail-jr-1">
            <div class="card border rounded shadow-sm border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR01 - JK Pengurusan Sekolah
                    </h5>
                    <button class="btn" onclick="closeDetail(1)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr1">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                    <span class="fst-italic">GPK Pentadbiran</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                    <span class="fst-italic">Setiausaha</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Jawatankuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>JP Perancangan Strategik</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Meor Ayubi bin Ali <span class="badge bg-danger">Penyelaras</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Program Kecemerlangan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Rohaya binti Latif <span class="badge bg-danger">Penyelaras T1/GK</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Penyelengaraan Fizikal</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Fadhlan bin Yazdi <span class="badge bg-danger">Penyelaras</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Laman Sesawang dan Medsos</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Khairul bin Ramli <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Pengurusan Program dan Majelis</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Faiz Arman bin Jazuli <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Kontrak Syarikat Keselamatan dan Kebersihan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Dalyana binti Rais <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Penghubung Luar</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Khoo Slew Lee<span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Dokumentasi dan Pelaporan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Khoo Slew Lee<span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr1">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr1', this)" class="btn btn-primary btn-sm">Switch to Carta
                            Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-2">
            <div class="card border rounded shadow-sm border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR02 - JK Pengurusan Sistem Maklumat
                    </h5>
                    <button class="btn" onclick="closeDetail(2)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr2">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                    <span class="fst-italic">GPK Pentadbiran</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                    <span class="fst-italic">Setiausaha</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Jawatankuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>JP Maklumat Pengurusan dan Pentadbiran</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">PT</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Guru Data</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GB</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">PT-K</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GB</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Maklumat Kurikulum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">SU Pep</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">SU PBD</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPM</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Maklumat Hal Ehwal Murid</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua Guru Disiplin</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Penny. SPBT</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">SU PIBG</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">SU PO</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Maklumat Kokurikulum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">SU Ko</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">SU Sukan</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Maklumat Prasekolah</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Maklumat Pendidikan Khas</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr2">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr2', this)" class="btn btn-primary btn-sm">Switch to Carta
                            Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-3">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR03 - JK Pengurusan Sumber Manusia
                    </h5>
                    <button class="btn" onclick="closeDetail(3)">X</button>
                </div>
                <div class="card-body">
                    <div id="card-jr3">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                    <span class="fst-italic">GPK Pentadbiran</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                    <span class="fst-italic">Setiausaha</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Jawatankuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>JP ABM Perjawatan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKP</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Penilaian Prestasi</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKP</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Pengurusan Kaunseling Staf</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKHEM</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Urusan Naik Pangkat</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">PT-PP</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Perkhidmatan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">PT-PP</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Latihan Dalam Perkhidmatan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr3">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr3', this)" id="btn-switch"
                            class="btn btn-primary btn-sm">Switch to Carta Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-4">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR04 - JK Pengurusan Kewangan, Akaun dan Aset Sekolah
                    </h5>
                    <button class="btn" onclick="closeDetail(4)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr4">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                    <span class="fst-italic">GPK Pentadbiran</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                    <span class="fst-italic">Setiausaha</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Jawatankuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>JP Kewangan Panitia</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">KP</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Kewangan Khas</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">PT-Kew</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Akaun</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">PT-Kew</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Bend. PIBG</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Asset</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">PT</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr4">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr4', this)" id="btn-switch"
                            class="btn btn-primary btn-sm">Switch to Carta Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-5">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR05 - JK Standard Kualiti Pendidikan Malaysia
                    </h5>
                    <button class="btn" onclick="closeDetail(5)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr5">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                    <span class="fst-italic">GPK Pentadbiran</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                    <span class="fst-italic">Setiausaha</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Jawatankuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>JP Standard 1: Kepemimpinan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Standard 2: Pengurusan Organisasi</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Standard 3: Pengurusan Kurikulum, Kokurikulum, Dan Hal Ehwal Murid</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Standard 4: Pembelajaran dan Pemudahcaraan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Standard 5: Kemenjadian Murid</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr5">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr5', this)" id="btn-switch"
                            class="btn btn-primary btn-sm">Switch to Carta Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-6">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR06 - JK Pendidikan Khas
                    </h5>
                    <button class="btn" onclick="closeDetail(6)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr6">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                    <span class="fst-italic">GPK Pentadbiran</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                    <span class="fst-italic">Setiausaha</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Jawatankuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>JP Kurikulum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKP</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Hal Ehwal Murid</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKHEM</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Kokurikulum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKKo</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Bimbingan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Guru Bimbingan</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP PIBG</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Wakil PIBG</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr6">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr6', this)" id="btn-switch"
                            class="btn btn-primary btn-sm">Switch to Carta Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-7">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR07 - JK Pengurusan Prasekolah
                    </h5>
                    <button class="btn" onclick="closeDetail(7)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr7">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                    <span class="fst-italic">GPK Pentadbiran</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                    <span class="fst-italic">Setiausaha</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Jawatankuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>JP Kurikulum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKP</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Hal Ehwal Murid</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKHEM</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Kokurikulum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKKo</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Bimbingan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Guru Bimbingan</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP PIBG</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Wakil PIBG</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Pemilihan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GB</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKP</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKHEM</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Guru Pra</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Wakil PIBG</span>
                                        </p>

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr7">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr7', this)" id="btn-switch"
                            class="btn btn-primary btn-sm">Switch to Carta Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-8">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR08 - JK Pengurusan Bencana Sekolah
                    </h5>
                    <button class="btn" onclick="closeDetail(8)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr8">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                    <span class="fst-italic">GPK Pentadbiran</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                    <span class="fst-italic">Setiausaha</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Jawatankuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>JP Keselamatan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKP</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Kesihatan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKHEM</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Makan Minum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKKo</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Bimbingan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Guru Bimbingan</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP PIBG</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Wakil PIBG</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Kebajikan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Komunikasi</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr8">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr8', this)" id="btn-switch"
                            class="btn btn-primary btn-sm">Switch to Carta Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-9">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR09 - JK Persatuan Ibu Bapa dan Guru
                    </h5>
                    <button class="btn" onclick="closeDetail(9)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr9">
                        <table class="table table-borderless">
                            <tr>
                                <th>Ex-Officio</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Yang Dipertua</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Nama</span>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <th>Naib Yang Dipertua</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Nama</span>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Nama</span>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <th>Bendahari</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Nama</span>
                                    <br>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Ahli Jawatan Kuasa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Biro Pendidikan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Biro Ekonomi</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Biro Kebajikan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Biro Penghubung Luar</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Wakil Ibu Bapa</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Wakil Guru</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Juara Audit Dalaman</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr9">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr9', this)" id="btn-switch"
                            class="btn btn-primary btn-sm">Switch to Carta Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-10">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR10 - JK Kelab Kebajikan Guru dan Kakitangan
                    </h5>
                    <button class="btn" onclick="closeDetail(10)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr10">
                        <table class="table table-borderless">
                            <tr>
                                <th>Penasihat</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Pengerupsi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Nama</span>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerupsi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Nama</span>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Nama</span>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <th>Bendahari</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Nama</span>
                                    <br>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Ahli Jawatan Kuasa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Biro Pendidikan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Biro Ekonomi</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Biro Kebajikan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Biro Persegaran</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Biro Kesihatan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Biro Pembugaran</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr10">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr10', this)" id="btn-switch"
                            class="btn btn-primary btn-sm">Switch to Carta Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-11">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR11 - JK Pengurusan Murid Orang Asal
                    </h5>
                    <button class="btn" onclick="closeDetail(11)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr11">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerupsi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerupsi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">JawatanKuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>JP Kurikulum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKP</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Hal Ehwal Murid</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKHEM</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Kokurikulum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">GPKKo</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Bimbingan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Guru Bimbingan</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP PIBG</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Wakil PIBG</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr11">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr11', this)" id="btn-switch"
                            class="btn btn-primary btn-sm">Switch to Carta Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        
    </div>


    
    <script src="<?php echo e(URL::asset('build/js/style.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/orgchart.js')); ?>"></script>
    <script>
        function layoutChange(awal, akhir) {
            for (let i = awal; i <= akhir; i++) {
                const cardJr = document.getElementById('card-jr-' + i);
                if (cardJr.classList.contains('col-xl-4')) {
                    cardJr.classList.remove('col-xl-4');
                }
            }
        }

        function showDetail(jr, button) {
            const detailBox = document.getElementById('detail-jr-' + jr);
            const detailShows = document.getElementsByClassName('show-detail');
            const btnDetails = document.getElementsByClassName('btn-detail');

            for (let i = 0; i < btnDetails.length; i++) {
                const btnDetail = btnDetails[i];

                if (btnDetail.classList.contains('btn-primary')) {
                    btnDetail.classList.remove('btn-primary');
                    btnDetail.classList.add('bg-secondary');
                }
            }

            button.classList.add('btn-primary');
            button.classList.remove('bg-secondary');
            button.classList.remove('text-dark');

            for (let i = 0; i < detailShows.length; i++) {
                const detailShow = detailShows[i];

                if (!detailShow.classList.contains('d-none')) {
                    detailShow.classList.add('d-none');
                }
            }

            if (detailBox.classList.contains('d-none')) {
                detailBox.classList.remove('d-none');
                layoutChange(1, 11);
            }
        }

        function closeDetail(jr) {
            const detailBox = document.getElementById('detail-jr-' + jr);
            detailBox.classList.add('d-none');

            const cards = document.getElementsByClassName('cardjr');
            for (let i = 0; i < cards.length; i++) {
                const card = cards[i];
                card.classList.add('col-xl-4');
            }

            const btnDetails = document.getElementsByClassName('btn-detail');
            for (let i = 0; i < btnDetails.length; i++) {
                const btnDetail = btnDetails[i];
                btnDetail.classList.remove('btn-primary');
                if (!btnDetail.classList.contains('bg-secondary')) {
                    btnDetail.classList.add('bg-secondary');
                }
            }
        }
    </script>
    <script>
        OrgChart.templates.diva = Object.assign({}, OrgChart.templates.ana);
        OrgChart.templates.diva.size = [200, 170];
        OrgChart.templates.diva.node =
            '<rect x="0" y="80" height="90" width="200" fill="#fff" stroke="#acacac"></rect>' +
            '<circle cx="100" cy="50" fill="#ffffff" r="50" stroke="#039BE5" stroke-width="2"></circle>';
        OrgChart.templates.diva.img_0 =
            '<clipPath id="{randId}"><circle cx="100" cy="50" r="45"></circle></clipPath>' +
            '<image preserveAspectRatio="xMidYMid slice" clip-path="url(#{randId})" xlink:href="{val}" x="50" y="0" width="100" height="100"></image>';
        OrgChart.templates.diva.field_0 =
            '<text data-width="185" style="font-size: 16px;" fill="#1f1f1f" x="100" y="125" text-anchor="middle">{val}</text>';
        OrgChart.templates.diva.field_1 =
            '<text data-width="185" style="font-size: 13px;" fill="#1f1f1f" x="100" y="145" text-anchor="middle">{val}</text>';
        OrgChart.templates.diva.pointer =
            '<g data-pointer="pointer" transform="matrix(0,0,0,0,100,100)"><radialGradient id="pointerGradient">' +
            '<stop stop-color="#ffffff" offset="0" /><stop stop-color="#039BE5" offset="1" /></radialGradient>' +
            '<circle cx="16" cy="16" r="16" stroke-width="1" stroke="#acacac" fill="url(#pointerGradient)"></circle>' +
            '</g>';
        OrgChart.templates.diva.nodeMenuButton =
            '<g style="cursor:pointer;" transform="matrix(1,0,0,1,175,155)" data-ctrl-n-menu-id="{id}">' +
            '<rect x="-4" y="-10" fill="#000000" fill-opacity="0" width="22" height="22"></rect>' +
            '<circle cx="0" cy="0" r="2" fill="#ffffff"></circle><circle cx="7" cy="0" r="2" fill="#ffffff">' +
            '</circle><circle cx="14" cy="0" r="2" fill="#ffffff"></circle>' +
            '</g>';



        function createTree(id) {
            var chart = new OrgChart(document.getElementById(id), {
                mouseScrool: OrgChart.none,
                template: 'diva',
                // layout: OrgChart.tree,
                enableSearch: false,
                nodeBinding: {
                    field_0: "nama",
                    field_1: "peranan",
                    img_0: "img"
                },
            });

            if (id == "tree-jr1") {
                chart.load([{
                        id: 1,
                        nama: "Rahimi bin Saufi",
                        peranan: "Guru Besar",
                        img: "images/foto_guru/guru-besar.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 2,
                        pid: 1,
                        nama: "Norazidi bin Che Amat",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Marina binti Idris",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        peranan: "JP Perancangan Strategik",
                        img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>"
                    },
                    {
                        id: 5,
                        pid: 3,
                        peranan: "JP Program Kecemerlangan",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>"
                    },
                    {
                        id: 6,
                        pid: 3,
                        peranan: "JP Penyelengaraan Fizikal",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "JP Laman Sesawang dan Medsos",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP Pengurusan Program dan Majelis",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Penyelaras-Bestari.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 9,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP Kontrak Syarikat Keselamatan dan Kebersihan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Perpustakaan-dan-Media.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 10,
                        pid: 8,
                        nama: "Razuki bin Rauf",
                        peranan: "JP Penghubung Luar",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Data.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 11,
                        pid: 8,
                        nama: "Razuki bin Rauf",
                        peranan: "JP Dokumentasi dan Pelaporan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Data.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            } else if (id == "tree-jr2") {
                chart.load([{
                        id: 1,
                        nama: "Rahimi bin Saufi",
                        peranan: "Guru Besar",
                        img: "images/foto_guru/guru-besar.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 2,
                        pid: 1,
                        nama: "Norazidi bin Che Amat",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Marina binti Idris",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Faridah Hanim binti Ismail",
                        peranan: "JP Maklumat Pengurusan dan Pentadbiran",
                        img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "JP Maklumat Kurikulum",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Abdullah Sani bin Husein",
                        peranan: "JP Maklumat Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "JP Maklumat Kokurikulum",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP Maklumat Prasekolah",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Penyelaras-Bestari.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 9,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP Maklumat Pendidikan Khas",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Perpustakaan-dan-Media.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                ]);
            } else if (id == "tree-jr3") {
                chart.load([{
                        id: 1,
                        nama: "Rahimi bin Saufi",
                        peranan: "Guru Besar",
                        img: "images/foto_guru/guru-besar.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 2,
                        pid: 1,
                        nama: "Norazidi bin Che Amats",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Marina binti Idris",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Faridah Hanim binti Ismail",
                        peranan: "JP ABM Perjawatan",
                        img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "JP Penilaian Prestasi",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Abdullah Sani bin Husein",
                        peranan: "JP Urusan Naik Pangkat",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "JP  Perkhidmatan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP Latihan Dalam  Perkhidmatan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Penyelaras-Bestari.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            } else if (id == "tree-jr4") {
                chart.load([{
                        id: 1,
                        nama: "Rahimi bin Saufi",
                        peranan: "Guru Besar",
                        img: "images/foto_guru/guru-besar.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 2,
                        pid: 1,
                        nama: "Norazidi bin Che Amat",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Marina binti Idris",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Faridah Hanim binti Ismail",
                        peranan: "JP Kewangan Panitia",
                        img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "JP Kewangan Khas",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Abdullah Sani bin Husein",
                        peranan: "JP Akaun",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "JP Asset",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            } else if (id == "tree-jr5") {
                chart.load([{
                        id: 1,
                        nama: "Rahimi bin Saufi",
                        peranan: "Guru Besar",
                        img: "images/foto_guru/guru-besar.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 2,
                        pid: 1,
                        nama: "Norazidi bin Che Amat",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Marina binti Idris",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Faridah Hanim binti Ismail",
                        peranan: "JP Standard 1: Kepemimpinan",
                        img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "JP Standard 2: Pengurusan Organisasi",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Abdullah Sani bin Husein",
                        peranan: "JP Standard 3: Pengurusan Kurikulum, Kokurikulum, Dan Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "JP Standard 4: Pembelajaran dan Pemudahcaraan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP Standard 5: Kemenjadian Murid",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Penyelaras-Bestari.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            } else if (id == "tree-jr6") {
                chart.load([{
                        id: 1,
                        nama: "Rahimi bin Saufi",
                        peranan: "Guru Besar",
                        img: "images/foto_guru/guru-besar.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 2,
                        pid: 1,
                        nama: "Norazidi bin Che Amat",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Marina binti Idris",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Faridah Hanim binti Ismail",
                        peranan: "JP Kurikulum",
                        img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "JP Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Abdullah Sani bin Husein",
                        peranan: "JP Kokurikulum",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "JP Bimbingan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP PIBG",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Penyelaras-Bestari.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            } else if (id == "tree-jr7") {
                chart.load([{
                        id: 1,
                        nama: "Rahimi bin Saufi",
                        peranan: "Guru Besar",
                        img: "images/foto_guru/guru-besar.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 2,
                        pid: 1,
                        nama: "Norazidi bin Che Amat",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Marina binti Idris",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Faridah Hanim binti Ismail",
                        peranan: "JP Kurikulum",
                        img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "JP Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Abdullah Sani bin Husein",
                        peranan: "JP Kokurikulum",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "JP Bimbingan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP PIBG",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Penyelaras-Bestari.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 9,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP Pemilihan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Perpustakaan-dan-Media.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            } else if (id == "tree-jr8") {
                chart.load([{
                        id: 1,
                        nama: "Rahimi bin Saufi",
                        peranan: "Guru Besar",
                        img: "images/foto_guru/guru-besar.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 2,
                        pid: 1,
                        nama: "Norazidi bin Che Amat",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Marina binti Idris",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Faridah Hanim binti Ismail",
                        peranan: "JP Keselamatan",
                        img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "JP Kesihatan",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Abdullah Sani bin Husein",
                        peranan: "JP Makan Minum",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "JP Bimbingan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP PIBG",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Penyelaras-Bestari.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 9,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP Kebajikan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Perpustakaan-dan-Media.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 10,
                        pid: 8,
                        nama: "Razuki bin Rauf",
                        peranan: "JP Komunikasi",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Data.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            } else if (id == "tree-jr9") {
                chart.load([{
                        id: 1,
                        nama: "Rahimi bin Saufi",
                        peranan: "Guru Besar",
                        img: "images/foto_guru/guru-besar.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 2,
                        pid: 1,
                        nama: "Norazidi bin Che Amat",
                        peranan: "Naib Yang Dipertua",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Marina binti Idris",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Faridah Hanim binti Ismail",
                        peranan: "Bendahari",
                        img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "Biro Pendidikan",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Abdullah Sani bin Husein",
                        peranan: "Biro Ekonomi",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "Biro Kebajikan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "Biro Penghubung Luar",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Penyelaras-Bestari.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 9,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "Wakil Ibu Bapa",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Perpustakaan-dan-Media.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 10,
                        pid: 8,
                        nama: "Razuki bin Rauf",
                        peranan: "Wakil Guru",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Data.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 11,
                        pid: 8,
                        nama: "Razuki bin Rauf",
                        peranan: "Juara Audit Dalaman",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Data.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                ]);
            } else if (id == "tree-jr10") {
                chart.load([{
                        id: 1,
                        nama: "Rahimi bin Saufi",
                        peranan: "Guru Besar",
                        img: "images/foto_guru/guru-besar.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 2,
                        pid: 1,
                        nama: "Norazidi bin Che Amat",
                        peranan: "Pengerupsi",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Marina binti Idris",
                        peranan: "Timbalan Pengerupsi",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Faridah Hanim binti Ismail",
                        peranan: "Setiausaha",
                        img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Nama",
                        peranan: "Bendahari",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Nama",
                        peranan: "Biro Pendidikan",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Lee Hock Chan",
                        peranan: "Biro Ekonomi",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Abdullah Sani bin Husein",
                        peranan: "Biro Kebajikan",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 9,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "Biro Persegaran",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 10,
                        pid: 8,
                        nama: "Suzana binti Muhammad",
                        peranan: "Biro Kesihatan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Penyelaras-Bestari.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 11,
                        pid: 8,
                        nama: "Suzana binti Muhammad",
                        peranan: "Biro Pembugaran",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Perpustakaan-dan-Media.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            } else if (id == "tree-jr11") {
                chart.load([{
                        id: 1,
                        nama: "Rahimi bin Saufi",
                        peranan: "Guru Besar",
                        img: "images/foto_guru/guru-besar.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 2,
                        pid: 1,
                        nama: "Norazidi bin Che Amat",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Marina binti Idris",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Faridah Hanim binti Ismail",
                        peranan: "JP Kurikulum",
                        img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "JP Hal Ehwal Murid",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Abdullah Sani bin Husein",
                        peranan: "JP Kokurikulum",
                        img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "JP Bimbingan",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP PIBG",
                        img: "<?php echo e(asset('images/foto_guru/Guru-Penyelaras-Bestari.png')); ?>",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            }
        }

        createTree("tree-jr1");
        createTree("tree-jr2");
        createTree("tree-jr3");
        createTree("tree-jr4");
        createTree("tree-jr5");
        createTree("tree-jr6");
        createTree("tree-jr7");
        createTree("tree-jr8");
        createTree("tree-jr9");
        createTree("tree-jr10");
        createTree("tree-jr11");
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BELAJAR-PROYEK\GRAVIX\mps_cino\mps\resources\views/pengurusan-dan-pentadbiran-jk-jp.blade.php ENDPATH**/ ?>