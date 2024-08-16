<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu d-lg-block d-md-none ">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="dashboard" class="waves-effect">
                        <i class='bx bxs-home'></i>
                        <span key="t-chat"><?php echo app('translator')->get('Dashboard'); ?></span>
                    </a>
                </li>
                <?php if(Auth::user()->jawatan_app != 0 and Auth::user()->jawatan_app != 1): ?>
                    <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bxs-user-circle"></i>
                            <span key="t-dashboards"><?php echo app('translator')->get('User'); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <?php if(Auth::user()->jawatan_app == 2 or Auth::user()->jawatan_app == 3): ?>
                                <li><a href="senarai-pengguna" key="t-crypto"><?php echo app('translator')->get('Senarai Pengguna'); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <li class="menu-title" key="t-apps"><?php echo app('translator')->get('NAVIGASI'); ?></li>
                <?php if(Auth::user()->jawatan_app != 0 and Auth::user()->jawatan_app != 1): ?>
                    <li>
                        <a href="<?php if(Auth::user()->kategori_sekolah == 'sekolah_rendah' or Auth::user()->jawatan_app == '2'): ?> minda-guru-besar <?php else: ?> minda-pengetua <?php endif; ?>"
                            class="waves-effect">
                            <i class='bx bxs-photo-album'></i>
                            <span key="t-chat">Minda <?php if(Auth::user()->kategori_sekolah == 'sekolah_rendah' or Auth::user()->jawatan_app == '2'): ?>
                                    Guru Besar
                                <?php else: ?>
                                <?php endif; ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bxs-school'></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Maklumat Sekolah'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <?php if(Auth::user()->jawatan_app != 0): ?>
                            <li><a href="profil-sekolah" key="t-tui-calendar"><?php echo app('translator')->get('Profil Sekolah'); ?></a></li>
                            <li><a href="visi-misi-moto" key="t-full-calendar"><?php echo app('translator')->get('Visi, Misi, Moto'); ?></a></li>
                            <li><a href="falsafah-pendidikan-kebangsaan" key="t-full-calendar"><?php echo app('translator')->get('Falsafah Pendidikan Kebangsaan'); ?></a>
                            </li>
                            <li><a href="piagam-pelanggan" key="t-full-calendar"><?php echo app('translator')->get('Piagam Pelanggan'); ?></a></li>
                        <?php endif; ?>
                        <?php if(Auth::user()->jawatan_app == 0): ?>
                        <li><a href="ikrar-rukun-negara" key="t-full-calendar"><?php echo app('translator')->get('Ikrar Rukun Negara'); ?></a></li>
                        <?php endif; ?>
                        <?php if(Auth::user()->jawatan_app != 0): ?>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Ikrar'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ikrar-rukun-negara" key="t-full-calendar"><?php echo app('translator')->get('Ikrar Rukun Negara'); ?></a></li>
                                <li><a href="ikrar-penjawat-awam" key="t-full-calendar"><?php echo app('translator')->get('Ikrar Penjawat Awam'); ?></a></li>
                                <li><a href="ikrar-guru" key="t-full-calendar"><?php echo app('translator')->get('Ikrar Guru'); ?></a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Logo'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="logo-sekolah" key="t-tui-calendar"><?php echo app('translator')->get('Logo Sekolah'); ?></a></li>
                                <li><a href="logo-jpn" key="t-tui-calendar"><?php echo app('translator')->get('Logo JPN'); ?></a></li>
                                <li><a href="logo-kpm" key="t-tui-calendar"><?php echo app('translator')->get('Logo KPM'); ?></a></li>
                                <li><a href="jata-negeri" key="t-tui-calendar"><?php echo app('translator')->get('Jata Negeri'); ?></a></li>
                                <li><a href="jata-negara" key="t-tui-calendar"><?php echo app('translator')->get('Jata Negara'); ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Lagu'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="lagu-sekolah" key="t-tui-calendar"><?php echo app('translator')->get('Lagu Sekolah'); ?></a></li>
                                <li><a href="lagu-guru-malaysia" key="t-tui-calendar"><?php echo app('translator')->get('Lagu Guru Malaysia'); ?></a></li>
                                <li><a href="lagu-kebangsaan-negeri" key="t-tui-calendar"><?php echo app('translator')->get('Lagu Kebesaran Negeri'); ?></a></li>
                                <li><a href="lagu-negaraku" key="t-tui-calendar"><?php echo app('translator')->get('Lagu Negaraku'); ?></a></li>
                            </ul>
                        </li>

                        <?php if(Auth::user()->jawatan_app != 0): ?>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards"><?php echo app('translator')->get('Pengurusan Bilik'); ?></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="bilik-darjah" key="t-tui-calendar"><?php echo app('translator')->get('Bilik Darjah'); ?></a></li>
                                    <li><a href="bilik-khas" key="t-tui-calendar"><?php echo app('translator')->get('Bilik Khas'); ?></a></li>
                                </ul>
                            </li>
                            <li><a href="peta-susun-atur-premis" key="t-full-calendar"><?php echo app('translator')->get('Peta Susun Atur Premis'); ?></a></li>
