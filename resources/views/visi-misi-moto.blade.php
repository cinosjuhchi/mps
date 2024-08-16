@extends('layouts.master')

@section('title')
    @lang('Visi, Misi, Moto')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
        @endslot
        @slot('title')
            Visi, Misi, Moto
        @endslot
<<<<<<< HEAD
    @endcomponent    

    <div class="row gap-5">
        <div class="card col p-3 sm-shadow rounded bg-white">
            <div class="mb-2">
                <h4 class="text-dark fw-bold fs-4">Visi</h4>   
                <p class="fw-lighter text-dark fs-5">Pendidikan berkualiti Insan Terdidik Negara Sejahtera</p>
            </div>
            <div>
                <h4 class="text-dark fw-bold fs-4">Misi</h4>   
                <p class="fw-lighter text-dark fs-5">Melestarikan Sistem Pendidikan Yang Berkualiti Untuk Membangun Potensi Individu Bagi Memenuhi Aspirasi Negara</p>
            </div>
        </div>
        <div class="card col p-3 bg-white rounded shadow-sm">            
            <div class="mb-2">
                <h4 class="text-dark fw-bold fs-4">Slogan</h4>   
                <div class="row">                    
                    <div>
                        <label class="form-label">Slogan</label>
                        <input class="form-control" type="text" placeholder="Slogan">
                    </div>            
=======
    @endcomponent
    @if(Auth::user()->jawatan_app != 6)
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
        <i class='bx bxs-edit'></i> Kemaskini
    </button>
    @endif

    <!-- Modal Edit -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Edit - Visi dan Misi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="visi" class="form-label">Visi</label>
                            <input type="text" class="form-control" id="visi">
                        </div>
                        <div class="mb-3">
                            <label for="Misi" class="form-label">Misi</label>
                            <input type="text" class="form-control" id="Misi">
                        </div>
                        <div class="mb-3">
                            <label for="Moto" class="form-label">Moto</label>
                            <input type="text" class="form-control" id="Moto">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-warning">Kemaskini</button>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <div class="mt-3 w-100 text-end">
        <button type="button" class="btn btn-primary w-8 waves-effect waves-light">Simpan Perubahan</button>
    </div>


=======




    <div class="text-center">
        <div class="mb-5">
            <div class="d-flex align-items-center justify-content-center">
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
                <h5>Visi</h5>
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
            </div>
            <p>Pendidikan berkualiti Insan Terdidik Negara Sejahtera</p>
        </div>

        <div class="mb-5">
            <div class="d-flex align-items-center justify-content-center">
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
                <h5>Misi</h5>
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
            </div>
            <p>Melestarikan Sistem Pendidikan Yang Berkualiti Untuk Membangun Potensi Individu Bagi Memenuhi Aspirasi
                Negara</p>
        </div>
        <div class="mb-5">
            <div class="d-flex align-items-center justify-content-center">
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
                <h5>Moto</h5>
                <hr class="border border-dark opacity-25 w-25 d-block mx-4">
            </div>
            <p>Super admin menulis moto sekolah disini</p>
        </div>
    </div>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
@endsection
