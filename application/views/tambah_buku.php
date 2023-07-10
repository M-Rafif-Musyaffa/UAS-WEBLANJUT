<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data buku
            <small>Control panel</small>

        </h1>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data buku</button>
        <a class="btn btn-danger" href=" <?php echo base_url('perpus/cetak') ?>"> <i class="fa fa-print"></i> Print</a>
        <div class="dropdown inline">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" ariaexpanded="true">
                <i class="fa fa-download"></i> Export
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" arialabelledby="dropdownMenu1">
                <li><a href="<?php echo base_url('perpus/pdf') ?>">PDF</a></li>
                <li><a href="<?php echo base_url('perpus/excel') ?>">EXCEL</a></li>
            </ul>
        </div>

        <hr>
        <table class="table table-dark table-bordered border-1 table-sm">
            <thead style="background-color: black; color:white">
                <tr>
                    <th>NO</th>
                    <th>JUDUL</th>
                    <th>PENGARANG</th>
                    <th>PENERBIT</th>
                    <th>TAHUN TERBIT</th>
                    <th>Deskripsi</th>
                    <th>FOTO</th>
                    <th colspan="3" style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody style="background-color:snow; color:black">
                <?php
                $no = 1;
                foreach ($buku as $brg) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $brg->judul ?></td>
                        <td><?php echo $brg->pengarang ?></td>
                        <td><?php echo $brg->penerbit ?></td>
                        <td><?php echo $brg->tahun_terbit ?></td>
                        <td><?php echo $brg->deskripsi ?></td>
                        <td>
                            <img src="<?php echo base_url(); ?>assets/foto/<?php echo $brg->foto; ?>" width="100" height="100">
                        </td>
                        <td style="text-align: center;"><?php echo anchor('perpus/edit/' . $brg->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                        <td style="text-align: center;" onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('perpus/hapus/' . $brg->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                        <td style="text-align: center;"><?php echo anchor('perpus/detail/' . $brg->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA buku</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('perpus/tambah_aksi'); ?>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pengarang</label>
                        <input type="text" name="pengarang" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <hr>
                    <button type="reser" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>


</div>