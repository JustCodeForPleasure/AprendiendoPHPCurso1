<?php 
	if($_SERVER['REQUEST_METHOD'] == "GET"){
		echo "Probando esta parte";
	}else if($_SERVER['REQUEST_METHOD'] == "POST"){
		echo "POST";
	}
 ?>