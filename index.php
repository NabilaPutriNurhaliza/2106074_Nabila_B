<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pesanan Pakaian</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header align="center">
        <h1>Mari Pesan Pakaian</h1>
        <p>InsyaAllah aman</p>
    </header>

    <nav>
        <ul>
            <li><a href="beranda.html">Beranda</a></li>
            <li><a href="index.php">Buat Pesanan</a></li>
            <li><a href="daftar_pakaian.html">Daftar Pakaian</a></li>
        </ul>
    </nav>

    <section>
        <center>
            <h2>Selamat datang, mari pesan pakaian!!</h2>
            <img src="pakaian.jpg" alt="pesan pakaian" width="500" height="350" />
            <p>Silahkan lihat daftar pakaian tersedia di <b>Daftar pakaian</b></p>
        </center>

        <div class="kotak">
            <h1 align="center">Pesanan Pakaian</h1>
            <form action="./pesanan.php" method="post">
                <label for="nama_pemesan">Nama</label>
                <input type="text" name="nama_pemesan" maxlength="100" class="form-input" required> <br>

                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" maxlength="100" class="form-input" required> <br>

                <label for="email">Email</label>
                <input type="email" name="email" maxlength="100" class="form-input" required> <br>

                <label for="nama_pakaian">Nama Pakaian</label>
                <input type="text" name="nama_pakaian" maxlength="100" class="form-input" required> <br>

                <label for="jenis_pakaian">Jenis Pakaian</label>
                <input type="text" name="jenis_pakaian" maxlength="100" class="form-input" required> <br>

                <label for="harga">Harga Pakaian</label>
                <input type="number" name="harga" maxlength="100" class="form-input" required> <br>

                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" maxlength="100" class="form-input" required min="1"> <br>

                <button type="submit" value="submit" name="submit" id="btn-kirim">Kirim</button>
            </form>
        </div>
    </section>
</body>

</html>