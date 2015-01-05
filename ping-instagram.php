<?php
opcache_reset();
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

// ================== CONFIGURATION ===================
$clientId = "XXXXXXXXXXXX";		// ==== Instagram Client ID (need to register with Instagram to get it)
$tag = $_GET['tag'];

//====================================================

if (!$tag) {
	echo '{"metadata":{"code":400,"message":"Please provide tag"}}';
} else {
	while (TRUE){
		// GET THE URL
		$url="https://api.instagram.com/v1/tags/".$tag."/media/recent?client_id=".$clientId; // SEARCH BY TAGS - Instagram API tags endpoin
		
		$jsonContent=file_get_contents($url);

		print_r($jsonContent); die();
	}
}
