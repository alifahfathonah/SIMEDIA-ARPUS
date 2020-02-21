<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head.php'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php $this->load->view('template/navbar.php'); ?>
    <?php $this->load->view('template/sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Detail Scan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <?php $this->load->view('template/breadcrumb.php'); ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row align-items-center">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?php echo base_url("admin/scan") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('form_error')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $this->session->flashdata('form_error'); ?>
                                    </div>
                                <?php endif; ?>
                                <form id="myForm" action="<?php echo site_url('admin/uploadScan') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $scan->id ?>" />
                                    <input type="hidden" name="kode" value="<?php echo $scan->kode ?>" />
                                    <input type="hidden" name="nama" value="<?php echo $scan->nama ?>" />
                                    <input type="hidden" name="uraian" value="<?php echo $scan->uraian ?>" />
                                    <input type="hidden" name="tanggal" value="<?php echo $scan->tanggal ?>" />
                                    <input type="hidden" name="sk" value="<?php echo $scan->sk ?>" />
                                    <input type="hidden" name="jenis" value="<?php echo $scan->jenis ?>" />
                                    <input type="hidden" name="kota" value="<?php echo $scan->kota ?>" />
                                    <input type="hidden" name="jumlah" value="<?php echo $scan->jumlah ?>" />
                                    <input type="hidden" name="petugas" value="<?php echo $scan->petugas ?>" />
                                    <div class="form-group">
                                        <label for="datask">Data SK*</label>
                                        <input class="form-control <?php echo form_error('datask') ? 'is-invalid' : '' ?>" type="text" name="datask" placeholder="Masukkan Data SK" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('datask') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="datadukung">Data Dukung*</label>
                                        <input class="form-control <?php echo form_error('datadukung') ? 'is-invalid' : '' ?>" type="text" name="datadukung" placeholder="Masukkan Data Dukung" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('datadukung') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dus">Dus*</label>
                                        <input class="form-control <?php echo form_error('dus') ? 'is-invalid' : '' ?>" type="text" name="dus" placeholder="Masukkan Dus" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('dus') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="urut">No Berkas*</label>
                                        <input class="form-control <?php echo form_error('urut') ? 'is-invalid' : '' ?>" type="text" name="urut" placeholder="Masukkan No Berkas" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('urut') ?>
                                        </div>
                                    </div>
                                    <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                                </form>
                            </div>
                            <div class="card-footer small text-muted">
                                * required fields
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>

    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>
</body>

</html>