<?php

session_start();
if($_SESSION['status']!="Login"){
header("location:login.php");
}
include_once("koneksi.php");


if(isset($_POST['Edit']))
{	
	$id = $_POST['id'];
	
	$nama = $_POST['nama'];
	$pesanan = $_POST['pesanan'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];

	$result = mysqli_query($sql, "UPDATE pesanan SET nama='$nama', pesanan='$pesanan', nohp='$nohp', alamat='$alamat' WHERE id=$id");
	
	header("Location: listpesanan.php");
}
?>
<?php

$id = $_GET['id'];
 
/
$hasil = mysqli_query($sql, "SELECT * FROM pesanan WHERE id=$id");
 
	while($hasil_data = mysqli_fetch_array($hasil))
	{
		$nama = $hasil_data['nama'];
		$pesanan = $hasil_data['pesanan'];
		$nohp = $hasil_data['nohp'];
		$alamat = $hasil_data['alamat'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Pesanan Warung Makan Padang</title>
</head>
<body>
<header>
    <h1>Warung Makan Padang</h1>
    <nav>
        <ul>
			<li><a>Halo <?php echo $_SESSION['username'];?></a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="kontak.php">Kontak</a></li>
            <li><a href="listpesanan.php">List Pesanan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    </header>
    
    <section class="content">
	<form name="update_pesanan" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Pesanan</td>
				<td>
					<select name="pesanan">
						<option <?php if($pesanan=="Nasi Padang"){echo "selected";}?> value="Nasi Padang">Nasi Padang</option>
						<option <?php if($pesanan=="Rendang"){echo "selected";}?> value="Rendang">Rendang</option>
						<option <?php if($pesanan=="Sate Padang"){echo "selected";}?> value="Sate Padang">Sate Padang</option>
						<option <?php if($pesanan=="Paru Basah"){echo "selected";}?> value="Paru Basah">Paru Basah</option>
					</select>
				</td>
			</tr>
			<tr> 
				<td>No HP.</td>
				<td><input type="text" name="nohp" value=<?php echo $nohp;?>></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="Edit" value="Edit"></td>
			</tr>
		</table>
	</form>
    </section>

    <footer>
        <p>&copy; 2024 Warung Makan Padang by Fathony dan Salman</p>
    </footer>
</body>
</html>