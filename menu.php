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
    <title>Menu Masakan Padang</title>
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
    </br>
    <section class="content">
        <h2>Menu Masakan Padang</h2>
        <form method="POST" action="menu.php">
            <label style="width:20%">Nama Pemesan</label> : <input name="nama_pemesan" type="text" style="width:30%;"></br></br>
            <label style="width:20%">Pesanan</label> : 
                <select name="pesanan" style="width:30%;">
                    <option value="Nasi Padang">Nasi Padang</option>
                    <option value="Rendang">Rendang</option>
                    <option value="Sate Padang">Sate Padang</option>
                    <option value="Paru Basah">Paru Basah</option>
                </select>
            </br></br>
            <label style="width:20%">No HP</label> : <input name="nohp" type="text" style="width:30%;"></br></br>
            <label style="width:20%">Alamat</label> : <input name="alamat" type="text" style="width:30%;"></br></br>
            <input type="submit" name="submit" value="PESAN">
        <form>
    </section>
    <?php 
        if(isset($_POST['submit'])) 
        {
            $nama = $_POST['nama_pemesan'];
            $pesanan = $_POST['pesanan'];
            $nohp = $_POST['nohp'];
            $alamat = $_POST['alamat'];
            
            
            include_once("koneksi.php");
                    
            
            $tambah = mysqli_query($sql, "insert into pesanan(nama,pesanan,nohp,alamat) VALUES('$nama','$pesanan','$nohp','$alamat')");

           
            echo "User added successfully. <a href='listpesanan.php'>Lihat Pesanan</a>";
        }
        ?>
    
    <footer>
        <p>&copy; 2024 Warung Makan Padang by Fathony dan Salman</p>
    </footer>
</body>
</html>
