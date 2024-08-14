@extends('layouts.master')

@section('title')
    @lang('Jadual Guru Bertugas Harian')
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Jadual Guru Bertugas Harian</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Takwim</a></li>
                        <li class="breadcrumb-item active">Jadual Guru Bertugas Harian</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->jawatan_app != 6)
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
        <i class='bx bx-plus'></i> Buat Jadual Guru
    </button>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
        <i class='bx bx-plus'></i> Tambah Bidang Tugas
    </button>
    @endif

    {{-- Modal Kumpulan 1 --}}
    <div class="modal fade mt-3" id="kumpulan-1" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Senarai Kumpulan 1  </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table align-middle text-center mb-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bidang</th>
                                    <th>Nama Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ketua Kumpulan</td>
                                    <td>Rosdi bin Manaf</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sambutan Murid</td>
                                    <td>Zahariah binti Ghazali</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>RMT</td>
                                    <td>Fauziah binti Tarmimi</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Pemantauan 3K</td>
                                    <td>Azrel Walis bin Abu Fuad</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 1</li>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 2</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Normaizan binti Ambree</li>
                                            <li class="list-unstyled ms-n2">Norazidi bin Che Amat</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Kecemasan</td>
                                    <td>Zul Hisham bin Zaen Saidin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    <button type="button" class="btn btn-success px-3 float-end me-2 mb-2">Ok</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Kumpulan 2 --}}
    <div class="modal fade mt-3" id="kumpulan-2" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Senarai Kumpulan 2</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table align-middle text-center mb-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bidang</th>
                                    <th>Nama Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ketua Kumpulan</td>
                                    <td>Rosdi bin Manaf</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sambutan Murid</td>
                                    <td>Zahariah binti Ghazali</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>RMT</td>
                                    <td>Fauziah binti Tarmimi</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Pemantauan 3K</td>
                                    <td>Azrel Walis bin Abu Fuad</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 1</li>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 2</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Normaizan binti Ambree</li>
                                            <li class="list-unstyled ms-n2">Norazidi bin Che Amat</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Kecemasan</td>
                                    <td>Zul Hisham bin Zaen Saidin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    <button type="button" class="btn btn-success px-3 float-end me-2 mb-2">Ok</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Kumpulan 3 --}}
    <div class="modal fade mt-3" id="kumpulan-3" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Senarai Kumpulan 3</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table align-middle text-center mb-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bidang</th>
                                    <th>Nama Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ketua Kumpulan</td>
                                    <td>Rosdi bin Manaf</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sambutan Murid</td>
                                    <td>Zahariah binti Ghazali</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>RMT</td>
                                    <td>Fauziah binti Tarmimi</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Pemantauan 3K</td>
                                    <td>Azrel Walis bin Abu Fuad</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 1</li>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 2</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Normaizan binti Ambree</li>
                                            <li class="list-unstyled ms-n2">Norazidi bin Che Amat</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Kecemasan</td>
                                    <td>Zul Hisham bin Zaen Saidin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    <button type="button" class="btn btn-success px-3 float-end me-2 mb-2">Ok</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Kumpula 4 --}}
    <div class="modal fade mt-3" id="kumpulan-4" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Senarai Kumpulan 4</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table align-middle text-center mb-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bidang</th>
                                    <th>Nama Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ketua Kumpulan</td>
                                    <td>Rosdi bin Manaf</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sambutan Murid</td>
                                    <td>Zahariah binti Ghazali</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>RMT</td>
                                    <td>Fauziah binti Tarmimi</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Pemantauan 3K</td>
                                    <td>Azrel Walis bin Abu Fuad</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 1</li>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 2</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Normaizan binti Ambree</li>
                                            <li class="list-unstyled ms-n2">Norazidi bin Che Amat</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Kecemasan</td>
                                    <td>Zul Hisham bin Zaen Saidin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    <button type="button" class="btn btn-success px-3 float-end me-2 mb-2">Ok</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Kumpulan 5 --}}
    <div class="modal fade mt-3" id="kumpulan-5" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Senarai Kumpulan 5</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table align-middle text-center mb-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bidang</th>
                                    <th>Nama Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ketua Kumpulan</td>
                                    <td>Rosdi bin Manaf</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sambutan Murid</td>
                                    <td>Zahariah binti Ghazali</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>RMT</td>
                                    <td>Fauziah binti Tarmimi</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Pemantauan 3K</td>
                                    <td>Azrel Walis bin Abu Fuad</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 1</li>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 2</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Normaizan binti Ambree</li>
                                            <li class="list-unstyled ms-n2">Norazidi bin Che Amat</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Kecemasan</td>
                                    <td>Zul Hisham bin Zaen Saidin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    <button type="button" class="btn btn-success px-3 float-end me-2 mb-2">Ok</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Kumpulan 6 --}}
    <div class="modal fade mt-3" id="kumpulan-6" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Senarai Kumpulan 6</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table align-middle text-center mb-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bidang</th>
                                    <th>Nama Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ketua Kumpulan</td>
                                    <td>Rosdi bin Manaf</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sambutan Murid</td>
                                    <td>Zahariah binti Ghazali</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>RMT</td>
                                    <td>Fauziah binti Tarmimi</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Pemantauan 3K</td>
                                    <td>Azrel Walis bin Abu Fuad</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 1</li>
                                            <li class="list-unstyled ms-n2">Susila Kantin Tahap 2</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="list-unstyled ms-n2">Normaizan binti Ambree</li>
                                            <li class="list-unstyled ms-n2">Norazidi bin Che Amat</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Kecemasan</td>
                                    <td>Zul Hisham bin Zaen Saidin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    <button type="button" class="btn btn-success px-3 float-end me-2 mb-2">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Create -->
    <div class="modal fade mt-3" id="create" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Buat Jadual Guru</h1>
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
                    <button type="button" class="btn btn-primary">Buat Jadual Guru</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade mt-3" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Buat Jadual Guru</h1>
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
                    <button type="button" class="btn btn-warning">Edit Jadual Guru</button>
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
                                Jadual Guru Bertugas Harian 1
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
                                            @if (Auth::user()->jawatan_app != 6)
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="2">Mac</td>
                                            <td>1</td>
                                            <td>19/03/2023 - 23/03/2023</td>
                                            <td>5</td>
                                            <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-1">Kumpulan 1</button></td>
                                            <td>
                                            @if (Auth::user()->jawatan_app != 6)
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            @endif

                                        </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>19/03/2023 - 23/03/2023</td>
                                            <td>5</td>
                                            <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-2">Kumpulan 2</button></td>
                                            <td>
                                            @if (Auth::user()->jawatan_app != 6)
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            @endif

                                        </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5">April</td>
                                            <td>3</td>
                                            <td>02/04/2023 - 06/04/2023</td>
                                            <td>5</td>
                                            <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-3">Kumpulan 3</button></td>
                                            <td>
                                            @if (Auth::user()->jawatan_app != 6)
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            @endif

                                        </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>09/04/2023 - 13/04/2023</td>
                                            <td>5</td>
                                            <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-4">Kumpulan 4</button></td>
                                            <td>
                                            @if (Auth::user()->jawatan_app != 6)
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            @endif

                                        </td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>16/04/2023 - 20/04/2023</td>
                                            <td>5</td>
                                            <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-5">Kumpulan 5</button></td>
                                            </td>
                                            <td>
                                            @if (Auth::user()->jawatan_app != 6)
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            @endif

                                        </td>
                                        </tr>
                                        <tr class="bg-danger text-white">
                                            <td>Cuti Pertengahan Penggal 1, Sesi 2023/2024</td>
                                            <td>21/04/2023 - 29/04/2023</td>
                                            <td>9</td>
                                            <td class="bg-white"></td>
                                            <td class="bg-white">
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>30/04/2023</td>
                                            <td>1</td>
                                            <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-6">Kumpulan 6</button></td>
                                            </td>
                                            <td>
                                            @if (Auth::user()->jawatan_app != 6)
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            @endif

                                        </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5">Mei</td>
                                            <td>6</td>
                                            <td>01/05/2023 - 04/05/2023</td>
                                            <td>4</td>
                                            <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-1">Kumpulan 1</button></td>
                                            <td>
                                            @if (Auth::user()->jawatan_app != 6)
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            @endif

                                        </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>07/05/2023 - 11/05/2023</td>
                                            <td>5</td>
                                            <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-2">Kumpulan 2</button></td>
                                            </td>
                                            <td>
                                            @if (Auth::user()->jawatan_app != 6)
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            @endif

                                        </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>14/05/2023 - 18/05/2023</td>
                                            <td>5</td>
                                            <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-3">Kumpulan 3</button></td>
                                            <td>
                                            @if (Auth::user()->jawatan_app != 6)
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            @endif

                                        </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>21/05/2023 - 25/05/2023</td>
                                            <td>5</td>
                                            <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-4">Kumpulan 4</button></td>
                                            </td>
                                            <td>
                                            @if (Auth::user()->jawatan_app != 6)
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    <i class='bx bxs-edit'></i>
                                            </button>
                                            @endif

                                        </td>
                                        </tr>
                                        <tr class="bg-danger text-white">
                                            <td>Cuti Penggal 1,Sesi 2023/2024</td>
                                            <td>26/05/2023 - 03/06/2023</td>
                                            <td>9</td>
                                            <td class="bg-white"></td>
                                            <td class="bg-white ">
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

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
                                Jadual Guru Bertugas Harian 2
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
                                                @if (Auth::user()->jawatan_app != 6)
                                                    <th>Action</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="2">Mac</td>
                                                <td>1</td>
                                                <td>19/03/2023 - 23/03/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-1">Kumpulan 1</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>19/03/2023 - 23/03/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-2">Kumpulan 2</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5">April</td>
                                                <td>3</td>
                                                <td>02/04/2023 - 06/04/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-3">Kumpulan 3</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>09/04/2023 - 13/04/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-4">Kumpulan 4</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>16/04/2023 - 20/04/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-5">Kumpulan 5</button></td>
                                                </td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr class="bg-danger text-white">
                                                <td>Cuti Pertengahan Penggal 1, Sesi 2023/2024</td>
                                                <td>21/04/2023 - 29/04/2023</td>
                                                <td>9</td>
                                                <td class="bg-white"></td>
                                                <td class="bg-white">
                                                    @if (Auth::user()->jawatan_app != 6)
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#edit">
                                                            <i class='bx bxs-edit'></i>
                                                    </button>
                                                    @endif

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>30/04/2023</td>
                                                <td>1</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-6">Kumpulan 6</button></td>
                                                </td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5">Mei</td>
                                                <td>6</td>
                                                <td>01/05/2023 - 04/05/2023</td>
                                                <td>4</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-1">Kumpulan 1</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>07/05/2023 - 11/05/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-2">Kumpulan 2</button></td>
                                                </td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>14/05/2023 - 18/05/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-3">Kumpulan 3</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>21/05/2023 - 25/05/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-4">Kumpulan 4</button></td>
                                                </td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr class="bg-danger text-white">
                                                <td>Cuti Penggal 1,Sesi 2023/2024</td>
                                                <td>26/05/2023 - 03/06/2023</td>
                                                <td>9</td>
                                                <td class="bg-white"></td>
                                                <td class="bg-white ">
                                                    @if (Auth::user()->jawatan_app != 6)
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#edit">
                                                            <i class='bx bxs-edit'></i>
                                                    </button>
                                                    @endif

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
                                Jadual Guru Bertugas Harian 3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
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
                                                @if (Auth::user()->jawatan_app != 6)
                                                    <th>Action</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="2">Mac</td>
                                                <td>1</td>
                                                <td>19/03/2023 - 23/03/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-1">Kumpulan 1</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>19/03/2023 - 23/03/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-2">Kumpulan 2</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5">April</td>
                                                <td>3</td>
                                                <td>02/04/2023 - 06/04/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-3">Kumpulan 3</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>09/04/2023 - 13/04/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-4">Kumpulan 4</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>16/04/2023 - 20/04/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-5">Kumpulan 5</button></td>
                                                </td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr class="bg-danger text-white">
                                                <td>Cuti Pertengahan Penggal 1, Sesi 2023/2024</td>
                                                <td>21/04/2023 - 29/04/2023</td>
                                                <td>9</td>
                                                <td class="bg-white"></td>
                                                <td class="bg-white">
                                                    @if (Auth::user()->jawatan_app != 6)
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#edit">
                                                            <i class='bx bxs-edit'></i>
                                                    </button>
                                                    @endif

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>30/04/2023</td>
                                                <td>1</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-6">Kumpulan 6</button></td>
                                                </td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5">Mei</td>
                                                <td>6</td>
                                                <td>01/05/2023 - 04/05/2023</td>
                                                <td>4</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-1">Kumpulan 1</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>07/05/2023 - 11/05/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-2">Kumpulan 2</button></td>
                                                </td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>14/05/2023 - 18/05/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-3">Kumpulan 3</button></td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>21/05/2023 - 25/05/2023</td>
                                                <td>5</td>
                                                <td><button class="button-kumpulan" data-bs-toggle="modal" data-bs-target="#kumpulan-4">Kumpulan 4</button></td>
                                                </td>
                                                <td>
                                                @if (Auth::user()->jawatan_app != 6)
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <i class='bx bxs-edit'></i>
                                                </button>
                                                @endif

                                            </td>
                                            </tr>
                                            <tr class="bg-danger text-white">
                                                <td>Cuti Penggal 1,Sesi 2023/2024</td>
                                                <td>26/05/2023 - 03/06/2023</td>
                                                <td>9</td>
                                                <td class="bg-white"></td>
                                                <td class="bg-white ">
                                                    @if (Auth::user()->jawatan_app != 6)
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#edit">
                                                            <i class='bx bxs-edit'></i>
                                                    </button>
                                                    @endif

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
@endsection
