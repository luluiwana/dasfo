<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default">

@include('admin.layout.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">

                            <span class="  ms-2">
                                <img class="w-30 m-auto" src="{{ asset('logo.png') }}" alt="" srcset="">
                            </span>
                        </span>

                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>
                <div class="dropdown-divider "></div>
                <ul class="menu-inner py-1">
                    <li class="d-none menu-item @if ($title == 'Beranda') active @endif">
                        <a href="index.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-home-circle"></i>
                            <div data-i18n="Analytics">Beranda</div>
                        </a>
                    </li>
                    <li class="menu-item @if ($title == 'Aspirasi') active @endif"">
                        <a href=" {{ route('all_aspiration') }} " class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-chat"></i>
                            <div data-i18n="Analytics">Aspirasi</div>
                        </a>
                    </li>
                    <!-- Layouts -->
                    <li class="menu-item @if ($title == 'Berita') active open @endif" ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bxs-news"></i>
                            <div data-i18n="Layouts">Berita</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item  @if ($subtitle == 'Buat Berita') active @endif"">
                        <a href=" {{ route('create_news') }} " class="menu-link">
                            <div data-i18n="Without menu">Buat Berita</div>
                        </a>
                    </li>
                    <li class="menu-item  @if ($subtitle == 'Semua Berita') active @endif"">
                        <a href=" {{ route('all_news') }} " class="menu-link">
                            <div data-i18n="Without navbar">Lihat Semua Berita</div>
                        </a>
                    </li>
                </ul>
                </li>
                <!-- Layouts -->
                <li class="menu-item @if ($title == 'Data') active open @endif">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-grid-alt"></i>
                        <div data-i18n="Layouts">Data Desa</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item @if ($subtitle == 'Profil') active @endif">
                            <a href=" {{ route('data', 'Profil') }} " class="menu-link">
                                <div data-i18n="Without menu">Profil Desa</div>
                            </a>
                        </li>
                        <li class="menu-item @if ($subtitle == 'Pemerintahan') active @endif">
                            <a href="{{ route('govdata', 'Pemerintahan') }}" class="menu-link">
                                <div data-i18n="Without navbar">Pemerintahan</div>
                            </a>
                        </li>
                        <li class="menu-item  @if ($subtitle == 'Sosial') active @endif">
                            <a href="{{ route('data', 'Sosial') }}" class="menu-link">
                                <div data-i18n="Container">Sosial</div>
                            </a>
                        </li>
                        <li class="menu-item  @if ($subtitle == 'Budaya') active @endif">
                            <a href="{{ route('data', 'Budaya') }}" class="menu-link">
                                <div data-i18n="Fluid">Budaya</div>
                            </a>
                        </li>
                        <li class="menu-item  @if ($subtitle == 'Pariwisata') active @endif">
                            <a href="{{ route('data', 'Pariwisata') }}" class="menu-link">
                                <div data-i18n="Blank">Pariwisata</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item d-none">
                    <a href="index.html" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-user"></i>
                        <div data-i18n="Analytics">Pengaturan Profil</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="index.html" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-log-out-circle"></i>
                        <div data-i18n="Analytics">Keluar</div>
                    </a>
                </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center pt-3">
                                <h4 class="h5"> @yield('title') @yield('subtitle') </h4>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('content')
                    <!--/ Layout Demo -->
                </div>
                <!-- / Content -->



                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    @include('admin.layout.footer')
    @yield('custom-js')
</body>

</html>
