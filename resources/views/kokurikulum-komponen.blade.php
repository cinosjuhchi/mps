@extends('layouts.master')

@section('title')
    @lang('Komponen Tugas | Kokurikulum')
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Kokurikulum</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pegurusan Komponen</a></li>
                        <li class="breadcrumb-item active">Kokurikulum</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Kumpulan 1 --}}
    <div class="modal fade mt-3" id="kumpulan-1" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Senarai Kumpulan 1 </h1>
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

    {{-- accordion --}}

    <div class="row">
        <x-accordion id="accordionExample">
            <x-accordion.item collapseId="collapseOne-a1" parentId="accordionExample"
                title="A.1 Pengurusan Perancangan Dan Pengoperasian Sekolah" code="404/1">
                {{-- level 2 --}}
                <x-accordion id="sub-a11">
                    <x-accordion.item collapseId="sub-collapseOne-a11" parentId="sub-a11"
                        title="A.1.1 Perancangan Sekolah " code="404/1/1" jawatan="Ketua Data" name="Budi">
                        {{-- level 3 --}}
                        <x-accordion id="sub-sub-a11">
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.1.1 Perancangan Strategik Sekolah
                            </x-accordion.text>

                            <x-accordion.item collapseId="sub-sub-collapseThree-a11" parentId="sub-sub-a11"
                                title="A.1.1.2 Sistem Pengurusan Sekolah (SPS)" code="404/1/1" jawatan="Ketua Data"
                                name="Budi">

                                <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                    A.1.1.2.1 Modul Pengurusan Sekolah (EMIS)
                                </x-accordion.text>
                                <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                    A.1.1.2.2 Modul Pengurusan Guru (e-Operasi)
                                </x-accordion.text>
                                <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                    A.1.1.2.3 Modul Pengurusan Murid(APDM)
                                </x-accordion.text>

                            </x-accordion.item>

                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.1.3 Standard Kualiti Pendidikan Malaysia Gelombang 2 (SKPMg2)
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.1.4 Lembaga Pengelola Sekolah (LPS)
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.1.5 Mesyuarat Pengutusan Sekolah
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.1.6 Kebitaraan/Kecemerlangan Sekolah
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.1.7 Takwim Sekolah
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.1.8 Diaog Prestasi (JPN/PPD/Ibu Bapa/Komuniti)
                            </x-accordion.text>
                        </x-accordion>
                        {{-- level 3 end --}}
                    </x-accordion.item>
                </x-accordion>
                <x-accordion id="sub-a12">
                    <x-accordion.item headingId="sub-headingOne-a12" collapseId="sub-collapseOne-a12" parentId="sub-a12"
                        title="A.1.2 Pelaporan dan Dokumentasi" code="404/1/1" jawatan="Ketua Data" name="Budi">
                        {{-- level 3 --}}
                        <x-accordion id="sub-sub-a12">
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.2.1 Program Sekolah
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.2.2 Lawatan Kerja KPM/JPN/PPD dan Agensi Luar
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.2.3 Pemantauan Awal dan Akhir Tahun
                            </x-accordion.text>
                        </x-accordion>
                        {{-- level 3 end --}}
                    </x-accordion.item>
                </x-accordion>
                <x-accordion id="sub-a13">
                    <x-accordion.item headingId="sub-headingOne-a13" collapseId="sub-collapseOne-a13" parentId="sub-a13"
                        title="A.1.3 Pengurusan Program Pendidikan Khas (PPKI/PPI/PKV)" code="404/1/1"
                        jawatan="Ketua Data" name="Budi">
                        {{-- level 3 --}}
                        <x-accordion id="sub-sub-a13">
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.3.1 Pengurusan Pentadbiran
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.3.2 Pengurusan Kewangan
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.3.3 Pengurusan Kurikulum
                            </x-accordion.text>
                        </x-accordion>
                        {{-- level 3 end --}}
                    </x-accordion.item>
                </x-accordion>
                <x-accordion id="sub-a14">
                    <x-accordion.item headingId="sub-headingOne-a14" collapseId="sub-collapseOne-a14" parentId="sub-a14"
                        title="A.1.4 Prasekolah" code="404/1/1" jawatan="Ketua Data" name="Budi">
                        {{-- level 3 --}}
                        <x-accordion id="sub-sub-a14">
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.4.1 Pengurusan Pendadbiran
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.4.2 Pengurusan Kewangan
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.1.4.3 Pengurusan Kurikulum
                            </x-accordion.text>
                        </x-accordion>
                        {{-- level 3 end --}}
                    </x-accordion.item>
                </x-accordion>
                {{-- level 2 end --}}
            </x-accordion.item>

            <x-accordion.item collapseId="collapseOne-a2" parentId="accordionExample" title="A.2 Pengurus Sumber Manusia"
                code="404/1">
                {{-- level 2 --}}
                <x-accordion id="sub-a21">
                    <x-accordion.item collapseId="sub-collapseOne-a21" parentId="sub-a21" title="A.2.1 Perkhidmatan"
                        code="404/1/1" jawatan="Ketua Data" name="Budi">
                        {{-- level 3 --}}
                        <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                            A.2.1 Pelantikan
                        </x-accordion.text>
                        <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                            A.2.2 Pergerakan Gaji
                        </x-accordion.text>
                        <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                            A.2.3 Kenaikan Pangkat
                        </x-accordion.text>
                        {{-- level 3 end --}}
                    </x-accordion.item>
                </x-accordion>
                <x-accordion id="sub-a22">
                    <x-accordion.item headingId="sub-headingOne-a22" collapseId="sub-collapseOne-a22" parentId="sub-a22"
                        title="A.2.2 Cuti" code="404/1/1" jawatan="Ketua Data" name="Budi">
                        {{-- level 3 --}}
                        <x-accordion id="sub-sub-a22">
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.2.2.1 Cuti Kerana Perkhidmatan
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.2.2.2 Cuti Atas Sebab Perubatan
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.2.2.3 Cuti - Cuti Lain
                            </x-accordion.text>
                        </x-accordion>
                        {{-- level 3 end --}}
                    </x-accordion.item>
                    <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                        A.2.3 Kehadiran dan Keberadaan PPP dan AKP
                    </x-accordion.text>
                </x-accordion>
                {{-- level 2 end --}}
            </x-accordion.item>

            <x-accordion.item collapseId="collapseOne-a3" parentId="accordionExample" title="A.3 Pengurusan Kewangan"
                code="404/1">
                {{-- level 2 --}}
                <x-accordion id="sub-a31">
                    <x-accordion.item collapseId="sub-collapseOne-a31" parentId="sub-a31"
                        title="A.3.1 Pengurusan Kewangan" code="404/1/1" jawatan="Ketua Data" name="Budi">
                        {{-- level 3 --}}
                        <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                            A.3.1.1 Pengurusan Kewangan dan Perakaunan Kumpulan Wang Sekolah
                        </x-accordion.text>
                        <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                            A.3.1.2 Laporan Audit
                        </x-accordion.text>
                        <x-accordion.item collapseId="sub-collapseOne-a311" parentId="sub-a311"
                            title="A.3.1.3 Bantuan Geran Per Kapita (PCG)" code="404/1/1" jawatan="Ketua Data"
                            name="Budi">
                            {{-- level 3 --}}
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.3.1.3.1 Mata Pelajaran
                            </x-accordion.text>
                            <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                                A.3.1.3.2 Bukan Mata Pelajaran
                            </x-accordion.text>
                            {{-- level 3 end --}}
                        </x-accordion.item>
                        {{-- level 3 end --}}
                    </x-accordion.item>
                </x-accordion>
                <x-accordion id="sub-a32">
                    <x-accordion.item headingId="sub-headingOne-a32" collapseId="sub-collapseOne-a32" parentId="sub-a32"
                        title="A.3.2 Kebajikan dan Bantuan Murid" code="404/1/1" jawatan="Ketua Data" name="Budi">
                        <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                            A.3.2.1 Kumpulan Wang Amanah Pelajaran Miskin (KWAPM)
                        </x-accordion.text>
                        <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                            A.3.2.2 Rancangan Makanan Tambahan (RMT)
                        </x-accordion.text>
                        <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                            A.3.2.3 Bantuan Awal Persekolahan (BAP)
                        </x-accordion.text>
                    </x-accordion.item>
                </x-accordion>
                {{-- level 2 end --}}
            </x-accordion.item>

            <x-accordion.item collapseId="collapseOne-a4" parentId="accordionExample" title="A.4 Pentadbiran Pejabat"
                code="404/1">
                {{-- level 2 --}}
                <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                    A.4.1 Perakam Waktu
                </x-accordion.text>
                <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                    A.4.2 Pengurusan Aset Alih Kerajaan
                </x-accordion.text>
                <x-accordion.text code="404/1/1" jawatan="Ketua Data" name="Budi">
                    A.4.3 Pengurusan Aset Tak Alih Kerajaan
                </x-accordion.text>
                {{-- level 2 end --}}
            </x-accordion.item>

            <x-accordion.item collapseId="collapseOne-a5" parentId="accordionExample"
                title="A.5 Persekitaran dan Fizikal" code="404/1">
                {{-- body --}}
            </x-accordion.item>
            <x-accordion.item collapseId="collapseOne-a6" parentId="accordionExample"
                title="A.6 Pembangunan Sumber Manusia" code="404/1">
                {{-- body --}}
            </x-accordion.item>
            <x-accordion.item collapseId="collapseOne-a7" parentId="accordionExample" title="A.7 Perhubungan Luar"
                code="404/1">
                {{-- body --}}
            </x-accordion.item>
        </x-accordion>
        <!-- end accordion -->
    </div>
    </div>
    <!-- end col -->


    <!-- end col -->
    </div>
@endsection
