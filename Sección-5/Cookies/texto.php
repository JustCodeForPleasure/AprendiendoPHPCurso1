<?php 

	if(isset($_COOKIE['font-size'])){
		$tamaño = htmlspecialchars($_COOKIE['font-size']);
	}else{
		$tamaño = '15px';
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Texto</title>
	<style>
		p{
			font-size: <?php echo $tamaño; ?>
		}
	</style>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex omnis inventore. Ad aperiam velit saepe, unde dolor nam minima eius commodi porro magnam, recusandae fugiat voluptas error aut laboriosam.</p>
</body>
</html>