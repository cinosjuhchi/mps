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


    <div class="row text-center">
        <h4 class="fs-4 text-dark fw-bold mb-3">Peta Atur Premis</h4>
        <img src="{{ asset('images/foto-premis.png') }}" class="img-fluid" alt="" srcset="">
    </div>

    {{-- <img src="{{ asset('images/foto-premis.png') }}" alt="" srcset="" class="img-fluid d-block m-auto"
        style="width:14rem;"> --}}

@endsection
