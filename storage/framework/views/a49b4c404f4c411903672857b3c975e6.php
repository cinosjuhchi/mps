<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Carta Organisasi Pengurusan Sekolah'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Guru dan Kakitangan
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            COPS
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php if(Auth::user()->jawatan_app != 6 and Auth::user()->jawatan_app != 1): ?>
        <button type="button" class="btn btn-primary tambah-cops mb-3" data-bs-toggle="modal" data-bs-target="#tambahGuru"><i
                class='bx bx-plus'></i>
            Tambah Guru</button>
    <?php endif; ?>


    <!-- Modal Tambah Guru -->
    <div class="modal fade" id="tambahGuru" tabindex="-1" aria-labelledby="tambahGuruLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahGuruLabel">Tambah Guru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" nama="foto" id="foto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" nama="nama" id="nama" class="form-control"
                                placeholder="Masukkan nama guru">
                        </div>
                        <div class="mb-3">
                            <label for="peranan" class="form-label">Peranan</label>
                            <input type="text" nama="peranan" id="peranan" class="form-control"
                                placeholder="Masukkan peranan guru">
                        </div>
                        <div class="mb-3">
                            <label for="telefon" class="form-label">Telefon</label>
                            <input type="telp" nama="telefon" id="telefon" class="form-control"
                                placeholder="Masukkan telefon guru">
                        </div>
                        <div class="mb-3">
                            <label for="emel" class="form-label">Emel</label>
                            <input type="email" nama="emel" id="emel" class="form-control"
                                placeholder="Masukkan emel guru">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="border border-secondary border-opacity-25 border-2 mb-5" style="width:100%; height:700px;" id="tree"></div>





    <script src="<?php echo e(asset('build/js/orgchart.js')); ?>"></script>
    <script>
        OrgChart.templates.diva = Object.assign({}, OrgChart.templates.ana);
        OrgChart.templates.diva.size = [200, 170];
        OrgChart.templates.diva.node =
            '<rect x="0" y="80" height="90" width="200" fill="#fff" stroke="#acacac"></rect>' +
            '<circle cx="100" cy="50" fill="#ffffff" r="50" stroke="#039BE5" stroke-width="2"></circle>';
        OrgChart.templates.diva.img_0 =
            '<clipPath id="{randId}"><circle cx="100" cy="50" r="45"></circle></clipPath>' +
            '<image preserveAspectRatio="xMidYMid slice" clip-path="url(#{randId})" xlink:href="{val}" x="50" y="0" width="100" height="100"></image>';
        OrgChart.templates.diva.field_0 =
            '<text data-width="185" style="font-size: 16px;" fill="#1f1f1f" x="100" y="125" text-anchor="middle">{val}</text>';
        OrgChart.templates.diva.field_1 =
            '<text data-width="185" style="font-size: 13px;" fill="#1f1f1f" x="100" y="145" text-anchor="middle">{val}</text>';
        OrgChart.templates.diva.pointer =
            '<g data-pointer="pointer" transform="matrix(0,0,0,0,100,100)"><radialGradient id="pointerGradient">' +
            '<stop stop-color="#ffffff" offset="0" /><stop stop-color="#039BE5" offset="1" /></radialGradient>' +
            '<circle cx="16" cy="16" r="16" stroke-width="1" stroke="#acacac" fill="url(#pointerGradient)"></circle>' +
            '</g>';
        OrgChart.templates.diva.nodeMenuButton =
            '<g style="cursor:pointer;" transform="matrix(1,0,0,1,175,155)" data-ctrl-n-menu-id="{id}">' +
            '<rect x="-4" y="-10" fill="#000000" fill-opacity="0" width="22" height="22"></rect>' +
            '<circle cx="0" cy="0" r="2" fill="#ffffff"></circle><circle cx="7" cy="0" r="2" fill="#ffffff">' +
            '</circle><circle cx="14" cy="0" r="2" fill="#ffffff"></circle>' +
            '</g>';

        var chart = new OrgChart(document.getElementById("tree"), {
            mouseScrool: OrgChart.none,
            template: 'diva',
            searchDisplayField: 'nama',
            enableSearch: false,
            nodeBinding: {
                field_0: "nama",
                field_1: "peranan",
                img_0: "img"
            },
        });

        chart.load([{
                id: 1,
                nama: "Rahimi bin Saufi",
                peranan: "Guru Besar",
                img: "images/foto_guru/guru-besar.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"

            },
            {
                id: 2,
                pid: 1,
                nama: "Marina binti Idris",
                peranan: "GPK Pentadbiran",
                img: "images/foto_guru/GPK-Pentadbiran.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 3,
                pid: 1,
                nama: "Norazidi bin Che Amat",
                peranan: "GPK Hal Ehwal Murid",
                img: "images/foto_guru/GPK-Hal-Ehwal-Murid.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 4,
                pid: 1,
                nama: "Lee Hock Chan",
                peranan: "GPK KoKurikulum",
                img: "images/foto_guru/GPK-KoKurikulum.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 5,
                pid: 3,
                nama: "Abdullah bin Zawawi",
                peranan: "GPK Pendidikan Khas",
                img: "images/foto_guru/GPK-Pendidikan-Khas.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 6,
                pid: 5,
                nama: "Syarifah Zahrah binti Syed Akbar",
                peranan: "Guru Bimbingan",
                img: "images/foto_guru/Guru-Bimbingan.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 7,
                pid: 6,
                nama: "Maliki bin Ayub Khan",
                peranan: "Guru Penyelaras Bestari",
                img: "images/foto_guru/Guru-Penyelaras-Bestari.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 8,
                pid: 6,
                nama: "Suzana binti Muhammad",
                peranan: "Guru Perpustakaan dan Media",
                img: "images/foto_guru/Guru-Perpustakaan-dan-Media.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 9,
                pid: 6,
                nama: "Razuki bin Rauf",
                peranan: "Guru Data",
                img: "images/foto_guru/Guru-Data.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 10,
                pid: 8,
                nama: "Mazniyanti binti Zainudin",
                peranan: "Guru Prasekolah",
                img: "images/foto_guru/Guru-Prasekolah.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 11,
                pid: 8,
                nama: "Farizul bin Nor Yacoob",
                peranan: "Guru Akademik KSSR",
                img: "images/foto_guru/Guru-Akademik-KSSR-1.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            },
            {
                id: 12,
                pid: 8,
                nama: "Fauziah binti Ismail",
                peranan: "Guru Akademik KSSR",
                img: "images/foto_guru/Guru-Akademik-KSSR-2.png",
                telefon: "019-7421 220",
                emel: "rahimi.saufi@moe.gov.my"
            }
        ]);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.gravix.id/resources/views/cops.blade.php ENDPATH**/ ?>