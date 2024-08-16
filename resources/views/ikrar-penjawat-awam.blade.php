@extends('layouts.master')

@section('title')
    @lang('Ikrar Penjawat Awam')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
        @endslot
        @slot('title')
            Ikrar Penjawat Awam
        @endslot
    @endcomponent

    @if (Auth::user()->jawatan_app != 6)
        <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#edit">
            <i class='bx bxs-edit'></i> Kemaskini
        </button>
    @endif

    <!-- Modal Edit -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Edit Ikrar Penjawat Awam</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="ikrar-penjawat-awam" class="form-label">Ikrar Penjawat Awam</label>
                            <input type="text" class="form-control" id="ikrar-penjawat-awam">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-warning">Kemaskini</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <p>Kami yang telah dilantik dengan kerajaan Malaysia membuat ikrar di sini bahawa semasa dan selagi kami berkhidmat
        dengan kerajaan, kami akan patuh dengan mengamalkan teras-teras perkhidmatan semasa menjalankan tugas.</p>
    <p>ke arah ini kami: </p>
    <ul>
        <li>Beragam meningkatkan mutu perkhidmatan</li>
        <li>Berkeja dengan penuh tanggungjawab</li>
        <li>Berusaha mengikis sikap mementingkan diri sendiri</li>
        <li>Berkhidmat dengan penuh muhibah dan kemesraan</li>
        <li>Bekerja ke arah memajukan pemikiran rakyat dan pembangunan negara</li>
        <li>Bekerjasama dalam membanteras kelemahan dan musuh-musuh negara</li>
        <li>Berpegang teguh kepada ajaran agama</li>
    </ul>
@endsection
