<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{route('panel')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ url('public/img/logo.png') }}" alt="logo-sm-dark" height="24">
            </span>
            <span class="logo-lg">
                <img src="{{ url('public/img/logo.png') }}" alt="logo-dark" height="22">
            </span>
        </a>
        <a href="{{route('panel')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ url('public/img/logo.png') }}" alt="logo-sm-light" height="24">
            </span>
            <span class="logo-lg">
                <img src="{{ url('public/img/logo.png') }}" alt="logo-light" height="22">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn"
        id="vertical-menu-btn">
        <i class="mdi mdi-align-horizontal-left"></i>
    </button>

    <div data-simplebar class="vertical-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">İş Bölümü</li>
                <li>
                    <a href="{{route('panel-projects')}}" class="waves-effect">
                        <i class="uim uim-airplay"></i>
                        <span>Projeler</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel-isler')}}" class="waves-effect">
                        <i class="uim uim-airplay"></i>
                        <span>İşler</span>
                    </a>
                </li>
                <li class="menu-title">Çalışan Bölümü</li>
                <li>
                    <a href="{{route('panel-departmanlar')}}" class="waves-effect">
                        <i class="uim uim-airplay"></i>
                        <span>Departmanlar</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel-ekipler')}}" class="waves-effect">
                        <i class="uim uim-airplay"></i>
                        <span>Ekipler</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel-kullanicilar')}}" class="waves-effect">
                        <i class="uim uim-airplay"></i>
                        <span>Kullanıcılar</span>
                    </a>
                </li>
                <li class="menu-title">Panel Bölümü</li>
                <li>
                    <a href="{{route('panel')}}" class="waves-effect">
                        <i class="uim uim-airplay"></i>
                        <span>Kayıtlar</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel')}}" class="waves-effect">
                        <i class="uim uim-airplay"></i>
                        <span>Sayfalar</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel')}}" class="waves-effect">
                        <i class="uim uim-airplay"></i>
                        <span>Yetkiler</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>

    <div class="dropdown px-3 sidebar-user sidebar-user-info">
        <button type="button" class="btn w-100 px-0 border-0" id="page-header-user-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <img src="{{ url('public/build/images/users/avatar-2.jpg') }}"
                        class="img-fluid header-profile-user rounded-circle" alt="">
                </div>

                <div class="flex-grow-1 ms-2 text-start">
                    <span class="ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                </div>

                <div class="flex-shrink-0 text-end">
                    <i class="mdi mdi-dots-vertical font-size-16"></i>
                </div>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="javascript:void(0)"><i
                    class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                    class="align-middle">Profilimi Gör</span>
            </a>
            <a class="dropdown-item" href="javascript:void();"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                    class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span
                    class="align-middle">Çıkış Yap</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

</div>
<!-- Left Sidebar End -->
