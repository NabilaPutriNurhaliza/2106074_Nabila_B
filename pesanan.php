
    <?php
    include './proses_input.php';

    $nama_pemesan = $_POST['nama_pemesan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $nama_pakaian = $_POST['nama_pakaian'];
    $jenis_pakaian = $_POST['jenis_pakaian'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    /* mendefinisikan query */
    $query = "INSERT INTO pesanan_pakaian(nama_pemesan, alamat, email, nama_pakaian, jenis_pakaian, harga, jumlah) VALUES('$nama_pemesan','$alamat','$email','$nama_pakaian','$jenis_pakaian','$harga','$jumlah')";

    /* mengeksekusi query */
    mysqli_query($koneksi, $query);

    /* pesanan berhasil*/
    header("Location: ./berhasil.php");
