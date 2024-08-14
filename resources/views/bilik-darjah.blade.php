@extends('layouts.master')

@section('title')
    @lang('Bilik Darjah')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Pengurusan Bilik</a></li>
        @endslot
        @slot('title')
            Bilik Darjah
        @endslot
    @endcomponent

    @if (Auth::user()->jawatan_app != 6)
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#create">
        <i class='bx bx-plus'></i> Tambah Bilik Darjah
    </button>
    @endif

    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Tambah Bilik Darjah</h1>
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
                            <label for="NamaKelas" class="form-label">Nama Kelas</label>
                            <input type="text" class="form-control" id="NamaKelas">
                        </div>
                        <div class="mb-3">
                            <label for="NamaGuruKelas" class="form-label">Nama Guru Kelas</label>
                            {{-- <input type="text" class="form-control" id="NamaGuruKelas"> --}}
                            <select name="NamaGuruKelas" id="NamaGuruKelas" class="form-select">
                                <option value="#" selected disabled></option>
                                <option value="Ck. Mazniyanti binti Zainudin">Ck. Mazniyanti binti Zainudin</option>
                                <option value="Pn. Rufeah binti Ibrahim">Pn. Rufeah binti Ibrahim</option>
                                <option value="Pn. Hjh. Rohani binti Abdullah">Pn. Hjh. Rohani binti Abdullah</option>
                                <option value="Pn. Thuwaibah binti Hassan">Pn. Thuwaibah binti Hassan</option>
                                <option value="Pn. Fauziah binti Ismail">Pn. Fauziah binti Ismail</option>
                                <option value="Pn. Normaizan binti Zahari">Pn. Normaizan binti Zahari</option>
                                <option value="Pn. Siti Fatimah Naim binti Hussain">Pn. Siti Fatimah Naim binti Hussain</option>
                                <option value="Pn. Normah binti Muhammad Nor">Pn. Normah binti Muhammad Nor</option>
                                <option value="Pn. Hjh. Wan Aishah binti Wan Ali">Pn. Hjh. Wan Aishah binti Wan Ali</option>
                                <option value="Pn. Afifah binti Mohamed">Pn. Afifah binti Mohamed</option>
                                <option value="Pn. Rozanita binti Ahmad">Pn. Rozanita binti Ahmad</option>
                                <option value="En. Muhammad Zulhisham bin Abu Zhar">En. Muhammad Zulhisham bin Abu Zhar</option>
                                <option value="Pn. Norsharifati binti Sharifudin">Pn. Norsharifati binti Sharifudin</option>
                                <option value="En. Hazman bin Muhd Yunus">En. Hazman bin Muhd Yunus</option>
                                <option value="Pn. Aishah binti Abdullah">Pn. Aishah binti Abdullah</option>
                                <option value="En. Wan Azhar bin Wan Marzuki">En. Wan Azhar bin Wan Marzuki</option>
                                <option value="Pn. Rosaerah binti Muhammad">Pn. Rosaerah binti Muhammad</option>
                                <option value="Pn. Farawahida binti Hasani">Pn. Farawahida binti Hasani</option>
                                <option value="En. Solehin bin Mokhtar">En. Solehin bin Mokhtar</option>
                                <option value="En. Syad Farhan bin Syed Ibrahim">En. Syad Farhan bin Syed Ibrahim</option>
                            </select>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Tambah Bilik Darjah</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-responsive mb-0 table-bordered  align-middle text-center" data-pattern="priority-columns">
        <thead class=" bg-opacity-75 text-dark ">
            <tr>
                <th>#</th>
                <th>Tahun</th>
                <th>Nama Kelas</th>
                <th>Nama Guru Kelas</th>
                @if (Auth::user()->jawatan_app != 6)
                    <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Prasekolah</td>
                <td>Pra Cemerlang</td>
                <td>Ck. Mazniyanti binti Zainudin</td>
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
                <td rowspan="3">1</td>
                <td>1 Al Biruni</td>
                <td>Pn. Rufeah binti Ibrahim</td>
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
                <td>1 An Nafis</td>
                <td>Pn. Hjh. Rohani binti Abdullah</td>
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
                <td>1 Ar Razi</td>
                <td>Pn. Thuwaibah binti Hassan</td>
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
            <tr>
                <td>5</td>
                <td rowspan="4">2</td>
                <td>2 Al Biruni</td>
                <td>Pn. Fauziah binti Ismail</td>
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
            <tr>
                <td>6</td>
                <td>2 An Nafis</td>
                <td>Pn. Normaizan binti Zahari</td>
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
            <tr>
                <td>7</td>
                <td>2 Ar Razi</td>
                <td>Pn. Siti Fatimah Naim binti Hussain</td>
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
            <tr>
                <td>8</td>
                <td>2 Ar Zahrawi</td>
                <td>Pn. Normah binti Muhammad Nor</td>
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
                <td rowspan="3">3</td>
                <td>3 Al Biruni</td>
                <td>Pn. Hjh. Wan Aishah binti Wan Ali</td>
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
                <td>3 An Nafis</td>
                <td>Pn. Afifah binti Mohamed</td>
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
                <td>3 Ar Razi</td>
                <td>Pn. Rozanita binti Ahmad</td>
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
                <td rowspan="3">4</td>
                <td>4 Al Biruni</td>
                <td>Pn. Norizan binti Abdul Rahman</td>
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
                <td>13</td>
                <td>4 An Nafis</td>
                <td>En. Muhammad Zulhisham bin Abu Zhar</td>
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
                <td>14</td>
                <td>4 Ar Razi</td>
                <td>Pn. Norsharifati binti Sharifudin</td>
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
                <td>15</td>
                <td rowspan="4">5</td>
                <td>5 Al Biruni</td>
                <td>En. Hazman bin Muhd Yunus</td>
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
                <td>16</td>
                <td>5 An Nafis</td>
                <td>Pn. Aishah binti Abdullah</td>
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
                <td>17</td>
                <td>5 Ar Razi</td>
                <td>En. Hamzani binti Hassan</td>
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
                <td>18</td>
                <td>5 Ar Zahrawi</td>
                <td>En. Wan Azhar bin Wan Marzuki</td>
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
                <td>19</td>
                <td rowspan="4">6</td>
                <td>6 Al Biruni</td>
                <td>Pn. Rosaerah binti Muhammad</td>
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
                <td>20</td>
                <td>6 An Nafis</td>
                <td>Pn. Farawahida binti Hasani</td>
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
                <td>21</td>
                <td>6 Ar Razi</td>
                <td>En. Solehin bin Mokhtar</td>
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
                <td>22</td>
                <td>6 Ar Zahrawi</td>
                <td>En. Syad Farhan bin Syed Ibrahim</td>
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
        <div class="modal-dialog modal-dialog-centered text-dark">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Kemaskini Bilik Darjah</h1>
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
                            <label for="NamaKelas" class="form-label">Nama Kelas</label>
                            <input type="text" class="form-control" id="NamaKelas">
                        </div>
                        <div class="mb-3">
                            <label for="NamaGuruKelas" class="form-label">Nama Guru Kelas</label>
                            {{-- <input type="text" class="form-control" id="NamaGuruKelas"> --}}
                            <select name="NamaGuruKelas" id="NamaGuruKelas" class="form-select">
                                <option value="#" selected disabled></option>
                                <option value="Ck. Mazniyanti binti Zainudin">Ck. Mazniyanti binti Zainudin</option>
                                <option value="Pn. Rufeah binti Ibrahim">Pn. Rufeah binti Ibrahim</option>
                                <option value="Pn. Hjh. Rohani binti Abdullah">Pn. Hjh. Rohani binti Abdullah</option>
                                <option value="Pn. Thuwaibah binti Hassan">Pn. Thuwaibah binti Hassan</option>
                                <option value="Pn. Fauziah binti Ismail">Pn. Fauziah binti Ismail</option>
                                <option value="Pn. Normaizan binti Zahari">Pn. Normaizan binti Zahari</option>
                                <option value="Pn. Siti Fatimah Naim binti Hussain">Pn. Siti Fatimah Naim binti Hussain</option>
                                <option value="Pn. Normah binti Muhammad Nor">Pn. Normah binti Muhammad Nor</option>
                                <option value="Pn. Hjh. Wan Aishah binti Wan Ali">Pn. Hjh. Wan Aishah binti Wan Ali</option>
                                <option value="Pn. Afifah binti Mohamed">Pn. Afifah binti Mohamed</option>
                                <option value="Pn. Rozanita binti Ahmad">Pn. Rozanita binti Ahmad</option>
                                <option value="En. Muhammad Zulhisham bin Abu Zhar">En. Muhammad Zulhisham bin Abu Zhar</option>
                                <option value="Pn. Norsharifati binti Sharifudin">Pn. Norsharifati binti Sharifudin</option>
                                <option value="En. Hazman bin Muhd Yunus">En. Hazman bin Muhd Yunus</option>
                                <option value="Pn. Aishah binti Abdullah">Pn. Aishah binti Abdullah</option>
                                <option value="En. Wan Azhar bin Wan Marzuki">En. Wan Azhar bin Wan Marzuki</option>
                                <option value="Pn. Rosaerah binti Muhammad">Pn. Rosaerah binti Muhammad</option>
                                <option value="Pn. Farawahida binti Hasani">Pn. Farawahida binti Hasani</option>
                                <option value="En. Solehin bin Mokhtar">En. Solehin bin Mokhtar</option>
                                <option value="En. Syad Farhan bin Syed Ibrahim">En. Syad Farhan bin Syed Ibrahim</option>
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
