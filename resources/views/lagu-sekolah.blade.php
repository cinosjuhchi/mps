@extends('layouts.master')

@section('title')
    @lang('Lagu Sekolah')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Lagu</a></li>
        @endslot
        @slot('title')
            Lagu Sekolah
        @endslot
    @endcomponent
    @if (Auth::user()->jawatan_app != 6 and Auth::user()->jawatan_app != 1)
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#unggahLagu">
            <i class='bx bx-link'></i> Muat Naik
        </button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#unggahLirik">
            <i class='bx bx-file'></i> Masukkan Lirik
        </button>
    @endif

    <!-- Modal Lirik -->
    <div class="modal fade" id="unggahLirik" tabindex="-1" aria-labelledby="unggahLirikLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="unggahLirikLabel">Unggah Lirik Lagu Sekolah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Tajuk Lagu</label>
                            <input type="text" name="judul" id="judul" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="lirik" class="form-label">Lirik Lagu</label>
                            <textarea name="lirik" id="lirik" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Unggah</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="unggahLagu" tabindex="-1" aria-labelledby="unggahLaguLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="unggahLaguLabel">Muat Naik Lagu Sekolah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="link" class="form-label">Link Lagu</label>
                            <input type="text" class="form-control" id="link">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Unggah</button>
                </div>
            </div>
        </div>
    </div>

    {{-- LAGU --}}
    <div class="text-center mt-3">
    {{--         
            <video src="{{ asset('videos/Lagu_Negaraku.mp4') }}" class="w-75" controls></video>
            <div class="mt-4">
                <h5 class="text-decoration-underline">Lirik</h5>
                <p class="fs-4">
                    Negaraku
                    <br> Tanah tumpahnya darahku,
                    <br> Rakyat Hidup bersatu dan maju,
                    <br> Rahmat bahagia Tuhan kurniakan,
                    <br> Raja kita Selamat bertakhta,
                    <br> Rahmat bahagia Tuhan kurniakan,
                    <br> Raja kita Selamat bertakhta
                </p>
            </div>
        --}}
    </div>
@endsection
