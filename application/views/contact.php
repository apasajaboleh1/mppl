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
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
            <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
            <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
            <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
            <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
          </ul>
        </div>
        <!--<div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>-->
      </div>
      <!-- End Content Slider -->
      <!-- Products -->
	  <h1>Contact</h1>
	  <p>&nbsp;</p>
	  <p class="ico2">Creative Spot adalah toko online mengenai musik yang sudah terpercaya,berdiri sejak tahun 2005.Kami menjamin barang yang kami jual adalah produk terbaik yang berkualitas :)</p>
      <p>&nbsp;</p>
      <p class="ico2">Kontak Kami :</p>
      <p class="ico2">Technical Support : 0812312313113 </p>
      <p class="ico2">Email : creativespot@ymail.com</p>
      <p class="ico2">Facebook : Creative Spot</p>
	  <span class="ico2">&nbsp;</span>
      <div class="products">
        <div class="cl">&nbsp;</div>
<div class="cl">&nbsp;</div>
      </div>
      <!-- End Products -->
    </div>
    <!-- End Content -->
    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Search -->
      <!--<div class="box search">
        <h2>Search by <span></span></h2>
        <div class="box-content">
          <form action="#" method="post">
            <label>Keyword</label>
            <input type="text" class="field" />
            <label>Category</label>
            <select class="field">
              <option value="">-- Select Category --</option>
            </select>
            <div class="inline-field">
              <label>Price</label>
              <select class="field small-field">
                <option value="">$10</option>
              </select>
              <label>to:</label>
              <select class="field small-field">
                <option value="">$50</option>
              </select>
            </div>
            <input type="submit" class="search-submit" value="Search" />
            <p> <a href="#" class="bul">Advanced search</a><br />
              <a href="#" class="bul">Contact Customer Support</a> </p>
          </form>
        </div>
      </div>-->
      <!-- End Search -->
      <!-- Categories -->
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
    <!-- End Text Cols -->
  </div>
  <!-- End Side Full -->
  <!-- Footer -->
  <div id="footer">
    <p class="left">&nbsp;</p>
    <p class="right">&nbsp;</p>
  </div>
  <!-- End Footer -->
</div>
<!-- End Shell -->
</body>
</html>
