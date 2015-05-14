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
                <a href="view4-admin.php?id=<?php echo $id; ?>" ><img src="images/arrow_images/arrow.png" 
                onerror="this.src='images/default_QK.jpeg';" width="100" height="100"></a>
            </ul>
        </div>
        <div id="arrowleft">
            <ul>
                <a href="view2-admin.php?id=<?php echo $id; ?>"><img src="images/arrow_images/arrow-left.png" 
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
			<strong><font size = "5">Front View:</font></strong>
		</div>
		
		<br><br><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;
		
		<img id="myimage" src="<?php echo $row['image_path']; ?>" onerror="this.src='images/default_QK.jpg';" width="350" height="350">
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
                            <a href="view.php?id=<?php echo $id; ?>">
                            <img id="myimage" src="<?php echo $row['image_path']; ?>" onerror="this.src='images/default_QK.jpg';" width="100" height="100">
                            </a>
                        </td>
                        <td>
                            <a href="view4.php?id=<?php echo $id; ?>">
                            <img id="myimage" src="<?php echo $row['image_path']; ?>" onerror="this.src='images/default_QK.jpg';" width="100" height="100">
                            </a>
                        </td>
                        <td>
                            <a href="view3.php?id=<?php echo $id; ?>">
                            <img id="myimage" src="<?php echo $row['image_path']; ?>" onerror="this.src='images/default_QK.jpg';" width="100" height="100">
                            </a>
                        </td>
                        <td>
                            <a href="view2.php?id=<?php echo $id; ?>">
                            <img id="myimage" src="<?php echo $row['image_path']; ?>" onerror="this.src='images/default_QK.jpg';" width="100" height="100">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
		</div><?php
	}
		?>
</body>
	
	  