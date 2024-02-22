<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ URL::to('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-datetimepicker.min.cs') }}s">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/simple-calendar/simple-calendar.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
	{{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
	<script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>

    <!-- CSS de BOOSTSTRAP -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}

</head>
<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ URL::to('assets/img/logo.png') }}" alt="Logo">
                </a>
                <a href="{{ route('home') }}" class="logo logo-small">
                    <img src="{{ URL::to('assets/img/logo-small.png') }}" alt="Logo" width="30" height="30">
                </a>
            </div>
            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <ul class="nav user-menu">
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="btn-danger btn-block" type="submit"><i class="fa fa-power-off"></i>SALIR</button>
                      </form>
                    <a class="mobile_btn" id="mobile_btn">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item dropdown noti-dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="assets/img/icons/header-icon-01.svg" alt="">
                    </a>
                    <div class="dropdown-menu ">
                        <div class="noti-content">
                            <div>
                                <a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
                                <a class="dropdown-item" href="javascript:;"><i class="flag flag-kh me-2"></i>Khmer</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="assets/img/icons/header-icon-05.svg" alt="">
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                                    approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list win-maximize">
                        <img src="assets/img/icons/header-icon-04.svg" alt="">
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="/images/{{ Session::get('avatar') }}" width="31"alt="{{ Session::get('name') }}">
                            <div class="user-text">
                                <h6>{{ Session::get('name') }}</h6>
                                <p class="text-muted mb-0">{{ Session::get('role_name') }}</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="/images/{{ Session::get('avatar') }}" alt="{{ Session::get('name') }}" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{ Session::get('name') }}</h6>
                                <p class="text-muted mb-0">{{ Session::get('role_name') }}</p>
                            </div>
                        </div>
                        {{-- <a class="dropdown-item" href="{{ route('user/profile/page') }}">My Profile</a> --}}
                        <a class="dropdown-item" href="inbox.html">Inbox</a>
                        {{-- <a class="dropdown-item" href="{{ route('logout') }}">Logout</a> --}}
                    </div>
                </li>
            </ul>
        </div>
		{{-- side bar --}}
		{{-- @include('sidebar.sidebar') --}}
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        {{-- <li class="{{set_active(['setting/page'])}}">
                            <a href="{{ route('setting/page') }}">
                                <i class="fas fa-cog"></i>
                                <span>Settings</span>
                            </a>
                        </li> --}}
                        {{-- <li class="submenu {{set_active(['home','teacher/dashboard','adquisicion/dashboard'])}}">
                            <a href="#"><i class="feather-grid"></i>
                                <span> Dashboard</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{ route('home') }}" class="{{set_active(['home'])}}">Admin Dashboard</a></li>
                                <li><a href="{{ route('teacher/dashboard') }}" class="{{set_active(['teacher/dashboard'])}}">Teacher Dashboard</a></li>
                                <li><a href="{{ route('adquisicion/dashboard') }}" class="{{set_active(['adquisicion/dashboard'])}}">Student Dashboard</a></li>
                            </ul>
                        </li> --}}
                        {{-- @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                        <li class="submenu {{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                            <a href="#"><i class="fas fa-shield-alt"></i>
                                <span>User Management</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{ route('list/users') }}" class="{{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">List Users</a></li>
                            </ul>
                        </li>
                        @endif --}}

                        <li class="submenu ">
                            <a href="#"><i class="fas fa-graduation-cap"></i>
                                <span> Adquisición</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                
                                @if (Session::get('rol') == '5')
                                <li class="nav-item">
                                  <a href="{{ route('solicituda.index') }}" class="nav-link d-flex align-items-center"> Aprobacion de solicitud</a>
                                </li>
                              @endif
                              @if (Session::get('rol') == '1')
                                <li><a href="{{route('recurso.index')}}">Recursos</a></li>
                                <li><a href="{{ route('solicitud.index') }}" >Solicitud de Selección</a></li>
                                <li><a href="{{ route('proveedores.index') }}" >Proveedores</a></li>
                                <li><a href="{{ route('operacion.index') }}"  >Compra de recursos</a></li>
                                <li><a href="{{ route('devoluciongeneral.index') }}"  >Gestión de devolución</a></li>
                                @endif
                            </ul>
                        </li>

                        @if (Session::get('rol') == '1' || Session::get('rol') == '6' || Session::get('rol') == '8' 
                                || Session::get('rol') == '9' || Session::get('rol') == '10')
                            <li class="submenu ">
                                <a href="#"><i class="fas fa-user"></i>
                                    <span> RRHH</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    @if (Session::get('rol') == '1' || Session::get('rol') == '6')
                                        <li><a href="{{route('planilla.ano')}}">Planilla</a></li>
                                        <li><a href="{{route('asistencia.ano')}}">Asistencia</a></li>
                                    @endif
                                    @if (Session::get('rol') == '1' || Session::get('rol') == '8')
                                        <li><a href="{{route('rol.index')}}">Tipo Trabajador</a></li>
                                    @endif
                                    @if (Session::get('rol') == '1' || Session::get('rol') == '9' || Session::get('rol') == '10')
                                        <li><a href="{{route('trabajador.index')}}">Trabajadores</a></li>
                                    @endif
                                </ul>
                            </li>
                        @endif

                        @if (Session::get('rol') == '1' || Session::get('rol') == '7')
                            <li class=" ">
                                <a href="{{route('balance.ano')}}"><i class="fas fa-book"></i>
                                    <span> Finanzas</span>
                                </a>
                            </li>
                        @endif







                        <li class="nav-item">
                            <a href="#"><i class="fas fa-tachometer-alt"></i>
                                <span> Gestion de Clientes</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav nav-treeview">
                              {{-- @if($rol == 1 || $rol == 3) --}}
                              @if (Session::get('rol') == '1' || Session::get('rol') == '3')
                              <li class="nav-item">
                                <a href="{{route('clientes.index')}}" class="nav-link d-flex align-items-center">
                                  <div>
                                    <i class="fas fa-user"></i>
                                    <p class="ml-2">Clientes</p>
                                  </div>

                                </a>
                            </li>
                            @endif
                            {{-- @endif --}}
                            {{-- <li class="nav-item">
                              <a href="{{route('clientes.vistaCliente')}}" class="nav-link d-flex align-items-center">
                                <div>
                                  <i class="fas fa-user"></i>
                                  <p class="ml-2">Mi perfil</p>
                                </div>

                              </a>
                          </li> --}}
                          @if (Session::get('rol') == '1' || Session::get('rol') == '3')
                              <li class="nav-item">
                                <a href="{{route('usuario.index')}}" class="nav-link">
                                  <i class="fas fa-user-circle"></i>
                                  <p>Usuarios</p>
                                </a>
                              </li>
                              @endif

                              @if (Session::get('rol') == '1' || Session::get('rol') == '4')
                              <li class="nav-item">
                                <a href="{{route('dashboard.index')}}" class="nav-link">
                                  <i class="fas fa-ticket-alt"></i>
                                  <p>Dashboard</p>
                                </a>
                              </li>
                              @endif


                              @if (Session::get('rol') == '1' || Session::get('rol') == '4')
                              <li class="nav-item">
                                <a href="{{route('segmento.index')}}" class="nav-link">
                                  <i class="fas fa-tag"></i>
                                  <p>Segmento</p>
                                </a>
                              </li>
                              @endif

                              @if (Session::get('rol') == '1' || Session::get('rol') == '4')
                              <li class="nav-item">
                                <a href="{{route('cliente.seg')}}" class="nav-link">
                                  <i class="fas fa-chart-bar"></i>
                                  <p>Segmentación</p>
                                </a>
                              </li>
                              @endif


                              @if (Session::get('rol') == '1' || Session::get('rol') == '4')
                              <li class="nav-item">
                                <a href="{{route('publicidad.index')}}" class="nav-link">
                                  <i class="fas fa-envelope"></i>
                                  <p>Publicitar</p>
                                </a>
                              </li>
                              @endif
                            </ul>
                          </li>




        {{--
                        <li class="submenu   {{ (request()->is('teacher/edit/*')) ? 'active' : '' }}">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i>
                                <span> Teachers</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{ route('teacher/list/page') }}" class="{{set_active(['teacher/list/page','teacher/grid/page'])}}">Teacher List</a></li>
                                <li><a href="teacher-details.html">Teacher View</a></li>
                                <li><a href="{{ route('teacher/add/page') }}" class="{{set_active(['teacher/add/page'])}}">Teacher Add</a></li>
                                <li><a class="{{ (request()->is('teacher/edit/*')) ? 'active' : '' }}">Teacher Edit</a></li>
                            </ul>
                        </li> --}}

                        {{-- <li class="submenu {{set_active(['department/add/page','department/edit/page'])}}">
                            <a href="#"><i class="fas fa-building"></i>
                                <span> Departments</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="departments.html">Department List</a></li>
                                <li><a href="{{ route('department/add/page') }}" class="{{set_active(['department/add/page'])}}">Department Add</a></li>
                                <li><a href="{{ route('department/edit/page') }}" class="{{set_active(['department/edit/page'])}}">Department Edit</a></li>
                            </ul>
                        </li> --}}
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i>
                                <span> Circulación </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{ route('venta.index') }}" >Ventas</a></li>
                                <li><a href="{{ route('devolucion.index') }}" >Devoluciones</a></li>
                                <li><a href="{{ route('reserva.index') }}" >Reservas</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-clipboard"></i>
                                <span> Servicios Tecnicos </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{route('almacen.index')}}">Almacen</a></li>
                                <li><a href="{{route('material.index')}}">Materiales</a></li>
                                <li><a href="{{route('reciclador.index')}}">Recicladores</a></li>
                                <li><a href="{{route('recurso_mantenimiento.index')}}">Libros en mantenimiento</a></li>
                                <li><a href="{{route('desecho_recurso.index')}}">Libros desechados</a></li>
                   
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		{{-- content page --}}
        @yield('content')
        <footer>
            <p>Copyright © 2022 Soeng Souy.</p>
        </footer>

    </div>

    <script src="{{ URL::to('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/feather.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/apexchart/chart-data.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/simple-calendar/jquery.simple-calendar.js') }}"></script>
    <script src="{{ URL::to('assets/js/calander.js') }}"></script>
    <script src="{{ URL::to('assets/js/circle-progress.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/script.js') }}"></script>
    @yield('script')


    @stack("scripts")
</body>
</html>
