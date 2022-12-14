<?php
session_start();
include "../config.php";


if (isset($_POST['hapus'])) {
    $id_skala = $_POST['id_skala'];
    $query_l = "DELETE FROM skala WHERE id_skala='$id_skala'";
    if ($h_l = $koneksi->query($query_l)) {
        echo "<script> 
        alert('berhasil dihapus!');        
     </script>";
        header("Location:../dtskala.php");
    } else {
        echo "<script> 
        alert('gagal dihapus!');        
     </script>";
        header("Location:../dtskala.php");
    }
}
