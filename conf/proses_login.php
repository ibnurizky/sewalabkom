<?php
    session_start();
    include "../koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($koneksi, "select * from users where user = '$username' and password = '$password'");
    $cek = mysqli_num_rows($login);

    if ($cek) {
        $row = mysqli_fetch_array($login);

        if ($row['user'] == "admin") {
            $_SESSION['user'] = $username; ?>
            <script>
                alert("Selamat datang <?= $username; ?>");
                window.location.href = "../index.php";
            </script>;

        <?php } elseif ($row['user'] == "dosen") {
            $_SESSION['user'] = $username; ?>
            <script>
                alert("Selamat datang <?= $username; ?>");
                window.location.href = "../index.php";
            </script>;
        <?php }
    } else {
        echo '<script>
                 alert("Mohon masukkan username dan password yang benar");
                 window.location.href = "login.php";
              </script>';
    }
    
?>