<div class="header-left active">
    <a href="../inicio" class="logo logo-normal">
        <img src="../../../assets/img/logo.png" alt>
    </a>
    <a href="../inicio" class="logo logo-white">
        <img src="../../../assets/img/logo-white.png" alt>
    </a>
    <a href="../inicio" class="logo-small">
        <img src="../../../assets/img/logo-small.png" alt>
    </a>
    <a id="toggle_btn" href="javascript:void(0);">
        <i data-feather="chevrons-left" class="feather-16"></i>
    </a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
    <span class="bar-icon">
        <span></span>
        <span></span>
        <span></span>
    </span>
</a>

<ul class="nav user-menu">
    

    <li class="nav-item nav-item-box">
        <a href="javascript:void(0);" id="btnFullscreen">
            <i data-feather="maximize"></i>
        </a>
    </li>
    <!--li class="nav-item nav-item-box">
        <a href="#">
            <i data-feather="mail"></i>
            <span class="badge rounded-pill">1</span>
        </a>
    </li-->

    <li class="nav-item dropdown nav-item-box">
        <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
            <i data-feather="bell"></i><span class="badge rounded-pill">1</span>
        </a>
        <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
                <span class="notification-title">Notificaciones</span>
                <a href="javascript:void(0)" class="clear-noti"> Borrar todo </a>
            </div>
            <div class="noti-content">
                <ul class="notification-list">
                    <li class="notification-message">
                        <a href="../notificaciones"><!--  activities.html -->
                            <div class="media d-flex">
                                <span class="avatar flex-shrink-0">
                                    <img alt src="../../../assets/img/profiles/avatar-01.jpg">
                                </span>
                                <div class="media-body flex-grow-1">
                                    <p class="noti-details"><span class="noti-title">John Doe</span> added
                                        new task <span class="noti-title">Patient appointment booking</span>
                                    </p>
                                    <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="topnav-dropdown-footer">
                <a href="../notificaciones">Ver todas las notificaciones</a><!--  activities.html -->
            </div>
        </div>
    </li>

    <li class="nav-item nav-item-box">
        <a href="../configuracionPerfil/"><i data-feather="settings"></i></a> <!--  general-settings.html -->
    </li>
    <li class="nav-item dropdown has-arrow main-drop">
        <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
            <span class="user-info">
                <span class="user-letter">
                    <img src="../../../assets/img/profiles/avator1.jpg" alt class="img-fluid">
                </span>
                <span class="user-detail">
                    <span class="user-name">John Smilga</span>
                    <span class="user-role">Administrador</span>
                </span>
            </span>
        </a>
        <div class="dropdown-menu menu-drop-user">
            <div class="profilename">
                <div class="profileset">
                    <span class="user-img"><img src="../../../assets/img/profiles/avator1.jpg" alt>
                        <span class="status online"></span></span>
                    <div class="profilesets">
                        <h6>John Smilga</h6>
                        <h5>Super Admin</h5>
                    </div>
                </div>
                <hr class="m-0">
                <a class="dropdown-item" href="../perfil/"> <i class="me-2" data-feather="user"></i> Mi perfil</a>
                <a class="dropdown-item" href="../configuracionPerfil/"><i class="me-2" data-feather="settings"></i>Configuraciones</a>
                <hr class="m-0">
                <a class="dropdown-item logout pb-0" href="javascript:cerrarSesion()"><img src="../../../assets/img/icons/log-out.svg" class="me-2" alt="img">Salir</a><!--signin.html-->
            </div>
        </div>
    </li>
</ul>


<div class="dropdown mobile-user-menu">
    <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="../perfil/"> Mi perfil</a>
        <a class="dropdown-item" href="../configuracionPerfil/">Configuraciones</a>
        <a class="dropdown-item" href="javascript:cerrarSesion()">Salir</a>
    </div>
</div>
