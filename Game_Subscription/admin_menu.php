<?php require("navbar.php"); ?>
<!DOCTYPE html><?php
if ($_SESSION['access']!="admin") {
	header('Location: signin_form.php');
}?>
<html lang="en">
	<head>
        <title>Game Subscription - Admin Panel</title>
        <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap core CSS -->
        <link href="css/spacer.css" rel="stylesheet"><!-- Spacer -->

	</head>
	<body>
        <!--Empty Space-->
            <div class="row spacer">
            </div>
            
            <div class="row spacer">
            </div>
        <!--End of Empty Space-->
        <div class="container">
            <div class="row">
            	
                <div class="col-md-1">
                </div>
                
                <div class="col-md-10">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">
                            	<span class="glyphicon glyphicon-bookmark text-center"></span>
                                Welcome, <?php echo $_SESSION['fname']; ?>
                            </h3>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-4 col-lg-4">
                                    <a href="admin_lists.php" class="btn btn-danger btn-lg center-block" role="button">
                                          <br><br>
                                          <span class="glyphicon glyphicon-comment"></span> <br/>Manage Users
                                          <br><br>
                                    </a>
                                    <br>
                               	</div>
                                
                                <div class="col-xs-4 col-lg-4">
                                    <a href="admin_card.php" class="btn btn-success btn-lg center-block" role="button">
                                          <br><br>
                                          <span class="glyphicon glyphicon-comment"></span> <br/>Manage Cards
                                          <br><br>
                                    </a>
                                    <br>
                                    
                               	</div>
                            
                                <div class="col-xs-4 col-lg-4">
                                    <a href="action_lists.php" class="btn btn-primary btn-lg center-block" role="button">
                                    	<br><br>
                                        <span class="glyphicon glyphicon-comment"></span> <br/>Users Action
                                    	<br><br>
                                    </a>
                                    
                                </div>
                            </div>
                    	</div>
                    </div>
                </div>
                
                <div class="col-md-1">
                </div>
                
            </div>
        </div>
        <!--Empty Space-->
        <div class="row spacer">
            </div>
            <div class="row spacer">
            </div>
            <div class="row spacer">
            </div>
        <!--End of Empty Space-->
        <?php require("footer.php"); ?>
	</body>
</html>