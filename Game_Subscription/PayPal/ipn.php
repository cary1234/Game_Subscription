<?php

session_start();

require_once ('../config.php');
$db_link = mysqli_connect($host, $username, $password, $database);

// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';
foreach ($_POST as $key => $value) {
    $value = urlencode(stripslashes($value));
    $req .= "&$key=$value";
}
// post back to PayPal system to validate
$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";

$fp = fsockopen('ssl://www.paypal.com', 443, $errno, $errstr, 30);


if (!$fp) {
// HTTP ERROR
} else {
    fputs($fp, $header . $req);
    while (!feof($fp)) {
        $res = fgets($fp, 1024);
        if (strcmp($res, "VERIFIED") == 0) {

            $users_id = $_SESSION['id'];


            $stmt = $dbh->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");

            $stmt->bind_param("s", $users_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();


            $subs_type_rec = $row['subs_type'];
            $prev_subscription_rec = $row['rem_subscription'];


            if ($subs_type_rec == '1') {
                $subs_type = "90";
            } else if ($row['subs_type' == '2']) {
                $subs_type = "180";
            } else if ($row['subs_type' == '3']) {
                $subs_type = "365";
            } else {
                $subs_type = "Error";
            }

            $total_rem_subs = $subs_type + $prev_subscription_rec;


            $query_users = "UPDATE users SET rem_subscription='$total_rem_subs' WHERE id = '$users_id' ";
            mysqli_query($dbh, $query_users);


// PAYMENT VALIDATED & VERIFIED!
        } else if (strcmp($res, "INVALID") == 0) {

// PAYMENT INVALID & INVESTIGATE MANUALY!
        }
    }
    fclose($fp);
}