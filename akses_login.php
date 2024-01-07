<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
$hasil = mysqli_query($sql,"SELECT * FROM user where username='$username' and password='$password'");

$login = mysqli_num_rows($hasil);
 
if($login > 0) {
	$hasil_data = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "Login";
		$_SESSION['id_login'] = $hasil_data['id'];
	header("location:index.php");
} else {
	header("location:login.php?notif=Login Gagal!! Username / Password Salah");
}
?>