<?php
	//define("TOP_SDK_WORK_DIR", "C:/tmp");
	//define("TOP_SDK_DEV_MODE", true);
	//include "TopSdk.php";
	include("TopClient.php");
	include("PictureUploadRequest.php");
	
	$appkey = "21686863";
	$secret = "126b3f5051a4dde3ed050f620790bff5";
	$sessionKey = "6100303d38817664bf376a9d4ee16656e704a073004bec8263664221";

if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 2000000))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Error: " . $_FILES["file"]["error"] . "<br />";
	}
	else
	{
		echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		echo "Type: " . $_FILES["file"]["type"] . "<br />";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		echo "Stored in: " . $_FILES["file"]["tmp_name"] . "<br />";
		$tmp = "@" . $_FILES["file"]["tmp_name"];
		echo $tmp;
		
		$c = new TopClient;
		$c->appkey = $appkey;
		$c->secretKey = $secret;
		
		$req = new PictureUploadRequest;
		$req->setPictureCategoryId(0);
		//附件上传的机制参见PHP CURL文档，在文件路径前加@符号即可
		$req->setImg($tmp);
		$req->setImageInputTitle("Test.jpg");
		$req->setTitle("TestTitle");
		$resp = $c->execute($req, $sessionKey);
		
		echo "result:";
		print_r($resp);
		echo "<br>";
	}
}
else
{
	echo "Invalid file";
}
?>
