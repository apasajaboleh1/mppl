<div id="main">
<?php if (isset($nrp)) { ?>
<center>
<form>
<input type="button" value="Motor Masuk" onclick="window.location.href='<?php echo site_url('home/motormasuk');?>'">
<input type="button" value="Motor Keluar" onclick="window.location.href='<?php echo site_url('home/motorkeluar');?>'">
</center>
<?php } else {
	echo "Login terlebih dahulu untuk memasukkan motor";
} ?>
</body>
</html>