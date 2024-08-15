

<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('Profilku'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex">
                        <img src="<?php echo e(asset('images/avatar-1.jpg')); ?>" alt="Profilku" width="100" height="100" class="rounded-circle">
                        <div class="d-flex flex-column justify-content-center ms-4">
                            <h4 class="card-title"><?php echo e(ucfirst(Auth::user()->name)); ?></h4>
                            <p class="card-title-desc">
                                <?php if(Auth::user()->jawatan_app == 0): ?>
                                Super Admin Backofice
                                <?php elseif(Auth::user()->jawatan_app == 1): ?>
                                Admin Backofice
                                <?php elseif(Auth::user()->jawatan_app == 2): ?>
                                Admin Sekolah
                                <?php else: ?>
                                Pengguna
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-danger d-flex align-items-center"><i class='bx bxs-file-pdf me-2 fs-4'></i>Download PDF</button>
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
                                        <option <?php if(Auth::user()->jawatan_app == 1): ?> selected <?php endif; ?>>Admin Backofice</option>
                                        <option <?php if(Auth::user()->jawatan_app == 2): ?> selected <?php endif; ?>>Admin Sekolah</option>
                                        <option <?php if(Auth::user()->jawatan_app == 3): ?> selected <?php endif; ?>>Pengguna</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="no-telepon" class="col-sm-2 col-form-label">No. Telefon</label>
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" placeholder="Masukkan nombor telefon" id="no-telepon" value="<?php echo e(Auth::user()->telp); ?>">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="e-mel" class="col-sm-2 col-form-label">E-mel</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" placeholder="Masukkan emel" id="e-mel" value="<?php echo e(Auth::user()->email); ?>">
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
                            <span class="fs-6 fw-bold">Maklumat Perkhidmatan</span>
                        </div>
                      <form action="">
                        <div class="table-responsive">
                            <table cellpadding="4" width="100%">
                                <tr>
                                    <th width="20%"> <label for="angkapejabat">Angka Pejabat</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control w-50" id="angkapejabat" value="D396228"></td>
                                </tr>
                                <tr>
                                    <th> <label for="gred">Gred</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="gred" value="DG48 (KUP)"></td>
                                </tr>
                                <tr>
                                    <th> <label for="jawatan">Jawatan</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="jawatan" value="Guru Akademik KSSR"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <hr class="maklumat-hr my-3">
                                    </td>
                                </tr>
                                <tr>
                                    <th> <label for="tarikh-lantikan">Tarikh Lantikan 1</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="tarikh-lantikan" value="16/02/1991"></td>
                                </tr>
                                <tr>
                                    <th> <label for="tarikh-sah">Tarikh Sah Jawatan</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="tarikh-sah" value="16/02/1992"></td>
                                </tr>
                                <tr>
                                    <th> <label for="tarikh-skim">Tarikh Skim Pencen</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="tarikh-skim" value="16/02/1991"></td>
                                </tr>
                                <tr>
                                    <th> <label for="tarikh-lapor">Tarikh Lapor Diri di Sekolah Ini </label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="tarikh-lapor" value="16/02/1991"></td>
                                </tr>
                                <tr>
                                    <th> <label for="tarikh-bytihar">Tarikh byTihar Harta</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="tarikh-bytihar" value="20 November 2022"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <hr class="maklumat-hr my-3">
                                    </td>
                                </tr>
                                <tr>
                                    <th> <label for="tarikh-pergerakan">Tarikh Pergerakan Gaji</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="tarikh-pergerakan" value="Julai"></td>
                                </tr>
                                <tr>
                                    <th> <label for="no-gaji">No. Gaji</label></th>
                                    <td>:</td>
                                    <td> <input type="number" class="form-control w-50" id="no-gaji" value="828521"></td>
                                </tr>
                                <tr>
                                    <th> <label for="no-pusat">No. Pusat Gaji</label></th>
                                    <td>:</td>
                                    <td> <input type="number" class="form-control w-50" id="no-pusat" value="501"></td>
                                </tr>
                                <tr>
                                    <th> <label for="bank-gaji">Bank Gaji</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="bank-gaji" value="Bank Muamalat Malaysia"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <hr class="maklumat-hr my-3">
                                    </td>
                                </tr>
                                <tr>
                                    <th> <label for="no-kwsp">NO. KWSP</label></th>
                                    <td>:</td>
                                    <td> <input type="number" class="form-control w-50" id="no-kwsp" value="88216366"></td>
                                </tr>
                                <tr>
                                    <th> <label for="no-cukai">No. Cukai Pendapatan</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="no-cukai" value="5G123456789011"></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td></td>
                                    <td>
                                            <button type="submit" class="btn btn-primary w-50">Kemaskini</button>
                                    </td>
                                </tr>

                                <div class="row">
                                </div>
                            </table>
                        </div>
                     </form>
                    </div>

                    <div class="tab-pane" id="maklumat-keahlian" role="tabpanel">
                        <div class="text-center mb-3">
                            <span class="fs-6 fw-bold">Maklumat keahlian</span>
                        </div>
                      <form action="">
                        <div class="table-responsive">
                            <table cellpadding="4" width="100%">
                                <tr>
                                    <th width="30%"> <label for="no-ahli">Kesatuan Guru Melayu Semenanjung Cawangan Kelantan (KGMS)</label></th>
                                </tr>
                                <tr>
                                    <th width="20%"> <label for="no-ahli">No. Ahli</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control w-50" id="no-ahli" value="Kn-8829121"></td>
                                </tr>
                                <tr>
                                    <th> <label for="jawatan">Jawatan</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="jawatan" value="Setiausaha I"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <hr class="maklumat-hr my-3">
                                    </td>
                                </tr>

                                <tr>
                                    <th width="20%"> <label for="no-ahli">Yayasan Guru Malaysia (YGM)</label></th>
                                </tr>
                                <tr>
                                    <th width="20%"> <label for="no-ahli">No. Ahli</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control w-50" id="no-ahli" value="90/D/2133411"></td>
                                </tr>
                                <tr>
                                    <th> <label for="jawatan">Jawatan</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="jawatan" value="Ahli Seumur Hidup"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <hr class="maklumat-hr my-3">
                                    </td>
                                </tr>

                                <tr>
                                    <th width="20%"> <label for="no-ahli">Pergerakan Belia 4B (PB4B) Malaysia Cawangan Kelantan</label></th>
                                </tr>
                                <tr>
                                    <th width="20%"> <label for="no-ahli">No. Ahli</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control w-50" id="no-ahli" value="5528-789834"></td>
                                </tr>
                                <tr>
                                    <th> <label for="jawatan">Jawatan</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="jawatan" value="Pengerusi"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <hr class="maklumat-hr my-3">
                                    </td>
                                </tr>

                                <tr>
                                    <th width="20%"> <label for="no-ahli">Kelab Pencinta Sungai Malaysia</label></th>
                                </tr>
                                <tr>
                                    <th width="20%"> <label for="no-ahli">No. Ahli</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control w-50" id="no-ahli" value="KEL29226633"></td>
                                </tr>
                                <tr>
                                    <th> <label for="jawatan">Jawatan</label></th>
                                    <td>:</td>
                                    <td> <input type="text" class="form-control w-50" id="jawatan" value="Bendahari"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <hr class="maklumat-hr my-3">
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary w-50">Kemaskini</button>
                                    </td>
                                </tr>

                                <div class="row">
                                </div>
                            </table>
                        </div>
                     </form>
                    </div>

                    <div class="tab-pane" id="surat-aku-janji" role="tabpanel">
                        <div class="text-center mb-3">
                            <img src="<?php echo e(asset('images/logo-jata-negara.png')); ?>" alt="Logo Jata Negara" width="150px" class="pb-2"><br>
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

                        <div class="row mt-5">
                                <button type="submit" class="btn btn-primary w-75 d-block m-auto">Kemaskini</button>
                        </div>

                    </div>
                    <div class="tab-pane" id="senarai-tugas" role="tabpanel">
                        <div class="text-center mb-3">
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

                        <div class="row mt-5">
                            <button type="submit" class="btn btn-primary w-75 d-block m-auto">Kemaskini</button>
                        </div>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BELAJAR-PROYEK\GRAVIX\mps_cino\mps\resources\views/profilku.blade.php ENDPATH**/ ?>