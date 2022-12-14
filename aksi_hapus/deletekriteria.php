<?php
session_start();
include "../config.php";


if (isset($_POST['hapus'])) {
    $id_kriteria = $_POST['id_kriteria'];
    $query_l = "DELETE FROM kriteria WHERE id_kriteria='$id_kriteria'";
    if ($h_l = $koneksi->query($query_l)) {
        echo "<script> 
        alert('berhasil dihapus!');        
     </script>";
        header("Location:../dtkriteria.php");
    } else {
        echo "<script> 
        alert('gagal dihapus!');        
     </script>";
        header("Location:../dtkriteria.php");
    }
}
