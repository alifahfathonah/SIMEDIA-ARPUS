        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4 sidebar-light-danger">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link navbar-danger">
                <img src="<?php echo base_url("dist/img/prov.png") ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light" style="color: white;">DPMPTSP Jateng</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url("dist/img/avatar5.png") ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/overview') ?>" class="nav-link <?php if($this->uri->segment(2)=="overview"){echo "active";}?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">SISTEM INFORMASI ARSIP</li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/smartbook') ?>" class="nav-link <?php if($this->uri->segment(2)=="smartbook"){echo "active";}?>">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Data Smart Book Yanzin
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/scan') ?>" class="nav-link <?php if($this->uri->segment(2)=="scan"){echo "active";}?>">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Data Scan DPMPTSP
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url('admin/peminjaman') ?>" class="nav-link <?php if($this->uri->segment(2)=="peminjaman"){echo "active";}?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Peminjaman Arsip Vital
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">SISTEM PEREKAPAN ARSIP</li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Rekap Arsip
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Hari Ini</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Per Jenis Izin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Per Bulan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">INFORMASI KODE YANZIN</li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url('admin/kode') ?>" class="nav-link <?php if($this->uri->segment(2)=="kode"){echo "active";}?>">
                                <i class="nav-icon fas fa-code"></i>
                                <p>
                                    Kode Yanzin
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>