<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-dark">
                <h3 class="text-white">
                    Formulir Biodata
                </h3>
            </div>
            <div class="card=body m-3">
                <form action="list-biodata.php" method="post">
                    Nama
                    <input type="text" name="nama"
                    class="form-control mb-2" required>
                    Jenis Kelamin
                    <select name="jk" class="form-control mb-2" required>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    Agama
                    <select name="agama" class="form-control mb-2" required>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">Konghucu</option>
                    </select>
                
                    Tempat Lahir
                    <input type="text" name="tempat_lahir"
                    class="form-control mb-2" required>
                    Tanggal Lahir
                    <input type="date" name="tgl_lahir"
                    class="form-control mb-2" required>
                    Hobi
                    <input type="text" name="hobi"
                    class="form-control mb-2" required>
                    Cita-Cita
                    <input type="text" name="cita"
                    class="form-control mb-2" required>
                    Usia
                    <input type="number" name="usia"
                    class="form-control mb-2" required>
                    Asal Sekolah
                    <input type="text" name="asal"
                    class="form-control mb-2" required>
                    <button type="submit" class="btn btn-success btn-block"
                    name="save">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>