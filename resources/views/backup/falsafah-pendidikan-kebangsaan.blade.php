@extends('layouts.master')

@section('title') @lang('Falsafah Pendidikan Kebangsaan') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Maklumat Sekolah @endslot
@slot('title') Falsafah Pendidikan Kebangsaan @endslot
@endcomponent

<div class="row justify-content-center py-5">
    <div class="col-4">
    <h4 class="text-dark fs-4 fw-bold mb-3">Falsafah Pendidikan Kebangsaan</h4>
    <p class="text-dark fs-5 fw-normal text-start">
        Pendidikan di Malaysia ialah
        Satu usaha berterusan ke arah memperkembangkan lagi potensi individu
        secara menyeluruh dan bersepadu untuk mewujudkan insan yang
        seimbang dan harmonis dari segi intelek, rohani, emosi dan jasmani
        berdasarkan kepercayaan dan kepatuhan kepada Tuhan. Usaha ini adalah
        bagi melahirkan rakyat Malaysia yang berilmu, bertanggungjawab dan
        berkeupayaan mencapai kesejahteraan diri serta memberi sumbangan
        terhadap keharmonian dan kemakmuran masyarakat dan Negara.</p>
    </div>
</div>

@endsection
