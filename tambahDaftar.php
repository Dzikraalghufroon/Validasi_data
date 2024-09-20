<?php
include "layout/title.html";
include "./connection.php";
session_start();
if (!isset($_SESSION['is_login'])) {
    echo "<script>window.location='" . base_url("auth") . "';</script>";
}
?>
<?php
include_once "./layout/sidebar.php";
$destination = "daftar.php";
//echo "ojajo";
?>

<link rel="stylesheet" href="style/2.css">
<div class="container">
    <a class="backButton" href="<?php echo $destination; ?>">← Kembali</a>
    <div class="formContainer">
        <h2 class="title">Tambah Daftar</h2>
        <form class="form" method="post" action="tambahDaftar.php" >
            <label class="label" htmlFor="nama">Nama Barang:</label>
            <input class="input" type="text" id="nama" placeholder="Masukkan Nama kelas" name="nama" />
            <label class="label" htmlFor="harga">harga Barang:</label>
            <input class="input" type="number" id="harga" placeholder="Masukkan harga Barang" name="harga" />
            <label class="label" htmlFor="stok">jumlah Barang:</label>
            <input class="input" type="number" id="stok" placeholder="Masukkan jumlah Barang" name="stok" />
            <!-- <input class="input" type="text" id="stok" placeholder="Masukkan jumlah Barang" name="id" value="<?= htmlspecialchars($_GET['id']); ?>" /> -->
            <div class="buttonGroup">
                <button class="saveButton" type="submit" name="edit" >Simpan</button>
            </div>
        </form>
    </div>
</div>
<?php
if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    if (!empty($nama)) {
        echo $nama ,$harga, $stok;
        //echo $conn;
        $sql = "INSERT INTO barang( nama, harga, stok) VALUES ('$nama',$harga,$stok)";
        if ($conn->query($sql)) {
            echo "sukses";
            echo "<script>window.location='" . base_url("daftar.php") . "';</script>";
        }
    }
    else{
        echo "kosong anying".$conn->error;
    }
}
?>