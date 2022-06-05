<?php

try {

	$db =new PDO("mysql:host=localhost;dbname=wirNews;charset=utf8",'root','Ebubekir9.');
	

	
} catch (PDOExpection  $e) {


	echo $e->getMessage() ;
	
}

?>