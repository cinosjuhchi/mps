

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-capitalize">Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">Pengurusan Komponen</li>
                        <li class="breadcrumb-item">Komponen Kokurikulum</li>
                        <li class="breadcrumb-item active">JK dan JP</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-21">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR21 - JK Pengurusan Kokurikulum</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                        <span class="text-muted fst-italic">(GPK Pentadbiran)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class=" btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0"
                                onclick="showDetail(21, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-22">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR22 - JK Pembangunan Sukan Sekolah</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                        <span class="text-muted fst-italic">(GPK Pentadbiran)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class=" btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0" onclick="showDetail(22, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 cardjr" id="card-jr-23">
                    <div class="card card-h-100 shadow-none border border-secondary border-opacity-25">
                        <div class="card-header d-flex">
                            <span class="fw-bold lh-2 d-block">JR23 - JK Sukan Tahunan Sekolah</span>
                            <?php if(Auth::user()->jawatan_app == 7): ?>
                                <button class="btn btn-warning ms-auto"><i class='bx bxs-edit'></i></button>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table class="mb-4">
                                <tr class="align-top">
                                    <td class="text-muted">Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Rahimi bin Saufi</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Guru Besar)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Timbalan Pengerusi</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Marina binti Idris</span>
                                        <br>
                                        <span class="text-muted fst-italic">(GPK Pentadbiran)</span>
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Setiausaha</td>
                                    <td>:</td>
                                    <td>
                                        <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                        <br>
                                        <span class="text-muted fst-italic">(Setiausaha)</span>
                                    </td>
                                </tr>
                            </table>

                            <button
                                class="btn-detail btn bg-secondary bg-opacity-10 text-dark position-absolute bottom-0 end-0 start-0" onclick="showDetail(23, this)">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        

        <div class="show-detail col-md-6 d-none" id="detail-jr-21">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR21 - JK Pengurusan Kokurikulum
                    </h5>
                    <button class="btn" onclick="closeDetail(21)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr21">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                    <span class="fst-italic">GPK Pentadbiran</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                    <span class="fst-italic">Setiausaha</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Jawatankuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Badan Beruniform</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kelab dan Persatuan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Sukan dan Permainan</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr21">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr21', this)" class="btn btn-primary btn-sm">Switch to Carta
                            Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-22">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR22 - JK Pembangunan Sukan Sekolah
                    </h5>
                    <button class="btn" onclick="closeDetail(22)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr22">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                    <span class="fst-italic">GPK Pentadbiran</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                    <span class="fst-italic">Setiausaha</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Jawatankuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Balapan dan Padang</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua Panitia</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Sukan dan Elit</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua Panitia</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Koakademik</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua Panitia</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr22">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr22', this)" class="btn btn-primary btn-sm">Switch to Carta
                            Organisasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-detail col-md-6 d-none" id="detail-jr-23">
            <div class="card border rounded shadow-none border border-dark border-opacity-25 pb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        JR23 - JK Sukan Tahunan Sekolah
                    </h5>
                    <button class="btn" onclick="closeDetail(23)">X</button>
                </div>
                <div class="card-body">
                    
                    <div id="card-jr23">
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Rahimi bin Saufi</span>
                                    <br>
                                    <span class="fst-italic">Guru Besar</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Timbalan Pengerusi</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Marina binti Idris</span>
                                    <br>
                                    <span class="fst-italic">GPK Pentadbiran</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Setiausaha</th>
                                <th>:</th>
                                <td>
                                    <span class="fw-bold">Farizul bin Nor Yaacob</span>
                                    <br>
                                    <span class="fst-italic">Setiausaha</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-borderless">
                            <thead>
                                <tr class="bg-info bg-opacity-10 text-info text-center">
                                    <th colspan="3">Jawatankuasa Pelaksana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>JP Rumah Merah</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Rumah Biru</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Rumah Hijau</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JP Rumah Kuning</th>
                                    <th>:</th>
                                    <td>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger">Ketua</span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                        <p class="align-middle m-0">
                                            Nama <span class="badge bg-danger"></span>
                                        </p>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <div class="bg-primary text-primary bg-opacity-10 rounded border border-primary p-3 mb-3">
                            <p class="fw-bold">Tugas Jawatankuasa</p>
                            <ol>
                                <li>Menetap dan Melaksana</li>
                                <li>Mengadakan mesyuarat jawatankuasa</li>
                                <li>Merancang porgram kurikulum</li>
                                <li>...</li>
                            </ol>
                        </div>
                    </div>
                    

                    
                    <div class="d-none" id="tree-jr23">
                        <div style="width:100%; height:100%;" id="tree"></div>
                    </div>
                    

                    <div class="text-center mt-3">
                        <button onclick="switchToCarta('jr23', this)" class="btn btn-primary btn-sm">Switch to Carta
                            Organisasi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
        <script src="<?php echo e(URL::asset('build/js/style.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('build/js/orgchart.js')); ?>"></script>
        <script>
            function layoutChange(awal, akhir) {
            for (let i = awal; i <= akhir; i++) {
                const cardJr = document.getElementById('card-jr-' + i);
                if (cardJr.classList.contains('col-xl-4')) {
                    cardJr.classList.remove('col-xl-4');
                }
            }
        }

        function showDetail(jr, button) {
            const detailBox = document.getElementById('detail-jr-' + jr);
            const detailShows = document.getElementsByClassName('show-detail');
            const btnDetails = document.getElementsByClassName('btn-detail');

            for (let i = 0; i < btnDetails.length; i++) {
                const btnDetail = btnDetails[i];

                if (btnDetail.classList.contains('btn-primary')) {
                    btnDetail.classList.remove('btn-primary');
                    btnDetail.classList.add('bg-secondary');
                }
            }

            button.classList.add('btn-primary');
            button.classList.remove('bg-secondary');
            button.classList.remove('text-dark');

            for (let i = 0; i < detailShows.length; i++) {
                const detailShow = detailShows[i];

                if (!detailShow.classList.contains('d-none')) {
                    detailShow.classList.add('d-none');
                }
            }

            if (detailBox.classList.contains('d-none')) {
                detailBox.classList.remove('d-none');
                layoutChange(21, 23);
            }
        }

        function closeDetail(jr) {
            const detailBox = document.getElementById('detail-jr-' + jr);
            detailBox.classList.add('d-none');

            const cards = document.getElementsByClassName('cardjr');
            for (let i = 0; i < cards.length; i++) {
                const card = cards[i];
                card.classList.add('col-xl-4');
            }

            const btnDetails = document.getElementsByClassName('btn-detail');
            for (let i = 0; i < btnDetails.length; i++) {
                const btnDetail = btnDetails[i];
                btnDetail.classList.remove('btn-primary');
                if (!btnDetail.classList.contains('bg-secondary')) {
                    btnDetail.classList.add('bg-secondary');
                }
            }
        }
        </script>
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



            function createTree(id) {
                var chart = new OrgChart(document.getElementById(id), {
                    mouseScrool: OrgChart.none,
                    template: 'diva',
                    // layout: OrgChart.tree,
                    enableSearch: false,
                    nodeBinding: {
                        field_0: "nama",
                        field_1: "peranan",
                        img_0: "img"
                    },
                });

                if (id == "tree-jr21") {
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
                            nama: "Norazidi bin Che Amat",
                            peranan: "GPK Hal Ehwal Murid",
                            img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 3,
                            pid: 2,
                            nama: "Marina binti Idris",
                            peranan: "Setiausaha",
                            img: "images/foto_guru/GPK-Pentadbiran.png",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 4,
                            pid: 3,
                            nama: "Faridah Hanim binti Ismail",
                            peranan: "Badan Beruniform",
                            img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 5,
                            pid: 3,
                            nama: "Lee Hock Chan",
                            peranan: "Kelab dan Persatuan",
                            img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 6,
                            pid: 3,
                            nama: "Abdullah Sani bin Husein",
                            peranan: "Sukan Dan Permainan",
                            img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        }
                    ]);
                } else if (id == "tree-jr22") {
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
                            nama: "Norazidi bin Che Amat",
                            peranan: "GPK Hal Ehwal Murid",
                            img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 3,
                            pid: 2,
                            nama: "Marina binti Idris",
                            peranan: "Setiausaha",
                            img: "images/foto_guru/GPK-Pentadbiran.png",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 4,
                            pid: 3,
                            nama: "Faridah Hanim binti Ismail",
                            peranan: "Balapan dan Padang",
                            img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 5,
                            pid: 3,
                            nama: "Lee Hock Chan",
                            peranan: "Sukan dan Elit",
                            img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 6,
                            pid: 3,
                            nama: "Abdullah Sani bin Husein",
                            peranan: "Koakademik",
                            img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        }
                    ]);
                } else if (id == "tree-jr23") {
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
                            nama: "Norazidi bin Che Amat",
                            peranan: "GPK Hal Ehwal Murid",
                            img: "<?php echo e(asset('images/foto_guru/GPK-Hal-Ehwal-Murid.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 3,
                            pid: 2,
                            nama: "Marina binti Idris",
                            peranan: "Setiausaha",
                            img: "images/foto_guru/GPK-Pentadbiran.png",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 4,
                            pid: 3,
                            nama: "Faridah Hanim binti Ismail",
                            peranan: "JP Rumah Merah",
                            img: "<?php echo e(asset('images/foto_guru/GPK-KoKurikulum.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 5,
                            pid: 3,
                            nama: "Lee Hock Chan",
                            peranan: "JP Rumah Biru",
                            img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 6,
                            pid: 3,
                            nama: "Abdullah Sani bin Husein",
                            peranan: "JP Rumah Hijau",
                            img: "<?php echo e(asset('images/foto_guru/GPK-Pendidikan-Khas.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        },
                        {
                            id: 7,
                            pid: 5,
                            nama: "Maliki bin Ayub Khan",
                            peranan: "JP Rumah Kuning",
                            img: "<?php echo e(asset('images/foto_guru/Guru-Bimbingan.png')); ?>",
                            telefon: "019-7421 220",
                            emel: "rahimi.saufi@moe.gov.my"
                        }
                    ]);
                }

            }

            createTree("tree-jr21");
            createTree("tree-jr22");
            createTree("tree-jr23");
        </script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BELAJAR-PROYEK\GRAVIX\mps_cino\mps\resources\views/kokurikulum-jk-jp.blade.php ENDPATH**/ ?>