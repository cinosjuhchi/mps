@extends('layouts.master')

@section('title')
    @lang('Lagu Negaraku')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Lagu</a></li>
        @endslot
        @slot('title')
            Lagu Negaraku
        @endslot
    @endcomponent
    <div class="text-center">
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
    </div>
@endsection
