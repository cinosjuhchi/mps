@extends('layouts.master')

@section('title')
    @lang('Peta Susun Atur Premis')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
        @endslot
        @slot('title')
            Peta Susun Atur Premis
        @endslot
    @endcomponent

    @if (Auth::user()->jawatan_app != 6)
        <button class="btn btn-light d-block me-auto"><i class='bx bxs-edit'></i> Tambah Gambar</button>
    @endif

    <img src="{{ asset('images/peta-susun-sekolah.jpg') }}" alt="" srcset="" class="img-fluid d-block m-auto"
        style="width:14rem; transform: rotate(90deg);">


    @if (Auth::user()->jawatan_app != 6)
        <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-warning mb-3 me-3"><i class='bx bxs-edit'></i> Edit</button>
            <button class="btn btn-danger mb-3"><i class='bx bxs-trash'></i> Delete</button>
        </div>
    @endif
@endsection
