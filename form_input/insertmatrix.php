<?php
include "../config.php";
$id_matrix = $_POST['id_matrix'];
$id_alternatif = $_POST['id_alternatif'];
$id_bobot = $_POST['id_bobot'];
$id_skala = $_POST['id_skala'];

$sql = "INSERT into matrixkeputusan (id_matrix,id_alternatif,id_bobot,id_skala) values ('$id_matrix','$id_alternatif','$id_bobot','$id_skala')";
$query = $koneksi->query($sql);
if ($query == true) {
    echo "<script> 
    alert('Data berhasil ditambah!'); 
    window.location.href = ('../dtmatrix.php');  
    </script>";
} else {
    echo "<script> 
    alert('Data gagal ditambah!');        
    window.location.href = ('../dtmatrix.php');
    </script>";
}
