<?php
	header("Content-type: text/html; charset=utf-8");
	include("TopClient.php");
	include("UserSellerGetRequest.php");
	
	$appkey = "21686863";
	$secret = "126b3f5051a4dde3ed050f620790bff5";
	$sessionKey = "6100303d38817664bf376a9d4ee16656e704a073004bec8263664221";
	
	$c = new TopClient;
	$c->appkey = $appkey;
	$c->secretKey = $secret;

	$req = new UserSellerGetRequest;
	$req->setFields("nick,user_id,type");
	$resp = $c->execute($req, $sessionKey);

	echo "result:";
	print_r($resp);
	echo "<br>";
?>