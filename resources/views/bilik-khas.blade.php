@extends('layouts.master')

@section('title')
    @lang('Bilik Khas')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Pengurusan Bilik</a></li>
        @endslot
        @slot('title')
            Bilik Khas
        @endslot
    @endcomponent

    @if (Auth::user()->jawatan_app != 6)
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#create">
        <i class='bx bx-plus'></i> Tambah Bilik Khas
    </button>
    @endif

    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Tambah Bilik Khas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            @if (Auth::user()->jawatan_app == 2 || Auth::user()->kategori_sekolah == "sekolah_rendah")
                                <label for="Tahun" class="form-label">Tahun</label>
                                <select name="" id="Tahun" class="form-select">
                                    <option value="" selected disabled></option>
                                    <option value="Prasekolah">Prasekolah</option>
                                    <option value="Tahun 1">Tahun 1</option>
                                    <option value="Tahun 2">Tahun 2</option>
                                    <option value="Tahun 3">Tahun 3</option>
                                    <option value="Tahun 4">Tahun 4</option>
                                    <option value="Tahun 5">Tahun 5</option>
                                    <option value="PPKI">PPKI</option>
                                </select>
                            @endif

                            @if (Auth::user()->jawatan_app == 3 || Auth::user()->kategori_sekolah == "sekolah_menengah")
                                <label for="Tahun" class="form-label">Tingkatan</label>
                                <select name="" id="Tahun" class="form-select">
                                    <option value="" selected disabled></option>
                                    <option value="Peralihan">Peralihan</option>
                                    <option value="PPKI">PPKI</option>
                                    <option value="Tingkatan 1">Tingkatan 1</option>
                                    <option value="Tingkatan 2">Tingkatan 2</option>
                                    <option value="Tingkatan 3">Tingkatan 3</option>
                                    <option value="Tingkatan 4">Tingkatan 4</option>
                                    <option value="Tingkatan 5">Tingkatan 5</option>
                                    <option value="Tingkatan 6">Tingkatan 6</option>
                                    <option value="Pra Universiti">Pra Universiti</option>
                                </select>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="NamaBilik" class="form-label">Nama Bilik</label>
                            <input type="text" class="form-control" id="NamaBilik">
                        </div>
                        <div class="mb-3">
                            <label for="NamaGuruPetugas" class="form-label">Nama Guru Petugas</label>
                            {{-- <input type="text" class="form-control" id="NamaGuruPetugas"> --}}
                            <select name="NamaGuruPetugas" id="NamaGuruPetugas" class="form-select">
                                <option value="#"selected disabled></option>
                                <option value="En. Norudin bin Zailani">En. Norudin bin Zailani</option>
                                <option value="Pn. Azlida binti Ali">Pn. Azlida binti Ali</option>
                                <option value="En. Farizul bin Kamarulzaman">En. Farizul bin Kamarulzaman</option>
                                <option value="Pn. Norliza binti Azizi">Pn. Norliza binti Azizi</option>
                                <option value="En. Sayuti bin Yacoob">En. Sayuti bin Yacoob</option>
                                <option value="En. Ahmad Sabri bin Mahadhir">En. Ahmad Sabri bin Mahadhir</option>
                                <option value="Pn. Jamilah Husna Binti Nordin">Pn. Jamilah Husna Binti Nordin</option>
                                <option value="Pn. Nor Atiqah binti Ismail">Pn. Nor Atiqah binti Ismail</option>
                                <option value="En. Fadzil bin Ishak">En. Fadzil bin Ishak</option>
                                <option value="En. Rohaizal bin Tajuddin">En. Rohaizal bin Tajuddin</option>
                                <option value="Pn. Lee Sweee Kim">Pn. Lee Sweee Kim</option>
                                <option value="En. Khairulbixam bin Shafie">En. Khairulbixam bin Shafie</option>
                            </select>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Tambah Bilik Khas</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-responsive mb-0 table-bordered  align-middle text-center" data-pattern="priority-columns">
        <thead class=" bg-opacity-75 text-dark ">
            <tr>
                <th>#</th>
                <th>Nama Bilik</th>
                <th>Nama Guru Petugas</th>
                @if (Auth::user()->jawatan_app != 6)
                    <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Makmal Komputer</td>
                <td>En. Norudin bin Zailani</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
            <tr>
                <td>2</td>
                <td>Pusat Akses</td>
                <td>Pn. Azlida binti Ali</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
            <tr>
                <td>3</td>
                <td>Makmal Sains</td>
                <td>En. Farizul bin Kamarulzaman</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
            <tr>
                <td>4</td>
                <td>Bilik Muzik</td>
                <td>Pn. Norliza binti Azizi</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
            <tr>
                <td>5</td>
                <td>Bilik Seni Visual</td>
                <td>En. Sayuti bin Yacoob</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
            <tr>
                <td>6</td>
                <td>Bengkel Reka Bentuk dan Teknologi</td>
                <td>En. Ahmad Sabri bin Mahadhir</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
            <tr>
                <td>7</td>
                <td>Bilik Rawatan dan Kesihatan</td>
                <td>Pn. Jamilah Husna Binti Nordin</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
            <tr>
                <td>8</td>
                <td>Bilik Pandang Dengar</td>
                <td>Pn. Nor Atiqah binti Ismail</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
            <tr>
                <td>9</td>
                <td>Bilik Tayangan</td>
                <td>En. Fadzil bin Ishak</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
            <tr>
                <td>10</td>
                <td>Bilik Sukan</td>
                <td>En. Rohaizal bin Tajuddin</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
            <tr>
                <td>11</td>
                <td>Makmal Bahasa</td>
                <td>Pn. Lee Sweee Kim</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
            <tr>
                <td>12</td>
                <td>Makmal STEM</td>
                <td>En. Khairulbixam bin Shafie</td>
                @if (Auth::user()->jawatan_app != 6)
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class='bx bxs-edit'></i>
                    </button>
                    <button type="button" class="btn btn-danger"><i
                        class='bx bxs-trash'></i>
                    </button>
                </td>
                @endif
            </tr>
        </tbody>
    </table>

    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Kemaskini Bilik Khas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            @if (Auth::user()->jawatan_app == 2 || Auth::user()->kategori_sekolah == "sekolah_rendah")
                                <label for="Tahun" class="form-label">Tahun</label>
                                <select name="" id="Tahun" class="form-select">
                                    <option value="" selected disabled></option>
                                    <option value="Prasekolah">Prasekolah</option>
                                    <option value="Tahun 1">Tahun 1</option>
                                    <option value="Tahun 2">Tahun 2</option>
                                    <option value="Tahun 3">Tahun 3</option>
                                    <option value="Tahun 4">Tahun 4</option>
                                    <option value="Tahun 5">Tahun 5</option>
                                    <option value="PPKI">PPKI</option>
                                </select>
                            @endif

                            @if (Auth::user()->jawatan_app == 3 || Auth::user()->kategori_sekolah == "sekolah_menengah")
                                <label for="Tahun" class="form-label">Tingkatan</label>
                                <select name="" id="Tahun" class="form-select">
                                    <option value="" selected disabled></option>
                                    <option value="Peralihan">Peralihan</option>
                                    <option value="PPKI">PPKI</option>
                                    <option value="Tingkatan 1">Tingkatan 1</option>
                                    <option value="Tingkatan 2">Tingkatan 2</option>
                                    <option value="Tingkatan 3">Tingkatan 3</option>
                                    <option value="Tingkatan 4">Tingkatan 4</option>
                                    <option value="Tingkatan 5">Tingkatan 5</option>
                                    <option value="Tingkatan 6">Tingkatan 6</option>
                                    <option value="Pra Universiti">Pra Universiti</option>
                                </select>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="NamaBilik" class="form-label">Nama Bilik</label>
                            <input type="text" class="form-control" id="NamaBilik">
                        </div>
                        <div class="mb-3">
                            <label for="NamaGuruPetugas" class="form-label">Nama Guru Petugas</label>
                            {{-- <input type="text" class="form-control" id="NamaGuruPetugas"> --}}
                            <select name="NamaGuruPetugas" id="NamaGuruPetugas" class="form-select">
                                <option value="#"selected disabled></option>
                                <option value="En. Norudin bin Zailani">En. Norudin bin Zailani</option>
                                <option value="Pn. Azlida binti Ali">Pn. Azlida binti Ali</option>
                                <option value="En. Farizul bin Kamarulzaman">En. Farizul bin Kamarulzaman</option>
                                <option value="Pn. Norliza binti Azizi">Pn. Norliza binti Azizi</option>
                                <option value="En. Sayuti bin Yacoob">En. Sayuti bin Yacoob</option>
                                <option value="En. Ahmad Sabri bin Mahadhir">En. Ahmad Sabri bin Mahadhir</option>
                                <option value="Pn. Jamilah Husna Binti Nordin">Pn. Jamilah Husna Binti Nordin</option>
                                <option value="Pn. Nor Atiqah binti Ismail">Pn. Nor Atiqah binti Ismail</option>
                                <option value="En. Fadzil bin Ishak">En. Fadzil bin Ishak</option>
                                <option value="En. Rohaizal bin Tajuddin">En. Rohaizal bin Tajuddin</option>
                                <option value="Pn. Lee Sweee Kim">Pn. Lee Sweee Kim</option>
                                <option value="En. Khairulbixam bin Shafie">En. Khairulbixam bin Shafie</option>
                            </select>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Kemaskini</button>
                </div>
            </div>
        </div>
    </div>
@endsection

