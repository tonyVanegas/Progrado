<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand img -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">infogestión<sup>App</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        interface
    </div>

    <!-- Nav Item - 1 -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('usuarios') }}">
            <i class="fas fa-users fa-fw"></i>
            <span>Usuarios</span></a>
    </li>

    <!-- Nav Item - 2 -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('roles') }}">
            <i class="fas fa-id-card fa-fw"></i>
            <span>Roles</span></a>
    </li>

    <!-- Nav Item - 3 -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('permissions') }}">
            <i class="far fa-hand-paper fa-fw"></i>
            <span>Permisos</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
