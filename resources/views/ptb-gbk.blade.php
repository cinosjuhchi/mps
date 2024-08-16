@extends('layouts.master')

@section('title')
    @lang('Perincian Tugas | Tugas Portofolio Berjawatan')
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-capitalize">Perincian Tugas - Tugas Portofolio Berjawatan</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">Perincian Tugas</li>
                        <li class="breadcrumb-item">Tugas Portofolio Berjawatan</li>
                        <li class="breadcrumb-item active">Kategori PTB GBK</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @if (Auth::user()->jawatan_app == 0)
                <button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#tambahTugas">
                    <i class='bx bx-plus-circle'></i> Tambah Tugas
                </button>
                <!-- Modal Tambah Tugas -->
                <div class="modal fade" id="tambahTugas" tabindex="-1" aria-labelledby="tambahTugasLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="tambahTugasLabel">Tambah Tugas</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="" method="post">
                                <div class="modal-body">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="tugas" class="form-label">Tugas</label>
                                        <input type="text" class="form-control" id="tugas" name="tugas"
                                            placeholder="Masukkan tugas">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="button" class="btn btn-primary">Tambah Tugas</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END Modal Tambah Program -->
                <table class="table align-middle table-hover dt-responsive w-100">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" style="width: 40px;">No</th>
                            <th scope="col">Tugas</th>
                            <th scope="col" style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @else
                <table class="table table-borderless">
                    <tr>
                        <td width="20px">1.</td>
                        <td>Mengendali sesi kaunseling individu sekurang-kurangnya lima (5) waktu seminggu dan kaunseling
                            kelompok sekurang-kurangnya satu (1) waktu seminggu. Murid boleh mendapatkan perkhidmatan
                            bimbingan dan kaunseling pada bila-bila masa dalam dan luar waktu persekolahan mengikut
                            kesesuaian</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Bertanggungjawab membimbing murid berkaitan kemahiran belajar, pendidikan panduan kerjaya murid,
                            pendidikan psikososial dan kesejahteraan mental murid, pendidikan kepimpinan murid, pendidikan
                            pencegahan dadah dan rokok serta pendidikan pencegahan HIV dan AIDS.</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Bertanggungjawab memperkukuhkan program pembangunan modal insan dalam kalangan murid sekolah
                            melalui Program Kaunseling Berfokus, Program Pembimbing Rakan Sebaya, Program Kepemimpinan
                            Pengawas, Program Orientasi Murid dan Kelab Bimbingan dan Kaunseling.</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Menganggotai dan menjadi Setiausaha Jawatankuasa Unit Bimbingan dan Kaunseling.</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Merancang dan memastikan program dan aktiviti untuk murid berdasarkan fokus perkhidmatan unit
                            bimbingan dan kaunseling iaitu pembangunan dan pengembangan sahsiah murid, peningkatan disiplin
                            diri murid, pendidikan kerjaya murid dan psikososial serta kesejahteraan mental murid.</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Menyediakan perkhidmatan kaunseling dan bimbingan khas kepada murid-murid berkeperluan khas di
                            sekolah. GBK juga bertanggungjawab membimbing murid lain untuk menerima, membantu dan sentiasa
                            memberi pertolongan kepada murid-murid berkeperluan khas.</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Membuat rujukan atau memberi khidmat kaunseling kepada murid, guru, kakitangan serta sesiapa
                            sahaja yang memerlukan sekiranya berlaku krisis dalam kawasan sekolah.</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>Membuat penilaian diagnostik keperluan Perkhidmatan Bimbingan dan Kaunseling sekolah melalui
                            kajian keperluan, soal selidik, temu bual dan perbincangan dengan murid, guru, pentadbir,
                            kakitangan sekolah, ibu bapa dan bekas murid.</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>Membuat sebaran kepada murid berkaitan perkhidmatan yang boleh diberi oleh unit bimbingan dan
                            kaunseling.</td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>Menyediakan jadual waktu perkhidmatan bimbingan dan kaunseling persendirian berdasarkan sasaran
                            kerja mingguan yang perlu mendapat pengesahan PGB. Jadual waktu ini hendaklah dipamerkan dalam
                            setiap kelas dan papan kenyataan utama unit bimbingan dan kaunseling sekolah.</td>
                    </tr>
                </table>
            @endif
        </div>
    </div>

    <!-- Modal Edit Program -->
    <div class="modal fade" id="editTugas" tabindex="-1" aria-labelledby="editTugasLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTugasLabel">Edit Tugas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="tugas" class="form-label">Tugas</label>
                            <input type="text" class="form-control" id="tugas" name="tugas"
                                placeholder="Masukkan tugas">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Modal Edit Program -->
@endsection
