<!DOCTYPE html>
<html>
<head>
</head>
<body>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css'); ?>" type="text/css" media="all" />
<div class="shell">
<div id="header">
    <h1 id="logo"><a href="#">shoparound</a></h1>
  
<div id="navigation">
<ul>
	<li><a href=<?php echo site_url('home');?> >Home</a></li>
	<?php if (isset ($nrp)) { ?>
	<li><a href=<?php echo site_url('home/insertbiodata');?> >New Biodata</a></li>
	<?php } ?>
	<li><a href=<?php echo site_url('home/statistik');?> >Statistik</a></li>
	<?php if (!isset ($nrp)) 
	{ ?>
	<li><a href=<?php echo site_url('home/loginform');?> >Login</a></li>
	<?php } ?>
	<?php 
	if (isset ($nrp))
	{ ?>
	<li><a href=<?php echo site_url('home/logout');?> >Logout</a></li>
	<li>
	<h3>
	<?php
	echo "Welcome, ";
	echo $nrp; ?>
	</h3></li>
	<?php
	} 
	?>
	</ul>
</div>
</div>