<<<<<<< HEAD
                            <li><a href="peta-lokasi" key="t-full-calendar"><?php echo app('translator')->get('Peta Lokasi'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Takwim'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
<<<<<<< HEAD
=======
                        <li><a href="kalendar" key="t-tui-calendar"><?php echo app('translator')->get('Kalendar'); ?></a></li>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                        <li><a href="penggal-persekolahan" key="t-full-calendar"><?php echo app('translator')->get('Penggal Persekolahan'); ?></a></li>
                        <?php if(Auth::user()->jawatan_app != 0): ?>
                            <li><a href="jadual-guru-bertugas-harian" key="t-full-calendar"><?php echo app('translator')->get('Jadual Guru Bertugas Harian'); ?></a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Cuti'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <?php if(Auth::user()->jawatan_app != 0): ?>
                                    <li><a href="hari-kelepasan-am" key="t-tui-calendar"><?php echo app('translator')->get('Hari Kelepasan Am '); ?></a></li>
                                <?php endif; ?>
                                <li><a href="cuti-peristiwa" key="t-tui-calendar"><?php echo app('translator')->get('Cuti Peristiwa'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <?php if(Auth::user()->jawatan_app != 0): ?>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bxs-group'></i>
                            <span key="t-dashboards"><?php echo app('translator')->get('Guru dan Kakitangan'); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Senarai Pekerja Swasta'); ?></span>
                            </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="senarai-guru-dan-kakitangan" key="t-full-calendar"><?php echo app('translator')->get('Senarai Guru dan Kakitangan'); ?></a></li>
                                    <li><a href="senarai-pengawal-keselamatan" key="t-full-calendar"><?php echo app('translator')->get('Senarai Pengawal Keselamatan'); ?></a></li>
                                    <li><a href="senarai-pekerja-kebersihan" key="t-full-calendar"><?php echo app('translator')->get('Senarai Pekerja Kebersihan'); ?></a></li>
                                    <li><a href="senarai-pekerja-kantin" key="t-full-calendar"><?php echo app('translator')->get('Senarai Pekerja Kantin'); ?></a></li>
                                </ul>
                            <li><a href="polisi-angkat" key="t-full-calendar"><?php echo app('translator')->get('Polisi Angkat'); ?></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bxs-directions'></i>
                            <span key="t-dashboards"><?php echo app('translator')->get('komponen new'); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
<<<<<<< HEAD
                            
                            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards"><?php echo app('translator')->get('Pengurusan dan Pentadbiran'); ?></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pengurusan-dan-pentadbiran-komponen"
                                            key="t-tui-calendar"><?php echo app('translator')->get('komponen'); ?></a></li>
                                    <li><a href="pengurusan-dan-pentadbiran-jk-jp"
                                            key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa'); ?></a></li>
                                    <li><a href="program-pengurusan-dan-pentadbiran"
                                            key="t-tui-calendar"><?php echo app('translator')->get('Aktviti &Program'); ?></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards"><?php echo app('translator')->get('Kurikulum'); ?></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="kurikulum-komponen" key="t-tui-calendar"><?php echo app('translator')->get('Komponen'); ?></a></li>
                                    <li><a href="kurikulum-jk-jp" key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa'); ?></a></li>
                                    <li><a href="program-kurikulum" key="t-tui-calendar"><?php echo app('translator')->get('Aktiviti & Program'); ?></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards"><?php echo app('translator')->get('Hal Ehwal Murid'); ?></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="hal-ehwal-murid-komponen" key="t-tui-calendar"><?php echo app('translator')->get('Komponen'); ?></a>
                                    <li><a href="hal-ehwal-murid-jk-jp" key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa'); ?></a>
                                    </li>
                                    <li><a href="program-hal-ehwal-murid" key="t-tui-calendar"><?php echo app('translator')->get('Aktiviti & Program'); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards"><?php echo app('translator')->get('Kokurikulum'); ?></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="kokurikulum-komponen" key="t-tui-calendar"><?php echo app('translator')->get('Komponen'); ?></a></li>
                                    <li><a href="kokurikulum-jk-jp" key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa'); ?></a></li>
                                    <li><a href="program-kokurikulum" key="t-tui-calendar"><?php echo app('translator')->get('Aktiviti & Program'); ?></a></li>
                                </ul>
                            </li>
                            <li><a href="imbangan-tugas" key="t-tui-calendar"><?php echo app('translator')->get('Imbangan Tugas'); ?></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bxs-directions'></i>
                            <span key="t-dashboards"><?php echo app('translator')->get('Pengurusan Komponen'); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="copk" key="t-tui-calendar"><?php echo app('translator')->get('Carta Organisasi Pengurusan Komponen (COPK)'); ?></a></li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards"><?php echo app('translator')->get('Komponen Pengurusan dan Pentadbiran'); ?></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pengurusan-dan-pentadbiran-jk-jp"
                                            key="t-tui-calendar"><?php echo app('translator')->get('Sub Komponen'); ?></a></li>
                                    <li><a href="pengurusan-dan-pentadbiran-jk-jp"
=======
                            <li><a href="copk" key="t-tui-calendar"><?php echo app('translator')->get('Carta Organisasi Pengurusan Komponen (COPK)'); ?></a></li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards"><?php echo app('translator')->get('Komponen Pengurusan dan Pentadbiran'); ?></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pengurusan-dan-pentadbiran-jk-jp"
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                                            key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)'); ?></a></li>
                                    <li><a href="program-pengurusan-dan-pentadbiran"
                                            key="t-tui-calendar"><?php echo app('translator')->get('Program'); ?></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
<<<<<<< HEAD
                                    <span key="t-dashboards"><?php echo app('translator')->get('Kurikulum'); ?></span>
=======
                                    <span key="t-dashboards"><?php echo app('translator')->get('Komponen Kurikulum'); ?></span>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="kurikulum-jk-jp" key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)'); ?></a></li>
                                    <li><a href="program-kurikulum" key="t-tui-calendar"><?php echo app('translator')->get('Program'); ?></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
