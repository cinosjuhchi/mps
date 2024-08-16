@extends('layouts.master')


@section('title')
    @lang('Piagam Pelanggan')
@endsection

@section('content')
<<<<<<< HEAD
    <div class="d-flex justify-content-center">
        <div class="w-50">
            <h4>Piagam Pelanggan</h4>

            <p class="fw-bold">Konsep: Memberi Keutamaan Kepada Pelanggan.</p>

            <P>Kami warga SK.Penampang, Penampang dengan penuh tekad dan iltizam, berikrar dan berjanji menumpukan sepenuh
                perhatian, tenaga dan usaha kami untuk :</P>
            <ol>
                <li>Memberikan pendidikan sempurna kepada semua murid sesuai dengan Falsafah Pendidikan Kebangsaan  tanpa
                    memilih keturunan, kepercayaan, kebudayaan dan fahaman politik.</li>
                <li>Memberi penekanan prestasi akademik murid.</li>
                <li>Menerapkan pembangunan sahsiah dan disiplin murid</li>
                <li>Memastikan keselamatan murid di kawasan sekolah semasa hari persekolahan</li>
                <li>Memberikan peluang kepada semua murid terlibat dalam aktiviti kokurikulum.</li>
                <li>Memberikan layanan professional dan mesra kepada semua pihak yang berurusan dengan sekolah mengikut
                    giliran dan keutamaan.</li>
            </ol>
        </div>
    @endsection
=======
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
        @endslot
        @slot('title')
            Piagam Pelanggan
        @endslot
    @endcomponent

    <img src="{{ asset('images/Logo_MPS.png') }}" alt="" srcset=""class="img-fluid d-block m-auto"
        style="width:4rem;">
    @if (Auth::user()->jawatan_app == 3 or Auth::user()->kategori_sekolah == 'sekolah_menengah')
        <h3 class="text-center mt-3">Piagam Sekolah <br>(Sekolah Menengah Kebangsaan Pinggiran Cyberjaya)</h3>
    @endif
    @if (Auth::user()->jawatan_app == 2 or Auth::user()->kategori_sekolah == 'sekolah_rendah')
        <h3 class="text-center mt-3">Piagam Sekolah <br>(Sekolah Rendah Sri Angkasa)</h3>
    @endif
    @if (Auth::user()->jawatan_app == 6)
        <ul class="list-group list-group-numbered">
            <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur.</li>
            <li class="list-group-item border-0">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
            <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum!</li>
            <li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, sapiente?
            </li>
        </ul>
    @endif

    @if (Auth::user()->jawatan_app != 6)
        <form action="" method="post">
            @csrf
            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control"
                placeholder="Sekolah Menengah Kebangsaan Pinggiran Cyberjaya">

            <div class="mt-3 mb-3">
                <input id="deskripsi-piagam_sekolah" type="hidden" name="deskripsi-piagam_sekolah" value="">
                <trix-editor input="deskripsi-piagam_sekolah" placeholder="Tulis Piagam Pelanggan"></trix-editor>
            </div>

            <button type="button" class="btn btn-primary w-100">Kemaskini</button>
        </form>
    @endif
@endsection
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
