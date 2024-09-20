<?php
include "layout/title.html";
include "connection.php";
session_start();
if (!isset($_SESSION['is_login'])) {
    echo "<script>window.location='" . base_url("auth") . "';</script>";
}
?>
<?php
// include_once "../layout/sidebar.php";'
$destination = "daftar.php";
?>
<link rel="stylesheet" href="style/2.css">
<div class="container">
    <a class="backButton" href="<?php echo $destination; ?>">← Kembali</a>
    <div class="formContainer">
        <h2 class="title">Edit Daftar</h2>
        <form class="form" method="post" action="edit.php">
            <label class="label" htmlFor="nama">Nama Barang:</label>
            <input class="input" type="text" id="nama" placeholder="Masukkan Nama kelas" name="nama" />
            <label class="label" htmlFor="harga">harga Barang:</label>
            <input class="input" type="text" id="harga" placeholder="Masukkan harga Barang" name="harga" />
            <label class="label" htmlFor="stok">jumlah Barang:</label>
            <input class="input" type="text" id="stok" placeholder="Masukkan jumlah Barang" name="stok" />
            <label class="label" htmlFor="stok">NISN:</label>
            <input class="input" type="text" id="stok" placeholder="Masukkan jumlah Barang" name="stok" />
            <label class="label" htmlFor="stok">jumlah Barang:</label>
            <input class="input" type="text" id="stok" placeholder="Masukkan jumlah Barang" name="stok" />
            <label class="label" htmlFor="stok">jumlah Barang:</label>
            <input class="input" type="text" id="stok" placeholder="Masukkan jumlah Barang" name="stok" />
            <label class="label" htmlFor="stok">jumlah Barang:</label>
            <input class="input" type="text" id="stok" placeholder="Masukkan jumlah Barang" name="stok" />
            <label class="label" htmlFor="stok">jumlah Barang:</label>
            <input class="input" type="text" id="stok" placeholder="Masukkan jumlah Barang" name="stok" />
            <label class="label" htmlFor="stok">jumlah Barang:</label>
            <input class="input" type="text" id="stok" placeholder="Masukkan jumlah Barang" name="stok" />
            <label class="label" htmlFor="stok">jumlah Barang:</label>
            <input class="input" type="text" id="stok" placeholder="Masukkan jumlah Barang" name="stok" />
            <select name="id" id="id">
                <option value="1">1</option>
            </select>
            <!-- <input class="input" type="text" id="stok" placeholder="Masukkan jumlah Barang" name="id" value="<?= htmlspecialchars($_GET['id']); ?>" /> -->
            <div class="buttonGroup">
                <button class="saveButton" type="submit" name="edit">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?php
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    // echo $id;
    // // echo "test";
    if (!empty($nama)) {
        $sql = "UPDATE `barang` SET `nama`='$nama',`harga`='$harga',`stok`='$stok' WHERE id = '$id'";
        if ($conn->query($sql)) {
            echo "<script>window.location='" . base_url("daftar.php") . "';</script>";
        }
    } else {
        echo "kosong anying" . $conn->error;
    }
}
?>