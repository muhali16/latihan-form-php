<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <nav>
        <h1 class="title">Form Registrasi</h1>
    </nav>
    <section id="forminput">
        <form action="output.php" method="POST" class="formed">
            <label for="nama" class="labeled">
                Nama
                <input type="text" name="nama" id="nama">
            </label>
            <label for="alamat" class="labeled">
                Alamat
                <textarea type="text" name="alamat" id="alamat"></textarea>
            </label>
            <label for="tempat_lahir" class="labeled">
                Tempat Lahir
                <input type="text" name="tempat_lahir" id="tempat_lahir">
            </label>
            <label for="tanggal_lahir" class="labeled">
                Tanggal Lahir
                <input type="date" name="tanggal_lahir" id="tanggal_lahir">
            </label>
            <div class="row">
                <label style="width: 50%;" class="labeled">
                    Jenis Kelamin
                    <label for="pria">
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="pria">
                        <span>Laki-Laki</span>
                    </label>
                    <label for="wanita">
                        <input type="radio" name="jenis_kelamin" value="Perempuan" id="wanita">
                        <span>Perempuan</span>
                    </label>
                </label>
                <label for="pendidikan" style="width: 50%;" class="labeled">
                    Pendidikan
                    <select name="pendidikan" id="pendidikan">
                        <option value="Tidak diketahui" selected>Pilih</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </label>
            </div>
            <div class="row">
                <button type="reset">Reset</button>
                <button type="submit" name="kirim">Kirim</button>
            </div>
        </form>
    </section>
    <footer>
        <p>Created by Muhammad Ali Mustaqim 77222329</p>
        <p>Web Programming 1 PMM PKBN 2022</p>
    </footer>
</body>
</html>