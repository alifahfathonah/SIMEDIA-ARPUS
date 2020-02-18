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
                        <h1 class="m-0 text-dark">Peminjaman Arsip Vital</h1>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo site_url('admin/upload_data') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                    <div class="form-group">
                                        <label for="Tahun">Tahun*</label>
                                        <input class="date-own form-control" style="width: 100%;" name="Tahun" type="text" placeholder="Masukkan Tahun">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Data CSV*</label>
                                        <div class="custom-file">
                                            <input name="CSV" type="file" class="custom-file-input" id="exampleInputFile"></input>
                                            <label class="custom-file-label" for="exampleInputFile">Masukkan File CSV</label>
                                        </div>
                                    </div>
                                    <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                                </form>
                            </div>
                            <div class="card-footer small text-muted">
                                * required fields
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>
</body>

</html>