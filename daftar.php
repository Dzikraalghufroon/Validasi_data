<?php
include "layout/title.html";
include "connection.php";
session_start();
if (!isset($_SESSION['is_login'])) {
    echo "<script>window.location='" . base_url("auth") . "';</script>";
}
?>
<?php
include_once "./layout/sidebar.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo $id;
    echo "test";
    if (!empty($id)) {
        $sql = "DELETE FROM `barang` WHERE id = '$id'";
        if ($conn->query($sql)) {
           // echo "<script>window.location='" . base_url("daftar.php") . "';</script>";
           echo "sukses anying";
        }
    }
    else{
        echo "kosong anying".$conn->error;
    }
}
?>
<link rel="stylesheet" href="style/1.css">
<div class="container">
    <h2 class="heading">Data Siswa</h2>
    <table class="siswaTable">
        <thead>
            <tr>
                <th class="tableHeader">No</th>
                <th class="tableHeader">nama</th>
                <th class="tableHeader">NIPD</th>
                <th class="tableHeader">JenisKelamin</th>
                <th class="tableHeader">NISN</th>
                <th class="tableHeader">Tempat lahir</th>
                <th class="tableHeader">Tanggal lahir</th>
                <th class="tableHeader">NIK</th>
                <th class="tableHeader">Agama</th>
                <th class="tableHeader">hp/telp</th>
                <th class="tableHeader">email</th>
                <th class="tableHeader">SKHUNno</th>
                <th class="tableHeader">pstunno</th>
                <th class="tableHeader">seriijz</th>
                <th class="tableHeader">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM data_siswa ";
            $result = $conn->query($sql);
            $index = 0;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $no = $index + 1;
                    $id = $row['id_siswa'];
                    $nama = $row['nama_siswa'];
                    $NIPD = $row['NIPD'];
                    $JK = $row['JK'];
                    $NISN = $row['NISN'];
                    $tmpl = $row['tmpt_lhr'];
                    $tgll = $row['tgl_lhr'];
                    $NIK = $row['NIK'];
                    $agama = $row['agama'];
                    $tlp = $row['hp/telp'];
                    $email = $row['email'];
                    $SKHUN = $row['SKHUN'];
                    $no_pstun = $row['no_pstun'];
                    $no_seriijz = $row['no_seriijz'];
                    
                    ?>
                    <tr>
                        <td class="td" ><?php echo $no ?></td>
                        <td class="td" ><?php echo $nama ?></td>
                        <td class="td" ><?php echo $NIPD ?></td>
                        <td class="td" ><?php echo $JK ?></td>
                        <td class="td" ><?php echo $NISN ?></td>
                        <td class="td" ><?php echo $tmpl ?></td>
                        <td class="td" ><?php echo $tgll ?></td>
                        <td class="td" ><?php echo $NIK ?></td>
                        <td class="td" ><?php echo $agama ?></td>
                        <td class="td" ><?php echo $tlp ?></td>
                        <td class="td" ><?php echo $email ?></td>
                        <td class="td" ><?php echo $SKHUN ?></td>
                        <td class="td" ><?php echo $no_pstun ?></td>
                        <td class="td" ><?php echo $no_seriijz ?></td>
                        <td class="td" >
                            <a class="editButton" href="edit.php?id=<?php echo urlencode($id); ?>">Edit</a>
                            <a class="deleteButton" href="daftar.php?id=<?php echo urlencode($id); ?>">Hapus</a>
                            <button class="editButton2" >1</button>
                        </td>
                        
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                        <td class="td" >Kosong</td>
                        <td class="td" >Kosong</td>
                        <td class="td" >Kosong</td>
                        <td class="td" >Kosong</td>
                        <td class="td" >Kosong</td>
                    </tr>
                <?php
            }

            $conn->close();
            ?>


        </tbody>
    </table>
</div>

</div>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo $id;
    echo "test";
    if (!empty($id)) {
        $sql = "DELETE FROM `barang` WHERE id = '$id'";
        if ($conn->query($sql)) {
           // echo "<script>window.location='" . base_url("daftar.php") . "';</script>";
           echo "sukses anying";
        }
    }
    else{
        echo "kosong anying".$conn->error;
    }
}
?>