@extends('layouts.master')

@section('title')
    @lang('Peta Lokasi')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
        @endslot
        @slot('title')
            Peta Lokasi
        @endslot
    @endcomponent

    @if (Auth::user()->jawatan_app != 6)
    <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#create">
        <i class='bx bx-plus'></i> Kemaskini Lokasi
    </button>
    @endif

    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Kemaskini Lokasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="Lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="Lokasi">
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-warning">Kemaskini Lokasi</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <div class="mb-3 text-center">
            <p class="fw-bold">Peta Lokasi</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Peta Lokasi</h4>
                    </div>
                    <div class="card-body">
                        <div id="gmaps-markers" class="gmaps"></div>
                    </div>
                </div>
            </div>
    </div>

    @section('script')
    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

    <!-- Gmaps file -->
    <script src="{{ URL::asset('build/libs/gmaps/gmaps.min.js') }}"></script>

    <!-- demo codes -->
    <script src="{{ URL::asset('build/js/pages/gmaps.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js')}}"></script>
    @endsection
@endsection
