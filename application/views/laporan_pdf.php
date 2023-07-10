<!DOCTYPE html>
<html><head>
    <style>
        .table1 {
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
        }

        .table1,
        th,
        td {
            border: 1px solid #999;
            padding: 8px 20px;
        }
    </style>
</head><body>
    <h2 style="padding-bottom:10px;margin-left:20px">DAFTAR BUKU</h2>
    <table class="table1">
        <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>PENGARANG</th>
            <th>PENERBIT</th>
            <th>TAHUN TERBIT</th>
            <th>DESKRIPSI</th>
        </tr>
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
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>