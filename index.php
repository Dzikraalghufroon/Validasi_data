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
?>
<link rel="stylesheet" href="style/3.css">
<div class="navbar__search">
    <form action="" method="GET">
        <button type="submit" class="searchButton">Search</button>
        <input type="text" name="search" required placeholder="Search data">
    </form>

    <div class="col-md-12">
        <?php

        if (isset($_GET['search'])) {
            $filtervalues = $_GET['search'];
            $query = "SELECT * FROM data_siswa WHERE CONCAT(nama_siswa) LIKE '%$filtervalues%' ";
            $query_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $items) {
                    ?>

                    <li class="lidaftar">
                        <a href='index.php?search=<?= $items['id_siswa']; ?>' class="daftar">
                            <span class="span"><?= $items['nama_siswa']; ?></span>
                        </a>
                    </li>

                    <?php
                }
            } else {
                ?>
                <li class="lidaftar">
                    <p >Data Tidak ada</span>
                </li>
                <?php
            }
        }
        ?>
    </div>
</div>
</div>

<link rel="stylesheet" href="style/1.css">
<div class="container">
    <h2 class="heading">Data barang</h2>
    <table class="siswaTable">
        <thead>
            <tr>
                <th class="tableHeader">No</th>
                <th class="tableHeader">nama</th>
                <th class="tableHeader">Harga</th>
                <th class="tableHeader">Stok</th>
                <th class="tableHeader">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $Name = $_GET['search'];
            $sql = "SELECT * FROM data_siswa WHERE id_siswa = $Name";
            $result = $conn->query($sql);
            $index = 0;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $no = $index + 1;
                    $id = $row['id_siswa'];
                    $nama = $row['nama_siswa'];
                    $NIPD = $row['NIPD'];
                    $JK = $row['JK'];
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $NIPD ?></td>
                        <td><?php echo $JK ?></td>
                        <td>
                            <button id="searchButton1">Edit</button>
                            <button id="searchButton2">Hapus</button>
                            
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td>Kosong</td>
                    <td>Kosong</td>
                    <td>Kosong</td>
                    <td>Kosong</td>
                    <td>Kosong</td>
                </tr>
                <?php
            }

            $conn->close();
            ?>


        </tbody>
    </table>
</div>

</div>