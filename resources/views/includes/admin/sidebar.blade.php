<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">
            Nomads Admin
        </div>
    </a>

    <!-- Nav Item - Dashboard  -->
    <li class="nav-item active">
        <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Dashboard  -->
    <li class="nav-item">
        <a href="{{ route('travel-package.index') }}" class="nav-link">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Paket Travel</span>
        </a>
    </li>

    <!-- Nav Item - Dashboard  -->
    <li class="nav-item">
        <a href="{{ route('gallery.index') }}" class="nav-link">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri Travel</span>
        </a>
    </li>

    <!-- Nav Item - Dashboard  -->
    <li class="nav-item">
        <a href="{{ route('transaction.index') }}" class="nav-link">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Transaksi</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->