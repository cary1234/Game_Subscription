<?php
	
	$edit_Result = $_GET['edit_Result'];
	
	if($edit_Result == "name"){
		$item_ID = $_GET['item_ID'];
		$product_Name = $_GET['product_Name'];
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "UPDATE item_list SET name='$product_Name' WHERE id = '$item_ID'";
		$result =  mysqli_query($db_link, $query);
		header('Location: products.php');
    }
	else if($edit_Result == "category"){
		$item_ID = $_GET['item_ID'];
		$product_Category = ($_GET['choices']);
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "UPDATE item_list SET category='$product_Category' WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);
		header('Location: products.php');
	}
	else if($edit_Result == "code"){
		$item_ID = $_GET['item_ID'];
		$product_Code = ($_GET['product_Code']);
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "UPDATE item_list SET product_code='$product_Code' WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		header('Location: products.php');
	}
	else if($edit_Result == "description"){
		$item_ID = $_GET['item_ID'];
		$product_Description = ($_GET['product_Description']);
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "UPDATE item_list SET description='$product_Description' WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		header('Location: products.php');
	}
	else if($edit_Result == "dimension"){
		$item_ID = $_GET['item_ID'];
		$product_Dimension = ($_GET['product_Dimension']);
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "UPDATE item_list SET dimension='$product_Dimension' WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);
		header('Location: products.php');
	}
	else if($edit_Result == "paypal"){
		$item_ID = $_GET['item_ID'];
		$product_Paypal = ($_GET['product_Paypal']);
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "UPDATE item_list SET paypal_code='$product_Paypal' WHERE id = '$item_ID'";
		$result =  mysqli_query($db_link, $query);
		header('Location: products.php');
	}
	else if($edit_Result == "price"){
		$item_ID = $_GET['item_ID'];
		$product_Price = ($_GET['product_Price']);
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "UPDATE item_list SET price='$product_Price' WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		header('Location: products.php');
	}
	else if($edit_Result == "stock"){
		$item_ID = $_GET['item_ID'];
		$product_Stock = ($_GET['product_Stock']);
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "UPDATE item_list SET stock='$product_Stock' WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		header('Location: products.php');
	}
	else if($edit_Result == "delete"){
		$item_ID = $_GET['item_ID'];
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "DELETE FROM item_list WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		header('Location: products.php');
	}
	else{
		echo "Error";
	}
?>

