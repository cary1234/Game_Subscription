<?php require('navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Game Subscription - Sign In</title>
    <link href="css/styles.css" rel="stylesheet"><!-- Personal CSS -->
    <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap core CSS -->
	<link href="css/registration.css" rel="stylesheet"><!-- Registration CSS -->
    <!-- Spacer -->
    <link href="css/spacer.css" rel="stylesheet">
    
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
    <div class="row spacer">
    </div>	

	<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form role="form" name="loginForm" id="loginForm" method="post" action="signin_result.php">
                	<div>
                    <h2 class="text-center">Sign In<br><small>Daring You To Beat Our Prices</small></h2>
                    </div>
                    <hr class="colorgraph">
					<div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group center-block">
                                <input type="email" required name="email" id="email"
                                class="form-control input-lg text-center" placeholder="Email Address" tabindex="4">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group center-block">
                                <input type="password" required name="password"
                                id="password" class="form-control input-lg text-center" placeholder="Password" tabindex="5">
                            </div>
                        </div>
                    </div>
                    
                    
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <button type="submit" class="btn btn-success btn-lg center-block">
                                Sign In
                          	</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
    <div class="row spacer">
    </div>
    <div class="row spacer">
    </div>
    <div class="row spacer">
    </div>
    <div class="row spacer">
    </div>

      
    <?php require("footer.php"); ?>
	</body>
    
    
    <!-- Registration Javascript-->
    <script src="js/registration.js"></script>
    
    
    <!-- Bootstrap core JavaScript================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</html>