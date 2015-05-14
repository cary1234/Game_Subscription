<?php include('navbar.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Game Subscription - Activation</title>
        <!-- Bootstrap Core -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Spacer -->
        <link href="css/spacer.css" rel="stylesheet">
        <!-- Registration CSS -->
        <link href="css/registration.css" rel="stylesheet" />
    </head>
    <body>
        <div class="row spacer">
		</div>    
        <div class="row spacer">
        </div><?php
        include ('config.php');
        
        if (isset($_GET['email']) && preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $_GET['email'])){
            $email = $_GET['email'];
        }
        if (isset($_GET['key']) && (strlen($_GET['key']) == 32)){//The Activation key will always be 32 since it is MD5 Hash
            $key = $_GET['key'];
        }
        
        
        if (isset($email) && isset($key)){
            // Update the database to set the "activation" field to null
            $query_activate_account = "UPDATE users SET activation = 'activated' WHERE (email ='$email' AND
                                        activation='$key') LIMIT 1";
            $result_activate_account = mysqli_query($db_link, $query_activate_account) ;
        
            // Print a customized message:
            if (mysqli_affected_rows($db_link) == 1){?><!--if update query was successfull -->
                <div class="success text-center">
                	Your account is now active. You may now <a href="signin_form.php">Log in</a>
                </div><?php
            }
            else{?>
                <div class="errormsgbox text-center">
                    Oops! Your account could not be activated. Please recheck the link or contact the system administrator.
                </div><?php
            }
            mysqli_close($db_link);
        
        }
        else{?>
            <div class="errormsgbox text-center">
           		Error Occured.
            </div><?php
        }?>
        
        <div class="row spacer">
		</div>     
        <div class="row spacer">
		</div>    
        <div class="row spacer">
        </div>  
        <div class="row spacer">
		</div>    
        <div class="row spacer">
        </div>        
        <div class="row spacer">
		</div>    
        <div class="row spacer">
        </div>
        <div class="row spacer">
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/smooth-scroll.js"></script><!--This is the function for the going back to top-->
    <script src="js/holder.js"></script><!--This is to hold  images like the one in the header (140x140)-->
</html>