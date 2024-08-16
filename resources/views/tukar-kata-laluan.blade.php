@extends('layouts.master')

@section('title')
@lang('Tukar Kata Laluan')
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 text-capitalize font-size-18">Tukar Kata Laluan</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item active">Tukar Kata Laluan</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<form action="">
    <div class="row mb-4">
        <label for="kata-laluan-semasa" class="col-sm-2 col-form-label">Kata laluan semasa</label>
        <div class="col-sm-5 ">
            <!-- <div class="input-group">
                <input type="password" class="form-control" placeholder="Masukkan kata laluan lama" id="kata-laluan-semasa">
                <button class="btn btn-light password-addon" type="button"><i class="mdi mdi-eye-outline"></i></button>
            </div> -->
            <input type="password" class="form-control" placeholder="Masukkan kata laluan lama" id="kata-laluan-semasa">
        </div>
    </div>
    <div class="row mb-4">
        <label for="kata-laluan-baharu" class="col-sm-2 col-form-label">Kata laluan baharu</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" placeholder="Masukkan kata laluan baharu" id="kata-laluan-baharu">
        </div>
    </div>
    <div class="row mb-4">
        <label for="mengesahkan-kata-laluan-baharu" class="col-sm-2 col-form-label">Mengesahkan kata laluan baharu</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" placeholder="Masukkan ulang kata laluan baharu" id="mengesahkan-kata-laluan-baharu">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-5">
            <button type="submit" class="btn btn-primary w-50">Kemaskini</button>
        </div>
    </div>
</form>
@endsection