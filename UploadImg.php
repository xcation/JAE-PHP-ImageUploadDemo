<html>
<head>
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
</head>
<body>
	<h1>上传图片</h1>
	<form enctype="multipart/form-data" action="/SaveImg.php" method="POST">
		<!-- MAX_FILE_SIZE must precede the file input field -->
		<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
		<!-- Name of input element determines name in $_FILES array -->
		请选择文件: <input name="userfile" type="file" />
		文件名称:<input name="filename" type="text" />
		<input type="submit" value="Send File" />
	</form>
</body>
</html>