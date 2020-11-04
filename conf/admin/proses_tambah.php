<?php
    require_once 'koneksi.php';

    $matkul = $_POST['matkul'];
    $dosen = $_POST['dosen'];
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    $insert = mysqli_query($koneksi, "insert into sewa (matkul,dosen,hari,tanggal,jam) values ('$matkul','$dosen','$hari','$tanggal','$jam')");

    if ($insert) {
        echo '<script>
                 alert("Data berhasil dimasukkan");
                 window.location.href = "index.php";
              </script>';
    } else {
        echo '<script>
                 alert("Data gagal dimasukkan");
                 window.location.href = "index.php?page=tambah";
              </script>';
    }
?>