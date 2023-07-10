<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Print Data</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
</head>

<body>
    <center>
        <h2>DAFTAR BUKU</h2>
        <table class="table1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>JUDUL</th>
                    <th>PENGARANG</th>
                    <th>PENERBIT</th>
                    <th>TAHUN TERBIT</th>
                    <th>DESKRIPSI</th>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
        <!-- script dibawah ini untuk menampilkan jendela print -->
        <script type="text/javascript">
            window.print()
        </script>
    </center>
</body>

</html>