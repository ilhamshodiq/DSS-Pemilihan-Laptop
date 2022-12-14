<?php
include "../config.php";
$id_laptop = $_POST['id_laptop'];
$merk_laptop = $_POST['merk_laptop'];

$sql = "INSERT into alternatif (id_laptop,merk_laptop) values ('$id_laptop','$merk_laptop')";
$query = $koneksi->query($sql);
if ($query == true) {
    echo "<script> 
    alert('Data berhasil ditambah!'); 
    window.location.href = ('../dtalternatif.php');  
    </script>";
} else {
    echo "<script> 
    alert('Data gagal ditambah!');        
    window.location.href = ('../dtalternatif.php');
    </script>";
}
