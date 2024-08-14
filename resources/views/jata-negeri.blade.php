@extends('layouts.master')

@section('title')
    @lang('Jata Negeri')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Maklumat Sekolah
            <li class="breadcrumb-item"><a href="javascript: void(0);">Logo</a></li>
        @endslot
        @slot('title')
            Jata Negeri
        @endslot
    @endcomponent
    @if (Auth::user()->jawatan_app != 6)
        <div>
            <button class="btn btn-warning d-block me-auto mb-3"><i class='bx bxs-edit'></i> Kemaskini Logo</button>
        </div>
    @endif
    <img src="{{ asset('images/Jata_Negeri_Kelantan.png') }}" alt=""
        srcset=""class="img-fluid d-block m-auto" style="width:12rem;">
    @if (Auth::user()->jawatan_app != 6)
        <h3>Deskripsi Logo</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero molestiae quisquam accusantium sed? Ex,
            perferendis asperiores nulla dicta maiores distinctio, totam laboriosam omnis assumenda laudantium officiis,
            optio quidem. Voluptatum quasi delectus cum nemo itaque nam suscipit provident similique, incidunt earum,
            numquam nihil laboriosam ex eius aut doloremque vero. Illo saepe labore odio nulla ab, quae a neque doloremque.
            Hic rerum cupiditate fugit corporis impedit voluptate doloribus, temporibus repudiandae quis non tempora quo,
            similique pariatur laboriosam aut excepturi consequuntur molestiae enim minima ut commodi fuga ex voluptas
            vitae! Hic aspernatur repellendus veniam, accusantium quod quisquam amet odio, culpa odit atque nesciunt.</p>
    @endif
@endsection
