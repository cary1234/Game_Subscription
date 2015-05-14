<?php
    session_start();
?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddpowerzoomer.js"></script>
<link href="css/sticky-arrow.css" rel="stylesheet">
<script type="text/javascript">
	jQuery(document).ready(function($){ //fire on DOM ready
	 $('#myimage').addpowerzoom()
	})
</script>

<script type="text/javascript">
	jQuery(document).ready(function($){ 
	 $('img.showcase').addpowerzoom() 
	 $('#gallerydiv img').addpowerzoom()
	})
</script><?php
$item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null;
require_once("config.php");
$db_link = mysqli_connect($host, $username, $password, $database);
$id = $_GET['id'];
$query = "SELECT * FROM item_list WHERE id = $id ";
$result =  mysqli_query($db_link, $query);?> 
<br><br>
<body style="margin-left: 25px;"><?php
	while($row = mysqli_fetch_array($result)){?>
    	<div id="arrowright">
            <ul>
                <a href="products-front-admin.php?id=<?php echo $id; ?>" ><img src="images/arrow_images/arrow.png" 
                onerror="this.src='images/default_QK.jpeg';" width="100" height="100"></a>
            </ul>
        </div>
        <div id="arrowleft">
            <ul>
                <a href="products-back-admin.php?id=<?php echo $id; ?>"><img src="images/arrow_images/arrow-left.png" 
                onerror="this.src='images/default_QK.jpeg';" width="100" height="100"></a>
            </ul>
        </div><?php
	}
	$item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null;
	require_once("config.php");
	$db_link = mysqli_connect($host, $username, $password, $database);
	$id = $_GET['id'];
	$query = "SELECT * FROM item_list WHERE id = $id ";
	$result =  mysqli_query($db_link, $query);  
	   
	while($row = mysqli_fetch_array($result)){?>
        <div id="center">		
        	<strong><font size = "5">Right Side View:</font></strong>
        </div>
        <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
        <img id="myimage" src="<?php echo $row['product_right_side']; ?>" onerror="this.src='images/default_QK.jpg';" width="350" height="350"><?php
		if(!isset($_SESSION['access'])){
		}
        elseif($_SESSION['access']=="admin"){?>
        <form action="change_pix.php" method="post" enctype="multipart/form-data" name="addroom">
            <input type="hidden" name="key" value="<?php echo $row['id']; ?>">
            <center>
                <input type="file" name="right_view">
                <input type="submit" name="Submit" value="Upload" id="button1" />
            </center>
        </form><?php
		}
        else{
		}?>
        <div id="center1">
            <table border = "1">
                <thead>
                    <tr bgcolor="#cccccc"  style="margin-bottom:10px;">
                        <th>
                            Front
                        </th>
                        <th>
                            Left Side
                        </th>
                        <th>
                            Back
                        </th>
                        <th>
                            Right Side
                         </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="products-front-admin.php?id=<?php echo $id; ?>">
                            <img id="myimage" src="<?php echo $row['image_path']; ?>" onerror="this.src='images/default_QK.jpg';" width="100" height="100">
                            </a>
                        </td>
                        <td>
                            <a href="products-left-admin.php?id=<?php echo $id; ?>">
                            <img id="myimage" src="<?php echo $row['product_left_side']; ?>" onerror="this.src='images/default_QK.jpg';" width="100" height="100">
                            </a>
                        </td>
                        <td>
                            <a href="products-back-admin.php?id=<?php echo $id; ?>">
                            <img id="myimage" src="<?php echo $row['product_back']; ?>" onerror="this.src='images/default_QK.jpg';" width="100" height="100">
                            </a>
                        </td>
                        <td>
                            <a href="products-right-admin.php?id=<?php echo $id; ?>">
                            <img id="myimage" src="<?php echo $row['product_right_side']; ?>" onerror="this.src='images/default_QK.jpg';" width="100" height="100">
                            </a>
                        </td>
                    </tr>
                
            	</tbody>
            </table>
        </div><?php
	}?>
</body>
		
          