<<<<<<< HEAD
                                    <span key="t-dashboards"><?php echo app('translator')->get('Hal Ehwal Murid'); ?></span>
=======
                                    <span key="t-dashboards"><?php echo app('translator')->get('Komponen Hal Ehwal Murid'); ?></span>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="hal-ehwal-murid-jk-jp" key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)'); ?></a>
                                    </li>
                                    <li><a href="program-hal-ehwal-murid" key="t-tui-calendar"><?php echo app('translator')->get('Program'); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
<<<<<<< HEAD
                                    <span key="t-dashboards"><?php echo app('translator')->get('Kokurikulum'); ?></span>
=======
                                    <span key="t-dashboards"><?php echo app('translator')->get('Komponen Kokurikulum'); ?></span>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="kokurikulum-jk-jp" key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)'); ?></a></li>
                                    <li><a href="program-kokurikulum" key="t-tui-calendar"><?php echo app('translator')->get('Program'); ?></a></li>
                                </ul>
                            </li>
                            <li><a href="imbangan-tugas" key="t-tui-calendar"><?php echo app('translator')->get('Imbangan Tugas'); ?></a></li>
                        </ul>
                    </li>
                <?php endif; ?>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-shield-quarter'></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Dasar Perkhidmatan'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="etika-perkhidmatan-awam" key="t-tui-calendar"><?php echo app('translator')->get('Etika Perkhidmatan Awam'); ?></a></li>
                        <li><a href="dasar-sekolah" key="t-full-calendar"><?php echo app('translator')->get('Dasar Sekolah'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-food-menu'></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Perincian Tugas'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Tugas Portofolio Berjawatan'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pta" key="t-tui-calendar"><?php echo app('translator')->get('Kategori PTA'); ?></a></li>
                                <li><a href="pdp" key="t-full-calendar"><?php echo app('translator')->get('Kategori PdP'); ?></a></li>
                                <li><a href="ptb-gbk" key="t-full-calendar"><?php echo app('translator')->get('Kategori PTB-GBK'); ?></a></li>
                                <li><a href="ptb-akb" key="t-full-calendar"><?php echo app('translator')->get('Kategori PTB-AKP'); ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Tugas Portofolio Tanpa Jawatan'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pengurusan-dan-pentadbiran" key="t-tui-calendar"><?php echo app('translator')->get('Komponen Pengurusan dan Pentadbiran'); ?></a>
                                </li>
                                <li><a href="kurikulum" key="t-full-calendar"><?php echo app('translator')->get('Komponen Kurikulum'); ?></a></li>
                                <li><a href="hal-ehwal-murid" key="t-full-calendar"><?php echo app('translator')->get('Komponen Hal Ehwal Murid'); ?></a></li>
                                <li><a href="kokurikulum" key="t-full-calendar"><?php echo app('translator')->get('Komponen Kokurikulum'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bxs-envelope'></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Punca Kuasa'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="surat-pekeliling-ikhtisas" key="t-tui-calendar"><?php echo app('translator')->get('Surat Pekeliling Ikhtisas'); ?></a></li>
                        <li><a href="surat-siaran" key="t-full-calendar"><?php echo app('translator')->get('Surat Siaran'); ?></a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-pages"><?php echo app('translator')->get('Tindakan'); ?></li>

                <li>
<<<<<<< HEAD
                    <a href="profilku" key="t-default">
                        <i class='bx bxs-user'></i>
                        <span><?php echo app('translator')->get('Profilku'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="senarai-pengguna" key="t-default">
                        <i class='bx bxs-user-plus'></i>
                        <span><?php echo app('translator')->get('Senarai Pengguna'); ?></span>
                    </a>
=======
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bxs-cog'></i>
                        <span key="t-authentication"><?php echo app('translator')->get('Tetapan'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tema" key="t-login"><?php echo app('translator')->get('Tema'); ?></a></li>
                        <li><a href="imej-latar-belakang" key="t-login"><?php echo app('translator')->get('Imej Latar Belakang'); ?></a></li>
                    </ul>
>>>>>>> 185e933 (fix: accordion color, remove action column, and table background)
                </li>

                <?php if(Auth::user()->jawatan_app == 0 or Auth::user()->jawatan_app == 1): ?>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bxs-user-rectangle'></i>
                            <span key="t-chat"><?php echo app('translator')->get('Akaun'); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="akaun-backoffice" key="t-login"><?php echo app('translator')->get('Back Office'); ?></a></li>
                            <li><a href="akaun-user" key="t-login"><?php echo app('translator')->get('User'); ?></a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if(Auth::user()->jawatan_app == 0 or Auth::user()->jawatan_app == 1): ?>
                    <li>
                        <a href="aplikasi-penyokong" class="waves-effect">
                            <i class='bx bxs-grid-alt'></i>
                            <span key="t-chat"><?php echo app('translator')->get('Aplikasi Penyokong'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>


                <li>
                    <a href="javascript:void();" class="waves-effect"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class='bx bx-log-out'></i>
                        <span key="t-chat"><?php echo app('translator')->get('Keluar'); ?></span>
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<?php /**PATH C:\laragon\www\mps\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>