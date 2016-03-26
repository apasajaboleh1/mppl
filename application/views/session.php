<?php
// start session untuk mengidentifikasi user
session_start();

// set login sukses atau tidak, 0 = belum sukses atau baru mau login
$logsukses=0;
$pesan='';

// cek status apa sudah login
if ( (isset($_SESSION['UserOK'])) && ($_SESSION['UserOK']=='posing') )
{
	
	$loginuser=$_SESSION['UserOK'];
	}
else
{
	echo "Anda belum Login";
}
?>