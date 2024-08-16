@extends('layouts.master')

@section('title')
    @lang('Logo Sekolah')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Logo</a></li>
        @endslot
        @slot('title')
            Logo Sekolah
        @endslot
    @endcomponent
    @if (Auth::user()->jawatan_app != 6)
        <div>
<<<<<<< HEAD
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editMinda">
                <i class='bx bxs-edit'></i> Kemaskini Logo
            </button>
            <!-- Modal -->
            <form action="" class="modal fade" id="editMinda" tabindex="-1" aria-labelledby="editMindaLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editMindaLabel">Kemaskini Logo
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>
                                Muat naik logo
                            </h5>
                            <input type="file" class="form-control">
                            <p>Logo mestilah dalam bentuk JPG, PNG, JPEG dan saiz maksimum 2MB</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-warning">Muat Naik</button>
                        </div>
                    </div>
                </div>
            </form>
=======
            <button class="btn btn-warning d-block me-auto mb-3"><i class='bx bxs-edit'></i> Kemaskini Logo</button>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
        </div>
    @endif
    <img src="{{ asset('images/logo-sri-angkasa.png') }}" alt="" srcset=""class="img-fluid d-block m-auto"
        style="width:12rem;">
    @if (Auth::user()->jawatan_app != 6)
<<<<<<< HEAD
        <div class="d-flex justify-content-center align-items-center">
            <div class="w-75 text-center">
                <h3>Deskripsi Logo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero molestiae quisquam accusantium sed? Ex,
                    perferendis asperiores nulla dicta maiores distinctio, totam laboriosam omnis assumenda laudantium
                    officiis,
                    optio quidem. Voluptatum quasi delectus cum nemo itaque nam suscipit provident similique, incidunt
                    earum,
                    numquam nihil laboriosam ex eius aut doloremque vero. Illo saepe labore odio nulla ab, quae a neque
                    doloremque.
                    Hic rerum cupiditate fugit corporis impedit voluptate doloribus, temporibus repudiandae quis non tempora
                    quo,
                    similique pariatur laboriosam aut excepturi consequuntur molestiae enim minima ut commodi fuga ex
                    voluptas
                    vitae! Hic aspernatur repellendus veniam, accusantium quod quisquam amet odio, culpa odit atque
                    nesciunt.
                </p>
            </div>
        </div>
=======
        <h3>Deskripsi Logo</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero molestiae quisquam accusantium sed? Ex,
            perferendis asperiores nulla dicta maiores distinctio, totam laboriosam omnis assumenda laudantium officiis,
            optio quidem. Voluptatum quasi delectus cum nemo itaque nam suscipit provident similique, incidunt earum,
            numquam nihil laboriosam ex eius aut doloremque vero. Illo saepe labore odio nulla ab, quae a neque doloremque.
            Hic rerum cupiditate fugit corporis impedit voluptate doloribus, temporibus repudiandae quis non tempora quo,
            similique pariatur laboriosam aut excepturi consequuntur molestiae enim minima ut commodi fuga ex voluptas
            vitae! Hic aspernatur repellendus veniam, accusantium quod quisquam amet odio, culpa odit atque nesciunt.</p>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
    @endif
@endsection
