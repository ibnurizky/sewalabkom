<?php
    session_start();
    include "../koneksi.php";

    $session_user = $_SESSION['user'];
    if (isset($session_user)) {
        session_destroy(); ?>
        <script>
            alert("<?= $session_user; ?>, Anda telah Logout");
            window.location.href = "login.php";
        </script>';
    <?php } 
?>