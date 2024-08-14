@extends('layouts.master')

@section('title')
    @lang('senarai-pengawal-keselamatan')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Guru dan Kakitangan
        @endslot
        @slot('title')
            senarai-pengawal-keselamatan
        @endslot
    @endcomponent
    @if (Auth::user()->jawatan_app != 6 and Auth::user()->jawatan_app != 1)
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahGuru"><i
                class='bx bx-plus'></i>
            Tambah Guru</button>
    @endif
    <div class="container">
        <div class="row">
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/guru-besar.png') }}" alt="Foto Diri" class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Rahimi bin Saufi</a></h5>
                    <p class="text-muted mb-4 font-size-14">Guru Besar</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
        </div>

        <hr class="border border-secondary w-100 mb-4">
        <div class="row">
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/GPK-Pentadbiran.png') }}" alt="Foto Diri" class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Marina binti Idris</a></h5>
                    <p class="text-muted mb-4 font-size-14">GPK Pentadbiran</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png') }}" alt="Foto Diri"
                            class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Norazidi bin Che Amat</a></h5>
                    <p class="text-muted mb-4 font-size-14">GPK Hal Ehwal Murid</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/GPK-KoKurikulum.png') }}" alt="Foto Diri" class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Lee Hock Chan</a></h5>
                    <p class="text-muted mb-4 font-size-14">GPK KoKurikulum</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
        </div>
        <div class="row">
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/GPK-Pendidikan-Khas.png') }}" alt="Foto Diri"
                            class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Abdullah bin Zawawi</a></h5>
                    <p class="text-muted mb-4 font-size-14">GPK Pendidikan Khas</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
        </div>
        <hr class="border border-secondary w-100 mb-4">
        <div class="row">
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/Guru-Bimbingan.png') }}" alt="Foto Diri" class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Syarifah Zahrah binti Syed Akbar</a>
                    </h5>
                    <p class="text-muted mb-4 font-size-14">Guru Bimbingan</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
        </div>

        <hr class="border border-secondary w-100 mb-4">
        <div class="row">
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/Guru-Penyelaras-Bestari.png') }}" alt="Foto Diri"
                            class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Maliki bin Ayub Khan</a></h5>
                    <p class="text-muted mb-4 font-size-14">Guru Penyelaras Bestari</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/Guru-Perpustakaan-dan-Media.png') }}" alt="Foto Diri"
                            class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Suzana binti Muhammad</a></h5>
                    <p class="text-muted mb-4 font-size-14">Guru Perpustakaan dan Media</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/Guru-Data.png') }}" alt="Foto Diri" class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Razuki bin Rauf</a></h5>
                    <p class="text-muted mb-4 font-size-14">Guru Data</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
        </div>

        <hr class="border border-secondary w-100 mb-4">
        <div class="row">
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/Guru-Prasekolah.png') }}" alt="Foto Diri"
                            class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Mazniyanti binti Zainudin</a></h5>
                    <p class="text-muted mb-4 font-size-14">Guru Prasekolah</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/Guru-Akademik-KSSR-1.png') }}" alt="Foto Diri"
                            class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Farizul bin Nor Yaacob</a></h5>
                    <p class="text-muted mb-4 font-size-14">Guru Akademik KSSR</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
            <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                <div class="card-body p-0 shadow-none">
                    {{-- <div class="dropdown text-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div> --}}
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images/foto_guru/Guru-Akademik-KSSR-2.png') }}" alt="Foto Diri"
                            class="card-img-top">
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Fauziah binti Ismail</a></h5>
                    <p class="text-muted mb-4 font-size-14">Guru Akademik KSSR</p>
                </div>
                <button type="button" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                    data-bs-target="#profile"><i class="uil uil-user me-1"></i> Profile</button>
            </div>
        </div>
    </div>


    <!-- Modal Profile -->
    <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered mt-5">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="profileLabel">Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card border text-center p-0 mx-auto" style="width: 14rem">
                        <div class="card-body p-0 shadow-none">
                            <div class="mx-auto mb-4">
                                <img src="{{ asset('images/foto_guru/guru-besar.png') }}" alt="Foto Diri"
                                    class="card-img-top">
                            </div>
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Rahimi bin Saufi</a>
                            </h5>
                            <p class="text-muted mb-2 font-size-14">Guru Besar</p>
                        </div>
                        <button class="btn-primary btn w-100 mb-2 mt-3">019-7421 220</button>
                        <button class="btn-primary btn w-100">rahimi.saufi.@moe.gov.my</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Tambah Guru -->
    <div class="modal fade" id="tambahGuru" tabindex="-1" aria-labelledby="tambahGuruLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered mt-5">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahGuruLabel">Tambah Guru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                placeholder="Masukkan nama guru">
                        </div>
                        <div class="mb-3">
                            <label for="peranan" class="form-label">Peranan</label>
                            <input type="text" name="peranan" id="peranan" class="form-control"
                                placeholder="Masukkan peranan guru">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
