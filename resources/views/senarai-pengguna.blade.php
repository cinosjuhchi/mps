@extends('layouts.master')

@section('title') @lang('Senarai Pengguna') @endsection

@section('css')
    <!-- select2 css -->
    <link href="{{ URL::asset('build/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') User @endslot
@slot('title') Senarai Pengguna @endslot
@endcomponent


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <div class="search-box me-2 mb-2 d-inline-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" id="searchTableList" placeholder="Search...">
                                <i class="bx bx-search-alt search-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="text-sm-end">
                            <button type="button" class="btn btn-warning  waves-effect waves-light addContact-modal mb-2">Import Pengguna   </button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#newContactModal"
                                class="btn btn-primary  waves-effect waves-light addContact-modal mb-2"><i
                                    class="mdi mdi-plus me-1"></i> Tambah Pengguna</button>
                        </div>
                    </div><!--   end col-->
                </div>
                <!-- end row -->
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap table-hover dt-responsive nowrap w-100"
                        id="userList-table">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" style="width: 40px;">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jawatan</th>
                                <th scope="col">E-mel</th>
                                <th scope="col">Jawatan App</th>
                                <th scope="col" style="width: 200px;">Tindakan</th>
                            </tr>
                        </thead>
                    </table>
                    <!-- end table -->
                </div>
                <!-- end table responsive -->
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
    <div class="modal fade" id="newContactModal" tabindex="-1" aria-labelledby="newContactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newContactModalLabel">Add Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="needs-validation createContact-form" id="createContact-form" novalidate>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" class="form-control" id="userid-input">
                                <div class="text-center mb-4">
                                    <div class="position-relative d-inline-block">
                                        <div class="position-absolute bottom-0 end-0">
                                            <label for="member-image-input" class="mb-0" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Select Member Image">
                                                <div class="avatar-xs">
                                                    <div
                                                        class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                        <i class="bx bxs-image-alt"></i>
                                                    </div>
                                                </div>
                                            </label>
                                            <input class="form-control d-none" value="" id="member-image-input"
                                                type="file" accept="image/png, image/gif, image/jpeg">
                                        </div>
                                        <div class="avatar-lg">
                                            <div class="avatar-title bg-light rounded-circle">
                                                <img src="{{ URL::asset('build/images/users/user-dummy-img.jpg') }}" id="member-img"
                                                    class="avatar-md rounded-circle h-auto" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="username-input" class="form-label">Nama</label>
                                    <input type="text" id="username-input" class="form-control" placeholder="Masukan Nama..."
                                        required />
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="jawatan-input" class="form-label">Jawatan</label>
                                    <select name="jawatan" id="jawatan" class="form-select">
                                        <option class="text-disabled" value="#" selected disabled> Masukan Jawatan...</option>
                                        <option value="guru-besar">Guru Besar</option>
                                        <option value="guru-penolong-kanan">Guru Penolong Kanan</option>
                                        <option value="guru-akademik">Guru Akademik</option>
                                        <option value="staf">Staf</option>
                                        <option value="Parent">Parent</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email-input" class="form-label">E-mel</label>
                                    <input type="email" id="email-input" class="form-control"
                                        placeholder="Masukan E-mel" required />
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="designation-input" class="form-label">Jawatan App</label>
                                    <select name="jawatan" id="jawatanApp" class="form-select">
                                        <option class="text-disabled" value="#" selected disabled> Masukan Jawatan App...</option>
                                        <option value="super_admin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                        <option value="admin_jk">Admin JK</option>
                                        <option value="admin_jp">Admin JP</option>
                                        <option value="pengguna">Pengguna</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" id="addContact-btn" class="btn btn-success">Add
                                        Customer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end modal body -->
            </div>
            <!-- end modal-content -->
        </div>
        <!-- end modal-dialog -->
    </div>
<!-- end newContactModal -->

<!-- removeItemModal -->
<div class="modal fade" id="removeItemModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body px-4 py-5 text-center">
                <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="avatar-sm mb-4 mx-auto">
                    <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                        <i class="mdi mdi-trash-can-outline"></i>
                    </div>
                </div>
                <p class="text-muted font-size-16 mb-4">Are you Sure You want to Remove this User ?</p>

                <div class="hstack gap-2 justify-content-center mb-0">
                    <button type="button" class="btn btn-danger" id="remove-item">Remove Now</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
    <!-- select2 js -->
    <script src="{{ URL::asset('build/libs/select2/js/select2.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- ecommerce-customer-list init -->
    <script src="{{ URL::asset('build/js/pages/contact-user-list.init.js') }}"></script>
@endsection
