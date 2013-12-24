<?php
	//$resultFileUpload = $fileStoreService->saveBinaryFile($_FILES['file']->getContent(),"test.jpg") ;
	header("Content-type: text/html; charset=utf-8");
	include("TopClient.php");
	include("PictureUploadRequest.php");
	
	echo $_POST['filename']."<br>";
	
	$appkey = "21686863";
	$secret = "126b3f5051a4dde3ed050f620790bff5";
	$sessionKey = "6101002af818ac97b4cb658d89cb8fb1e51e3dd066937c8263664221";


	$c = new TopClient;
	$c->appkey = $appkey;
	$c->secretKey = $secret;

	$req = new PictureUploadRequest;
	$req->setPictureCategoryId(0);
	//附件上传的机制参见PHP CURL文档，在文件路径前加@符号即可
	$req->setImg("@_FILES['userfile']");
	$req->setImageInputTitle("Test.jpg");
	$req->setTitle("TestTitle");
	$resp = $c->execute($req, $sessionKey);

	echo "result:"."<br>";
	print_r($resp);
	echo "<br>";

?>
