<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
        <li><a href="./contact.php">Contact</a></li>
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
		<li><a href="./Join.php">Join Us</a></li>
      </ul>
    </div>
    <!-- End Navigation -->
  </div>
  <!-- End Header -->
  <!-- Main -->
  <div id="main">
    <div class="cl">&nbsp;</div>
    <!-- Content -->
    <div id="content">
      <!-- Content Slider -->
      <h1>Seputar Pertanyaan</h1>
			<form action="" method="POST">
			<br>
			<center>
				<div style="width:500px">
					<div style="float:left; width:150px;">Nama</div>
					<input style="width:200px" type="text" name="nama">
				</div>
				<br>
				<div style="width:500px">
					<div style="float:left; width:150px;">Alamat</div>
					<input style="width:200px" type="text" name="username">
				</div>
				<br>
				<div style="width:500px">
					<div style="float:left; width:150px;">No Telepon</div>
					<input style="width:200px" type="text" name="password">
				</div>
				<br>
				<div style="width:500px">
					<div style="float:left; width:150px;">Email</div>
					<textarea style="width:200px;" name="notelp"></textarea>
				</div>
				<br>
				<div style="width:500px">
					<div style="float:left; width:150px;">Pertanyaan</div>
					<textarea style="width:200px;" name="notelp"></textarea>
				</div>
				<br>
				<div style="width:500px">
					<input type="submit" name="submit" value="submit">
				</div>
				<br>
				</center>
			</form>
			<br>
			<h3><a href="index.html">Kembali</a></h3>
		</div>

    <!-- End Content -->
    <!-- Sidebar -->
    <div id="sidebar">
      <div class="box categories">
        <h2>Quick Access Menu <span></span></h2>
        <div class="box-content">
          <ul>
            <li><a href="./index.php">Home</a></li>
        <li><a href="./contact.php">Contact</a></li>
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
		<li><a href="./Join.php">Join Us</a></li>
          </ul>
        </div>
      </div>
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Main -->
  <!-- Side Full -->
  <div class="side-full">
    <!-- More Products -->
    <!-- End More Products -->
    <!-- Text Cols -->
        <div class="cols">
      <div class="cl">&nbsp;</div>
      <div class="col">
        <h3 class="ico ico1">Free Shipping</h3>

      </div>
      <div class="col">
        <h3 class="ico ico2">24/7 Toll Free</h3>
        </div>
      <div class="col">
        <h3 class="ico ico3">Special Promo</h3>
        </div>
      <div class="col col-last">
        <h3 class="ico ico4">Trusted Payment</h3>
        </div>
      <div class="cl">&nbsp;</div>
    </div>
    <!-- End Text Cols -->
  </div>
  <!-- End Side Full -->
  <!-- Footer -->
  <div id="footer">
    <p class="left"> <a href="./index.html">Home</a> <span>|</span> <a href="./support.html">Support</a> <span>|</span> <a href="./contact.html">Contact</a> </p>
    <p class="right"> &copy; 2015 Creative Spot Ltd. Terms and Conditions Applied </p>
  </div>
  <!-- End Footer -->
</div>
<!-- End Shell -->
</body>
</html>
