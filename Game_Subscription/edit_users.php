<?php session_start(); ?>
<link href="css/bootstrap.css" rel="stylesheet" />
<?php
$fname = ($_POST['fname']);
$lname = ($_POST['lname']);
$email = ($_POST['email']);
$id = $_POST['saved'];
$trigger = ($_POST['trigger']);
$change_password = ($_POST['password']);
$confirm_password = ($_POST['confirm_password']);


if ($_SESSION['access'] == "admin") {
    $status = ($_POST['status']);
    $access = ($_POST['access']);
} else {
    $status = "activated";
    $access = "member";
}

require_once("config.php");

if ($trigger == "edit") {

    if ($change_password == "" && $confirm_password == "") {
        $query = "UPDATE users SET fname='$fname', lname='$lname' ,activation='$status',access='$access' ,email='$email' WHERE id = '$id' ";
        $result = mysqli_query($db_link, $query);
        
        
        date_default_timezone_set("Asia/Taipei");
        $date = date('M d, Y  H:i:s');
        $user_id = ($_SESSION['id']);
        $action = "INSERT INTO actions(user_id,action,Date_Time) values ('$user_id','Change user information','$date')";
        $action_result = mysqli_query($db_link, $action);
        

        if ($_SESSION['access'] == "admin") {
            header('Location: admin_lists.php');
        } else {
            header('Location: profile.php');
        }
    } elseif ($change_password != $confirm_password) {
        require("timer_edit_users.php");
        ?>
        <p class="text-center timer_style">Password does not match.</p>
        <?php
    } elseif ($change_password == $confirm_password) {

        $change_password = mysqli_real_escape_string($db_link, strip_tags(stripslashes($_POST['password'])));

        function generateRandomString($length = 10) {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $randomString;
        }

        $salt_query = "SELECT salt FROM users WHERE id='$id'";
        $salt_result = mysqli_query($db_link, $salt_query) or die(mysqli_errno($db_link));
        $salt_row = mysqli_fetch_assoc($salt_result);

        $cryptpass = crypt($change_password, $salt_row['salt']); //Hashes the password they entered!

        $query = "UPDATE users SET fname='$fname', lname='$lname' ,activation='$status',access='$access' ,email='$email', password='$cryptpass' WHERE id = '$id' ";
        $result = mysqli_query($db_link, $query) or die(mysqli_errno($db_link));


        date_default_timezone_set("Asia/Taipei");
        $date = date('M d, Y  H:i:s');
        $user_id = ($_SESSION['id']);
        $action = "INSERT INTO actions(user_id,action,Date_Time) values ('$user_id','Change password','$date')";
        $action_result = mysqli_query($db_link, $action);

        if ($_SESSION['access'] == "admin") {
            header('Location: admin_lists.php');
        } else {
            header('Location: profile.php');
        }
    } else {
        echo "Error";
    }
} else {
    $query = "DELETE FROM users WHERE id = '$id' ";
    $result = mysqli_query($db_link, $query);
    header('Location: admin_lists.php');
}
