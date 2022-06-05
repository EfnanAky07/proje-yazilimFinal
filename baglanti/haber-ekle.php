<?php


require_once '../baglanti.php';


// gundem post yeri

// insert
if (isset($_POST['postislemi'])) {


	$uploads_dir = '../dow_img/gundem';
	@$tmp_name = $_FILES['resim']["tmp_name"];
	@$name = $_FILES['resim']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,3 )."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	


	$kaydet=$db->prepare("INSERT INTO gundem_post SET
		resim=:resim,
		baslik=:baslik,
		icerik=:icerik,
		katagori=:katagori
		");
	$insert=$kaydet->execute(array(
		'baslik' => $_POST['baslik'],
		'icerik' => $_POST['icerik'],
		'katagori' => $_POST['katagori'],
		'resim' => $refimgyol
		));

	if ($insert) {

		Header("Location:../admin-panel/production/form.php?durum=ok");

	} else {

		Header("Location:../admin-panel/production/form.php?durum=no");
	}
}


if (isset($_POST['sliderAdd'])) {


	$uploads_dir = '../dow_img/slider';
	@$tmp_name = $_FILES['resim']["tmp_name"];
	@$name = $_FILES['resim']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,3 )."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	


	$kaydet=$db->prepare("INSERT INTO slider_post SET
		resim=:resim,
		baslik=:baslik,
		haberkonu=:haberkonu,
		tarih=:tarih,
		siteurl=:siteurl
		
		");
	$insert=$kaydet->execute(array(
		'baslik' => $_POST['baslik'],
		'haberkonu' => $_POST['haberkonu'],
		'tarih' => $_POST['tarih'],
		'siteurl' => $_POST['siteurl'],
		'resim' => $refimgyol
		));

	if ($insert) {

		Header("Location:../admin-panel/production/media_gallery?durum=ok");

	} else {

		Header("Location:../admin-panel/production/form.php?durum=no");
	}
}


?>





