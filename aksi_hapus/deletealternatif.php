<?php
session_start();
include "../config.php";


if (isset($_POST['hapus'])) {
    $id_laptop = $_POST['id_laptop'];
    $query_l = "DELETE FROM alternatif WHERE id_laptop='$id_laptop'";
    if ($h_l = $koneksi->query($query_l)) {
        echo "<script> 
        alert('berhasil dihapus!');        
     </script>";
        header("Location:../dtalternatif.php");
    } else {
        echo "<script> 
        alert('gagal dihapus!');        
     </script>";
        header("Location:../dtalternatif.php");
    }
}
