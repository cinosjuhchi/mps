@extends('layouts.master')

@section('title')
    @lang('Aplikasi Penyokong')
@endsection

@section('content')
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18 text-capitalize">Aplikasi Penyokong</h4>
    </div>

    <div>
        <h6>Your apps</h6>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <small class="text-warning bg-warning bg-opacity-25 fw-bold">Premium</small>
                        </div>
                        <div class="text-center my-3">
                            <img src="{{asset('images/logo-mps-online.png')}}" alt="logo-mps-online" class="w-50">
                        </div>
                        <button class="btn btn-outline-primary w-100">See your app</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <small class="text-primary bg-primary bg-opacity-25 fw-bold">Individu</small>
                        </div>
                        <div class="text-center my-3">
                            <img src="{{asset('images/logo-rph-click.png')}}" alt="logo-rph-click" class="w-50">
                        </div>
                        <button class="btn btn-outline-primary w-100">See your app</button>
                    </div>
                </div>
            </div>
        </div>

        <h6>Our apps</h6>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{asset('images/logo-rmt-click.png')}}" alt="logo-rmt-click" class="w-50">
                        </div>
                        <button class="btn btn-primary w-100">Try for free</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{asset('images/logo-zertall.png')}}" alt="logo-zertall" class="w-50">
                        </div>
                        <button class="btn btn-primary w-100">Try for free</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
