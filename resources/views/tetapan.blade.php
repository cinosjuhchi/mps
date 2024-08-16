@extends('layouts.master')

@section('title')
    @lang('translation.Jobs')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Dashboards
        @endslot
        @slot('title')
            Tetapan
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            {{-- success --}}
            <div class="card">
                <div class="card-body">
                    <div class="step-title">
                        <i class='bx bxs-check-circle'></i>
                        <h4 class="mb-3">A. Persediaan Asas</h4>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#" class="card stepper">
                                <div class="card-body step-body">
                                    <div class="step-number">1</div>
                                    <div class="step-description">
                                        <h5>Persediaan sekolah</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-check'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="card stepper">
                                <div class="card-body step-body">
                                    <div class="step-number">2</div>
                                    <div class="step-description">
                                        <h5>Memasukkan data guru</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-check'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- kedua --}}
            <div class="card">
                <div class="card-body">
                    <div class="step-title">
                        <i class='bx bxs-check-circle' style="color: lightgray"></i>
                        <h4 class="mb-3">B. persediaan profil</h4>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#" class="card stepper" style="color: gray">
                                <div class="card-body step-body">
                                    <div class="step-number" style="background-color: lightgray">4</div>
                                    <div class="step-description">
                                        <h5>Sediakan profil saya</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-chevron-right'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="card stepper" style="color: gray">
                                <div class="card-body step-body">
                                    <div class="step-number" style="background-color: lightgray">5</div>
                                    <div class="step-description">
                                        <h5>Input maklumat perkhidmatan</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-chevron-right'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="card stepper" style="color: gray">
                                <div class="card-body step-body">
                                    <div class="step-number" style="background-color: lightgray">6</div>
                                    <div class="step-description">
                                        <h5>Maklumat keahlian</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-chevron-right'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="card stepper" style="color: gray">
                                <div class="card-body step-body">
                                    <div class="step-number" style="background-color: lightgray">6</div>
                                    <div class="step-description">
                                        <h5>Surat aku janji</h5>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div class="step-status">
                                        <i class='bx bx-chevron-right'></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end row-->
    <!--end row-->
@endsection
{{-- @section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- crypto dash init js -->
    <script src="{{ URL::asset('build/js/pages/dashboard-job.init.js') }}"></script>
    <!-- app js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection --}}
