<?php session_start(); ?>
<link href="css/bootstrap.css" rel="stylesheet" />
<?php
$subs_type_prev = ($_POST['subs_type_prev']);
$subs_type = ($_POST['subs_type']);
$users_id = ($_POST['users_id']);
$id = $_POST['saved'];
$trigger = ($_POST['trigger']);



require_once("config.php");

if ($trigger == "edit") {

    $query_users_id = "SELECT email, id, rem_subscription FROM users WHERE email = '$users_id' LIMIT 1";
    $result_users_id = mysqli_query($db_link, $query_users_id) or die(mysqli_errno($db_link));
    $row_users_id = mysqli_fetch_assoc($result_users_id);
    $users_id_value = $row_users_id['id'];
    $rem_subscription_value = $row_users_id['rem_subscription'];

    $query = "UPDATE subs_card SET subs_Type='$subs_type', users_id='$users_id_value' WHERE id = '$id' ";
    $result = mysqli_query($db_link, $query) or die(mysqli_errno($db_link));

    if ($subs_type == '1') {
        $subs_type_meaning = 90;
       
    } else if ($subs_type == '2') {
        $subs_type_meaning = 180;
        
    } else {
        $subs_type_meaning = 365;
        
    }

    if ($subs_type_prev == $subs_type_meaning) {
        $add_subscription = $rem_subscription_value;
    } else {
         $add_subscription = $rem_subscription_value + $subs_type_meaning;
    }
    $query_user = "UPDATE users SET email='$users_id', rem_subscription='$add_subscription' WHERE id = '$users_id_value' ";
    $result_user = mysqli_query($db_link, $query_user) or die(mysqli_errno($db_link));


    header('Location: admin_card.php');
} else {
    $query = "DELETE FROM subs_card WHERE id = '$id' ";
    $result = mysqli_query($db_link, $query);
    header('Location: admin_card.php');
}
