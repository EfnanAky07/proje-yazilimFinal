<?php
ob_start();
session_start();

require_once '../baglanti.php';


if(isset($_POST['admin_oturum'])){


$admin_mail=$_POST['admin_mail'];
$admin_sifre=$_POST['admin_sifre'];

	$admin_sor=$db->prepare("SELECT * FROM admin WHERE admin_mail=:mail and admin_sifre=:sifre and yetki=:yetki");
	$admin_sor->execute(array(
	
		'mail'=>$admin_mail,
		'sifre'=>$admin_sifre,
		'yetki'=>5
	));
	$say=$admin_sor->rowCount();

	if ($say==1) {

		$_SESSION['mail']=$admin_mail;
		Header("Location:../admin-panel/production/media_gallery?durum=ok");
		exit;
	}
	else{
		Header("Location:../admin-panel/production/login.php?durum=no");
		exit;
	}





}