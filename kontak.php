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
    
    <section class="content">
        <h2>Kontak Warung Makan Padang</h2>
        <p>Alamat: Jl. Sate Padang No. 123, Padang</p>
        <p>Telepon: 0812-3456-7890</p>
        <p>Email: info@warungpadang.com</p>
    </section>

    <footer>
        <p>&copy; 2024 Warung Makan Padang by Fathony dan Salman</p>
    </footer>
</body>
</html>
