<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MPSOnline | Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('build/css/style.css') }}">
</head>

<body class="bg-welcome" style="overflow-x: hidden">
    <div class="text-white min-vh-100">
        <div class="overlay"></div>
        <div class="row content">
            <div class="image-school">
                <img src="@if(Auth::user()->kategori_sekolah == 'sekolah_rendah'){{ asset('images/logo-sri-angkasa.png') }} @elseif(Auth::user()->kategori_sekolah == 'sekolah_menengah'){{ asset('images/welcome-2.png') }}@endif" alt="" class="d-block m-auto" width="220">
            </div>

            <div class="school-name">
                <p class="text-center fs-5"><b>@if(Auth::user()->kategori_sekolah == 'sekolah_rendah')Sekolah Rendah Sri Angkasa @elseif(Auth::user()->kategori_sekolah == 'sekolah_menengah')Sekolah Menengah Kebangsaan Pinggiran Cyberjaya @endif <br> Kota Bharu , Kelantan</b></p>
            </div>

            <div class="application-name mt-5">
                <h1 style="font-family: roboto; font-size:53px;" class="text-center">MANUAL <br> PENGURUSAN <br> SEKOLAH
                    <br> 2024</h1>
            </div>

            <div class="mt-5">
                <a href="dashboard" class="btn btn-success d-block m-auto" style="width: 300px">Ke dashboard</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
