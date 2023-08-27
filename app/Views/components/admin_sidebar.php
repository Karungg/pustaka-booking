<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <!-- Nav Item - buku -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/buku') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Buku</span></a>
    </li>

    <!-- Nav Item - Kategori Buku -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kategori') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Kategori Buku</span></a>
    </li>

    <!-- Nav Item - Data Anggota -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/member') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Anggota</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>