<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Inicio</p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Medico
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('workers') }}" class="nav-link">
                        <i class="fas fa-address-card nav-icon"></i>
                        <p>Trabajadores</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addWorker') }}" class="nav-link">
                        <i class="fas fa-user-plus nav-icon"></i>
                        <p>Agregar</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</nav>
<!-- /.sidebar-menu -->
