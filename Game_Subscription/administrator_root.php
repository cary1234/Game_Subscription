<?php require("navbar.php") ?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Game Subscription - Admin Panel</title>
        <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap core CSS -->
        <link href="css/spacer.css" rel="stylesheet"><!-- Spacer -->
	</head>
    <body>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	</head>
	<body>
    	<div class="row spacer">
        </div>
        <div class="container text-center">
            <div class="row">
            	
                <div class="row spacer">
                </div>
            
            	<div class="col-md-4">
                </div>
                
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                            	<span class="glyphicon glyphicon-bookmark"></span>
                            	Welcome, <?php if (isset($_SESSION["fname"])){echo $_SESSION["fname"] . " (" . $_SESSION["access"] . ")"; } else{} ?>
                            </h3>
                        </div>
						<div class="panel-body"><?php
							if($_SESSION["access"] = "root"){?>
								
								<div class="row">
									<div class="col-xs-6 col-lg-6">
									  <a href="#" class="btn btn-default btn-lg center-block" role="button"><span class="glyphicon glyphicon-signal"></span> <br/>Manage Users</a>
									</div>
									
									<div class="col-xs-6 col-lg-6">
									  <a href="#" class="btn btn-success btn-lg center-block" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Add Users</a>
									</div>
								</div><?php
							}
							
							else if($_SESSION["access"] = "admin"){
								
							}
							
							else{
								
							}?>
                        
                            
                    	</div>
                    </div>
                </div>
                
                <div class="col-md-4">
                </div>
                
            </div>
        </div>
        <div class="row spacer">
        </div>
        <div class="row spacer">
        </div>
        
        <?php require("footer.php") ?>
	</body>
</html>