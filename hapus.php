<?php

include_once("koneksi.php");
 

$idpesan = $_GET['id'];
 

$hasil = mysqli_query($sql, "delete from pesanan WHERE id=$idpesan");
 
header("Location:listpesanan.php");
?>