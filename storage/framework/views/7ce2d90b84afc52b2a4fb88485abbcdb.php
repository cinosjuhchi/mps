<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('User'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" key="t-default"><?php echo app('translator')->get('Profilku'); ?></a></li>
                        <li><a href="index" key="t-saas"><?php echo app('translator')->get('Tukar Kata Laluan'); ?></a></li>
                        <li><a href="index" key="t-crypto"><?php echo app('translator')->get('Senarai Pengguna'); ?></a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-apps"><?php echo app('translator')->get('NAVIGASI'); ?></li>

                <li>
                    <a href="index" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat"><?php echo app('translator')->get('Citra Guru Besar'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Maklumat Sekolah'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Profil Sekolah'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Visi, Misi, Moto'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Falsafah Pendidikan Kebangsaan'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Piagam Pelanggan'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Ikrar Penjawat Awam'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Ikrar Guru'); ?></a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Logo'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Logo Sekolah'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Logo JPN'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Logo KPM'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Jata Negeri'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Jata Negara'); ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Lagu'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Lagu Sekolah'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Lagu Guru Malaysia'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Lagu Kebesaran Negeri'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Lagu Negaraku'); ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Pengurusan Bilik'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Bilik Darjah'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Bilik Khas'); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Peta Susun Atur Premis'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Foto Galeri'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Peta Lokasi'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Takwim'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Kalendar'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Penggala Persekolahan'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Jadual Guru Bertugas Harian'); ?></a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Cuti'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Hari Kelepasan Am Persekutuan'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Hari Kelepasan Am Negeri'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Cuti Peristiwa'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Guru dan Kakitangan'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Carta Organisasi Pengurusan Sekolah (COPS)'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Senarai Guru dan Kakitgangan'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Senarai Pengawal Keselamatan'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Senarai Pekerja Kebersihan'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Senarai Pekerja Kantin'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Polisi Angkat'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Pengurusan Komponen'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Carta Organisasi Pengurusan Komponen (COPK)'); ?></a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Komponen Pengurusan dan Pentadbiran'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Program'); ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Komponen Kurikulum'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Program'); ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Komponen Hal Ehwal Murid'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Program'); ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Komponen Kokurikulum'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)'); ?></a></li>
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Program'); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Imbangan Tugas'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Dasar Perkhidmatan'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Etika Perkhidmatan Awam'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Dasar Sekolah'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Perincian Tugas'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Tugas Portofolio Berjawatan'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Kategori PTA'); ?></a></li>
                                <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Kategori PdP'); ?></a></li>
                                <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Kategori PTB-GBK'); ?></a></li>
                                <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Kategori PTB-AKP'); ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards"><?php echo app('translator')->get('Tugas Portofolio Tanpa Jawatan'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Komponen Pengurusan dan Pentadbiran'); ?></a></li>
                                <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Komponen Kurikulum'); ?></a></li>
                                <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Komponen Hal Ehwal Murid'); ?></a></li>
                                <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Komponen Kokurikulum'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('Punca Kuasa'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" key="t-tui-calendar"><?php echo app('translator')->get('Surat Pekeliling Ikhtisas'); ?></a></li>
                        <li><a href="index" key="t-full-calendar"><?php echo app('translator')->get('Surat Siaran'); ?></a></li>
                    </ul>
                </li>


                <li class="menu-title" key="t-pages"><?php echo app('translator')->get('Tindakan'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication"><?php echo app('translator')->get('Tetapan'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" key="t-login"><?php echo app('translator')->get('Tema'); ?></a></li>
                        <li><a href="index" key="t-login"><?php echo app('translator')->get('Imej Latar Belakang'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="index" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat"><?php echo app('translator')->get('Akaun'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="index" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat"><?php echo app('translator')->get('Keluar'); ?></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\Users\neaca\OneDrive\Dokumen\fauzan\SMKN_12\ekstrakulikuler\PROJEK\mps\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>