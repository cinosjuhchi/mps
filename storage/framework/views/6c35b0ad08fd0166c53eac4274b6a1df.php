<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Perincian Tugas | Tugas Portofolio Berjawatan'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-capitalize">Perincian Tugas - Komponen Kurikulum</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">Perincian Tugas</li>
                        <li class="breadcrumb-item">Tugas Portofolio Tanpa Jawatan</li>
                        <li class="breadcrumb-item active">Komponen Kurikulum</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <?php if(Auth::user()->jawatan_app == 0): ?>
                <button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#tambahTugas">
                    <i class='bx bx-plus-circle'></i> Tambah Tugas
                </button>
                <!-- Modal Tambah Tugas -->
                <div class="modal fade" id="tambahTugas" tabindex="-1" aria-labelledby="tambahTugasLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="tambahTugasLabel">Tambah Tugas</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="" method="post">
                                <div class="modal-body">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="tugas" class="form-label">Tugas</label>
                                        <input type="text" class="form-control" id="tugas" name="tugas"
                                            placeholder="Masukkan tugas">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="button" class="btn btn-primary">Tambah Tugas</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END Modal Tambah Program -->
                <table class="table align-middle table-hover dt-responsive w-100">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" style="width: 40px;">No</th>
                            <th scope="col">Tugas</th>
                            <th scope="col" style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editTugas">
                                    <i class="bx bxs-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php else: ?>
                <table class="table table-borderless">
                    <tr>
                        <td width="20px">1.</td>
                        <td>Memperoleh sukatan pelajaran yang terbaharu atau kemas kini untuk kegunaan ahli-ahli panitia.
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Menyediakan rancangan mengajar untuk setiap penggal dalam tahun persekolahan. Rancangan mengajar
                            ini diselaraskan di antara guru dalam sesuatu kelas dan juga di antara kelas yang ada kaitan.
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Memilih dan mencadangkan kepada PGB buku tambahan (jika diperlukan) untuk digunakan oleh murid
                            berdasarkan kepada kesesuaian buku itu dari segi kehendak standard kandungan dan standard
                            pelajaran yang terdapat dalam DSKP dan tahap kebolehan murid.</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Memilih dan mencadangkan buku rujukan atau bahan bacaan tambahan yang sesuai dengan keperluan
                            pembelajaran murid dan kegunaan guru-guru untuk dibekalkan di pusat sumber sekolah.</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Menyelaraskan soalan-soalan ujian dan pentaksiran (berasaskan sekolah) yang disediakan bagi
                            tiap-tiap kelas dan jika perlu menubuhkan bank soalan.</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Mengkaji dan menganalisis keputusan peperiksaan murid dalam tiap-tiap peperiksaan berasaskan
                            sekolah (khususnya peperiksaan pertengahan dan akhir tahun) dan mengambil langkah-langkah untuk
                            mengatasi kelemahan-kelemahan pengajaran dan pembelajaran.</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Mengadakan mesyuarat panitia secara berkala, sekurang-kurangnya empat (4) kali setahun dan
                            mengadakan perjumpaan-perjumpaan secara 'ad hoc' jika perlu.</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>Mengatur perjumpaan atau mesyuarat dengan ahli-ahli panitia (secara formal atau tidak formal)
                            untuk membincangkan masalah-masalah atau isu-isu yang berkaitan.</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>Bertukar-tukar pengalaman dan pengetahuan baharu yang diperoleh setelah mengikuti kursus atau
                            seminar dengan ahli-ahli lain.</td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>Mewujudkan semangat saling bekerjasama dengan persatuan di sekolah dan menjalinkan hubungan
                            kerja yang boleh membantu bagi mencapai matlamat pengajaran dan pembelajaran.</td>
                    </tr>


                </table>
            <?php endif; ?>
        </div>
    </div>

    <!-- Modal Edit Program -->
    <div class="modal fade" id="editTugas" tabindex="-1" aria-labelledby="editTugasLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTugasLabel">Edit Tugas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="tugas" class="form-label">Tugas</label>
                            <input type="text" class="form-control" id="tugas" name="tugas"
                                placeholder="Masukkan tugas">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Modal Edit Program -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BELAJAR-PROYEK\GRAVIX\mps_cino\mps\resources\views/kurikulum.blade.php ENDPATH**/ ?>