@extends('layouts.master')

@section('title')
    @lang('Lagu Guru Malaysia')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Lagu</a></li>
        @endslot
        @slot('title')
            Lagu Guru Malaysia
        @endslot
    @endcomponent
    <div class="d-flex justify-content-center align-items-center">
        <div class="w-50 d-flex justify-content-center align-items-center text-start">
            {{-- <video src="{{ asset('videos/Lagu_Negaraku.mp4') }}" class="w-75" controls></video> --}}
            <div class="mt-4">
                <h4 class="">Lagu Guru Malaysia</h4>
                <p class="fs-5">
                    Kami guru Malaysia
                    <br> Berikrar dan berjanji
                    <br> Mendidik dan memimpin
                    <br> Putra putri negara kita
                    <br> Pada Seri Paduka
                    <br> Kami tumpahkan setia
                    <br> Rukun Negara kita
                    <br> Panduan hidup kami semua
                    <br><br> Di bidang pembangunan
                    <br>Kami tetap bersama
                    <br>Membantu, membina
                    <br>Negara yang tercinta
                    <br><br>Amanah yang diberi
                    <br>Kami tak persiakan
                    <br>Apa yang kami janji
                    <br>Tunai tetap kami tunaikan
                </p>
            </div>
        </div>
    </div>
@endsection
