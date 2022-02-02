<!--====================================
——— LEFT SIDEBAR WITH FOOTER
=====================================-->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/" title="SPPD">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name text-truncate">Kominfo</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ url('/') }}" data-toggle="collapse" data-target="#dashboard"
                        aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse " id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ url('/') }}">
                                    <span class="nav-text">Dashboard</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#components" aria-expanded="false" aria-controls="components">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Surat</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse " id="components" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ url('/listsurat') }}">
                                    <span class="nav-text">List Surat</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ url('/createsurat') }}">
                                    <span class="nav-text">Buat Surat</span>
                                </a>
                            </li>

                            <!-- <li>
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Edit Kategori</span>
                                </a>
                            </li> -->
                        </div>
                    </ul>
                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                        aria-expanded="false" aria-controls="icons">
                        <i class="mdi mdi-diamond-stone"></i>
                        <span class="nav-text">Pegawai</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse " id="icons"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ url('/listpegawai') }}">
                                    <span class="nav-text">List Pegawai</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ url('/createpegawai') }}">
                                    <span class="nav-text">Tambah Pegawai</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <!-- <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                        aria-expanded="false" aria-controls="forms">
                        <i class="mdi mdi-email-mark-as-unread"></i>
                        <span class="nav-text">Laporan</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse " id="forms"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Riwayat Transaksi</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Riwayat Input Barang</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Riwayat Penjualan</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Laporan Stock</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
</aside>