@extends('layouts.master')

@section('title')
    @lang('Profil Sekolah')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
        @endslot
        @slot('title')
            Profil Sekolah
        @endslot
    @endcomponent
    @if (Auth::user()->jawatan_app != 6)
        <div>
            <button class="btn btn-warning d-block me-auto mb-3"><i class='bx bxs-edit'></i> Kemaskini</button>
        </div>
    @endif
    <form action="">
        <div class="table-responsive">
            <table cellpadding="4" width="100%">
                @if (Auth::user()->jawatan_app == '2' or Auth::user()->kategori_sekolah == 'sekolah_rendah')
                    <tr>
                        <th width="20%"> <label for="nama_sekolah">Nama Sekolah</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="nama_sekolah"
                                value="Sekolah Rendah Sri Angkasa" @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="kod_sekolah">Kod Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="kod_sekolah" value="XYZ999"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th> <label for="kategori_sekolah">Kategori Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="kategori_sekolah"
                                value="Sekolah Rendah(SR)" @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="jenis_sekolah">Jenis Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="jenis_sekolah"
                                value="Sekolah Kebangsaan(SK)" @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="gred">Gred</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="gred" value="A"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th> <label for="sesi_persekolahan">Sesi Persekolahan</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="sesi_persekolahan" value="Pagi sahaja"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="PPD">PPD</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="PPD" value="PPD Kota Baharu"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th> <label for="negeri">Negeri</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="negeri" value="Kelantan"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr class="maklumat-hr my-3">
                        </td>
                    </tr>

                    <tr>
                        <th width="20%"> <label for="no_telefon">No. Telefon</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="no_telefon" value="+609-7412-776"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="no_faksimili">No. Faksimili</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="no_faksimili" value="+609-7412-777"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="e-mel">E-mel</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="e-mel" value="sriangkasa@moe.edu.my"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="instagram">Instagram</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="instagram"
                                value="https://www.instagram.com/sriangkasa"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="facebook">Facebook</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="facebook"
                                value="https://www.facebook.com/sriangkasa"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="alamat">Alamat</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="alamat"
                                value="Jalan Sultan Muhammad V 35000 Kota Bharu"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                @endif

                @if (Auth::user()->jawatan_app == '3' or Auth::user()->kategori_sekolah == 'sekolah_menengah')
                    <tr>
                        <th width="20%"> <label for="nama_sekolah">Nama Sekolah</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="nama_sekolah"
                                value="Sekolah Menengah Kebangsaan Pinggiran Cyberjaya"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="kod_sekolah">Kod Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="kod_sekolah" value="XYZ998"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th> <label for="kategori_sekolah">Kategori Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="kategori_sekolah"
                                value="Sekolah Menengah(SM)" @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="jenis_sekolah">Jenis Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="jenis_sekolah"
                                value="Sekolah Kebangsaan(SK)" @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="gred">Gred</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="gred" value="A"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th> <label for="sesi_persekolahan">Sesi Persekolahan</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="sesi_persekolahan" value="Pagi sahaja"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="PPD">PPD</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="PPD" value="PPD Kota Baharu"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="negeri">Negeri</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="negeri" value="Kelantan"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr class="maklumat-hr my-3">
                        </td>
                    </tr>

                    <tr>
                        <th width="20%"> <label for="no_telefon">No. Telefon</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="no_telefon" value="+609-7412-777"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="no_faksimili">No. Faksimili</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="no_faksimili" value="+609-7412-778"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="e-mel">E-mel</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="e-mel" value="Cyberjaya@moe.edu.my"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif>
                        </td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="instagram">Instagram</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="instagram"
                                value="https://www.instagram.com/Cyberjaya"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="facebook">Facebook</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="facebook"
                                value="https://www.facebook.com/Cyberjaya"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="alamat">Alamat</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="alamat"
                                value="Jalan Sultan Muhammad VI 35001 Kota Bharu"
                                @if (Auth::user()->jawatan_app == 6) disabled @endif></td>
                    </tr>
                @endif


                <div class="row">
                </div>
            </table>
        </div>
    </form>
@endsection
