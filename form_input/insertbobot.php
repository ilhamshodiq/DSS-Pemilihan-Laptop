<?php
include "../config.php";
$id_bobot = $_POST['id_bobot'];
$id_kriteria = $_POST['id_kriteria'];
$value = $_POST['value'];

$sql = "INSERT into bobot (id_bobot,id_kriteria,value) values ('$id_bobot','$id_kriteria','$value')";
$query = $koneksi->query($sql);
if ($query == true) {
    echo "<script> 
    alert('Data berhasil ditambah!'); 
    window.location.href = ('../dtbobot.php');  
    </script>";
} else {
    echo "<script> 
    alert('Data gagal ditambah!');        
    window.location.href = ('../dtbobot.php');
    </script>";
}
