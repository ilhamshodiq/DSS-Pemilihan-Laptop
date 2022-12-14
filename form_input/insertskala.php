<?php
include "../config.php";
$id_skala = $_POST['id_skala'];
$value = $_POST['value'];
$keterangan = $_POST['keterangan'];

$sql = "INSERT into skala (id_skala,value,keterangan) values ('$id_skala','$value','$keterangan')";
$query = $koneksi->query($sql);
if ($query == true) {
    echo "<script> 
    alert('Data berhasil ditambah!'); 
    window.location.href = ('../dtskala.php');  
    </script>";
} else {
    echo "<script> 
    alert('Data gagal ditambah!');        
    window.location.href = ('../dtskala.php');
    </script>";
}
