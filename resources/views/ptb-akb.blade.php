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
                        <li class="breadcrumb-item active">Kategori PTB-AKB</li>
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
                    <ol type="A">
                        <li class="mb-2">
                            <h5>Aspek Perkeranian</h5>
                            <ol type="1">
                                <li>Pengurusan myPorfolio.</li>
                                <li>Pengurusan surat akuan murid dan sijil murid, guru, dan AKP yang berkaitan.</li>
                                <li>Pengurusan latihan/kursus guru dan AKP.</li>
                                <li>Pengurusan fail sekolah dan rekod am.</li>
                                <li>Pengurusan pekeliling, peraturan, surat arahan, dan makluman sekolah.</li>
                                <li>Pengurusan surat-menyurat.</li>
                                <li>Pengurusan kehadiran pelawat.</li>
                                <li>Pengurusan kemasukan/penempatan/pertukaran murid.</li>
                                <li>Pengurusan penyelenggaraan bahan/peralatan dan bangunan.</li>
                                <li>Pengurusan kehadiran guru, AKP, dan syarikat perkhidmatan swasta.</li>
                                <li>Pengurusan permohonan mendiami rumah kerajaan/kuarters.</li>
                                <li>Pengurusan kemasukan guru, AKP, dan perkhidmatan swasta yang baru melapor diri.</li>
                                <li>Pengemaskinian penyata bulanan maklumat guru, AKP, murid, penyata ringkasan sekolah, dan
                                    lain-lain.</li>
                                <li>Pengurusan perakuan tanggung kerja.
                                </li>
                                <li>Pengurusan pengemaskinian maklumat dalam sistem</li>
                            </ol>
                        </li>
                        <li class="mb-2">
                            <h5>Aspek Kewangan</h5>

                            <ol type="1">
                                <li>Pengurusan penerimaan, perolehan dan bayaran.</li>
                                <li>Pengurusan Panjar Wang Runcit (PWR).</li>
                                <li>Penyelenggaraan Buku Tunai/Buku Subsidiari.</li>
                                <li>Penyediaan penyata tahunan kewangan sekolah.</li>
                                <li>Penyediaan Permohonan Tuntutan Bantuan Persekolahan.</li>
                                <li>Penyediaan Permohonan Bantuan Persekolahan Murid.</li>
                                <li>Pembayaran emolumen dan elaun.</li>
                                <li>Pembayaran tuntutan-tuntutan lain.</li>
                                <li>Penyelenggaraan e-SPKB/Buku Vot (manual).</li>
                                <li>Pengurusan Buku Tunai Cerakinan.</li>
                                <li>Membantu penyediaan anggaran belanja mengurus.</li>
                              </ol>

                        </li>
                        <li class="mb-2">
                            <h5>Pengurusan Aset Alih dan Stor</h5>

                            <ol type="1">
                                <li>Menyertai mesyuarat jawatankuasa pengurusan aset alih kerajaan.</li>
                                <li>Pengurusan aset alih kerajaan.</li>
                                <li>Pengurusan stor kerajaan.</li>
                                <li>Aktiviti penerimaan aset secara hadiah/sumbangan.</li>
                                <li>Pengurusan pelantikan pegawai oleh pegawai pengawal mengemukakan permohonan pelantikan.</li>
                              </ol>

                        </li>
                    </ol>
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
