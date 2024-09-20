<?php
include "layout/title.html";
include "connection.php";
session_start();
if (!isset($_SESSION['is_login'])) {
    echo "<script>window.location='" . base_url("auth") . "';</script>";
}
?>
<?php
include_once "../layout/sidebar.php";

?>
