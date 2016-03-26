<!DOCTYPE html>
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
        <li><a href=<?php echo base_url('index.php/home');?> >Home</a></li>
        <li><a href=<?php echo site_url('index.php/home/contact');?> >Contact</a></li>
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
		<li><a href=<?php echo base_url('/home/loginform');?>>Login</a></li> 
		<?php } ?>
		<li><a href=<?php echo site_url('/home/question');?>>FAQ</a></li>
		<li><a href=<?php echo base_url('/home');?>>Join Us</a></li>
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
	  <h1>TENTANG KAMI</h1><br>
      <p style="text-align:center">
      Creative Spot adalah perusahaan yang bergerak di bidang toko online alat musik
      Creative Spot didirikan bulan 14 Februari 2015 oleh Mr. Andre Setiawan, Mr. Johanes Andre, Mr. Tomson Pangaribuan, dan Mr. Alvin Lazaro.
      <br><br>
      Keempat pendiri memiliki visi yang sama yaitu mendirikan toko musik online demi kemudahan dalam berbelanja alat musik
      CD, dan beragam aksesoris-aksesoris seperti headset, speaker, dll.
      <br><br>
      Dengan dipimpin oleh Mr. Alvin Lazaro selaku Project Manager (PM), Creative Spot berkembang menjadi salah satu toko musik online terbesar di Indonesia.
      Hal ini merupakan salah satu prestasi tersendiri mengingat usia dari Creative Spot baru 2 bulan.
      <br><br>
      Saat ini, Creative Spot memiliki 3 orang kru yang sekaligus merupakan co-founder dari toko musik online ini. Mr. Andre Setiawan menjabat sebagai web developer. Beliau
      bertanggung jawab atas pengembangan dari website Creative Spot. Mr. Johanes Andre juga menjabat sebagai web developer, bersama dengan Mr. Setiawan. Sedangkan Mr. Tomson Pangaribuan menjabat
	  sebagai web designer yang bertanggung jawab atas design dari website Creative Spot.
      <br><br>
      Kini, Creative Spot berencana untuk mengembangkan bisnisnya ke dunia internasional. Demi mencapai tujuan itu, kru Creative Spot mengadakan</h4>
      perekrutan anggota kru baru. Jika Anda berminat, Anda dapat mengklik link dibawah ini
	  <br></p>
	  <h1><a href=Join.html>Join US</a></h1>
      <h1><span class="ico2">&nbsp;</span>
      </h1>
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
        <li><a href="./">Contact</a></li>
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
	  <button class="button"> <a href="Katalog.pdf" download>Download Katalog Disini</a></button>
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Main -->
  <!-- Side Full -->
  <div class="side-full">
    <!-- More Products -->
    <div class="more-products">
      <div class="more-products-holder">
        <ul>
          <li><a href="#"><img src="css/images/frozendeluxe.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/michaelbuble.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/1989.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/red.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/maroon5maps.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/Headphone5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/Headphone4.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div class="more-nav"> <a href="#" class="prev">previous</a> <a href="#" class="next">next</a> </div>
    </div>
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
