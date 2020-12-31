<!doctype html>
<html>
	<head>
		<title>img test</title>
		<style>
			img{
				width:100px;
			}
		</style>
	</head>
	<body>
<!--
		<div>
			<h2>Title</h2>
			<img src="img/user1.jpg">
			<img src="img/user2.jpg">
			<hr>
		</div>
-->
		<?php
		
			$d = file_get_contents('data.json');
			$d = json_decode($d, true);
			
			foreach($d as $i => $v){
				echo '
				<div>
					<h2>'.$v['title'].'</h2>
					<img src="'.$v['pic1'].'">
					<img src="'.$v['pic2'].'">
					<hr>
				</div>
				';
			}
		
		?>
		
		
	</body>
</html>