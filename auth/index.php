<?php
include_once "../layout/title.html";
include_once "../connection.php";

session_start();

?>
<link rel="stylesheet" href="style.css">
<body>
    <div class="pageContainer">
        <div class="backgroundOverlay"></div>
        <div class="container">
            <div class="imageContainer">
                <img src="img-01.png" alt="Login Illustration" className={styles.loginImage} />
            </div>
            <div class="formContainer">
                <form class="form" action="index.php" method="POST">
                    <h2 class="title">Sign In</h2>
                    <label class="label" htmlFor="name">Name:</label>
                    <input type="text" placeholder="Username" name="username" class="input">
                    <div class="passwordWrapper">
                        <label class="label" htmlFor="password">Password:</label>
                        <input type="password" placeholder="Password" name="password" class="input">
                    </div>
                    <button type="submit" name="login" class="button">Login</button>
                    <?php
                    if (isset($_POST['login'])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $sql_login = "SELECT * FROM `users` WHERE `name` = '$username' AND `pass` = '$password'";
                        $result = $conn->query($sql_login);

                        if ($result->num_rows > 0) {
                            echo " ada";
                            $data = $result->fetch_assoc();
                            $_SESSION['user'] = $username;//$data['username'];
                            $_SESSION['is_login'] = true;
                            echo "<script>window.location='" . base_url() . "';</script>";
                            //header("location: index.php");
                        } else {
                            echo "<p class='message' >Data tidak ada</p>";
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
include "template/footer.html"
    ?>