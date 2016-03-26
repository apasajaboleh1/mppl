<!doctype html>

<html>
<head>
<title>Creative Spot</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<!--<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>-->
</head>
<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="#">shoparound</a></h1>
    <!-- Cart -->
    <!-- End Cart -->
    <!-- Navigation -->
    	<div id="navigation">
      <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./contact.html">Contact</a></li>
		<?php
		if ((isset($_COOKIE['nama'])) && (isset($_COOKIE['password']))) 
		{
			$cookies=$_COOKIE['nama'];
			?>
			<li><a href="logout.php">Logout</a></li>
		<?php
		}
		else
		{
		?>
		<li><a href="./login.php">Login</a></li> 
		<?php } ?>
		<li><a href="./question.php">FAQ</a></li>
		<li><a href="./Join.html">Join Us</a></li>
      </ul>
    </div><!-- End Navigation -->
  </div>
<div id="login">
<h1>Buat ID BARU</h1>

	<div class="container">
		<div class="form_center">

			<?php
			if(isset($_GET['status']) && $_GET['status']=="ok")
		       {
		        echo "<b>Berhasil!</b> User Berhasil Dibuat";
		       }
		    else if(isset($_GET['status']) && $_GET['status']=="gagal")
		       {
		        echo "<b>Gagal!</b> User Gagal Dibuat";
		       }
			?>

			<br><br>

			<form action="daftar_insert.php" method="POST">
					Nama
					<input type="text" name="nama">
				<br>
					Username
					<input type="text" name="username">
				<br>
					Password
					<input type="password" name="password">
				<br>
					No Telp
					<input type="text" name="notelp"></textarea>
				<br>
					Email
					<input type="text" name="email"></textarea>
				<br>
					<input type="submit" value="submit">
				<br>
			</form>
			<br>
			<h3><a href="login.php">Kembali</a></h3>
		</div>
	</div>
	</div>
	<div id="footer">
    <p class="left"> <a href="./index.html">Home</a> <span>|</span> <a href="./support.html">Support</a> <span>|</span> <a href="./contact.html">Contact</a> </p>
    <p class="right"> &copy; 2015 Creative Spot Ltd. Terms and Conditions Applied </p>
  </div>
</body>

</html>	