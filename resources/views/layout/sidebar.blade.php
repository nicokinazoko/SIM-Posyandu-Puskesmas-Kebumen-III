<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{route('buttons')}}">Buttons</a>
                <a class="collapse-item" href="{{route('cards')}}">Cards</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{route('utilities-color')}}">Colors</a>
                <a class="collapse-item" href="{{route('utilities-border')}}">Borders</a>
                <a class="collapse-item" href="{{route('utilities-animation')}}">Animations</a>
                <a class="collapse-item" href="{{route('utilities-other')}}">Other</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Addons
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Halaman Input</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Input Data:</h6>
                {{-- <a class="collapse-item" href="{{route('login')}}">Login</a>
                <a class="collapse-item" href="{{route('register')}}">Register</a>
                <a class="collapse-item" href="{{route('forgot-password')}}">Forgot Password</a> --}}
                <a class="collapse-item" href="{{route('input-data-kader')}}">Input Data Kader</a>
                <a class="collapse-item" href="{{route('input-data-balita')}}">Input Data Balita</a>
                <a class="collapse-item" href="{{route('input-data-imunisasi')}}">Input Data Imunisasi</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Edit Data:</h6>
                {{-- <a class="collapse-item" href="{{route('404')}}">404 Page</a>
                <a class="collapse-item" href="{{route('blank')}}">Blank Page</a> --}}
                <a class="collapse-item" href="{{route('edit-kader')}}">Edit Data Kader</a>
                <a class="collapse-item" href="{{route('edit-balita')}}">Edit Data Balita</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('charts')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> --}}


    <!-- Nav Item - Tables Balita -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('table-kader')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Tabel Data Kader</span></a>
    </li>

    <!-- Nav Item - Tables Kader -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('table-balita')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Tabel Data Balita</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>
