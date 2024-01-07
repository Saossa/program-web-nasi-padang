<!DOCTYPE html>
<html>
<head>
	<title>Login Nasi Padang</title>
</head>
<body>
	<center>
	<form action="akses_login.php" method="POST" style="margin-top: 200px;">
		<h1>Login Warung Nasi Padang</h1>
		<label>Username :</label>
		<input type="text" name="username" placeholder="Masukan Username" required="" autofocus="">
		<br/>
		<br/>
		<label>Password :</label>
		<input type="password" name="password" placeholder="Masukan password" required="">
		<br>
		<br>
		<button type="submit">LOGIN</button>
	</form>
	<?php if(isset($_GET['notif'])) {  ?>
	    <label style="color:red;"><?php echo $_GET['notif']; ?></label>
	<?php } ?>	
    <footer>
        <p>&copy; 2024 Warung Makan Padang by Fathony dan Salman</p>
    </footer>
</body>
</html>