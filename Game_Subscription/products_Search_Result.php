<?php require("navbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quickitchen - Products</title>
        
		<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
		 <style>
		#callout{
		position: absolute;
		top: 100px;
		left: 1050px;
		
		}
		</style>	
 
		<script src="src/jquery.js" type="text/javascript"></script>
        <script src="src/facebox.js" type="text/javascript"></script>
        <script type="text/javascript">
          jQuery(document).ready(function($) {
            $('a[rel*=facebox]').facebox({
              loadingImage : 'src/loading.gif',
              closeImage   : 'src/closelabel.png'
            })
          })
        </script>
        <link href="css/bootstrap.css" rel="stylesheet" /><!-- Bootstrap Core -->
        <link href="css/spacer.css" rel="stylesheet" /><!--CSS Spacer -->
        <link href="css/styles.css" rel="stylesheet" /><!-- Personal CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap-select.css" /><!--CSS for Bootstrap-Like Select Tags-->
        
        <script type="text/javascript">
		  function showContent(){
			  document.getElementById("loading").style.display='none';
			  document.getElementById("content").style.display='block';<?php 
			  $item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null; ?><?php
		
			  if (isset($item_ID)){?>
				  $(document).ready(function (){
					  $('html, body').animate({
								  scrollTop: $("#product_<?php echo $item_ID; ?>").offset().top
							  }, 2000);
				  });<?php
			  }
			  else{?>
			  		<!-- Do nothing if the user didnt click anything from index.php --><?php
			  }?>
			 
		  }
		</script>
        
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body onload="showContent()">
    
		<script type="text/javascript">
        	document.write('<div id="loading"><center><img src = "images/icon_images/loading.gif" height="30" width="30"><br><br>Loading...Please wait. </center></div>');
        </script>
        <div id="content">
        <script type="text/javascript">
			//hide content of the whole website until finish loading
			document.getElementById("content").style.display='none';
        </script>
 
        <!--Empty Space-->
        <div class="row spacer">
        </div>
        <div class="row spacer">
        </div>
        <!--End of Empty Space-->
       	<form action="<?php echo 'products_search_result.php'?>" method="GET">      
            <div class="container"><br>
                <div class="row">
                    <div class="col-md-3">
                        <select class="form-control" id="searchType">
                            <option value="product_View-All">View All Products</option>
                            <option value="product_Name">Search By Product Name</option>
                            <option value="product_Code">Search By Product Code</option>
                            <option value="product_Price">Search By Price</option>
                            <option value="category">Search By Category</option>
                        </select>
                    </div>
                       
                    <div class="search col-md-1" id="product_View-All" style="display:none">
                        <button class="btn btn-danger" type="submit">
                        	<span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
           
                    <div class="search col-md-4" id="product_Name" style="display:none">
                    	<span class="input-group input-group-btn">
                            <input name="search_ProductName" type="text" 
                            class="form-control" placeholder="Search by Product Name" />
                            <button class="btn btn-danger" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                    
                    <div class="search col-md-4" id="product_Code" style="display:none">
                        <span class="input-group input-group-btn">
                            <input name="search_ProductCode" type="text"
                            class="form-control" placeholder="Search by Product Code" />  	
                            <button class="btn btn-danger" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
    
                    <div class="search col-md-9" id="product_Price" style="display:none">
                        <div class="col-md-3">
                            <select name="name" id="priceType" class="form-control">
                                <option value="higher-than">Higher Than</option>
                                    <option value="below">Lower Than</option>
                                    <option value="between">Between</option>
                                    <option value="equal-to">Equal To</option>
                            </select>
                        </div>
    
                        <div id="higher-than" class="priceCategory">
                            <div class="col-md-4" id="div-price-1">
                                <span class="input-group input-group-btn">
                                    <input name="search_ProductPrice_Higher" type="text" data-toggle="tooltip" data-placement="left"
                                    title="This will output all products higher than your inputted price."
                                    class="form-control" placeholder="eg. 5000" />
                                    <button class="btn btn-danger" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        
                        <div id="below" class="priceCategory">
                            <div class="col-md-4">
                                <span class="input-group input-group-btn">
                                    <input name="search_ProductPrice_Lower" type="text" data-toggle="tooltip" data-placement="left"
                                    title="This will output all products lower than your inputted price."
                                    class="form-control" placeholder="eg. 5000" />
                                
                                    <button class="btn btn-danger" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        
                        <div id="equal-to" class="priceCategory">
                            <div class="col-md-4" id="div-price-1">
                               <span class="input-group input-group-btn">
                                   <input name="search_ProductPrice_Equal" type="text" data-toggle="tooltip" data-placement="left"
                                  title="This will output all products with equal price on your inputted price."
                                  class="form-control" placeholder="eg. 5000" />
                              
                                  <button class="btn btn-danger" type="submit">
                                      <span class="glyphicon glyphicon-search"></span>
                                  </button>
                               </span>
                            </div>
                        </div>
                        
                        <div id="between" class="priceCategory">
                            <div class="col-md-2" id="div-price-1">
                                <input name="search_ProductPrice_Between1" type="text" data-toggle="tooltip"
                                data-placement="left" title="This will output all products between two inputted price."
                                class="form-control" placeholder="eg. 2000" />
                            </div>
                            <div class="col-md-1" id="div-price-separator">
                                <input type="text" value="-" readonly
                                class="form-control" tabindex="-1" />
                            </div>
                            <div class="col-md-2" id="div-price-2">
                                <input name="search_ProductPrice_Between2" type="text" data-toggle="tooltip" data-placement="left"
                                title="This will output all products between two inputted price."
                                class="form-control" placeholder="eg. 6000" />
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-danger" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
					</div>
                        
                    <div class="search col-md-4" id="category" style="display:none">
                        <span class="input-group input-group-btn">
                            <select name="search_ProductCategory" class="form-control">
                                <option value="">Select Value</option>
                                <option value="Cooking Equipment">Cooking Equipment</option>
                                <option value="Food Service Equipment">Food Service Equipment</option>
                                <option value="Preparation Equipment">Preparation Equipment</option>
                            </select>
                            <button class="btn btn-danger" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
		</form>
        
        
        <!-- jquery for scroll to element-->
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <!--Local version of jquery for scroll to element-->
        <script src="js/jquery.min.js"></script><?php 
		
		$item_ID = (isset($_GET['item_ID'])) ? $_GET['item_ID'] : null; ?><?php
		
		if (isset($item_ID)){?>
		
		<script>
		<!-- Scroll to Specific Product -->
			$(document).ready(function (){
				$('html, body').animate({
							scrollTop: $("#product_<?php echo $item_ID; ?>").offset().top
						}, 2000);
			});
		
        <!-- End of Scroll to Specific Product-->
        </script><?php
        
		}
		else{
		
		}?>
          
        <script>
			$(function() {
				$('#product_View-All').show(); <!-- Make the default selected value visible-->
				$('#searchType').change(function(){
					$('.search').hide();<!-- Hide all search class-->
					$('#' + $(this).val()).show();<!-- Show what the user selected depending on their id-->
				});
			});
			
			
			$(function() {
				$('.priceCategory').hide(); <!-- Make the default selected value visible-->
				$('#higher-than').show(); <!-- Make the default selected value visible-->
				$('#priceType').change(function(){
					$('.priceCategory').hide();<!-- Hide all search class-->
					$('#' + $(this).val()).show();<!-- Show what the user selected depending on their id-->
				});
			});
        </script>
 
        <!--Empty Space-->
        <div class="row spacer">
        </div>
        <!--End of Empty Space-->
        
        <div class="container">
            <div class="row"><?php
                if(!isset($_SESSION['access'])){?>
				<!-- If hindi nakalogin-->
                    <div class="col-xs-1">
                	</div>
					<div class="col-xs-2">
                    	<h4 class="text-center"><strong>Product</strong></h4>
                	</div>
					<div class="col-xs-6">
                        <h4 class="text-center"><strong>Description</strong></h4>
                    </div>
					<div class="col-xs-2">
                        <h4 class="text-center"><strong>Category</strong></h4>
                    </div>
					<div class="col-xs-1">
                    </div><?php
				}
                else{?>
                <!-- If nakalogin-->
                    <div class="col-xs-2">
                    	<h4 class="text-center"><strong>Product</strong></h4>
                	</div>
					<div class="col-xs-5">
                        <h4 class="text-center"><strong>Description</strong></h4>
                    </div>
					<div class="col-xs-1">
                        <h4 class="text-center"><strong>Stocks Available</strong></h4>
                    </div>
					<div class="col-xs-1">
                        <h4 class="text-center"><strong>Category</strong></h4>
                    </div>
					<div class="col-xs-1">
                    	<h4 class="text-center"><strong>Price</strong></h4>
                    </div>
                    <div class="col-xs-2">
                    	<!-- Paypal Column-->
                    </div><?php
                }?>
         	</div>
         </div><?php
         
         require_once("config.php");
         $db_link = mysqli_connect($host, $username, $password, $database);     
		 
         $search_ProductName = $_GET['search_ProductName'];
		 $search_ProductCode = $_GET['search_ProductCode'];
		 $search_ProductPrice_Higher = $_GET['search_ProductPrice_Higher'];
		 $search_ProductPrice_Lower = $_GET['search_ProductPrice_Lower'];
		 $search_ProductPrice_Equal = $_GET['search_ProductPrice_Equal'];
		 $search_ProductPrice_Between1 = $_GET['search_ProductPrice_Between1'];
		 $search_ProductPrice_Between2 = $_GET['search_ProductPrice_Between2'];
		 $search_ProductCategory = $_GET['search_ProductCategory'];
		 
		 
		 if($search_ProductName != ""){
		 	$query = "SELECT * FROM item_list WHERE name LIKE '%".$search_ProductName."%' ORDER BY name ASC";
		 }
		 else if($search_ProductCode!=""){
		 	$query = "SELECT * FROM item_list WHERE product_code LIKE '%".$search_ProductCode."%' ORDER BY product_code ASC";
		 }
		 else if($search_ProductPrice_Higher!=""){
		 	$query = "SELECT * FROM item_list WHERE price >= ".$search_ProductPrice_Higher." ORDER BY price ASC";
		 }
		 else if($search_ProductPrice_Lower!=""){
		 	$query = "SELECT * FROM item_list WHERE price <= ".$search_ProductPrice_Lower." ORDER BY price ASC";
		 }
		 else if($search_ProductPrice_Equal!=""){
		 	$query ="SELECT * FROM item_list WHERE price = '".$search_ProductPrice_Equal." ORDER BY price ASC"; 
		 }
		 else if(($search_ProductPrice_Between1!="") && ($search_ProductPrice_Between2!="")){
			 $query = "SELECT * FROM item_list WHERE price BETWEEN ".$search_ProductPrice_Between1." AND ".$search_ProductPrice_Between2." ORDER BY price ASC";
		 }
		 else if($search_ProductCategory!=""){
		 	$query = "SELECT * FROM item_list WHERE category LIKE '%".$search_ProductCategory."%'  ORDER BY name ASC";
		 }
		 else{
			$query = "SELECT * FROM item_list ORDER BY category"; 
		 }

         $result =  mysqli_query($db_link, $query);
         
		while($row = mysqli_fetch_array($result)){?>
             <div class="row">
				<div id="product_<?php echo $row['id']; ?>"><br><br><br></div>
			 
				 <!-- Checks whether the user clicks recommended products on index.php--><?php
				 if($row['id'] == $item_ID ){?>
					<div class="container highlight_bg"><?php
				 }
				 else{?>
					<div class="container"><?php
				 }?>
			 
				 <!-- Checks whether the user is logged in or not--><?php
				 
				 if (!isset($_SESSION['access'])) {?>
				 <!-- If access = unconfirmed ("guest only") -->
					<div class="col-lg-1"> 
					</div>
					
					<div class="col-lg-2">     
						<form action="products-front.php" method="GET">
							<?php $val = $row['id']; ?>
						</form>
						<div class="modal fade bs-example-modal-md_<?php echo $val; ?>" tabindex="-1" 
						role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<center>
										<iframe frameborder = "0" src='view.php?id=<?php echo $val; ?>' width="620" height="650">
										</iframe>
									</center>
								</div>
							</div>
						</div>
						<a  data-target=".bs-example-modal-md_<?php echo $val; ?>" data-toggle="modal" >
							<img src="<?php echo $row['image_path']; ?>" height="200" width="180" onerror="this.src='images/default_QK.jpg';">
						</a>
					</div>
					
					<div class="col-lg-6">
						<p id="product_name" class="text-center">
							<strong><?php echo $row['name']; ?></strong><br>
							(<?php if($row['product_code']) { echo $row['product_code']; } else { } ?>)
						</p>
						<p id="description" class="indent text-justify">
							<?php echo $row['description']; ?>
						</p>
						<span>Dimension: </span>
						<span class="text-success"><strong>
							<?php echo $row['dimension']; ?></strong>
						</span>
						<br>
					</div>
					
					<div class="col-lg-2 text-center">
						<br><br><?php echo $row['category']; ?>
					</div>
					
					<div class="col-lg-1"> 
					</div><?php
				 }
				 else if(($_SESSION['access']) == 'root'){?>
					<div class="col-lg-2">     
						<form action="products-front.php" method="GET">
							<?php $val = $row['id']; ?>
						</form>    
						<div class="modal fade bs-example-modal-md_<?php echo $val; ?>" tabindex="-1" 
						role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<center>
										<iframe frameborder = "0" src='view.php?id=<?php echo $val; ?>' width="620" height="650">
										</iframe>
									</center>
								</div>
							</div>
						</div>                
						<a  data-target=".bs-example-modal-md_<?php echo $val; ?>" data-toggle="modal" >
							<img src="<?php echo $row['image_path']; ?>" height="200" width="180" onerror="this.src='images/default_QK.jpg';">
						</a>
					</div>
					
					<div class="col-lg-5">
						<p id="product_name" class="text-center">
							<strong><?php echo $row['name']; ?></strong><br>
							(<?php if($row['product_code']) { echo $row['product_code']; } else { } ?>)
						</p>
						<p id="description" class="indent text-justify">
							<?php echo $row['description']; ?>
						</p>
						<span>Dimension: </span>
						<span class="text-success"><strong>
							<?php echo $row['dimension']; ?></strong>
						</span>
						<br>
					</div>
					
					<div class="col-lg-1">
						<br><br>
						<label class="form-control text-center"><?php
							if ($row['stock'] >= 1){?>
								<span class="text-success"><strong> <?php echo $row['stock']; ?> </strong></span><?php
							}
							else{?>
								<span class="text-warning">
									<strong><?php echo $row['stock']; ?> </strong>
								</span><?php
							}?>
						</label>
					</div>
					
					 <div class="col-lg-1 text-center">
						<br><br><?php echo $row['category']; ?>
					</div>
					
					<div class="col-lg-1">
						<br><br>
						<label class="form-control text-center"><?php echo $row['price']; ?></label>
					</div>
					
					<div class="col-lg-2 text-center">
						<br><br>
						<?php echo $row['paypal_code']; ?>
					</div><?php
				 }
				 else if(($_SESSION['access']) == 'admin'){?>
					<div id="callout">
						<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
							<span class="glyphicon glyphicon-plus"></span>
						</button>
					</div>
                 	<div class="col-lg-2">     
						<form action="products-front-admin.php" method="GET">
							<?php $val = $row['id']; ?>
						</form>    
						<div class="modal fade bs-example-modal-md_<?php echo $val; ?>" tabindex="-1" 
						role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<center>
										<iframe frameborder = "0" src='view-admin.php?id=<?php echo $val; ?>' width="620" height="650">
										</iframe>
									</center>
								</div>
							</div>
						</div>            
						<a  data-target=".bs-example-modal-md_<?php echo $val; ?>" data-toggle="modal" >
							<img src="<?php echo $row['image_path']; ?>" height="200" width="180" onerror="this.src='images/default_QK.jpg';">
						</a>
					</div>
					<div class="col-lg-5">
						<p id="product_name" class="text-center">
							<a rel = "facebox" style="color: Black" 
                            href="products_Edit.php?item_ID=<?php echo $row['id']; ?>&edit_Result=name">
                            <strong><?php
								if($row['name']){
									echo $row['name'];
								}
								else{
									echo '(No Product Name Available)';
								}?>
                            </strong></a><br>
							<a rel = "facebox" style="color: Black" 
                            href="products_Edit.php?item_ID=<?php echo $row['id']; ?>&edit_Result=code"><?php
                            if($row['product_code']){
								echo $row['product_code'];
							}
							else{
								echo '(No Product Code Available)';
							}?></a>
						</p>
						<p id="description" class="indent text-justify">
							<a rel = "facebox" style="color: Black" 
                            href="products_Edit.php?item_ID=<?php echo $row['id']; ?>&edit_Result=description"><?php
                            if($row['description']){
								echo $row['description'];
							}
							else{
								echo '(No Product Description Available)';
							} ?></a>
						</p>
						<span>Dimension: </span>
						<span class="text-success"><strong>
							<a rel = "facebox" style="color: Black" 
                            href="products_Edit.php?item_ID=<?php echo $row['id']; ?>&edit_Result=dimension"><?php
                            if($row['dimension']){
								echo $row['dimension'];
							}
							else{
								echo '(No Product Dimension Available)';
							}?></a>
						</span>
						<br>
					</div>
					
					<div class="col-lg-1">
						<br><br><?php
							if ($row['stock'] >= 1){?>
								<a rel = "facebox" style="color: Green" 
                                href="products_Edit.php?item_ID=<?php echo $row['id']; ?>&edit_Result=stock">
                                <span class="text-success"><strong> <?php echo $row['stock']; ?> </strong></span>
                                </a><?php
							}
							else{?>
								<span>
                                	<script language="JavaScript" type="text/javascript">
										function checkdelete(){
											return confirm('Are You Sure You want To Delete This Product?');
									}
									</script>
									<a rel = "facebox" style="color: Red"
                                     href="products_Edit.php?item_ID=<?php echo $row['id']; ?>&edit_Result=stock"><strong><?php echo 'No Stock Available'; ?> </strong></a>
								</span><?php
							}?>
					</div>
					
					 <div class="col-lg-1 text-center">
						<br><br>
                        <a rel = "facebox" style="color: Black" 
                        href="products_Edit.php?item_ID=<?php echo $row['id']; ?>&edit_Result=category"><?php
                        if($row['category']){
							echo $row['category'];
						}
						else{
							echo '(No Product Category Available)';
						}?></a>
					</div>
					
					<div class="col-lg-1 text-center">
						<br><br>
						<a rel = "facebox" style="color: Black" 
                        href="products_Edit.php?item_ID=<?php echo $row['id']; ?>&edit_Result=price"><?php
                        if($row['price']){
							echo $row['price'];
						}
						else{
							echo '(No Product Price Available)';
						}?></a>
					</div>
					
					<div class="col-lg-1 text-center">
						<br><br>
						<a rel = "facebox" style="color: Black" 
                        href="products_Edit.php?item_ID=<?php echo $row['id']; ?>&edit_Result=paypal"><?php
                        if($row['paypal_code']){
							echo 'Edit Paypal Code';
						}
						else{
							echo '(No Paypal Code Available)';
						}?></a>
					</div>
					<div class="col-lg-1 text-center">
						<br><br>
						<a href="products_Edit_Result.php?item_ID=<?php echo $row['id']; ?>&edit_Result=delete" onclick="return checkdelete()">Delete</a>
						<?php
						
						?>
					</div><?php
                 }
				 
				 else if(($_SESSION['access']) == 'member'){?>
                 	<!-- If access = admin ("view all details, search products only") -->
					<div class="col-lg-2">     
						<form action="products-front.php" method="GET">
							<?php $val = $row['id']; ?>
						</form>    

						<div class="modal fade bs-example-modal-md_<?php echo $val; ?>" tabindex="-1" 
						role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<center>
										<iframe frameborder = "0" src='view.php?id=<?php echo $val; ?>' width="620" height="650">
										</iframe>
									</center>
								</div>
							</div>
						</div>                
						<a  data-target=".bs-example-modal-md_<?php echo $val; ?>" data-toggle="modal" >
							<img src="<?php echo $row['image_path']; ?>" height="200" width="180" onerror="this.src='images/default_QK.jpg';">
						</a>
					</div>
					
					<div class="col-lg-5">
						<p id="product_name" class="text-center">
							<strong><?php echo $row['name']; ?></strong><br>
							(<?php if($row['product_code']) { echo $row['product_code']; } else { } ?>)
						</p>
						<p id="description" class="indent text-justify">
							<?php echo $row['description']; ?>
						</p>
						<span>Dimension: </span>
						<span class="text-success"><strong>
							<?php echo $row['dimension']; ?></strong>
						</span>
						<br>
					</div>
					
					<div class="col-lg-1">
						<br><br>
						<label class="form-control text-center"><?php
							if ($row['stock'] >= 1){?>
								<span class="text-success"><strong> <?php echo $row['stock']; ?> </strong></span><?php
							}
							else{?>
								<span class="text-warning">
									<strong><?php echo $row['stock']; ?> </strong>
								</span><?php
							}?>
						</label>
					</div>
					
					 <div class="col-lg-1 text-center">
						<br><br><?php echo $row['category']; ?>
					</div>
					
					<div class="col-lg-1">
						<br><br>
						<label class="form-control text-center"><?php echo $row['price']; ?></label>
					</div>
					
					<div class="col-lg-2 text-center">
						<br><br>
						<?php echo $row['paypal_code']; ?>
					</div><?php
                 }?>
                 
        </div><?php
		}?>
        
        
        
        
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			  </div>
			  <div class="modal-body">
			  <form action="products_add.php" method="POST">
			  <center>
			  <table  width="360" border="0" cellpadding="0">
			  <tr>
				<td style=" padding-bottom: 1em;" width="187" span="10" valign="top"><div align="left">Product Name:</div></td> 
				<td style=" padding-bottom: 1em;" width="281"><input size="30" required class="form-control" type="text" name="product_name"></td>
			  </tr>
			  <tr>
				<td style=" padding-bottom: 1em;" width="187" valign="top"><div align="left">Product Code:</div></td> 
				<td style=" padding-bottom: 1em;" width="281"><input class="form-control" required size="30" type="text" name="product_code"></td>
			  </tr>
			  <tr>
				<td style=" padding-bottom: 1em;" width="187" valign="top"><div align="left">Product Category:</div></td> 
				<td style=" padding-bottom: 1em;" width="281">
				<select name="product_category" class="form-control">
                <option value="">Select Value</option>
                <option value="Cooking Equipment">Cooking Equipment</option>
                <option value="Food Service Equipment">Food Service Equipment</option>
                <option value="Preparation Equipment">Preparation Equipment</option>
                </select>
				</td>
			  </tr>
			  <tr>
				<td style=" padding-bottom: 1em;" width="187" valign="top"><div align="left">Product Dimension:</div></td><br> 
				<td style=" padding-bottom: 1em;" width="281"><input class="form-control" required size="30" type="text" name="product_dimension"></td>
			  </tr>
			  <tr>
				<td style=" padding-bottom: 1em;" width="187" valign="top"><div align="left">Product Stock:</div></td> 
				<td style=" padding-bottom: 1em;" width="281"><input required class="form-control" size="30" type="text" name="product_stock"></td>
			  </tr>
			  <tr>
				<td style=" padding-bottom: 1em;" width="187" valign="top"><div align="left">Product Price:</div></td> 
				<td style=" padding-bottom: 1em;" width="281"><input class="form-control" required size="30" type="text" name="product_price"></td>
			  </tr>
			  <tr>
				<td style=" padding-bottom: 1em;" width="187" valign="top"><div align="left">Product Description:</div></td> 
				<td style=" padding-bottom: 1em;" width="281"><textarea class="form-control" name='product_description' required cols="32" rows="3"></textarea></td>
			  </tr>
			  <tr>
				<td style=" padding-bottom: 1em;" width="187" valign="top"><div align="left">Product Paypal:</div></td> 
				<td style=" padding-bottom: 1em;" width="281"><textarea class="form-control" name='product_paypal' cols="32" required rows="3"></textarea></td>
			  </tr>
			  </table>
			  </center>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="style" class="btn btn-primary">Save changes</button>
			  </div>
			  </form>
			</div>
		  </div>
		</div>
		
        
        
        
        <?php require("footer.php"); ?>

        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="js/bootstrap-select.js"></script><!--Customized Select Tags-->
        		
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        
        <script src="js/jquery-1.10.2.min.js"></script><!--Localv version of Bootstrap JS core-->
        <!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->
        <script src="js/bootstrap.js"></script>
        
        <!-- JS for Sticky Sidevar-->
		<script src="js/sticky-sidebar.js" type="text/javascript"></script>
        <!-- End of JS for Sticky Sidevar-->
        </div>
	</body>
</html>