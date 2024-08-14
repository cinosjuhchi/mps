@extends('layouts.master')

@section('title')
    @lang('Carta Organisasi Pengurusan Komponen')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Pengurusan Komponen
        @endslot
        @slot('title')
            COPK
        @endslot
    @endcomponent

    @if (Auth::user()->jawatan_app != 6 and Auth::user()->jawatan_app != 1)
        <button type="button" class="btn btn-primary tambah-cops mb-3" data-bs-toggle="modal" data-bs-target="#tambahGuru"><i
                class='bx bx-plus'></i> Tambah Guru</button>

        <!-- Modal Tambah Guru -->
        <div class="modal fade" id="tambahGuru" tabindex="-1" aria-labelledby="tambahGuruLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tambahGuruLabel">Tambah Guru</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" nama="foto" id="foto" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" nama="nama" id="nama" class="form-control"
                                    placeholder="Masukkan nama guru">
                            </div>
                            <div class="mb-3">
                                <label for="peranan" class="form-label">Peranan</label>
                                <input type="text" nama="peranan" id="peranan" class="form-control"
                                    placeholder="Masukkan peranan guru">
                            </div>
                            <div class="mb-3">
                                <label for="telefon" class="form-label">Telefon</label>
                                <input type="telp" nama="telefon" id="telefon" class="form-control"
                                    placeholder="Masukkan telefon guru">
                            </div>
                            <div class="mb-3">
                                <label for="emel" class="form-label">Emel</label>
                                <input type="email" nama="emel" id="emel" class="form-control"
                                    placeholder="Masukkan emel guru">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif



    <div class="card border rounded shadow-sm border border-dark border-opacity-25 pb-2">
        <div class="card-header">
            <h5>
                Carta Organisasi Pengurusan Komponen
            </h5>
        </div>
        <div class="card-body">
            {{-- CARD MODE --}}
            <div id="card-copk">
                <table class="table table-borderless mw-100" style="width: 400px;">
                    <tr>
                        <th>Pengerusi</th>
                        <th>:</th>
                        <td>
                            <span class="fw-bold">Rahimi bin Saufi</span>
                            <br>
                            <span class="fst-italic">Guru Besar</span>
                        </td>
                    </tr>
                </table>

                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="text-bg-primary text-center rounded" colspan="3">Komponen Penguasa dan
                                        Pentadbiran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>GPK Pentadbiran</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Marina binti Idris
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Setiausaha Induk</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Syarifah binti Syed
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan Sekolah</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Mazniyah binti Zainudin
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan Sistem Maklumat</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Farizul bin Nor Yacoob
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan Sumber Manusia</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Fauziah binti Ismail
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan Kewangan, Akaun dan Aset Sekolah</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Abdullah bin Zaawi
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Standart Kualiti Pendidikan Malaysia</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Rahimi bin Saufi
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan Bencana Sekolah</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Norazidi bin Che Amat
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Persatuan Ibu Bapak Guru</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Marina binti Idris
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Kelab Kebajikan Guru dan Kakitangan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Norazidi bin Che Amat
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan Prasekolah</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Lee Hock Chan
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pendidikan Khas</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Abdullah bin Zaawi
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan Murid Orang Asal</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Razuki bin Rauf
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="text-bg-info text-center rounded" colspan="3">Komponen Kurikulum</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>GPK Pentadbiran</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Marina binti Idris
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Setiausaha Induk</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Maliki bin Ayub
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan Kurikulum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Syarifah binti Syed
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Panitia Mata Pelajaran</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Maliki bin Ayub
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pentaksiran</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Suzana binti Muhammad
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pusat Sumber Sekolah</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Razuki bin Rauf
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="text-bg-success text-center rounded" colspan="3">Komponen Hal Ehwal
                                        Murid</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>GPK Hal Ehwal Murid</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Meor Ayubi bin Ali
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Setiausaha Induk</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Suzana binti Muhammad
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan Hal Ehwal Murid</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Mazniyah binti Zainudin
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan Disiplin Murid</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Farizul bin Nor Yacoob
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan 3K</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Fauziah binti Ismail
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Bimbingan dan Kaunseling</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Abdullah bin Zaawi
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan Asrama</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Rahimi bin Saufi
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="text-bg-warning text-center rounded" colspan="3">Komponen KoKurikulum
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>GPK KoKurikulum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Lee Hock Chan
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Setiausaha Induk</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Razuki bin Rauf
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pengurusan KoKurikulum</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Norazidi bin Che Amat
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Pembangunan Sukan Sekolah</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Marina binti Idris
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JK Sukan Taruhan Sekolah</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Norazidi bin Che Amat
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- END CARD MODE --}}

            {{-- TREE MODE --}}
            <div class="d-none" style="width:100%; height: 80vh;" id="tree">
            </div>
            {{-- END TREE MODE --}}
        </div>
    </div>

    <div class="text-center my-3">
        <button onclick="switchToCartaCOPK(this)" class="btn btn-primary btn-sm">Switch to Carta
            Organisasi</button>
    </div>







    <script src="{{ URL::asset('build/js/style.js') }}"></script>
    <script src="{{ URL::asset('build/js/orgchart.js') }}"></script>
    <script>
        OrgChart.templates.diva = Object.assign({}, OrgChart.templates.ana);
        OrgChart.templates.diva.size = [200, 200];
        OrgChart.templates.diva.node =
            '<rect x="0" y="80" height="120" width="200" fill="#fff" stroke="#acacac"></rect>' +
            '<circle cx="100" cy="50" fill="#ffffff" r="50" stroke="#039BE5" stroke-width="2"></circle>';
        OrgChart.templates.diva.img_0 =
            '<clipPath id="{randId}"><circle cx="100" cy="50" r="45"></circle></clipPath>' +
            '<image preserveAspectRatio="xMidYMid slice" clip-path="url(#{randId})" xlink:href="{val}" x="50" y="0" width="100" height="100"></image>';
        OrgChart.templates.diva.field_0 =
            '<text data-width="185" style="font-size: 16px;" fill="#1f1f1f" x="100" y="150" text-anchor="middle">{val}</text>';
        OrgChart.templates.diva.field_1 =
            '<text data-width="185" style="font-size: 13px;" fill="#1f1f1f" x="100" y="170" text-anchor="middle">{val}</text>';
        OrgChart.templates.diva.field_2 =
            '<text data-width="185" style="font-size: 12px;" fill="#adadad" x="100" y="125" text-anchor="middle">{val}</text>';
        OrgChart.templates.diva.pointer =
            '<g data-pointer="pointer" transform="matrix(0,0,0,0,100,100)"><radialGradient id="pointerGradient">' +
            '<stop stop-color="#ffffff" offset="0" /><stop stop-color="#039BE5" offset="1" /></radialGradient>' +
            '<circle cx="16" cy="16" r="16" stroke-width="1" stroke="#acacac" fill="url(#pointerGradient)"></circle>' +
            '</g>';
        OrgChart.templates.diva.nodeMenuButton =
            '<g style="cursor:pointer;" transform="matrix(1,0,0,1,175,155)" data-ctrl-n-menu-id="{id}">' +
            '<rect x="-4" y="-10" fill="#000000" fill-opacity="0" width="22" height="22"></rect>' +
            '<circle cx="0" cy="0" r="2" fill="#ffffff"></circle><circle cx="7" cy="0" r="2" fill="#ffffff">' +
            '</circle><circle cx="14" cy="0" r="2" fill="#ffffff"></circle>' +
            '</g>';

        var chart = new OrgChart(document.getElementById("tree"), {
            mouseScrool: OrgChart.none,
            template: 'diva',
            layout: OrgChart.tree,
            enableSearch: false,
            nodeBinding: {
                field_0: "nama",
                field_1: "peranan",
                field_2: "komponen",
                img_0: "img"
            },
        });

        chart.load([{
                id: 1,
                nama: "Rahimi bin Saufi",
                peranan: "Guru Besar",
                komponen: "Pengerusi",
                img: "images/foto_guru/guru-besar.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 2,
                pid: 1,
                nama: "Marina binti Idris",
                peranan: "GPK Pentadbiran",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/GPK-Pentadbiran.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 3,
                pid: 1,
                nama: "Marina binti Idris",
                peranan: "GPK Pentadbiran",
                komponen: "Komponen Kurikulum",
                img: "images/foto_guru/GPK-Pentadbiran.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 4,
                pid: 1,
                nama: "Norazidi bin Che Amat",
                peranan: "GPK Hal Ehwal Murid",
                komponen: "Komponen Hal Ehwal Murid",
                img: "images/foto_guru/GPK-Hal-Ehwal-Murid.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 5,
                pid: 1,
                nama: "Lee Hock Chan",
                peranan: "GPK KoKurikulum",
                komponen: "Komponen KoKurikulum",
                img: "images/foto_guru/GPK-KoKurikulum.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 6,
                pid: 2,
                nama: "Syarifah binti Syed",
                peranan: "Setiausaha Induk",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/Guru-Bimbingan.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 7,
                pid: 3,
                nama: "Maliki bin Ayub",
                peranan: "Setiausaha Induk",
                komponen: "Komponen Kurikulum",
                img: "images/foto_guru/Guru-Penyelaras-Bestari.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 8,
                pid: 4,
                nama: "Suzana binti Muhammad",
                peranan: "Setiausaha Induk",
                komponen: "Komponen Hal Ehwal Murid",
                img: "images/foto_guru/Guru-Perpustakaan-dan-Media.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 9,
                pid: 5,
                nama: "Razuki bin Rauf",
                peranan: "Setiausaha Induk",
                komponen: "Komponen KoKurikulum",
                img: "images/foto_guru/Guru-Data.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 10,
                pid: 6,
                nama: "Mazniyah binti Zainudin",
                peranan: "JK Pengurusan Sekolah",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/Guru-Prasekolah.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 11,
                pid: 6,
                nama: "Farizul bin Nor Yacoob",
                peranan: "JK Pengurusan Sistem Maklmumat",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/Guru-Akademik-KSSR-1.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 12,
                pid: 6,
                nama: "Fauziah binti Ismail",
                peranan: "JK Pengurusan Sumber Manusia",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/Guru-Akademik-KSSR-2.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 13,
                pid: 6,
                nama: "Abdullah bin Zaawi",
                peranan: "JK Pengurusan Kewangan, Akaun dan Aset Sekolah",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/guru-besar.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 14,
                pid: 6,
                nama: "Rahimi bin Saufi",
                peranan: "JK Standard Kualiti Pendidikan Malaysia",
                img: "images/foto_guru/GPK-Pentadbiran.png",
                komponen: "Komponen Pentadbiran",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 15,
                pid: 6,
                nama: "Norazidi bin Che Amat",
                peranan: "JK Pengurusan Bencana Sekolah",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/GPK-KoKurikulum.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 16,
                pid: 6,
                nama: "Marina binti Idris",
                peranan: "JK Persatuan Ibu Bapa dan Guru",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/GPK-Pendidikan-Khas.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 17,
                pid: 6,
                nama: "Norazidi bin Che Amat",
                peranan: "JK Kelab Kebajiikan Guru dan Kakitangan",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/GPK-Hal-Ehwal-Murid.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 18,
                pid: 6,
                nama: "Lee Hock Chan",
                peranan: "JK Pengurusan Prasekolah",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/Guru-Bimbingan.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 19,
                pid: 6,
                nama: "Abdullah bin Zaawi",
                peranan: "JK Pendidikan Khas",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/Guru-Penyelaras-Bestari.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 20,
                pid: 6,
                nama: "Razuki bin Rauf",
                peranan: "JK Pengurusan Murid Orang Asal",
                komponen: "Komponen Pentadbiran",
                img: "images/foto_guru/Guru-Data.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 21,
                pid: 7,
                nama: "Syarifah binti Syed",
                peranan: "JK Pengurusan Kurikulum",
                komponen: "Komponen Kurikulum",
                img: "images/foto_guru/GPK-Hal-Ehwal-Murid.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 22,
                pid: 7,
                nama: "Maliki bin Ayub",
                peranan: "JK Panitia Mata Pelajaran",
                komponen: "Komponen Kurikulum",
                img: "images/foto_guru/Guru-Penyelaras-Bestari.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 23,
                pid: 7,
                nama: "Suzana binti Muhammad",
                peranan: "JK Pentaksiran",
                komponen: "Komponen Kurikulum",
                img: "images/foto_guru/Guru-Perpustakaan-dan-Media.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 24,
                pid: 7,
                nama: "Razuki bin Rauf",
                peranan: "JK Pusat Sumber Sekolah (PSS)",
                komponen: "Komponen Kurikulum",
                img: "images/foto_guru/Guru-Data.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 25,
                pid: 8,
                nama: "Mazniyah binti Zainudin",
                komponen: "Komponen Hal Ehwal Murid",
                peranan: "JK Pengurusan Hal Ehwal Murid",
                img: "images/foto_guru/Guru-Prasekolah.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 26,
                pid: 8,
                nama: "Farizul bin Nor Yacoob",
                peranan: "JK Pengurusan Hal Disiplin Murid",
                komponen: "Komponen Hal Ehwal Murid",
                img: "images/foto_guru/Guru-Akademik-KSSR-1.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 27,
                pid: 8,
                nama: "Fauziah binti Ismail",
                peranan: "JK Pengurusan 3K (Kebersihan, Kesihatan dan Keselamatan)",
                komponen: "Komponen Hal Ehwal Murid",
                img: "images/foto_guru/Guru-Akademik-KSSR-2.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 28,
                pid: 8,
                nama: "Abdullah bin Zaawi",
                peranan: "JK Bimbingan dan Kaunseling",
                komponen: "Komponen Hal Ehwal Murid",
                img: "images/foto_guru/guru-besar.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 29,
                pid: 8,
                nama: "Rahimi bin Saufi",
                peranan: "JK Pengurusan Asrama",
                komponen: "Komponen Hal Ehwal Murid",
                img: "images/foto_guru/GPK-Pentadbiran.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 30,
                pid: 9,
                nama: "Norazidi bin Che Amat",
                peranan: "JK Pengurusan Kokurikulum",
                komponen: "Komponen KoKurikulum",
                img: "images/foto_guru/GPK-KoKurikulum.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 31,
                pid: 9,
                nama: "Marina binti Idris",
                peranan: "JK Pembangunan Sukan Sekolah",
                komponen: "Komponen KoKurikulum",
                img: "images/foto_guru/GPK-Pendidikan-Khas.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 32,
                pid: 9,
                nama: "Norazidi bin Che Amat",
                peranan: "JK Sukan Tahunan Sekolah",
                komponen: "Komponen KoKurikulum",
                img: "images/foto_guru/GPK-Hal-Ehwal-Murid.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
        ]);
    </script>
@endsection
