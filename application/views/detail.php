<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA BUKU</strong></h4>
        <table class="table table-striped" style="border-style: double;">
            <tr>
                <th>Judul</th>
                <td><?php echo $detail->judul ?></td>
            </tr>
            <tr>
                <th>Pengarang</th>
                <td><?php echo $detail->pengarang ?></td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td><?php echo $detail->penerbit ?></td>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <td><?php echo $detail->tahun_terbit ?></td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td><?php echo $detail->deskripsi ?></td>
            </tr>
            <tr>
                <td>
                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" width="90" height="110">
                </td>
            </tr>
        </table>
        <a href="<?php echo base_url('perpus/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>