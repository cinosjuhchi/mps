@extends('layouts.master')

@section('title') @lang('Surat Pekeliling Ikhtisas') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Punca Kuasa @endslot
@slot('title') Surat Pekeliling Ikhtisas @endslot
@endcomponent

    @if(Auth::user()->jawatan_app == 0)
    <div class="action d-flex justify-content-between">
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                <i class='bx bx-plus'></i> Tambah Surat
            </button>
        </div>

        <div>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
                <i class='bx bxs-edit'></i>
            </button>
            <button type="button" class="btn btn-danger">
                <i class='bx bxs-trash'></i>
            </button>
        </div>
    </div>
    @endif

<!-- Modal Create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editLabel">Tambah Surat Pekeliling Ikhtisas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="surat-pekeliling-ikhtisas" class="form-label">Surat Pekeliling Ikhtisas</label>
                        <input type="text" class="form-control" id="surat-pekeliling-ikhtisas">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Tambah Surat </button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Edit --}}
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editLabel">Edit Surat Pekeliling Ikhtisas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="surat-pekeliling-ikhtisas" class="form-label">Surat Pekeliling Ikhtisas</label>
                        <input type="text" class="form-control" id="surat-pekeliling-ikhtisas">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-warning">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>




<div class="row mt-3">
    <p class="text-center">Contrary to popular belief, Lorem Ipsum is not simply random text,a Latin professor at Hampden-Sydney College in Virginia.</p>
</div>

@endsection

