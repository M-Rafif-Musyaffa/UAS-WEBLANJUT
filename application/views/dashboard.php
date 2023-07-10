<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Buku</span>
                            <span class="info-box-number">
                                <?= $count; ?>
                                <small>buku</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->

                <!-- fix for small devices only -->
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Buku</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>JUDUL</th>
                            <th>Deskripsi</th>
                            <th>FOTO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($buku as $brg) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td style="font-size: 90%;"><?php echo $brg->judul ?></td>
                                <td style="font-size: 80%;"><?php echo $brg->deskripsi ?></td>
                                <td>
                                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $brg->foto; ?>" width="100" height="100">
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>JUDUL</th>
                            <th>Deskripsi</th>
                            <th>FOTO</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->






<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>
</div>