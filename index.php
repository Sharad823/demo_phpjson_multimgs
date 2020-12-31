<!doctype html>
<html>
	<head>
		<title>img test</title>
	</head>
	<body>
		<form action="dh.php" method="post" enctype="multipart/form-data">
			<label>Title<br>
				<input type="text" name="title">
			</label>
			<br><br>
			<p>Pics</p>
			<label>
				<input type="file" name="pic1">
			</label>
			<br><br>
			
			<label>
				<input type="file" name="pic2">
			</label>
			<br><br>
			<input type="submit" value="post">
		</form>
		
	</body>
</html>