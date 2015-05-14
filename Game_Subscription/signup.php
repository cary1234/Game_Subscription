<?php require("navbar.php"); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Game Subscription - Signup</title>
    <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap core CSS -->
	<link href="css/registration.css" rel="stylesheet"><!-- Registration CSS -->
	<link href="css/styles.css" rel="stylesheet"><!-- Personal CSS -->    
	<link href="css/spacer.css" rel="stylesheet"><!-- Empty Space CSS -->
    
        
    <script src="js/jquery.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/validate-password.js"></script>
    
    
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
                <form role="form" name="loginForm" id="loginForm" method="post" action="signup_result.php">
                	<div>
                    <h2 class="text-center">Registration<br><small>Experience Intense Gaming Now!</small></h2>
                    </div>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" required name="fname" id="fname"
                                class="form-control input-lg" placeholder="First Name" tabindex="1">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" required name="lname" id="lname"
                                class="form-control input-lg" placeholder="Last Name" tabindex="2">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" required name="email" id="email"
                        class="form-control input-lg" placeholder="Email Address" tabindex="4">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" required name="password"
                                id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" required name="confirmpassword"
                                id="confirmpassword" class="form-control input-lg"
                                placeholder="Confirm Password" tabindex="6">
                                <input type="hidden" value="member" required name="accesstype"
                                id="accesstype">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                             By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
                        </div>
                    </div>
                    
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <input type="submit" onClick="validatePassword();" value="Register"
                            class="btn btn-primary btn-block btn-lg" tabindex="7">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a href="signin_form.php" class="btn btn-success btn-block btn-lg">
                                Sign In
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        <!-- Modal -->
        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    
    <div class="row spacer">
    </div>
    <div class="row spacer">
    </div>


	<?php require("footer.php"); ?>
	</body>
    
    

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        <script src="js/smooth-scroll.js"></script><!--This is the function for the going back to top-->
        <script src="js/holder.js"></script><!--This is to hold  images like the one in the header (140x140)-->
</html>















