<?php
    require_once 'koneksi.php';

    $id = $_POST['id'];
    $matkul = $_POST['matkul'];
    $dosen = $_POST['dosen'];
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    $update = mysqli_query($koneksi, "update sewa set matkul = '$matkul', dosen = '$dosen', hari = '$hari', tanggal = '$tanggal', jam = '$jam' where id = '$id'");

    if ($update) {
        echo '<script>
                 alert("Data berhasil diedit");
                 window.location.href = "index.php";
              </script>';
    } else {
        echo '<script>
                 alert("Data gagal diedit");
                 window.location.href = "index.php?page=edit";
              </script>';
    }
?>