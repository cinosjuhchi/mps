<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Penggal Persekolahan'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Penggal Persekolahan 2023/2024 (Negeri Kumpulan A)</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Takwim</a></li>
                        <li class="breadcrumb-item active">Penggal Persekolahan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <?php if(Auth::user()->jawatan_app != 6): ?>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
        <i class='bx bx-plus'></i> Buat Penggal
    </button>
    <?php endif; ?>

    <!-- Modal Edit -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Buat Penggal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="visi" class="form-label">Bulan</label>
                            <select class="form-select" name="bulan" id="">
                                <option value="" selected disabled></option>
                                <option value="">Januari</option>
                                <option value="">Februari</option>
                                <option value="">Mac</option>
                                <option value="">April</option>
                                <option value="">Mei</option>
                                <option value="">Jun</option>
                                <option value="">Julai</option>
                                <option value="">Ogos</option>
                                <option value="">September</option>
                                <option value="">Oktober</option>
                                <option value="">November</option>
                                <option value="">Disember</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Minggu" class="form-label">Minggu</label>
                            <input type="text" class="form-control" id="Minggu">
                        </div>
                        <div class="mb-3">
                            <label for="Tempoh" class="form-label">Tempoh</label>
                            <input type="text" class="form-control" id="Tempoh">
                        </div>
                        <div class="mb-3">
                            <label for="Bilhari" class="form-label">Bil.hari</label>
                            <input type="text" class="form-control" id="Bilhari">
                        </div>
                        <div class="mb-3">
                            <label for="Kumpulan" class="form-label">Kumpulan</label>
                            <input type="text" class="form-control" id="Kumpulan">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Buat Penggal</button>
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
                            <button class="accordion-button fw-medium text-white bg-primary bg-opacity-75" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Penggal 1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div class="table-responsive">
                                <table class="table mb-0  align-middle text-center" data-pattern="priority-columns">
                                    <thead class=" bg-opacity-75 text-dark ">
                                        <tr>
                                            <th>Bulan</th>
                                            <th>Minggu</th>
                                            <th>Tempoh</th>
                                            <th>Bil. Hari</th>
                                            <th>Kumpulan</th>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="2">Mac</td>
                                            <td>1</td>
                                            <td>19/03/2023 - 23/03/2023</td>
                                            <td>5</td>
                                            <td rowspan="2">10</td>
                                            <td>
                                            <?php if(Auth::user()->jawatan_app == 0): ?>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                            <button type="button" class="btn btn-danger"><i
                                                class='bx bxs-trash'></i>
                                            </button>
                                            <?php endif; ?>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>19/03/2023 - 23/03/2023</td>
                                            <td>5</td>
                                            <td>
                                            <?php if(Auth::user()->jawatan_app == 0): ?>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                            <button type="button" class="btn btn-danger"><i
                                                class='bx bxs-trash'></i>
                                            </button>
                                            <?php endif; ?>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5">April</td>
                                            <td>3</td>
                                            <td>02/04/2023 - 06/04/2023</td>
                                            <td>5</td>
                                            <td rowspan="5">16</td>
                                            <td>
                                            <?php if(Auth::user()->jawatan_app == 0): ?>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                            <button type="button" class="btn btn-danger"><i
                                                class='bx bxs-trash'></i>
                                            </button>
                                            <?php endif; ?>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>09/04/2023 - 13/04/2023</td>
                                            <td>5</td>
                                            <td>
                                            <?php if(Auth::user()->jawatan_app == 0): ?>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                            <button type="button" class="btn btn-danger"><i
                                                class='bx bxs-trash'></i>
                                            </button>
                                            <?php endif; ?>
                                        </td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>16/04/2023 - 20/04/2023</td>
                                            <td>5</td>
                                            <td>
                                            <?php if(Auth::user()->jawatan_app == 0): ?>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                            <button type="button" class="btn btn-danger"><i
                                                class='bx bxs-trash'></i>
                                            </button>
                                            <?php endif; ?>
                                        </td>
                                        </tr>
                                        <tr class="bg-danger text-white">
                                            <td>Cuti Pertengahan Penggal 1, Sesi 2023/2024</td>
                                            <td>21/04/2023 - 29/04/2023</td>
                                            <td>9</td>
                                            <td class="bg-white">
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>30/04/2023</td>
                                            <td>1</td>
                                            <td>
                                            <?php if(Auth::user()->jawatan_app == 0): ?>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                            <button type="button" class="btn btn-danger"><i
                                                class='bx bxs-trash'></i>
                                            </button>
                                            <?php endif; ?>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5">Mei</td>
                                            <td>6</td>
                                            <td>01/05/2023 - 04/05/2023</td>
                                            <td>4</td>
                                            <td rowspan="5">9</td>
                                            <td>
                                            <?php if(Auth::user()->jawatan_app == 0): ?>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                            <button type="button" class="btn btn-danger"><i
                                                class='bx bxs-trash'></i>
                                            </button>
                                            <?php endif; ?>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>07/05/2023 - 11/05/2023</td>
                                            <td>5</td>
                                            <td>
                                            <?php if(Auth::user()->jawatan_app == 0): ?>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                            <button type="button" class="btn btn-danger"><i
                                                class='bx bxs-trash'></i>
                                            </button>
                                            <?php endif; ?>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>14/05/2023 - 18/05/2023</td>
                                            <td>5</td>
                                            <td>
                                            <?php if(Auth::user()->jawatan_app == 0): ?>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                            <button type="button" class="btn btn-danger"><i
                                                class='bx bxs-trash'></i>
                                            </button>
                                            <?php endif; ?>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>21/05/2023 - 25/05/2023</td>
                                            <td>5</td>
                                            <td>
                                            <?php if(Auth::user()->jawatan_app == 0): ?>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->jawatan_app != 6): ?>
                                            <button type="button" class="btn btn-danger"><i
                                                class='bx bxs-trash'></i>
                                            </button>
                                            <?php endif; ?>
                                        </td>
                                        </tr>
                                        <tr class="bg-danger text-white">
                                            <td>Cuti Penggal 1,Sesi 2023/2024</td>
                                            <td>26/05/2023 - 03/06/2023</td>
                                            <td>9</td>
                                            <td class="bg-white ">
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button fw-medium collapsed text-white bg-primary bg-opacity-75" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Penggal 2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table mb-0  align-middle text-center" data-pattern="priority-columns">
                                        <thead class=" bg-opacity-75 text-dark ">
                                            <tr>
                                                <th>Bulan</th>
                                                <th>Minggu</th>
                                                <th>Tempoh</th>
                                                <th>Bil. Hari</th>
                                                <th>Kumpulan</th>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                    <th>Action</th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="2">Mac</td>
                                                <td>1</td>
                                                <td>19/03/2023 - 23/03/2023</td>
                                                <td>5</td>
                                                <td rowspan="2">10</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>19/03/2023 - 23/03/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5">April</td>
                                                <td>3</td>
                                                <td>02/04/2023 - 06/04/2023</td>
                                                <td>5</td>
                                                <td rowspan="5">16</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>09/04/2023 - 13/04/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                                <
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>16/04/2023 - 20/04/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr class="bg-danger text-white">
                                                <td>Cuti Pertengahan Penggal 1, Sesi 2023/2024</td>
                                                <td>21/04/2023 - 29/04/2023</td>
                                                <td>9</td>
                                                <td class="bg-white">
                                                    <?php if(Auth::user()->jawatan_app == 0): ?>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#edit">
                                                            <i class='bx bxs-edit'></i>
                                                    </button>
                                                    <?php endif; ?>
                                                    <?php if(Auth::user()->jawatan_app != 6): ?>
                                                    <button type="button" class="btn btn-danger"><i
                                                        class='bx bxs-trash'></i>
                                                    </button>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>30/04/2023</td>
                                                <td>1</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5">Mei</td>
                                                <td>6</td>
                                                <td>01/05/2023 - 04/05/2023</td>
                                                <td>4</td>
                                                <td rowspan="5">9</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>07/05/2023 - 11/05/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>14/05/2023 - 18/05/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>21/05/2023 - 25/05/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr class="bg-danger text-white">
                                                <td>Cuti Penggal 1,Sesi 2023/2024</td>
                                                <td>26/05/2023 - 03/06/2023</td>
                                                <td>9</td>
                                                <td class="bg-white">
                                                    <?php if(Auth::user()->jawatan_app == 0): ?>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#edit">
                                                            <i class='bx bxs-edit'></i>
                                                    </button>
                                                    <?php endif; ?>
                                                    <?php if(Auth::user()->jawatan_app != 6): ?>
                                                    <button type="button" class="btn btn-danger"><i
                                                        class='bx bxs-trash'></i>
                                                    </button>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button fw-medium collapsed text-white bg-primary bg-opacity-75" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Penggal 3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table  mb-0  align-middle text-center" data-pattern="priority-columns">
                                        <thead class=" bg-opacity-75 text-dark ">
                                            <tr>
                                                <th>Bulan</th>
                                                <th>Minggu</th>
                                                <th>Tempoh</th>
                                                <th>Bil. Hari</th>
                                                <th>Kumpulan</th>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                    <th>Action</th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="2">Mac</td>
                                                <td>1</td>
                                                <td>19/03/2023 - 23/03/2023</td>
                                                <td>5</td>
                                                <td rowspan="2">10</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>19/03/2023 - 23/03/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5">April</td>
                                                <td>3</td>
                                                <td>02/04/2023 - 06/04/2023</td>
                                                <td>5</td>
                                                <td rowspan="5">16</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>09/04/2023 - 13/04/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                                <
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>16/04/2023 - 20/04/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr class="bg-danger text-white">
                                                <td>Cuti Pertengahan Penggal 1, Sesi 2023/2024</td>
                                                <td>21/04/2023 - 29/04/2023</td>
                                                <td>9</td>
                                                <td class="bg-white">
                                                    <?php if(Auth::user()->jawatan_app == 0): ?>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#edit">
                                                            <i class='bx bxs-edit'></i>
                                                    </button>
                                                    <?php endif; ?>
                                                    <?php if(Auth::user()->jawatan_app != 6): ?>
                                                    <button type="button" class="btn btn-danger"><i
                                                        class='bx bxs-trash'></i>
                                                    </button>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>30/04/2023</td>
                                                <td>1</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5">Mei</td>
                                                <td>6</td>
                                                <td>01/05/2023 - 04/05/2023</td>
                                                <td>4</td>
                                                <td rowspan="5">9</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>07/05/2023 - 11/05/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>14/05/2023 - 18/05/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>21/05/2023 - 25/05/2023</td>
                                                <td>5</td>
                                                <td>
                                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->jawatan_app != 6): ?>
                                                <button type="button" class="btn btn-danger"><i
                                                    class='bx bxs-trash'></i>
                                                </button>
                                                <?php endif; ?>
                                            </td>
                                            </tr>
                                            <tr class="bg-danger text-white">
                                                <td>Cuti Penggal 1,Sesi 2023/2024</td>
                                                <td>26/05/2023 - 03/06/2023</td>
                                                <td>9</td>
                                                <td class="bg-white">
                                                    <?php if(Auth::user()->jawatan_app == 0): ?>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#edit">
                                                            <i class='bx bxs-edit'></i>
                                                    </button>
                                                    <?php endif; ?>
                                                    <?php if(Auth::user()->jawatan_app != 6): ?>
                                                    <button type="button" class="btn btn-danger"><i
                                                        class='bx bxs-trash'></i>
                                                    </button>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/penggal-persekolahan.blade.php ENDPATH**/ ?>