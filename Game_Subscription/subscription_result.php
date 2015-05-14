<?php

session_start();

require_once ('config.php');

$card_no = filter_input(INPUT_POST, 'card_no');
$pin_no = filter_input(INPUT_POST, 'pin_no');
$users_id = $_SESSION['id'];

$dbh = mysqli_connect($host, $username, $password, $database) or die("Error " . mysqli_error($dbh));

$stmt = $dbh->prepare("SELECT *, users.rem_subscription AS rem_subscription FROM users JOIN subs_card WHERE subs_card.id = ? AND subs_card.pin_no = ? AND users.id = ? AND subs_card.users_id = '0' LIMIT 1");

$stmt->bind_param("sss", $card_no, $pin_no, $users_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


$card_no_rec = $row['id'];
$pin_no_rec = $row['pin_no'];
$subs_type_rec = $row['subs_type'];
$prev_subscription_rec = $row['rem_subscription'];
$prev_points_rec = $row['points'];
$row_cnt = mysqli_num_rows($result);

$errors = array();   // array to hold validation errors
$data = array();   // array to pass back data
//
// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array

if (empty($card_no)) {
    $errors['card_no'] = 'Card Number is required.';
}
if (empty($pin_no)) {
    $errors['pin_no'] = 'Pin Number is required.';
}

if ((!empty($card_no)) && (!empty($pin_no)) && ($row_cnt == 0)) {
    $errors['query'] = 'Invalid card, please try again.';
}

if ($row_cnt == 0) {
    empty($errors);
}

// return a response ===========================================================
// if there are any errors in our errors array, return a success boolean of false
if (!empty($errors)) {
    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors'] = $errors;
} else {

    if ($subs_type_rec == '1') {
        $subs_type = "90";
        $points = "10";
    } else if ($subs_type_rec == '2') {
        $subs_type = "180";
        $points = "20";
    } else if ($subs_type_rec == '3') {
        $subs_type = "365";
        $points = "30";
    } else {
        $subs_type = "Error";
    }



    $total_rem_subs = $subs_type + $prev_subscription_rec;
    $total_points = $points + $prev_points_rec;

    // if there are no errors process our form, then return a message
    // DO ALL YOUR FORM PROCESSING HERE
    // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)
    // show a message of success and provide a true success variable

    $data['success'] = true;
    $data['message'] = "You've successfully loaded a " . $subs_type . " days of game subscription!<br>You've earned " . $points . "points, congratulations!";

    $data['subs_status'] = $total_rem_subs;
    $data['points_status'] = $total_points;
    $data['game_status'] = "<div id='game_status'>
                                    <div class='row'>
                                        <h2>
                                            Games:
                                        </h2>
                                    </div>
                                    <div class='row'>
                                        <h4>
                                            <a href='games\game-off-2012\index.php' target='_blank'>Game Off</a>
                                        </h4>
                                    </div>
                                    <div class='row'>
                                        <h4>
                                            <a href='games\CrappyBird\index.php' target='_blank'>Crappy Bird</a>
                                        </h4>
                                    </div>
                                    <div class='row'>
                                        <h4>
                                            <a href='games\AlienInvasion\index.php' target='_blank'>Alien Invasion</a>
                                        </h4>
                                    </div>
                                </div>";


    $query_users = "UPDATE users SET rem_subscription='$total_rem_subs', points='$total_points' WHERE id = '$users_id' ";
    mysqli_query($dbh, $query_users);

    $query_subs_card = "UPDATE subs_card SET users_id = '$users_id' WHERE id = '$card_no_rec' ";
    mysqli_query($dbh, $query_subs_card);

    date_default_timezone_set("Asia/Taipei");
    $date = date('M d, Y  H:i:s');
    $user_id = ($_SESSION['id']);
    $action = "INSERT INTO actions(user_id,action,Date_Time) values ('$user_id','Use Card #: $card_no_rec,  Total points: $total_points points, Total days of subscription: $total_rem_subs ','$date')";
    $action_result = mysqli_query($dbh, $action);
}

// return all our data to an AJAX call
echo json_encode($data);
