<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Anggota</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white text-center">List Nama</h3>
            </div>
            
            <div class="card-body">
                <ul class="list-group">
                    <?php
                    $nama = $_POST['nama'];
                    $jk = $_POST['jk'];
                    $agama = $_POST['agama'];
                    $tempat_lahir = $_POST['tempat_lahir'];
                    $tgl_lahir = $_POST['tgl_lahir'];
                    $hobi = $_POST['hobi'];
                    $cita = $_POST['cita'];
                    $usia = $_POST['usia'];
                    $asal = $_POST['asal'];
                    ?>

                    <li class="list-group-item">
                        <div class="row">
                           <div class="col-lg-6 col-md-6">
                                <small class="text-info">Nama</small>
                                <?php
                                    echo "<h5>".$nama."</h5>";
                                ?>
                           </div>
                           <div class="col-lg-6 col-md-6">
                                <small class="text-info">Asal Sekolah</small>
                                <?php
                                    echo "<h5>".$asal."</h5>";
                                ?>
                           </div>
                           <div class="col-lg-6 col-md-6">
                                <small class="text-info">Jenis Kelamin</small>
                                <?php
                                    echo "<h5>".$jk."</h5>";
                                ?>
                           </div>
                           <div class="col-lg-6 col-md-6">
                                <small class="text-info">Agama</small>
                                <?php
                                    echo "<h5>".$agama."</h5>";
                                ?>
                           </div>
                           <div class="col-lg-6 col-md-4">
                                <small class="text-info">Tempat Lahir</small>
                                <?php
                                    echo "<h5>".$tempat_lahir."</h5>";
                                ?>
                           </div> 
                           <div class="col-lg-3 col-md-4">
                                <small class="text-info">Tanggal Lahir</small>
                                <?php
                                    echo "<h5>".$tgl_lahir."</h5>";
                                ?>
                           </div>
                           <div class="col-lg-3 col-md-4">
                                <small class="text-info">Usia</small>
                                <?php
                                    echo "<h5>".$usia." Tahun"."</h5>";
                                ?>
                           </div>
                           <div class="col-lg-6 col-md-6">
                                <small class="text-info">Hobi</small>
                                <?php
                                    echo "<h5>".$hobi."</h5>";
                                ?>
                           </div>    
                           <div class="col-lg-6 col-md-6">
                                <small class="text-info">Cita-cita</small>
                                <?php
                                    echo "<h5>".$cita."</h5>";
                                ?>
                           </div>
                           
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>