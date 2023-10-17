<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.home') }}" class="app-brand-link">
            {{-- <span class="app-brand-logo demo">
            </span> --}}
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Dashboard</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ (Request::RouteIs('admin.home')) ? 'active' : '' }}">
            <a href="{{ route('admin.home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Accounts</span>
        </li>
        <li class="menu-item {{ (Request::RouteIs('admin.instruktur.*')) ? 'active' : '' }}">
            <a href="{{ route('admin.instruktur.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-voice"></i>
                <div data-i18n="Analytics">Instruktur</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Analytics">Peserta</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">training & class</span>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.pelatihan.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-graduation"></i>
                <div data-i18n="Analytics">Pelatihan</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-chalkboard"></i>
                <div data-i18n="Analytics">Kelas-Kelas Pelatihan</div>
            </a>
        </li>
    </ul>
</aside>