<?php

include_once ('config.php');

$pin_no = $_POST['pin_no'];
$subs_type = $_POST['subs_type'];

echo $subs_type;


$query_insert_user = "INSERT INTO `subs_card` (`pin_no`, `subs_type`, `users_id`) VALUES ( '$pin_no', '$subs_type', '0')" or die("Error" . mysqli_errno($db_link));

$result_insert_user = mysqli_query($db_link, $query_insert_user);



header("Location: admin_card.php"); /* Redirect browser */
exit();
