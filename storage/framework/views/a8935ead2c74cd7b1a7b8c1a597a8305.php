<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Profil Sekolah'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Maklumat Sekolah
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Profil Sekolah
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php if(Auth::user()->jawatan_app != 6): ?>
        <div>
            <button class="btn btn-warning d-block me-auto mb-3"><i class='bx bxs-edit'></i> Edit</button>
        </div>
    <?php endif; ?>
    <form action="">
        <div class="table-responsive">
            <table cellpadding="4" width="100%">
                <?php if(Auth::user()->jawatan_app == '2' or Auth::user()->kategori_sekolah == 'sekolah_rendah'): ?>
                    <tr>
                        <th width="20%"> <label for="nama_sekolah">Nama Sekolah</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="nama_sekolah"
                                value="Sekolah Rendah Sri Angkasa" <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="kod_sekolah">Kod Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="kod_sekolah" value="XYZ999"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th> <label for="kategori_sekolah">Kategori Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="kategori_sekolah"
                                value="Sekolah Rendah(SR)" <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="jenis_sekolah">Jenis Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="jenis_sekolah"
                                value="Sekolah Kebangsaan(SK)" <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="gred">Gred</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="gred" value="A"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th> <label for="sesi_persekolahan">Sesi Persekolahan</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="sesi_persekolahan" value="Pagi sahaja"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="PPD">PPD</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="PPD" value="PPD Kota Baharu"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th> <label for="negeri">Negeri</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="negeri" value="Kelantan"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr class="maklumat-hr my-3">
                        </td>
                    </tr>

                    <tr>
                        <th width="20%"> <label for="no_telefon">No. Telefon</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="no_telefon" value="+609-7412-776"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="no_faksimili">No. Faksimili</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="no_faksimili" value="+609-7412-777"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="e-mel">E-mel</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="e-mel" value="sriangkasa@moe.edu.my"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="instagram">Instagram</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="instagram"
                                value="https://www.instagram.com/sriangkasa"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="facebook">Facebook</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="facebook"
                                value="https://www.facebook.com/sriangkasa"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="alamat">Alamat</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="alamat"
                                value="Jalan Sultan Muhammad V 35000 Kota Bharu"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                <?php endif; ?>

                <?php if(Auth::user()->jawatan_app == '3' or Auth::user()->kategori_sekolah == 'sekolah_menengah'): ?>
                    <tr>
                        <th width="20%"> <label for="nama_sekolah">Nama Sekolah</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="nama_sekolah"
                                value="Sekolah Menengah Kebangsaan Pinggiran Cyberjaya"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="kod_sekolah">Kod Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="kod_sekolah" value="XYZ998"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th> <label for="kategori_sekolah">Kategori Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="kategori_sekolah"
                                value="Sekolah Menengah(SM)" <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="jenis_sekolah">Jenis Sekolah</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="jenis_sekolah"
                                value="Sekolah Kebangsaan(SK)" <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="gred">Gred</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="gred" value="A"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th> <label for="sesi_persekolahan">Sesi Persekolahan</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="sesi_persekolahan" value="Pagi sahaja"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="PPD">PPD</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="PPD" value="PPD Kota Baharu"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th> <label for="negeri">Negeri</label></th>
                        <td>:</td>
                        <td> <input type="text" class="form-control w-50" id="negeri" value="Kelantan"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr class="maklumat-hr my-3">
                        </td>
                    </tr>

                    <tr>
                        <th width="20%"> <label for="no_telefon">No. Telefon</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="no_telefon" value="+609-7412-777"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="no_faksimili">No. Faksimili</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="no_faksimili" value="+609-7412-778"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="e-mel">E-mel</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="e-mel" value="Cyberjaya@moe.edu.my"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>>
                        </td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="instagram">Instagram</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="instagram"
                                value="https://www.instagram.com/Cyberjaya"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="facebook">Facebook</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="facebook"
                                value="https://www.facebook.com/Cyberjaya"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                    <tr>
                        <th width="20%"> <label for="alamat">Alamat</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control w-50" id="alamat"
                                value="Jalan Sultan Muhammad VI 35001 Kota Bharu"
                                <?php if(Auth::user()->jawatan_app == 6): ?> disabled <?php endif; ?>></td>
                    </tr>
                <?php endif; ?>


                <div class="row">
                </div>
            </table>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.oqurystudio.com/resources/views/profil-sekolah.blade.php ENDPATH**/ ?>