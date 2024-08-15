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
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#unggahLagu">
            <i class='bx bx-link'></i> Muat Naik
        </button> --}}
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
    <div class="d-flex justify-content-center align-items-center mt-4">
        <div class="w-50 text-start">
            <h3>[Judul Lagu Sekolah]</h3>
            <p class="fs-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero molestiae quisquam accusantium sed? Ex,
                perferendis asperiores nulla dicta maiores distinctio, totam laboriosam omnis assumenda laudantium
                officiis,
                optio quidem. Voluptatum quasi delectus cum nemo itaque nam suscipit provident similique, incidunt
                earum,
                numquam nihil laboriosam ex eius aut doloremque vero. Illo saepe labore odio nulla ab, quae a neque
                doloremque.
                Hic rerum cupiditate fugit corporis impedit voluptate doloribus, temporibus repudiandae quis non tempora
                quo,
                similique pariatur laboriosam aut excepturi consequuntur molestiae enim minima ut commodi fuga ex
                voluptas
                vitae! Hic aspernatur repellendus veniam, accusantium quod quisquam amet odio, culpa odit atque
                nesciunt.
            </p>
        </div>
    </div>
@endsection
