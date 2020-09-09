<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('style')
    </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
              <!-- Left navbar links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="{{route('logout')}}" class="nav-link">salir</a>
                </li>
              </ul>
              
              <!-- SEARCH FORM -->
              <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
          
              <!-- Right navbar links -->
              <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      <div class="media">
                        <img src="{{asset('images/avatar.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                          <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">Call me whenever you can...</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                      </div>
                      <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      <div class="media">
                        <img src="{{asset('images/avatar.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                          <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">I got your message bro</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                      </div>
                      <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      <div class="media">
                        <img src="{{asset('images/avatar.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                          <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">The subject goes here</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                      </div>
                      <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                  </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-envelope mr-2"></i> 4 new messages
                      <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-users mr-2"></i> 8 friend requests
                      <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-file mr-2"></i> 3 new reports
                      <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /.navbar -->
          
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
              <!-- Brand Logo -->
              <a href="index3.html" class="brand-link">
                <img src="{{asset('images/logopcv.png')}}" alt="" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <span class="brand-text font-weight-light">Pre-Concreto</span>
              </a>
          
              <!-- Sidebar -->
              <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                    <img src="{{asset('images/avatar.jpg')}}" class="img-circle elevation-2" alt="">
                  </div>
                  <div class="info">
                  <a href="#" class="d-block">{{Auth::user()->name}}</a>
                  </div>
                </div>
          
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                      <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Inicio
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{ route('workers')}}" class="nav-link active">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Enfermos</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
            </aside>
            <span>asdasd</span>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2020-2024 Pre-Concreto de Veracruz S.A. de C.V.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
              <b>Version</b> 0.1.23
            </div>
          </footer>
        
          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->
        </div>
    </div>
        <!-- ./wrapper -->
        
        <!-- jQuery -->
        <script src="{{asset('js/app.js')}}"></script>
        @yield('scripts')
  </body>
</html>
