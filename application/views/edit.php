<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form edit buku</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">edit data buku</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Table edit Buku</h3>
                </div>
                <!-- /.card-header -->
                <?php foreach ($buku as $brg) { ?>
                    <form action="<?php echo base_url() . 'perpus/update'; ?>" method="post">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $brg->id ?>">
                                        <input type="text" name="judul" class="form-control" value="<?php echo $brg->judul ?>">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input type="text" name="pengarang" class="form-control" value="<?php echo $brg->pengarang ?>">
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <input type="text" name="penerbit" class="form-control" value="<?php echo $brg->penerbit ?>">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <input type="text" name="tahun_terbit" class="form-control" value="<?php echo $brg->tahun_terbit ?>">
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" value="<?php echo $brg->deskripsi ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Upload Foto</label>
                                            <input type="file" name="foto" class="form-control" value="<?php echo $brg->foto ?>">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <div style="margin-left: 60rem; margin-top:10px">
                                    <button type="reset" class="btn btn-danger btn-xl" style="text-align:center; margin-right:5px">Reset</button>
                                    <button type="submit" class="btn btn-primary btn-xl" style=" text-align:center">Simpan</button>
                                </div>

                                <!-- /.form-group -->
                                <!-- /.col -->

                                <!-- /.form-group -->
                            </div>
                    </form>
                <?php } ?>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.col -->
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div>
<!-- /.card-body -->

<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>