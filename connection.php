<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "Kasir";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
function base_url ($url = null){
    $base_url = "http://localhost/project/Kasir";
    if($url != null) {
        return $base_url."/".$url;
    }
    else{
        return $base_url;
    }
}
?>
