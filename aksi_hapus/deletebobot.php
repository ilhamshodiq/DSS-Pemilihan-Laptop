<?php
session_start();
include "../config.php";


if (isset($_POST['hapus'])) {
    $id_bobot = $_POST['id_bobot'];
    $query_l = "DELETE FROM bobot WHERE id_bobot='$id_bobot'";
    if ($h_l = $koneksi->query($query_l)) {
        echo "<script> 
        alert('berhasil dihapus!');        
     </script>";
        header("Location:../dtbobot.php");
    } else {
        echo "<script> 
        alert('gagal dihapus!');        
     </script>";
        header("Location:../dtbobot.php");
    }
}
