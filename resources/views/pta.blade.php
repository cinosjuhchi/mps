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
                        <li class="breadcrumb-item active">Kategori PTA</li>
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
                        <li>
                            <h5>Bidang Kompetensi</h5>

                            <ul>
                                <li>Bidang 1: Pengurusan dan Kepemimpinan Organisasi</li>
                                <li>Bidang 2: Pengurusan Kurikulum</li>
                                <li>Bidang 3: Pengurusan Kokurikulum</li>
                                <li>Bidang 4: Pengurusan Hal Ehwal Murid</li>
                                <li>Bidang 5: Pengurusan Kewangan</li>
                                <li>Bidang 6: Pengurusan Pentadbiran Pejabat</li>
                                <li>Bidang 7: Pengurusan Persekitaran dan Kemudahan</li>
                                <li>Bidang 8: Pengurusan dan Pembangunan Sumber Manusia</li>
                                <li>Bidang 9: Pengurusan Perhubungan Luar</li>
                            </ul>
                        </li>
                        <li>
                            <h5>Bidang Tugas</h5>

                            <ul>
                                <li>Bertanggung jawab dalam peningkatan kurikulum dan kokurikulum serta memastikan
                                    pelaksanaannya selaras dengan dasar KPM</li>
                                <li>Bertanggungjawab dalam hal pengurusan, pentadbiran dan kewangan sekolah</li>
                                <li>Mewujudkan hubungan dua hala dengan komuniti dan agensi-agensi luar</li>
                                <li>Mengajar sebilangan waktu mengikuti pekeliling 3/67 1982 (Pindaan), iaitu
                                    sekurang-kurangnya lima (5) waktu seminggu bagi jadual 30 minit satu (1) waktu</li>
                            </ul>
                        </li>
                        <li>
                            <h5>Senarai Tugas</h5>
                            <ol>
                                <li>
                                    <h5>Pengurus Kurikulum - Kerja Ikhtisas</h5>
                                    <ul>
                                        <li>Memastikan dasar kurikulum sekolah berlandaskan Dasar Pendidikan Kebangsaan,
                                            kurikulum kebangsaan, kurikulum yang diiktiraf oleh KPM, udang-undang dan
                                            peraturan-peraturan yang berkaitan serta perkembangan terkini</li>
                                        <li>Menyelia dan mengawal setia pelaksanaan kurikulum selaras dengan polisi KPM</li>
                                        <li>Menentukan sasaran sekkolah, merancang peningkatan pengajaran dan pembelajaran
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Pengurusan Pembangunan Diri Murid</h5>
                                    <ul>
                                        <li>
                                            <h6>Hal Ehwal Murid</h6>
                                            <ul>
                                                <li>
                                                    Memastikan dasar pengurusan hal ehwal murid berlandaskan Dasar
                                                    Pendidikan Negara, undang-undang dan peraturan serta perkembangan
                                                    terkini
                                                </li>
                                                <li>
                                                    Memastikan program hal ehwal murid berasaskan prinsip perkembangan
                                                    fisiologi, psikologi, intelek, emosi dan kerohanian murid
                                                </li>
                                                <li>
                                                    Memastikan pengurusan aktiviti berkaitan hal ehwal murid (kebajikan dan
                                                    bantuan) berasaskan prinsip dan peraturan
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h6>Kokurikulum</h6>
                                            <ul>
                                                <li>
                                                    Memastikan dasar pengurusan kokurikulum berlandaskan Dasar Pendidikan
                                                    Kebangsaan, undang-undang dan peraturan serta perkembangan terkini
                                                </li>
                                                <li>
                                                    Merancang dan melaksanakan pelan strategik kokurikum
                                                </li>
                                                <li>
                                                    Memastikan pelaksanaan strategi untuk meningkatkan prestasi murid dalam
                                                    kokurikulum
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Pengurusan dan Pembangunan Sumber Manusia</h5>

                                    <ul>
                                        <li>Membina dan merancang program pengurusan dan pembangunan sumber manusia
                                            berlandaskan Dasar Pendidikan Kebangsaan, undang-undang dan peraturan yang
                                            brkaitan serta perkembangan terkini</li>
                                        <li>Merancang program berasaskan konsep pendidikan sepanjang hayat, pembelajaran
                                            dewasa, perbezaan individu, dan penggunaan model atau teori pembangunan
                                            professional</li>
                                            <li>Merancang strategi untuk meningkatkan prestasi staf</li>
                                    </ul>
                                </li>
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
