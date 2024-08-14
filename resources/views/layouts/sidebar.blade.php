<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                @if (Auth::user()->jawatan_app != 0 and Auth::user()->jawatan_app != 1)
                    <li>
                        <a href="tetapan" class="waves-effect">
                            <i class='bx bxs-cog'></i>
                            <span key="t-chat">@lang('Tetapan')</span>
                        </a>
                    </li>
                @endif
                <li>
                    <a href="dashboard" class="waves-effect">
                        <i class='bx bxs-home'></i>
                        <span key="t-chat">@lang('Dashboard')</span>
                    </a>
                </li>
                @if (Auth::user()->jawatan_app != 0 and Auth::user()->jawatan_app != 1)
                    <li class="menu-title" key="t-menu">@lang('translation.Menu')</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bxs-user-circle"></i>
                            <span key="t-dashboards">@lang('User')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="profilku" key="t-default">@lang('Profilku')</a></li>
                            <li><a href="tukar-kata-laluan" key="t-saas">@lang('Tukar Kata Laluan')</a></li>
                            @if (Auth::user()->jawatan_app == 2 or Auth::user()->jawatan_app == 3)
                                <li><a href="senarai-pengguna" key="t-crypto">@lang('Senarai Pengguna')</a></li>
                            @endif
                        </ul>
                    </li>
                @endif

                <li class="menu-title" key="t-apps">@lang('NAVIGASI')</li>
                @if (Auth::user()->jawatan_app != 0 and Auth::user()->jawatan_app != 1)
                    <li>
                        <a href="@if (Auth::user()->kategori_sekolah == 'sekolah_rendah' or Auth::user()->jawatan_app == '2') minda-guru-besar @else minda-pengetua @endif"
                            class="waves-effect">
                            <i class='bx bxs-photo-album'></i>
                            <span key="t-chat">Minda @if (Auth::user()->kategori_sekolah == 'sekolah_rendah' or Auth::user()->jawatan_app == '2')
                                    Guru Besar
                                @else
                                    Pengetua
                                @endif
                            </span>
                        </a>
                    </li>
                @endif

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bxs-school'></i>
                        <span key="t-dashboards">@lang('Maklumat Sekolah')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if (Auth::user()->jawatan_app != 0)
                            <li><a href="profil-sekolah" key="t-tui-calendar">@lang('Profil Sekolah')</a></li>
                            <li><a href="visi-misi-moto" key="t-full-calendar">@lang('Visi, Misi, Moto')</a></li>
                            <li><a href="falsafah-pendidikan-kebangsaan" key="t-full-calendar">@lang('Falsafah Pendidikan Kebangsaan')</a>
                            </li>
                            <li><a href="piagam-pelanggan" key="t-full-calendar">@lang('Piagam Pelanggan')</a></li>
                        @endif
                        @if (Auth::user()->jawatan_app == 0)
                        <li><a href="ikrar-rukun-negara" key="t-full-calendar">@lang('Ikrar Rukun Negara')</a></li>
                        @endif
                        @if (Auth::user()->jawatan_app != 0)
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards">@lang('Ikrar')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ikrar-rukun-negara" key="t-full-calendar">@lang('Ikrar Rukun Negara')</a></li>
                                <li><a href="ikrar-penjawat-awam" key="t-full-calendar">@lang('Ikrar Penjawat Awam')</a></li>
                                <li><a href="ikrar-guru" key="t-full-calendar">@lang('Ikrar Guru')</a></li>
                            </ul>
                        </li>
                        @endif
                        <li>
                            <a href="logo-sekolah">
                                <span key="t-dashboards">@lang('Logo Sekolah')</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards">@lang('Lagu')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="lagu-sekolah" key="t-tui-calendar">@lang('Lagu Sekolah')</a></li>
                                <li><a href="lagu-guru-malaysia" key="t-tui-calendar">@lang('Lagu Guru Malaysia')</a></li>
                                <li><a href="lagu-kebangsaan-negeri" key="t-tui-calendar">@lang('Lagu Kebangsaan Negeri')</a></li>
                                <li><a href="lagu-negaraku" key="t-tui-calendar">@lang('Lagu Negaraku')</a></li>
                            </ul>
                        </li>

                        @if (Auth::user()->jawatan_app != 0)
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards">@lang('Pengurusan Bilik')</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="bilik-darjah" key="t-tui-calendar">@lang('Bilik Darjah')</a></li>
                                    <li><a href="bilik-khas" key="t-tui-calendar">@lang('Bilik Khas')</a></li>
                                </ul>
                            </li>
                            <li><a href="peta-susun-atur-premis" key="t-full-calendar">@lang('Peta Susun Atur Premis')</a></li>
                            <li><a href="peta-lokasi" key="t-full-calendar">@lang('Peta Lokasi')</a></li>
                        @endif
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards">@lang('Takwim')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="kalendar" key="t-tui-calendar">@lang('Kalendar')</a></li>
                        <li><a href="penggal-persekolahan" key="t-full-calendar">@lang('Penggal Persekolahan')</a></li>
                        @if (Auth::user()->jawatan_app != 0)
                            <li><a href="jadual-guru-bertugas-harian" key="t-full-calendar">@lang('Jadual Guru Bertugas Harian')</a>
                            </li>
                        @endif
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards">@lang('Cuti')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                @if (Auth::user()->jawatan_app != 0)
                                    <li><a href="hari-kelepasan-am" key="t-tui-calendar">@lang('Hari Kelepasan Am ')</a></li>
                                @endif
                                <li><a href="cuti-peristiwa" key="t-tui-calendar">@lang('Cuti Peristiwa')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                @if (Auth::user()->jawatan_app != 0)
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bxs-group'></i>
                            <span key="t-dashboards">@lang('Guru dan Kakitangan')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="cops" key="t-tui-calendar">@lang('Carta Organisasi Pengurusan Sekolah (COPS)')</a></li>
                            <li><a href="senarai-guru-dan-kakitangan" key="t-full-calendar">@lang('Senarai Guru dan Kakitangan')</a>
                            </li>
                            <li><a href="senarai-pengawal-keselamatan" key="t-full-calendar">@lang('Senarai Pengawal Keselamatan')</a>
                            </li>
                            <li><a href="senarai-pekerja-kebersihan" key="t-full-calendar">@lang('Senarai Pekerja Kebersihan')</a></li>
                            <li><a href="senarai-pekerja-kantin" key="t-full-calendar">@lang('Senarai Pekerja Kantin')</a></li>
                            <li><a href="polisi-angkat" key="t-full-calendar">@lang('Polisi Angkat')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bxs-directions'></i>
                            <span key="t-dashboards">@lang('Pengurusan Komponen')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="copk" key="t-tui-calendar">@lang('Carta Organisasi Pengurusan Komponen (COPK)')</a></li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards">@lang('Komponen Pengurusan dan Pentadbiran')</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pengurusan-dan-pentadbiran-jk-jp"
                                            key="t-tui-calendar">@lang('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)')</a></li>
                                    <li><a href="program-pengurusan-dan-pentadbiran"
                                            key="t-tui-calendar">@lang('Program')</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards">@lang('Komponen Kurikulum')</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="kurikulum-jk-jp" key="t-tui-calendar">@lang('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)')</a></li>
                                    <li><a href="program-kurikulum" key="t-tui-calendar">@lang('Program')</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards">@lang('Komponen Hal Ehwal Murid')</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="hal-ehwal-murid-jk-jp" key="t-tui-calendar">@lang('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)')</a>
                                    </li>
                                    <li><a href="program-hal-ehwal-murid" key="t-tui-calendar">@lang('Program')</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span key="t-dashboards">@lang('Komponen Kokurikulum')</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="kokurikulum-jk-jp" key="t-tui-calendar">@lang('Jawatankuasa Komponen (JK) dan Jawatan Pelaksana (JP)')</a></li>
                                    <li><a href="program-kokurikulum" key="t-tui-calendar">@lang('Program')</a></li>
                                </ul>
                            </li>
                            <li><a href="imbangan-tugas" key="t-tui-calendar">@lang('Imbangan Tugas')</a></li>
                        </ul>
                    </li>
                @endif


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-shield-quarter'></i>
                        <span key="t-dashboards">@lang('Dasar Perkhidmatan')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="etika-perkhidmatan-awam" key="t-tui-calendar">@lang('Etika Perkhidmatan Awam')</a></li>
                        <li><a href="dasar-sekolah" key="t-full-calendar">@lang('Dasar Sekolah')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-food-menu'></i>
                        <span key="t-dashboards">@lang('Perincian Tugas')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards">@lang('Tugas Portofolio Berjawatan')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pta" key="t-tui-calendar">@lang('Kategori PTA')</a></li>
                                <li><a href="pdp" key="t-full-calendar">@lang('Kategori PdP')</a></li>
                                <li><a href="ptb-gbk" key="t-full-calendar">@lang('Kategori PTB-GBK')</a></li>
                                <li><a href="ptb-akb" key="t-full-calendar">@lang('Kategori PTB-AKP')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-dashboards">@lang('Tugas Portofolio Tanpa Jawatan')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pengurusan-dan-pentadbiran" key="t-tui-calendar">@lang('Komponen Pengurusan dan Pentadbiran')</a>
                                </li>
                                <li><a href="kurikulum" key="t-full-calendar">@lang('Komponen Kurikulum')</a></li>
                                <li><a href="hal-ehwal-murid" key="t-full-calendar">@lang('Komponen Hal Ehwal Murid')</a></li>
                                <li><a href="kokurikulum" key="t-full-calendar">@lang('Komponen Kokurikulum')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bxs-envelope'></i>
                        <span key="t-dashboards">@lang('Punca Kuasa')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="surat-pekeliling-ikhtisas" key="t-tui-calendar">@lang('Surat Pekeliling Ikhtisas')</a></li>
                        <li><a href="surat-siaran" key="t-full-calendar">@lang('Surat Siaran')</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-pages">@lang('Tindakan')</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bxs-cog'></i>
                        <span key="t-authentication">@lang('Tetapan')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tema" key="t-login">@lang('Tema')</a></li>
                        <li><a href="imej-latar-belakang" key="t-login">@lang('Imej Latar Belakang')</a></li>
                    </ul>
                </li>

                @if (Auth::user()->jawatan_app == 0 or Auth::user()->jawatan_app == 1)
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bxs-user-rectangle'></i>
                            <span key="t-chat">@lang('Akaun')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="akaun-backoffice" key="t-login">@lang('Back Office')</a></li>
                            <li><a href="akaun-user" key="t-login">@lang('User')</a></li>
                        </ul>
                    </li>
                @endif


                <li>
                    <a href="javascript:void();" class="waves-effect"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class='bx bx-log-out'></i>
                        <span key="t-chat">@lang('Keluar')</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
