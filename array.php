<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xiaomi</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="card-header bg-dark m-1">
        <h3 class="text-white text-center">Xiaomi Mi 11 Series</h3>
    <?php
    $dataProduk = array(
        //nama produk, merk, harga, status stok
        array("Mi 11", "Xiaomi","<img src='pic/mi 11.jpg'>", 19000000, true),
        array("Mi 11i", "Xiaomi","<img src='pic/mi 11i.jpg'>", 6999000, false),
        array("Mi 11 Lite", "Xiaomi","<img src='pic/mi 11 lite.jpg'>", 20999000, true),
        array("Mi 11 Ultra", "Xiaomi","<img src='pic/mi 11 ultra.png'>", 12900000, true)
    );
    ?>
    <?php
        //mendeklarasikan panjang array
        $arrlength = count($dataProduk);
        //membuat perulangan untuk mencetak per baris
        for ($i=0; $i < $arrlength; $i++) {
            // membuat percabangan untuk menentukan stok
            if ($dataProduk[$i][4]==true) {
                $dataProduk[$i][4] = "Stok : Tersedia";
            }else{
                $dataProduk[$i][4]= "Stok : Habis";
            }
            ?>
        <!-- membuat kotak untuk case nya -->
        <div class="col-lg-12">
            <div class="card col-lg-2 m-4 float-left">
            <?php
                // membuat perulangan untuk per kolom nya
                for ($j=2; $j < $arrlength; $j++) {
                    // membuat perbandingan untuk menampilkan array
                    if ($j == 2) {
                        echo $dataProduk[$i][1]."<br>"."<b>"."<h4>".$dataProduk[$i][0]."</h4>"."</b>"."<br>".
                        $dataProduk[$i][2]."<br>"."Rp ".$dataProduk[$i][3]."<br>".$dataProduk[$i][4];
                    }
                }
                // membuat perbandingan untuk tombol
                if ($dataProduk[$i][4]==="Stok : Tersedia") {
                    ?>
                    <button class="btn btn-primary mb-2">Order Now</button>
                    <?php
                }else{
                    ?>
                    <button class="btn btn-secondary mb-2">Out of Stock</button>
                    <?php
                }
            ?>
            </div>
            </div>
            <?php
                }
            ?>   
    </div>
</body>
</html>