<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
                <i class="fas fa-home nav-icon"></i>
                <p>Inicio</p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Trabajadores
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/worker" class="nav-link">
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
        <li class="nav-item">
            <a href="/search" class="nav-link">
                <i class="fas fa-search-plus nav-icon"></i>
                <p>Reportes</p>
            </a>
        </li>
       @admin
        <li class="nav-item">
            <a href="/users" class="nav-link">
                <i class="fas fa-user nav-icon"></i>
                <p>Usuarios</p>
            </a>
        </li>
        @endadmin
        
        
    </ul>

</nav>
<!-- /.sidebar-menu -->
