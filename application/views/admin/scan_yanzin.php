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
                        <h1 class="m-0 text-dark">Scan Data DPMPTSP</h1>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="#" class="btn btn-success"><i class="fas fa-plus fa-fw"></i>&nbsp;Tambah Data Baru</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode</th>
                                                        <th>Nama</th>
                                                        <th>Keterangan</th>
                                                        <th>Tanggal</th>
                                                        <th>No SK</th>
                                                        <th>Jenis Izin</th>
                                                        <th>Kota</th>
                                                        <th>Jumlah</th>
                                                        <th>Penanggung Jawab</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($smartbook as $s) { ?>
                                                        <tr>
                                                            <td><?php echo $s->id; ?></td>
                                                            <td><?php echo $s->kode; ?></td>
                                                            <td><?php echo $s->nama; ?></td>
                                                            <td><?php echo $s->uraian; ?></td>
                                                            <td><?php echo $s->tanggal; ?></td>
                                                            <td><?php echo $s->sk; ?></td>
                                                            <td><?php echo $s->jenis; ?></td>
                                                            <td><?php echo $s->kota; ?></td>
                                                            <td><?php echo $s->jumlah; ?></td>
                                                            <td><?php echo $s->petugas; ?></td>
                                                            <td>
                                                                <a href="#" class="btn btn-sm btn-info">Lihat</a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <th>No</th>
                                                        <th>Kode</th>
                                                        <th>Nama</th>
                                                        <th>Keterangan</th>
                                                        <th>Tanggal</th>
                                                        <th>No SK</th>
                                                        <th>Jenis Izin</th>
                                                        <th>Kota</th>
                                                        <th>Jumlah</th>
                                                        <th>Penunggang Jawab</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>
</body>

</html>