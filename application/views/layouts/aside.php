<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>index3.html" class="brand-link">
        <img src="<?= base_url() ?>assets/dist/img/logo2.png" alt="AdminLTE Logo" class="brand-image elevation-3"
            style="opacity: 1.8; width: 180px; height: 100px;" />
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>assets/dist/img/hombre.gif" class="img-circle elevation-2"
                    alt="User Image" />
            </div>
            <div class="info">
                <p class="dropdown-item-title text-truncate" style="max-width: 200px;">
                    <?= $this->session->userdata("usuario") ?>
                    <br>
                    <?= $this->session->userdata("cargo") ?>
                </p>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="<?= base_url() ?>control_recaudo/recaudo" class="nav-link">
                        <i class="nav-icon fas fa-bus"></i>
                        <p>
                            BUSES
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url() ?>control_usuarios/usuarios" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            USUARIOS
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="<?= base_url() ?>dashboard" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            RECAUDO
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

        </di v>
        <!-- /.sidebar -->
</aside>