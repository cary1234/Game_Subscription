<?php

session_start();

require_once ('config.php');


$points_convert = filter_input(INPUT_POST, 'points_convert');
$users_id = $_SESSION['id'];

$dbh = mysqli_connect($host, $username, $password, $database) or die("Error " . mysqli_error($dbh));

$stmt = $dbh->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");

$stmt->bind_param("s", $users_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$prev_points_rec = $row['points'];
$prev_subscription_rec = $row['rem_subscription'];
$row_cnt = mysqli_num_rows($result);

$errors = array();   // array to hold validation errors
$data = array();   // array to pass back data
//
// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array

if ($prev_points_rec < 30) {
    $errors['points_convert'] = 'Not enough points';
}

if (($points_convert == 'convert_60') && ($prev_points_rec < 60)) {
    $errors['points_convert'] = 'Not enough points';
}

if (($points_convert == 'convert_90') && ($prev_points_rec < 90)) {
    $errors['points_convert'] = 'Not enough points';
}

if ($points_convert == "convert_0") {
    $errors['points_convert'] = 'Please select convertion.';
}

if ($row_cnt == 0) {
    $errors['query'] = 'Invalid card, please try again.';
}

// return a response ===========================================================
// if there are any errors in our errors array, return a success boolean of false
if (!empty($errors)) {
    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors'] = $errors;
} else {

    if ($points_convert == 'convert_30') {
        $subs_reward = "30";
        $points_deduct = "30";
    } else if ($points_convert == 'convert_60') {
        $subs_reward = "65";
        $points_deduct = "60";
    } else if ($points_convert == 'convert_90') {
        $subs_reward = "100";
        $points_deduct = "90";
    } else {
        $subs_reward = "0";
        $points_deduct = "0";
    }



    $total_rem_subs = $prev_subscription_rec + $subs_reward;
    $total_points = $prev_points_rec - $points_deduct;

    // if there are no errors process our form, then return a message
    // DO ALL YOUR FORM PROCESSING HERE
    // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)
    // show a message of success and provide a true success variable

    $data['success'] = true;
    $data['message'] = $points_deduct . " points successfully converted to " . $subs_reward . " days subscription!";

    $data['subs_status'] = $total_rem_subs;
    $data['points_status'] = $total_points;


    $query_users = "UPDATE users SET rem_subscription='$total_rem_subs', points='$total_points' WHERE id = '$users_id' ";
    mysqli_query($dbh, $query_users);

    date_default_timezone_set("Asia/Taipei");
    $date = date('M d, Y  H:i:s');
    $user_id = ($_SESSION['id']);
    $action = "INSERT INTO actions(user_id,action,Date_Time) values ('$user_id','Converted $points_deduct points to $subs_reward days of subscription','$date')";
    $action_result = mysqli_query($dbh, $action);
}

// return all our data to an AJAX call
echo json_encode($data);
