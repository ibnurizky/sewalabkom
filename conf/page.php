<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'tambah':
            include 'admin/tambah.php';
            break;
        case 'proses_tambah':
            include 'admin/proses_tambah.php';
            break;
        case 'edit':
            include 'admin/edit.php';
            break;
        case 'proses_edit':
            include 'admin/proses_edit.php';
            break;
        case 'hapus':
            include 'admin/hapus.php';
            break;
    }
} else {
    include "admin/home.php";
}
?>