<?php
	$product_name = ($_POST['product_name']);
	$product_code = ($_POST['product_code']);
	$product_category = ($_POST['product_category']);
	$product_dimension = ($_POST['product_dimension']);
	$product_stock = ($_POST['product_stock']);
	$product_price = ($_POST['product_price']);
	$product_description = ($_POST['product_description']);
	$product_paypal = ($_POST['product_paypal']);
	require_once("config.php");
	$db_link = mysqli_connect($host, $username, $password, $database);
	
		$query = "INSERT INTO item_list(name,product_code,category,dimension,stock,price,description,paypal_code) 
		VALUES ('$product_name','$product_code','$product_category','$product_dimension','$product_stock','$product_price','$product_description','$product_paypal')";
		
		$result =  mysqli_query($db_link, $query);
		header('Location: products.php');
	
	
	
?>