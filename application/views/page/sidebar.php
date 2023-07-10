<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?php echo base_url('assets/'); ?>dist/img/default.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="" class="d-block">Admin Pertama</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item ">
                <a href="<?php echo base_url('perpus/index') ?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Forms
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url('perpus/form_buku') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Form Tambah Buku</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Tables
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url('perpus/index1') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Table Buku</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item ">
                <a href="<?php echo base_url('auth/logout') ?>" class="nav-link" onclick="javascript: return confirm('Anda yakin ingin keluar?')">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        LogOut
                    </p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>