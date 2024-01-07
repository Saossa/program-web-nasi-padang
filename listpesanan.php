<?php 
  session_start();
  if($_SESSION['status']!="Login"){
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kontak Warung Makan Padang</title>
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
<?php

include_once("koneksi.php");
 
$hasil = mysqli_query($sql, "select * from pesanan order by id desc");
?>
    <section class="content">
    <a href="menu.php">Tambah Pesanan</a><br/><br/>
        <table width='80%' border=1>
        <tr>
            <th>Nama Pemesan</th> <th>Pesanan</th> <th>No HP</th> <th>Alamat</th> <th>Update</th>
        </tr>
        <?php  
        while($hasil_data = mysqli_fetch_array($hasil)) {         
            echo "<tr>";
            echo "<td>".$hasil_data['nama']."</td>";
            echo "<td>".$hasil_data['pesanan']."</td>";
            echo "<td>".$hasil_data['nohp']."</td>";    
            echo "<td>".$hasil_data['alamat']."</td>";    
            echo "<td><a href='edit.php?id=$hasil_data[id]'>Edit</a> | <a href='hapus.php?id=$hasil_data[id]'>Delete</a></td></tr>";        
        }
        ?>
        </table>
    </section>

    <footer>
        <p>&copy; 2024 Warung Makan Padang by Fathony dan Salman</p>
    </footer>
</body>
</html>
