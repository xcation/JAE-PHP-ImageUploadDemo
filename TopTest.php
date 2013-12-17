<?php
	header("Content-type: text/html; charset=utf-8");
	include("TopClient.php");
	//include("UserSellerGetRequest.php");
	include("PictureUploadRequest.php");
	
	$appkey = "21686863";
	$secret = "126b3f5051a4dde3ed050f620790bff5";
	$sessionKey = "6102306c76eb4a1f8077afafe1ae94d35303ce1fedbc29b263664221";
	
	$c = new TopClient;
	$c->appkey = $appkey;
	$c->secretKey = $secret;

	$req = new PictureUploadRequest;
	$req->setPictureCategoryId(0);
	//附件上传的机制参见PHP CURL文档，在文件路径前加@符号即可
	$req->setImg("@C:/wamp/www/test.jpg");
	$req->setImageInputTitle("Test.jpg");
	$req->setTitle("TestTitle");
	$resp = $c->execute($req, $sessionKey);

	echo "result:";
	print_r($resp);
	echo "<br>";
?>