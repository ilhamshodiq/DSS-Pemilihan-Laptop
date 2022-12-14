<?php
include "../config.php";
$id_kriteria = $_POST['id_kriteria'];
$nm_kriteria = $_POST['nm_kriteria'];

$sql = "INSERT into kriteria (id_kriteria,nm_kriteria) values ('$id_kriteria','$nm_kriteria')";
$query = $koneksi->query($sql);
if ($query == true) {
    echo "<script> 
    alert('Data berhasil ditambah!'); 
    window.location.href = ('../dtkriteria.php');  
    </script>";
} else {
    echo "<script> 
    alert('Data gagal ditambah!');        
    window.location.href = ('../dtkriteria.php');
    </script>";
}
