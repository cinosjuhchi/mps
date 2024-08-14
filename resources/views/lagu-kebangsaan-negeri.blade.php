@extends('layouts.master')

@section('title')
    @lang('Lagu Kebesaran Negeri')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Lagu</a></li>
        @endslot
        @slot('title')
            Lagu Kebesaran Negeri
        @endslot
    @endcomponent

    <div class="text-center">
        {{-- <video src="{{ asset('videos/Lagu_Negaraku.mp4') }}" class="w-75" controls></video> --}}
        <div class="mt-4">
            <h4 class="">Selamat Sultan</h4>
            <p class="fs-5">
                Lanjutkan Usia Al-Sultan Kami
                <br> Sultan Kelantan Raja Ikrami
                <br> Aman Sentosa Tuhan Sirami
                <br> Kekal Memerintah Kami
                <br> Kasih Dan Taat Setia Disembahkan
                <br> Keriangan Diucapkan
                <br> Segala Kebesaran Allah Cucurkan
                <br> Bertambah Kemuliaan
            </p>
        </div>
    </div>
@endsection
