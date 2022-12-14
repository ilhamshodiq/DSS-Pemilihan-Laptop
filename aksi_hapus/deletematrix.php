<?php
session_start();
include "../config.php";


if (isset($_POST['hapus'])) {
    $id_matrix = $_POST['id_matrix'];
    $query_l = "DELETE FROM matrixkeputusan WHERE id_matrix='$id_matrix'";
    if ($h_l = $koneksi->query($query_l)) {
        echo "<script> 
        alert('berhasil dihapus!');        
     </script>";
        header("Location:../dtmatrix.php");
    } else {
        echo "<script> 
        alert('gagal dihapus!');        
     </script>";
        header("Location:../dtmatrix.php");
    }
}
