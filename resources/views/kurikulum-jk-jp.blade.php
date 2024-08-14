@extends('layouts.master')

@section('title')
    @lang('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)')
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-capitalize">Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">Pengurusan Komponen</li>
                        <li class="breadcrumb-item">Komponen Kurikulum</li>
                        <li class="breadcrumb-item active">JK dan JP</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-12">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header">
                            <span class="fw-bold lh-2 d-block">JR12 - JK Pengurusan Kurikulum</span>
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
                                class=" btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(12, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-13">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header">
                            <span class="fw-bold lh-2 d-block">JR13 - JK Panitia Mata Pelajaran</span>
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
                                class=" btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0" onclick="showDetail(13, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-14">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header">
                            <span class="fw-bold lh-2 d-block">JR14 - JK Pentaksiran</span>
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
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0" onclick="showDetail(14, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-15">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header">
                            <span class="fw-bold lh-2 d-block">JR15 - JK Pusat Sumber Sekolah</span>
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
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0" onclick="showDetail(15,this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="show-detail col-md-6 d-none" id="detail-jr-12">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR12 - JK Pengurusan Kurikulum
                    </h5>
                    <button class="btn" onclick="closeDetail(12)">X</button>
                </div>
                <div class="card-body">
                    {{-- CARD MODE --}}
                    <div id="card-jr12">
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
                                    <th>JP Jadual Waktu</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP KSSR</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Program Kecemerlangan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Pemulihan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Program Transisi</th>
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
                    {{-- END CARD MODE --}}

                    {{-- TREE MODE --}}
                    <div class="d-none" id="tree-jr12">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    {{-- END TREE MODE --}}

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr12', this)" class="btn btn-primary btn-sm">Switch to Carta
                            Organisasi</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="show-detail col-md-6 d-none" id="detail-jr-13">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR13 - JK Panitia Mata Pelajaran
                    </h5>
                    <button class="btn" onclick="closeDetail(13)">X</button>
                </div>
                <div class="card-body">
                    {{-- CARD MODE --}}
                    <div id="card-jr13">
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
                                    <th>Panitia Bahasa Melayu</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua Panitia</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Panitia Bahasa Inggris</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua Panitia</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Panitia Matematika</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua Panitia</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Panitia Sains</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Panitia Pendidikan Islam</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Panitia Bahasa Arab</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Panitia Pend. Seni Visual</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Panitia Pend. Muzik</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Panitia Pen Jasmani dan Pend. Kesihatan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Panitia Pendidikan Moral</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Panitia Sejarah</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Panitia Reka Bentuk dan Teknologi</th>
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
                    {{-- END CARD MODE --}}

                    {{-- TREE MODE --}}
                    <div class="d-none" id="tree-jr13">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    {{-- END TREE MODE --}}

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr13', this)" class="btn btn-primary btn-sm">Switch to Carta
                            Organisasi</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="show-detail col-md-6 d-none" id="detail-jr-14">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR14 - JK Pentaksiran
                    </h5>
                    <button class="btn" onclick="closeDetail(14)">X</button>
                </div>
                <div class="card-body">
                    {{-- CARD MODE --}}
                    <div id="card-jr14">
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
                                    <th>JP Pelaporan Pentaksiran Sekolah Rendah (PPSR)</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Setiausaha</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Pentaksiran Bilik Darjah (PBD)</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Setiausaha</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Ujian Penilaian Kelas KAFA (UPKK)</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Setiausaha</span>
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
                    {{-- END CARD MODE --}}

                    {{-- TREE MODE --}}
                    <div class="d-none" id="tree-jr14">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    {{-- END TREE MODE --}}

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr14', this)" class="btn btn-primary btn-sm">Switch to Carta
                            Organisasi</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="show-detail col-md-6 d-none" id="detail-jr-15">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR15 - JK Pusat Sumber Sekolah
                    </h5>
                    <button class="btn" onclick="closeDetail(15)">X</button>
                </div>
                <div class="card-body">
                    {{-- CARD MODE --}}
                    <div id="card-jr15">
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
                                    <th>JP Perpustakaan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Program NILAM</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Bahan Bantu Mengajar (BBM)</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Pembelajaran Akses Kendiri (SAL)</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Tayangan/Astro</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Program</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Makmal Komputer</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Guru Penyelaras Bestari</span>
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
                    {{-- END CARD MODE --}}

                    {{-- TREE MODE --}}
                    <div class="d-none" id="tree-jr15">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    {{-- END TREE MODE --}}

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr15', this)" class="btn btn-primary btn-sm">Switch to Carta
                            Organisasi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- TREE (JS) --}}
    <script src="{{ URL::asset('build/js/style.js') }}"></script>
    <script src="{{ URL::asset('build/js/orgchart.js') }}"></script>
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
                layoutChange(12, 15);
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
                enableSearch: false,
                nodeBinding: {
                    field_0: "nama",
                    field_1: "peranan",
                    img_0: "img"
                },
            });

            if(id== "tree-jr12"){
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
                        img: "images/foto_guru/GPK-Hal-Ehwal-Murid.png",
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
                        nama: "Lee Hock Chan",
                        peranan: "JP Pengurusan Kurikulum",
                        img: "images/foto_guru/GPK-Kokurikulum.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Abdullah bin Zawawi",
                        peranan: "JP KSSR",
                        img: "images/foto_guru/GPK-Pendidikan-Khas.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Farizul bin Nor Yacoob",
                        peranan: "JP Program Kecemerlangan",
                        img: "images/foto_guru/Guru-Akademik-KSSR-1.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Fauziah binti Ismail",
                        peranan: "JP Pemulihan",
                        img: "images/foto_guru/Guru-Akademik-KSSR-2.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP Program Transisi",
                        img: "images/foto_guru/Guru-Perpustakaan-dan-Media.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            }else if(id == "tree-jr13"){
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
                        nama: "Marina binti Idris",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Norazidi bin Che Amat",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Hal-Ehwal-Murid.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "Panitia Bahasa Melayu",
                        img: "images/foto_guru/GPK-Kokurikulum.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Abdullah bin Zawawi",
                        peranan: "Panitia Bahasa Inggris",
                        img: "images/foto_guru/GPK-Pendidikan-Khas.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Syarifah Zahrah binti Syed Akbar",
                        peranan: "Panitia Matematik",
                        img: "images/foto_guru/Guru-Bimbingan.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "Panitia Sains",
                        img: "images/foto_guru/Guru-Penyelaras-Bestari.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Razuki bin Rauf",
                        peranan: "Panitia Pendidikan Islam",
                        img: "images/foto_guru/Guru-Data.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 9,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "Panitia Bahasa Arab",
                        img: "images/foto_guru/Guru-Perpustakaan-dan-Media.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 10,
                        pid: 8,
                        nama: "Mazniyanti binti Zainudin",
                        peranan: "Panitia Pend. Seni Visual",
                        img: "images/foto_guru/Guru-Prasekolah.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 11,
                        pid: 8,
                        nama: "Farizul bin Nor Yacoob",
                        peranan: "Panitia Pend. Seni Muzik",
                        img: "images/foto_guru/Guru-Akademik-KSSR-1.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 12,
                        pid: 8,
                        nama: "Fauziah binti Ismail",
                        peranan: "Panitia Pend. Jasmani dan Pend. Kesihatan",
                        img: "images/foto_guru/Guru-Akademik-KSSR-2.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 13,
                        pid: 11,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "Panitia Pendidikan Moral",
                        img: "images/foto_guru/Guru-Penyelaras-Bestari.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 14,
                        pid: 11,
                        nama: "Suzana binti Muhammad",
                        peranan: "Panitia Sejarah",
                        img: "images/foto_guru/Guru-Perpustakaan-dan-Media.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 15,
                        pid: 11,
                        nama: "Razuki bin Rauf",
                        peranan: "Panitia Reka Bentuk dan Teknologi",
                        img: "images/foto_guru/Guru-Data.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            }else if(id == "tree-jr14"){
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
                        nama: "Marina binti Idris",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Norazidi bin Che Amat",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Hal-Ehwal-Murid.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "JP Pelaporan Pentaksiran Sekolah Rendah (PPSR)",
                        img: "images/foto_guru/GPK-Kokurikulum.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Abdullah bin Zawawi",
                        peranan: "JP Pentaksiran Bilik Darjah (PBD)",
                        img: "images/foto_guru/GPK-Pendidikan-Khas.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Syarifah Zahrah binti Syed Akbar",
                        peranan: "JP Ujian Penilaian Kelas KAFA (UPKK)",
                        img: "images/foto_guru/Guru-Bimbingan.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                ]);
            }else if(id == "tree-jr15"){
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
                        nama: "Marina binti Idris",
                        peranan: "GPK Hal Ehwal Murid",
                        img: "images/foto_guru/GPK-Pentadbiran.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 3,
                        pid: 2,
                        nama: "Norazidi bin Che Amat",
                        peranan: "Setiausaha",
                        img: "images/foto_guru/GPK-Hal-Ehwal-Murid.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 4,
                        pid: 3,
                        nama: "Lee Hock Chan",
                        peranan: "JP Perpustakaan",
                        img: "images/foto_guru/GPK-Kokurikulum.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 5,
                        pid: 3,
                        nama: "Abdullah bin Zawawi",
                        peranan: "JP Program NILAM",
                        img: "images/foto_guru/GPK-Pendidikan-Khas.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 6,
                        pid: 3,
                        nama: "Syarifah Zahrah binti Syed Akbar",
                        peranan: "JP Bahan Bantu Mengajar (BBM)",
                        img: "images/foto_guru/Guru-Bimbingan.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 7,
                        pid: 5,
                        nama: "Maliki bin Ayub Khan",
                        peranan: "JP Pembelajaran Akses Kendiri (SAL)",
                        img: "images/foto_guru/Guru-Penyelaras-Bestari.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 8,
                        pid: 5,
                        nama: "Suzana binti Muhammad",
                        peranan: "JP Tayangan/Astro",
                        img: "images/foto_guru/Guru-Perpustakaan-dan-Media.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 9,
                        pid: 5,
                        nama: "Razuki bin Rauf",
                        peranan: "JP Program",
                        img: "images/foto_guru/Guru-Data.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    },
                    {
                        id: 10,
                        pid: 8,
                        nama: "Mazniyanti binti Zainudin",
                        peranan: "JP Makmal Komputer",
                        img: "images/foto_guru/Guru-Prasekolah.png",
                        telefon: "019-7421 220",
                        emel: "rahimi.saufi@moe.gov.my"
                    }
                ]);
            }

        }

        createTree("tree-jr12");
        createTree("tree-jr13");
        createTree("tree-jr14");
        createTree("tree-jr15");

    </script>
@endsection
