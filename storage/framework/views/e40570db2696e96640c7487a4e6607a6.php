<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('Profilku'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <img src="<?php echo e(asset('images/avatar-1.jpg')); ?>" alt="Profilku" width="100" height="100" class="rounded-circle">
                    <div class="d-flex flex-column justify-content-center ms-4">
                        <h4 class="card-title"><?php echo e(ucfirst(Auth::user()->name)); ?></h4>
                        <p class="card-title-desc">
                            <?php if(Auth::user()->level == 0): ?>
                            Super Admin
                            <?php else: ?>
                            Admin
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#profilku" role="tab">
                            <span class="d-block d-sm-none"><i class='bx bxs-user'></i></span>
                            <span class="d-none d-sm-block">Profilku</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#maklumat-perkhidmatan" role="tab">
                            <span class="d-block d-sm-none"><i class="bx bxs-school"></i></span>
                            <span class="d-none d-sm-block">Maklumat Perkhidmatan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#maklumat-keahlian" role="tab">
                            <span class="d-block d-sm-none"><i class="bx bxs-school"></i></span>
                            <span class="d-none d-sm-block">Maklumat Keahlian</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#surat-aku-janji" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Surat Aku Janji</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#senarai-tugas" role="tab">
                            <span class="d-block d-sm-none"><i class='bx bx-task'></i></span>
                            <span class="d-none d-sm-block">Senarai Tugas</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 pt-5 text-muted">
                    <div class="tab-pane active" id="profilku" role="tabpanel">
                        <form action="">
                            <div class="row mb-4">
                                <label for="gelaran" class="col-sm-2 col-form-label">Gelaran</label>
                                <div class="col-sm-5">
                                    <select class="form-select" id="gelaran">
                                        <option disabled selected>Pilih Gelaran</option>
                                        <option>Tuan</option>
                                        <option>Puan</option>
                                        <option>Encik</option>
                                        <option>Cik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" value="<?php echo e(Auth::user()->name); ?>" id="nama" disabled>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="jawatan-sekolah" class="col-sm-2 col-form-label">Jawatan Sekolah</label>
                                <div class="col-sm-5">
                                    <select class="form-select" id="jawatan-sekolah" disabled>
                                        <option <?php if(Auth::user()->jawatan_sekolah == "Guru Besar"): ?> selected <?php endif; ?>>Guru Besar</option>
                                        <option <?php if(Auth::user()->jawatan_sekolah == "Guru Penolong Kanan"): ?> selected <?php endif; ?>>Guru Penolong Kanan</option>
                                        <option <?php if(Auth::user()->jawatan_sekolah == "Guru Akademik"): ?> selected <?php endif; ?>>Guru Akademik</option>
                                        <option <?php if(Auth::user()->jawatan_sekolah == "Staf"): ?> selected <?php endif; ?>>Staf</option>
                                        <option <?php if(Auth::user()->jawatan_sekolah == "Parent"): ?> selected <?php endif; ?>>Parent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="jawatan-aplikasi" class="col-sm-2 col-form-label">Jawatan Aplikasi</label>
                                <div class="col-sm-5">
                                    <select class="form-select" id="jawatan-sekolah" disabled>
                                        <option <?php if(Auth::user()->jawatan_app == 0): ?> selected <?php endif; ?>>Super Admin</option>
                                        <option <?php if(Auth::user()->jawatan_app == 1): ?> selected <?php endif; ?>>Admin</option>
                                        <option <?php if(Auth::user()->jawatan_app == 2): ?> selected <?php endif; ?>>Pengguna</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="no-telepon" class="col-sm-2 col-form-label">No. Telefon</label>
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" placeholder="Masukkan nombor telefon" id="no-telepon">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="e-mel" class="col-sm-2 col-form-label">E-mel</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" placeholder="Masukkan emel" id="e-mel">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-5">
                                    <button type="submit" class="btn btn-primary w-50">Kemaskini</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="maklumat-perkhidmatan" role="tabpanel">
                        <div class="text-center mb-3">
                            <img src="<?php echo e(asset('images/avatar-1.jpg')); ?>" alt="logo" width="100" class="mb-4"><br>
                            <span class="fs-6 fw-bold">Maklumat Perkhidmatan</span>
                        </div>
                        <table cellpadding="4" width="100%">
                            <tr>
                                <th width="20%">Angka Pejabat</th>
                                <td>:</td>
                                <td><span class="text-primary">D396228</span></td>
                            </tr>
                            <tr>
                                <th>Gred</th>
                                <td>:</td>
                                <td><span class="text-primary">DG48 (KUP)</span></td>
                            </tr>
                            <tr>
                                <th>Jawatan</th>
                                <td>:</td>
                                <td><span class="text-primary">Guru Akademik KSSR</span></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr class="maklumat-hr my-3">
                                </td>
                            </tr>
                            <tr>
                                <th>Tarikh Lantikan 1</th>
                                <td>:</td>
                                <td><span class="text-primary">16/02/1991</span></td>
                            </tr>
                            <tr>
                                <th>Tarikh Sah Jawatan</th>
                                <td>:</td>
                                <td><span class="text-primary">16/02/1992</span></td>
                            </tr>
                            <tr>
                                <th>Tarikh Masuk Skim Pencen</th>
                                <td>:</td>
                                <td><span class="text-primary">16/02/1992</span></td>
                            </tr>
                            <tr>
                                <th>Tarikh Lapor Diri di Sekolah Ini</th>
                                <td>:</td>
                                <td><span class="text-primary">16/02/1992</span></td>
                            </tr>
                            <tr>
                                <th>Tarikh byTihar Harta</th>
                                <td>:</td>
                                <td><span class="text-primary">20 November 2022</span></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr class="maklumat-hr my-3">
                                </td>
                            </tr>
                            <tr>
                                <th>Tarikh Pergerakan Gaji</th>
                                <td>:</td>
                                <td><span class="text-primary">Julai</span></td>
                            </tr>
                            <tr>
                                <th>No. Gaji</th>
                                <td>:</td>
                                <td><span class="text-primary">828521</span></td>
                            </tr>
                            <tr>
                                <th>No. Pusat Gaji</th>
                                <td>:</td>
                                <td><span class="text-primary">501</span></td>
                            </tr>
                            <tr>
                                <th>Bank Gaji</th>
                                <td>:</td>
                                <td><span class="text-primary">Bank Muamalat Malaysia</span></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr class="maklumat-hr my-3">
                                </td>
                            </tr>
                            <tr>
                                <th>No. KWSP</th>
                                <td>:</td>
                                <td><span class="text-primary">88216366</span></td>
                            </tr>
                            <tr>
                                <th>No. Cukai Pendapatan</th>
                                <td>:</td>
                                <td><span class="text-primary">5G123456789011</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="tab-pane" id="maklumat-keahlian" role="tabpanel">
                        <div class="text-center mb-3">
                            <img src="<?php echo e(asset('images/avatar-1.jpg')); ?>" alt="logo" width="100" class="mb-4"><br>
                            <span class="fs-6 fw-bold">Maklumat Keahlian</span>
                        </div>
                        <ol>
                            <li class="mb-3">
                                <div class="ms-3">
                                    <p class="mb-0">Kesatuan Guru Melayu Semenanjung Cawangan Kelantan (KGMS)</p>
                                    <table>
                                        <tr>
                                            <td>No. Ahli</td>
                                            <td>:</td>
                                            <td><span class="text-primary">Kn-8829121</span></td>
                                        </tr>
                                        <tr>
                                            <td>Jawatan</td>
                                            <td>:</td>
                                            <td><span class="text-primary">Setiausaha I</span></td>
                                        </tr>
                                    </table>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="ms-3">
                                    <p class="mb-0">Yayasan Guru Malaysia (YGM)</p>
                                    <table>
                                        <tr>
                                            <td>No. Ahli</td>
                                            <td>:</td>
                                            <td><span class="text-primary">90/D/2133411</span></td>
                                        </tr>
                                        <tr>
                                            <td>Jawatan</td>
                                            <td>:</td>
                                            <td><span class="text-primary">Ahli Seumur Hidup</span></td>
                                        </tr>
                                    </table>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="ms-3">
                                    <p class="mb-0">Pergerakan Belia 4B (PB4B) Malaysia Cawangan Kelantan</p>
                                    <table>
                                        <tr>
                                            <td>No. Ahli</td>
                                            <td>:</td>
                                            <td><span class="text-primary">5528-789834</span></td>
                                        </tr>
                                        <tr>
                                            <td>Jawatan</td>
                                            <td>:</td>
                                            <td><span class="text-primary">Pengerusi</span></td>
                                        </tr>
                                    </table>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="ms-3">
                                    <p class="mb-0">Kelab Pencinta Sungai Malaysia</p>
                                    <table>
                                        <tr>
                                            <td>No. Ahli</td>
                                            <td>:</td>
                                            <td><span class="text-primary">KEL29226633</span></td>
                                        </tr>
                                        <tr>
                                            <td>Jawatan</td>
                                            <td>:</td>
                                            <td><span class="text-primary">Bendahari</span></td>
                                        </tr>
                                    </table>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <div class="tab-pane" id="surat-aku-janji" role="tabpanel">
                        <div class="text-center mb-3">
                            <img src="<?php echo e(asset('images/kementerian_pendidikan_malaysia.png')); ?>" alt="logo" width="100" class="mb-4"><br>
                            <span class="fs-6 fw-bold">SURAT AKU JANJI</span>
                        </div>
                        <p>
                            Saya,<b> MOHD SHAIPUL RIZAL BIN KADIR</b> , No. Kad Pengenalan <b>811203045049</b>
                            beralamat di <b>SK KAMPUNG TUN RAZAK, MELAKA</b> dengan sesungguhnya berjanji
                            bahawa saya akan mematuhi Peraturan-Peraturan Pegawai Awam (Kelakuan dan Tatatertib)
                            1993, Perintah-Perintah Am, pekeliling dan surat pekeliling serta peraturan dan arahan lain
                            yang dikeluarkan dan dikuatkuasakan oleh Kerajaan dari semasa ke semasa sepanjang
                            perkhidmatan saya dengan kerajaan. Maka dengan itu saya berjanji sebagaimana yang
                            dikehendaki di bawah Peraturan 4. Peraturan-peraturan Pegawai Awam (Kelakuan dan
                            Tatatertib) 1993 bahawa saya:
                        </p>
                        <ol class="list-janji" type='i'>
                            <li>akan sentiasa taat kepada Yang di-Pertuan Agong, Negara dan Kerajaan;</li>
                            <li>akan sentiasa melaksanakan tugas dengan cermat, bersungguh-sungguh, cekap, jujur,
                                amanah dan bertanggungjawab;</li>
                            <li>tidak akan membelakangkan tugas awam demi kepentingan peribadi saya;</li>
                            <li>tidak akan berkelakuan dengan cara yang mungkin menyebabkan kepentingan
                                peribadi bercanggah dengan tugas awam saya;</li>
                            <li>tidak akan berkelakuan dengan cara yang boleh menimbulkan syak yang munasabah
                                bahawa saya telah membiarkan kepentingan peribadi saya bercanggah dengan tugas
                                rasmi sehingga menjejaskan kegunaan saya sebagai pegawai awam;</li>
                            <li>tidak akan menggunakan kedudukan saya sebagai pegawai awam bagi faedah diri
                                saya sendiri;</li>
                            <li>tidak akan berkelakuan dengan cara yang boleh memburukkan dan mencemarkan
                                nama perkhidmatan awam</li>
                            <li>tidak akan membawa sebarang bentuk pengaruh atau tekanan luar untuk menyokong
                                atau memajukan tuntutan saya atau pegawai lain berhubung dengan perkhidmatan
                                awam dan;</li>
                            <li>tidak akan ingkar perintah atau berkelakuan dengan cara yang boleh ditafsirkan
                                sebagai ingkar perintah.</li>
                        </ol>
                        <p>Saya sesungguhnya faham bahawa jika saya disabitkan kerana telah melanggar Aku Janji ini,
                            saya boleh dikenakan tindakan tatatertib mengikut Peraturan-Peraturan Pegawai Awam
                            (Kelakuan dan tatatertib) 1993.</p>
                        <div class="d-flex justify-content-around align-items-center">
                            <div class="text-center">
                                <p>................................</p>
                                <p>(Tandatangan Pegawai)</p>
                            </div>
                            <div class="text-center">
                                <p>................................</p>
                                <p>(Jawatan Pegawai)</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <p>Di hadapan:</p>
                            <p>.................................</p>
                            <p class="mb-3">(Tandatangan Ketua Jabatan)</p>
                            <p>.................................</p>
                            <p>(Nama dan No. Kad Pengenalan Ketua Jabatan)</p>
                        </div>
                        <div class="d-flex justify-content-around align-items-center">
                            <div class="text-center">
                                <p>................................</p>
                                <p>(Tarikh)</p>
                            </div>
                            <div class="text-center">
                                <p>................................</p>
                                <p>(Cop Resmi Jabatan)</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="senarai-tugas" role="tabpanel">
                        <div class="text-center mb-3">
                            <img src="<?php echo e(asset('images/avatar-1.jpg')); ?>" alt="logo" width="100" class="mb-4"><br>
                            <span class="fs-6 fw-bold">SENARAI TUGAS</span>
                        </div>

                        <p class="mb-0 text-decoration-underline"><b>Komponen Pengurusan dan Pentadbiran</b></p>
                        <ol>
                            <li>Setiausaha Induk Jawatankuasa Pengurusan dan Pentadbiran</li>
                            <li>Setiausaha, JK Perancangan Strategik</li>
                            <li>Ketua JP Kebajikan, JKPengurusan Bencana Sekolah</li>
                        </ol>
                        <p class="mb-0 text-decoration-underline"><b>Komponen Kurikulum</b></p>
                        <ol>
                            <li>Ketua Panitia Bahasa Melayu</li>
                            <li>Setiausaha JJK Pentaksiran</li>
                        </ol>
                        <p class="mb-0 text-decoration-underline"><b>Komponen Hal Ehwal Murid</b></p>
                        <ol>
                            <li>Guru Kelas Tahun 4 Al-Biruni</li>
                            <li>Penyelaras JP Skim Pinjaman Buku Teks (SPBT)</li>
                        </ol>
                        <p class="mb-0 text-decoration-underline"><b>Komponen Kokurikulum</b></p>
                        <ol>
                            <li>Penyelaras Badan Beruniform</li>
                            <li>Guru Penasihat Kerab Doktor Muda</li>
                            <li>Ketua Rumah Sukan Kuning</li>
                            <li>Jurulatih Pasukan Sofbol</li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/build/libs/apexcharts/apexcharts.min.js')); ?>"></script>
<!-- dashboard init -->
<script src="<?php echo e(URL::asset('build/js/pages/dashboard.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/index.blade.php ENDPATH**/ ?>