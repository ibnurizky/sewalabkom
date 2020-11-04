<?php
    require_once 'koneksi.php';

    $id = $_GET['id'];
    $hapus = mysqli_query($koneksi, "delete from sewa where id = '$id'");

    if ($hapus) {
        echo '<script>
                 alert("Data berhasil dihapus");
                 window.location.href = "index.php?page=sewa"
              </script>';
    } else {
        echo '<script>
                 alert("Data gagal dihapus");
                 window.location.href = "index.php?page=sewa"
              </script>';
    }
?>