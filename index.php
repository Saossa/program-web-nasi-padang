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
    <title>Masakan Padang</title>
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
        </br>
        <img src="image//padang.html" height="400px" width="1000px" alt="" />
    </header>

    <footer>
        <p>&copy; 2024 Warung Makan Padang by Fathony dan Salman</p>
    </footer>
</body>
</html>