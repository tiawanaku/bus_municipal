<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <!-- iCheck (para los estilos de radio buttons) -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="<?= base_url() ?>stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css" />
    <!-- direccion table -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?= base_url() ?>assets/dist/img/logo.png" alt="AdminLTELogo"
                height="60" width="60" />
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">

                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                        <span class="badge badge-danger navbar-badge">1</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-item p-2">
                            <!-- User Info Start -->
                            <div class="media">
                                <img src="<?= base_url() ?>assets/dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-2 img-circle" style="width: 40px; height: 40px;" />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title text-truncate" style="max-width: 200px;">
                                        <?= $this->session->userdata("usuario") ?><br>

                                    </h3>
                                    <p class="text-sm mb-0 text-truncate" style="max-width: 200px;">Cargo:
                                        <?= $this->session->userdata("cargo") ?>
                                    </p>
                                    <p class="text-sm text-muted mb-0">
                                        <i class="far fa-clock mr-1"></i> Ahora mismo
                                    </p>
                                    <p class="text-sm mb-0">Tiempo en el sistema:
                                        <?php
                                        $login_time = $this->session->userdata('login_time');
                                        $current_time = time();
                                        $time_spent = $current_time - $login_time;

                                        // Convertir segundos a un formato legible
                                        $hours = floor($time_spent / 3600);
                                        $minutes = floor(($time_spent % 3600) / 60);
                                        $seconds = $time_spent % 60;
                                        echo "$hours h $minutes m $seconds s";
                                        ?>
                                    </p>

                                    <!-- Mensaje de tiempo -->
                                    <a href="<?= base_url() ?>auth/logout"
                                        class="btn btn-block btn-outline-danger mt-2">CERRAR SESION</a>
                                </div>
                            </div>
                            <!-- User Info End -->
                        </div>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>

                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <!-- Dark/Light Mode Toggle Button -->
                <li class="nav-item">

                    <a class="nav-link" id="dark-mode-toggle" href="#" role="button">
                        <i class="fas fa-adjust"></i>


                    </a>
                </li>
            </ul>
        </nav>
        <!-- jQuery -->
        <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>