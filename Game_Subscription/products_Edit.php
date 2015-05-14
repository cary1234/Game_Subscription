<?php
	$edit_Result = (isset($_GET['edit_Result'])) ? $_GET['edit_Result'] : null;	
	
	if($edit_Result == "name"){
		
		$item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null;
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "SELECT * FROM item_list WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);
			 
		while($row = mysqli_fetch_array($result)){?>
			<form name="abc" action="products_Edit_Result.php"  method="GET">
                <center>
                <strong><font>Product Name:</font></strong>
                <input type="hidden" name="item_ID" value="<?php echo $row['id']; ?>" />
                <input type="hidden" name="edit_Result" value="<?php echo $edit_Result; ?>" /><br><br>
                <input type="text"style="text-align: center" name="product_Name" value="<?php echo $row['name']; ?>" size="30">
                <br><br>
                <input type="submit" value="Save">&nbsp;&nbsp;
                </center>
			</form><?php
		}
    }
	else if($edit_Result == "category"){

		$item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null;
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "SELECT * FROM item_list WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		   
		while($row = mysqli_fetch_array($result)){?>
            <form name="abc" action="products_Edit_Result.php"  method="GET">
                <center>
                <strong><font>Product Category:</font></strong><br>
                <input type="hidden" name="item_ID" value="<?php echo $row['id']; ?>" />
                <input type="hidden" name="edit_Result" value="<?php echo $edit_Result; ?>" /><br>
                <input type="text" style="text-align: center" readonly name="products_Category" value="<?php echo $row['category']; ?>" size ="23">
                <br><br>To<br><br>
                <select name="choices">
                    <option>Cooking Equipment</option>
                    <option>Food Service Equipment</option>
                    <option>Preparation Equipment</option>
                </select>
                <br><br>
                <input type="submit" value="Save">&nbsp;&nbsp;
                </center>
            </form><?php
		}
		
	}
	
	else if($edit_Result == "code"){
				
		$item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null;
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "SELECT * FROM item_list WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		   
		while($row = mysqli_fetch_array($result)){?>
			<form name="abc" action="products_Edit_Result.php" method="GET">
                <center>
                <strong><font>Product Code:</font></strong>
                <input type="hidden" name="item_ID" value="<?php echo $row['id']; ?>" />
                <input type="hidden" name="edit_Result" value="<?php echo $edit_Result; ?>" /><br>
                <input type="text" style="text-align: center" name="product_Code" value="<?php echo $row['product_code']; ?>" size="30">
                <br><br>
                <input type="submit" value="Save">&nbsp;&nbsp;
                </center>
			</form><?php
		}
		
	}
	else if($edit_Result == "description"){
				
		$item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null;
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "SELECT * FROM item_list WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		   
		while($row = mysqli_fetch_array($result)){?>
		
			<form name="abc" action="products_Edit_Result.php"  method="GET">
                <center>
                <strong><font>Product Description:</font></strong>
                <input type="hidden" name="item_ID" value="<?php echo $row['id']; ?>" />
                <input type="hidden" name="edit_Result" value="<?php echo $edit_Result; ?>" /><br>
                <textarea name='product_Description' cols="60" rows="10"><?php echo $row['description']; ?></textarea>
                <br><br>
                <input type="submit" value="Save">&nbsp;&nbsp;
                </center>
			</form><?php
		}
                
	}
	else if($edit_Result == "dimension"){
				
		$item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null;
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "SELECT * FROM item_list WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		   
		while($row = mysqli_fetch_array($result)){?>
			<form name="abc" action="products_Edit_Result.php"  method="GET">
                <center>
                <strong><font>Product Dimension:</font></strong>
                <input type="hidden" name="item_ID" value="<?php echo $row['id']; ?>" />
                <input type="hidden" name="edit_Result" value="<?php echo $edit_Result; ?>" /><br><br>
                <input type="text" style="text-align: center" name="product_Dimension" value="<?php echo $row['dimension']; ?>" size="30">
                <br><br>
                <input type="submit" value="Save">&nbsp;&nbsp;
                </center>
			</form><?php
		}
		
	}
	else if($edit_Result == "paypal"){
		
		$item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null;
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "SELECT * FROM item_list WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		   
		while($row = mysqli_fetch_array($result)){?>
			<form name="abc" action="products_Edit_Result.php"  method="GET">
                <center>
                <strong><font>Product Paypal Code:</font></strong>
                <input type="hidden" name="item_ID" value="<?php echo $row['id']; ?>" />
                <input type="hidden" name="edit_Result" value="<?php echo $edit_Result; ?>" /><br>
                <textarea name="product_Paypal" cols="55" rows="15"><?php echo $row['paypal_code']; ?></textarea>
                <br><br>
                <input type="submit" value="Save">&nbsp;&nbsp;
                </center>
			</form><?php
		}
		
	}
	else if($edit_Result == "price"){
		
		$item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null;
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "SELECT * FROM item_list WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		   
		while($row = mysqli_fetch_array($result)){?>
			<form name="abc" action="products_Edit_Result.php"  method="GET">
                <center>
                <strong><font>Product Price:</font></strong>
                <input type="hidden" name="item_ID" value="<?php echo $row['id']; ?>" />
                <input type="hidden" name="edit_Result" value="<?php echo $edit_Result; ?>" /><br><br>
                <input type="text" style="text-align: center" name="product_Price" value="<?php echo $row['price']; ?>" size="30">
                <br><br>
                <input type="submit" value="Save">&nbsp;&nbsp;
                </center>
			</form><?php
		}
	}
	else if($edit_Result == "stock"){
		
		$item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null;
		require_once("config.php");
		$db_link = mysqli_connect($host, $username, $password, $database);
		$query = "SELECT * FROM item_list WHERE id = '$item_ID' ";
		$result =  mysqli_query($db_link, $query);  
		   
		while($row = mysqli_fetch_array($result)){?>
            <form name="abc" action="products_Edit_Result.php"  method="GET">
                <center>
                <strong><font>Product Stock:</font></strong>
                <input type="hidden" name="item_ID" value="<?php echo $row['id']; ?>" />
                <input type="hidden" name="edit_Result" value="<?php echo $edit_Result; ?>" /><br><br>
                <input type="text" style="text-align: center" name="product_Stock" value="<?php echo $row['stock']; ?>" size="30">
                <br><br>
                <input type="submit" value="Save">&nbsp;&nbsp;
                </center>
            </form><?php
		}
		
	}
	else{
		echo "Error";
	}
?>