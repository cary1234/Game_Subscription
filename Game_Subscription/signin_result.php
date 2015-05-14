<?php require("navbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <div name="top"></div>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Subscription - Sign In</title>


    <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap Core -->
    <link href="css/carousel.css" rel="stylesheet"><!-- Carousel -->
    <link href="css/spacer.css" rel="stylesheet"><!-- Spacer -->
    <link href="css/styles.css" rel="stylesheet"><!-- Personal CSS -->

</head>
<body>
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
    <div class="container">
        <div class="col-md-12">
            <h3 class="text-center text-danger">

                <?php
                include ('config.php');
// Initialize a session:
                $error = array(); //this aaray will store all error messages

                if (empty($_POST['email'])) {//if the email supplied is empty 
                    $error[] = 'You forgot to enter  your Email ';
                } else {

                    if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) {
                        $email = mysqli_real_escape_string($db_link, strip_tags(stripslashes($_POST['email'])));
                    } else {
                        $error[] = 'Your Email Address is invalid  ';
                    }
                }

                if (empty($_POST['password'])) {
                    $error[] = 'Please Enter Your Password ';
                } else {
                    $password = mysqli_real_escape_string($db_link, strip_tags(stripslashes($_POST['password'])));
                }

                if (empty($error)) { //if the array is empty , it means no error found 
                    $query = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($db_link, $query);
                    $row = mysqli_fetch_assoc($result);
                    $get_email = $row['email'];
                    $get_password = $row['password'];
                    $get_salt = $row['salt'];

                    //This is vital for Bcyrpt to work so leave it!
                    if (CRYPT_BLOWFISH != 1) {
                        throw new Exception("bcrypt not supported in this installation. See http://php.net/crypt");
                    }

                    //This is hashing the password with the salt we used. The salt is generated on the register page!	 
                    $cryptpass = crypt($password, $get_salt);
                    $query_check_credentials = "SELECT * FROM users WHERE (email='$email' AND password='$cryptpass') AND Activation='activated'";
                    $result_check_credentials = mysqli_query($db_link, $query_check_credentials);

                    if (!$result_check_credentials) {//If the QUery Failed 
                        echo 'Query Failed ';
                    }

                    if (@mysqli_num_rows($result_check_credentials) == 1) { //if Query is successfull 
                        // A match was made.
                        //Assign the result of this query to SESSION Global Variable
                        $_SESSION = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);
                        header("Location: index.php");

                        date_default_timezone_set("Asia/Taipei");
                        $date = date('M d, Y  H:i:s');
                        $user_id = ($_SESSION['id']);
                        $action = "INSERT INTO actions(user_id,action,Date_Time) values ('$user_id','Sign in','$date')";
                        $action_result = mysqli_query($db_link, $action);
                        
                        
                    } else {
                        $msg_error = 'Either Your Account is inactive or Email address / Password is Incorrect.</br>Please try again.';
                    }
                } else {
                    echo '<div class="errormsgbox"> <ol>';
                    foreach ($error as $key => $values) {
                        echo '	<li>' . $values . '</li>';
                    }
                    echo '</ol></div>';
                }

                if (isset($msg_error)) {
                    echo '<div class="warning">' . $msg_error . ' </div>';
                }
/// var_dump($error);
                mysqli_close($db_link);
                ?>
            </h3>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/smooth-scroll.js"></script><!--This is the function for the going back to top-->
    <script src="js/holder.js"></script><!--This is to hold  images like the one in the header (140x140)-->

</body>
</html>




















