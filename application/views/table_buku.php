<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Buku</h3>
                            <div style="margin-left: 55rem; margin-top:10px">
                                <a class="btn btn-danger" href="<?php echo base_url('perpus/cetak') ?>"> <i class="fa fa-print"></i> Print</a>
                                <a class="btn btn-primary" href="<?php echo base_url('perpus/pdf') ?>"><i class="fa fa-print"></i>PDF</a>
                                <a class="btn btn-success" href="<?php echo base_url('perpus/excel') ?>"><i class="fa fa-print"></i>Excel</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>JUDUL</th>
                                        <th>PENGARANG</th>
                                        <th>PENERBIT</th>
                                        <th>TAHUN TERBIT</th>
                                        <th>DESKRIPSI</th>
                                        <th>FOTO</th>
                                        <th colspan="3">AKSI</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($buku as $brg) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td style="font-size: 90%;"><?php echo $brg->judul ?></td>
                                            <td style="font-size: 90%;"><?php echo $brg->pengarang ?></td>
                                            <td style="font-size: 90%;"><?php echo $brg->penerbit ?></td>
                                            <td><?php echo $brg->tahun_terbit ?></td>
                                            <td style="font-size: 80%;"><?php echo $brg->deskripsi ?></td>
                                            <td>
                                                <img src="<?php echo base_url(); ?>assets/foto/<?php echo $brg->foto; ?>" width="100" height="100">
                                            </td>
                                            <td style="text-align: center;"><?php echo anchor('perpus/edit/' . $brg->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                            <td style="text-align: center;" onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('perpus/hapus/' . $brg->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                            <td style="text-align: center;"><?php echo anchor('perpus/detail/' . $brg->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                        </tr>

                                    <?php endforeach; ?>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->