<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Etika Perkhidmatan Awam'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Dasar Perkhidmatan
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Etika Perkhidmatan Awam
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    

    <?php if(Auth::user()->jawatan_app == 0): ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card border border-2">
                    <div class="card-header bg-light d-flex">
                        <h4 class="card-title mt-2">Create Etika Perkhidmatan Awam</h4>
                        <div class="d-flex ms-auto">
                            <button class="btn btn-warning me-2">
                                <i class='bx bxs-edit'></i>
                                <span class="d-none d-md-inline">Edit</span>
                            </button>
                            <button class="btn btn-danger">
                                <i class='bx bxs-trash'></i>
                                <span class="d-none d-md-inline">Delete</span>
                            </button>
                        </div>

                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mt-3 mb-3">
                                <input id="etika-perkhidmatan-awam" type="hidden" name="etika-perkhidmatan-awam"
                                    value="">
                                <trix-editor input="etika-perkhidmatan-awam" placeholder="Tulis Etika Perkhidmatan Awam">
                                </trix-editor>
                            </div>

                            <button type="button" class="btn btn-primary w-100">Kemaskini</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    <?php endif; ?>

    <?php if(Auth::user()->jawatan_app != 0): ?>
        <div class="div" id="dasar-sekolah" role="div" style="text-align: justify; text-justify: inter-word">
            
            <div class="text-center mb-3">
                <span class="fs-3 fw-bold">Etika Perkhidmatan Awam</span>
            </div>

            <p>
                ETIKA PERKHDMATAN AWAM 39 Rumusan: Penjawat awam hendaklah sentiasa rajin dan berusaha memberikan komitmen
                yang tinggi dalam memastikan penyampaian perkhidmatan berada pada tahap yang terbaik. g. Tekun - Sentiasa
                memberikan tumpuan kepada sesuatu kerja sehingga selesai dengan sempurna. Contoh kes: Encik D merupakan
                seorang tukang kebun di sebuah Institusi Latihan Awam yang sangat tekun dan bertanggungjawab dalam
                melaksanakan tugasnya. Beliau sentiasa memastikan kawasan serta landskap di jabatannya dalam keadaan baik
                sehingga sanggup hadir bekerja pada hari cuti tanpa membuat tuntutan kerja lebih masa. Rumusan: Seorang
                penjawat awam perlu tekun dan bersungguh-sungguh dalam melaksanakan tugasan dan tidak akan sesekali
                membiarkan unsur-unsur luar mempengaruhi konsentrasi dalam melaksanakan tugasan yang diamanahkan. h.
                Prihatin - Sentiasa mengambil berat dan peka terhadap perubahan semasa dalam melaksanakan tugas. Contoh kes:
                Puan M yang bertugas di Kaunter Jabatan Pengangkutan Jalan (JPJ) telah dimaklumkan bahawa seorang pemuda OKU
                mengalami kesukaran untuk keluar dari kereta ke
            </p>
            <p>
                40 kaunter bagi urusan menukar hak milik kenderaan. Atas sifat tanggungjawab dan keprihatinannya, Puan M
                telah pergi ke kereta pemuda OKU tersebut dan membantu menyelesaikan urusan menukar hak milik kenderaan
                beliau. Rumusan: Sifat prihatin penjawat awam kepada keadaan semasa dan masyarakat dalam melaksanakan tugas
                mahupun di luar ruang lingkup tugas dapat menjadi contoh dan mengeratkan lagi hubungan antara warga
                perkhidmatan awam dan masyarakat. i. Berketerampilan - Sentiasa menunjukkan imej yang baik sebagai penjawat
                awam. Contoh kes: Encik A merupakan seorang ketua di Jabatan K yang mempunyai 30 orang pegawai di bawah
                seliaannya. Sebagai seorang ketua, Encik A sentiasa menunjukkan contoh teladan yang baik kepada pegawai
                bawahannya. Sikap ini menjadikan beliau disegani dan menjadi contoh teladan oleh pegawai-pegawainya.
                Rumusan: Seorang penjawat awam perlu sentiasa membawa imej yang baik walau di mana berada termasuk melalui
                penampilan fizikal dan perwatakan sewajarnya (how you carry yourself as civil servant). Pelanggaran
                undang-undang ini membolehkan penjawat awam dikenakan tindakan di bawah Peraturan 4 (2)
                (d)-Peraturan-Peraturan Pegawai Awam (Kelakuan & Tatatertib) 1993 atau di bawah apa jua undang-undang negara
                yang berkuat kuasa.
            </p>
            <p>
                ETIKA PERKHDMATAN AWAM 41 j. Silaturahim - Berusaha menjalin hubungan permuafakatan atau kerjasama erat
                sesama rakan sekerja yang mendorong kepada memudahkan pelaksanaan tugas dan tanggungjawab. Contoh kes:
                Jabatan Y sentiasa mengambil berat kebajikan pegawai dan kakitangannya. Mereka juga mempunyai hubungan yang
                erat antara satu sama lain. Encik C yang bertugas di Jabatan Y telah ditimpa musibah kemalangan jalan raya
                dan dimasukkan ke hospital. Pegawai dan kakitangan di Jabatan Y telah menziarahi beliau untuk memberi
                sokongan dan semangat dalam menghadapi dugaan tersebut. Ini menunjukkan betapa eratnya silaturahim antara
                mereka. Rumusan: Penjawat awam perlu membina silaturahim sesama rakan sekerja dan berusaha mencari jalan
                penyelesaian secara aman dan damai jika terdapat sebarang perselisihan. 4) Keadilan Kuasa yang ada pada
                anggota perkhidmatan awam diseimbangkan dengan nilai- nilai berikut: a. Menjaga Hak - Berusaha menjaga
                keperluan dan memenuhi tuntutan khususnya untuk diri sendiri dan ahli keluarga termasuk juga organisasi
                tempat berkhidmat, masyarakat sekeliling, alam sekitar dan negara.
            </p>
            <p>
                42 Contoh kes: Puan S bekerja sebagai kerani pendaftaran di sebuah klinik kesihatan di Bandar X. Selepas
                cuti umum dan klinik dibuka, semenjak awal pagi ramai pelanggan datang dan mengambil nombor giliran bagi
                mendapatkan rawatan kesihatan. Pada pukul 11.00 pagi kawan Puan S iaitu Cik M yang mengalami demam selsema
                telah datang menemui Puan S supaya membawanya berjumpa doktor dengan kadar segera kerana dia perlu
                menghadirkan diri di Mahkamah Z pada pukul 2.00 petang dan khuatir akan terlewat untuk urusan tersebut. Puan
                S tidak dapat memenuhi permintaan kawannya itu dan meminta Cik M mengambil nombor giliran seperti orang lain
                bagi menjaga hak pelanggan yang telah mengambil nombor giliran terlebih dahulu. Rumusan: Penjawat awam perlu
                bekerja dengan penuh etika dan menjaga hak yang sewajarnya. b. Bekerjasama - Melaksanakan tugas dalam satu
                pasukan serta saling membantu antara satu sama lain untuk menghasilkan mutu kerja yang tinggi. Contoh kes:
                Encik A yang bertugas di Jabatan X sentiasa mempunyai pendapat yang berbeza dengan rakan sekerjanya iaitu
                Encik B. Pada satu hari, mereka telah ditugaskan mewakili jabatan untuk berbincang dengan Agensi M bagi
                mewujudkan satu sistem di Jabatan X. Bagi memastikan kepentingan perkhidmatan tidak terjejas, Encik A telah
                memberikan
            </p>
            <p>
                ETIKA PERKHDMATAN AWAM 43 kerjasama yang baik kepada Encik B dalam perbincangan tersebut. Seterusnya,
                selesai perbincangan, mereka sama-sama menyediakan laporan hasil perbincangan tersebut kepada pihak atasan.
                Rumusan: Penjawat awam perlu bekerjasama dan mengetepikan sebarang sifat buruk dalam melaksanakan tugas demi
                kepentingan organisasi, masyarakat dan negara. c. Ikhlas - Melaksanakan tugas dan tanggungjawab tanpa
                mengharapkan sebarang balasan melalui penerimaan atau pemberian secara langsung atau tidak langsung daripada
                mana-mana pihak. Contoh kes: Cikgu A yang bertugas di SMK Agama X merupakan seorang guru yang berdedikasi
                yang mengajar subjek Ekonomi dan Perniagaan. Beliau terlantar sakit di hospital dan merasa bimbang dengan
                pelajar-pelajarnya yang akan menghadapi peperiksaan Sijil Pelajaran Malaysia (SPM) tidak lama lagi. Bagi
                memastikan pelajarnya mendapat ilmu yang secukupnya bagi menghadapi peperiksaan SPM tersebut, beliau telah
                mengajar secara atas talian di hospital. Sikap ikhlas Cikgu A ini sewajarnya dijadikan contoh oleh penjawat
                awam lain dalam melaksanakan tugasan yang diamanahkan. Rumusan: Keikhlasan penjawat awam dalam melaksanakan
                tugas akan menghasilkan tugas yang cemerlang dan sempurna.
            </p>
            <p>
                44 d. Jujur - Mengamalkan sikap berterus-terang dan mengutamakan kebenaran serta tidak berselindung. Contoh
                kes: Encik A telah diarahkan bertugas di luar kawasan iaitu Negeri X selama tiga hari. Sebagai seorang
                penjawat awam, beliau layak menuntut elaun sewa hotel dan elaun makan sepanjang bertugas di luar kawasan
                tersebut. Walau bagaimanapun, beliau dijamu dengan makan tengah hari dan malam oleh Agensi M sepanjang
                beliau berada di Negeri X tersebut. Apabila kembali ke pejabat, beliau membuat tuntutan elaun sewa hotel
                sahaja dan menyatakan bahawa makan minum beliau adalah ditanggung oleh Agensi M sepanjang menjalankan
                tugasan tersebut. Rumusan: Seorang penjawat awam sentiasa bersifat jujur dalam segala tindakan terutamanya
                semasa melaksanakan tugas supaya dapat mencerminkan bukan sahaja keperibadian pegawai tetapi juga
                menggambarkan kejujuran serta ketelusan perkhidmatan awam itu sendiri. Pelanggaran undang-undang ini
                membolehkan penjawat awam dikenakan tindakan di bawah Peraturan 4 (2) (f)-Peraturan-Peraturan Pegawai Awam
                (Kelakuan & Tatatertib) 1993 atau di bawah apa jua undang-undang negara yang berkuat kuasa. e. Empati -
                Menjadi penjawat awam yang boleh memahami keadaan dan kesusahan orang lain dan berusaha membantu dengan
                sedaya upaya.
            </p>
            <p>
                ETIKA PERKHDMATAN AWAM 45 Contoh kes: Puan S merupakan seorang jururawat di Klinik Kesihatan di Daerah X.
                Terdapat seorang pelanggan yang mengandung datang ke klinik untuk mendapatkan rawatan kesihatan tetapi
                terlupa membawa kad pengenalan. Simpati dengan pelanggannya yang sedang sarat mengandung dan datang dari
                jauh, Puan S meminta maklumat pelanggan tersebut dan berusaha menyemak rekodnya. Pelanggan hadir tidak
                membawa kad pengenalan bukan halangan kepada Puan S untuk menyediakan perkhidmatan yang terbaik kepada
                pelanggannya dan memudahkan pelanggan yang hadir ke klinik tersebut. Rumusan: Seorang penjawat awam perlu
                sentiasa mempunyai empati dalam menjalankan tugasan harian terutamanya yang bertugas di barisan hadapan
                dalam penyampaian perkhidmatan. Walau bagaimanapun, dalam menzahirkan empati semasa melaksanakan tugas,
                penjawat awam masih terikat dengan prosedur dan peraturan yang berkuat kuasa. f. Penghargaan - Sentiasa
                mengiktiraf dan memberi ganjaran sebagai tanda terima kasih atas sumbangan dan jasa. Contoh kes: Encik A
                seorang ketua di Jabatan X sentiasa menzahirkan penghargaan terima kasih kepada pekerjanya yang sentiasa
                komited dalam menjalankan tugas. Penghargaan ini menjadi amalan di Jabatan X di mana pekerja-pekerja di
                Jabatan X
            </p>
            <p>
                46 juga akan mengucapkan perkataan terima kasih apabila dibantu oleh rakan sekerja yang lain dalam
                menyiapkan tugas. Penghargaan ini perlu dijadikan amalan setiap hari bagi menghargai pekerja yang telah
                bertungkus lumus untuk memberikan perkhidmatan yang terbaik kepada organisasi. Rumusan: Menunjukkan
                penghargaan dan terima kasih sebagai tanda pengiktirafan adalah satu amalan yang penting dalam perkhidmatan
                awam. Sesuatu sumbangan atau jasa sewajarnya diberikan ganjaran bagi memberi motivasi, memupuk hubungan
                profesional dan sebagai contoh teladan dalam organisasi. g. Kesederhanaan - Bersikap tidak keterlaluan dalam
                membuat pertimbangan dan tindakan sama ada dalam pemikiran, pertuturan atau perlakuan yang mengabaikan
                kepentingan diri dan orang lain. Contoh kes: Encik H selaku Pegawai Tadbir Bahagian di Jabatan X telah
                ditugaskan untuk mengendalikan satu seminar yang akan dihadiri oleh peserta dari pelbagai agensi dan majlis
                tersebut akan dirasmikan oleh YB Menteri. Bagi mengelakkan pembaziran wang awam berlaku, Encik H telah
                memilih lokasi strategik yang memberi kadar harga berpatutan dan tidak menyediakan sebarang ‘goodies bag’
                kepada peserta seminar bagi mematuhi arahan perbelanjaan berhemah. Selain itu, Encik H juga mengeluarkan
                arahan pentadbiran yang menggalakkan peserta seminar berkongsi kenderaan bagi mengurangkan tuntutan
                perjalanan di setiap agensi.
            </p>
            <p>
                ETIKA PERKHDMATAN AWAM 47 Rumusan: Penjawat awam perlu sentiasa melaksanakan perbelanjaan berhemah supaya
                setiap wang kerajaan yang dibelanjakan dimanfaatkan sepenuhnya.
            </p>
            <p>
                ETIKA PERKHDMATAN AWAM 49 PEMBUDAYAAN ETIKA PERKHIDMATAN AWAM BIL PEMBUDAYAAN CADANGAN 1 Meningkatkan
                kesedaran dan kepekaan terhadap amalan etika i. Menyediakan poster ii. Mengedarkan risalah/ buletin iii.
                Menghebahkan melalui media massa, portal atau laman web dan media baharu 2 Menyebarkan amalan etika melalui
                pelbagai saluran komunikasi i. Melantik focal person ii. Melaksanakan program mentor/mentee iii. Mengadakan
                “klinik” khidmat nasihat iv. Mengadakan perhimpunan pagi v. Menyiarkan artikel/ rencana P E M B U DAYA A N E
                T I KA PERKHIDMATAN AWAM
            </p>
            <p>
                50 BIL PEMBUDAYAAN CADANGAN 3 Mengukuhkan kefahaman dan penghayatan melalui pembelajaran berterusan i.
                Melaksanakan kem motivasi ii. Melaksanakan program team building dan high impact leadership programme iii.
                Menyiarkan quote of the day melalui e-mel iv. Mengadakan sesi pembacaan mutiara pagi v. Menganjurkan pidato,
                debat dan kuiz vi. Menggalakkan penulisan artikel/ rencana vii. Mengadakan perkongsian ilmu melalui sesi
                ulasan buku viii. Melaksanakan forum/ bicara etika ix. Mengadakan tayangan filem pendek x. Mengadakan
                program kenali pemimpin atau tokoh terkenal 4 Melaksanakan pemantauan terhadap pelaksanaan program dan
                aktiviti i. Mengadakan mystery shopping ii. Mengadakan program “turun padang” oleh ketua jabatan iii.
                Melaporkan status pelaksanaan program di mesyuarat Bahagian/ Jabatan
            </p>
            <p>
                ETIKA PERKHDMATAN AWAM 51 BIL PEMBUDAYAAN CADANGAN 5 Melaksanakan penilaian keberkesanan program dan
                aktiviti i. Menjalankan kajian kepuasan pelanggan ii. Menjalankan kajian kepuasan bekerja warga iii.
                Mengadakan polling/ undian iv. Mengambil kira elemen etika dalam penilaian pegawai contoh bulanan v.
                Menjalankan kajian keberkesanan pelaksanaan program 6 Memantapkan saluran maklum balas bagi orang awam
                mengemukakan cadangan atau komen i. Menyediakan saluran media baharu (facebook, twitter, blog, flickr,
                youtube) ii. Mendapatkan maklum balas melalui online (e-maklum balas, e-aduan) iii. Khidmat SMS (Sumber:
                ETOS Perkhidmatan Awam, MAMPU, 2012)
            </p>
            <p>
                52 1. Rukun Negara 2. Perkara 135, Perlembagaan Persekutuan 3. Peraturan 4, P.U. (A) 395 PERATURAN -
                PERATURAN PEGAWAI AWAM (Kelakuan dan Tatatertib) 1993 4. Peraturan 19, 20 P.U. (A) 395 PERATURAN - PERATURAN
                PEGAWAI AWAM tatatertib) 1993 5. Peraturan 8, P.U. (A) 395 PERATURAN-PERATURAN PEGAWAI AWAM (kelakuan dan
                tatatertib) 1993 6. Nilai dan Etika Perkhidmatan Awam, INTAN, 1991 7. Citra Karya: Falsafah Nilai dan Etika
                dalam Perkhidmatan Awam, INTAN 1994 8. Teras Perkhidmatan Awam, MAMPU, 1979 9. Tonggak 12 Perkhidmatan Awam,
                INTAN, Mac 1992 10. Dasar Pandang ke Timur, Februari 1982 11. Kempen Bersih, Cekap & Amanah, April 1982 12.
                Penerapan Nilai-Nilai Islam dalam Pentadbiran, 1985 13. Kepimpinan Melalui Teladan, Mac 1983 14. Gerakan
                Budaya Kerja Cemerlang, MAMPU, 1989 15. ETOS Perkhidmatan Awam, MAMPU, 2012 RUJUKAN
            </p>
            <p>
                ETIKA PERKHDMATAN AWAM 53 PENASIHAT YBhg. Datuk Dr. Kamarudin bin Min KETUA EDITOR Dr. Jamaluddin bin Mohd
                Ali EDITOR Dr. Sakduddin bin Zamli Hamima Madona binti Hussain Dr. Ahmad Badruddin bin Abdullah Juwairiyah
                binti Jaafar Md. Faizal bin Katimon Firdaus Farid bin Abd Rashid Mohd Azrul bin Mat Said Azrihisyam bin
                Jambut Hazman bin Hashim PENYELARAS PENERBITAN Dr. Ahmad Zairy bin Mohd Soieb Murali Rajaram REKAAN GRAFIK
                Mohd Syukry bin Abdullah SIDANG REDAKSI ETIKA DALAM PERKHIMATAN AWAM
            </p>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BELAJAR-PROYEK\GRAVIX\mps_cino\mps\resources\views/etika-perkhidmatan-awam.blade.php ENDPATH**/ ?>