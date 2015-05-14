<?php

require_once("config.php");
$db_link = mysqli_connect($host, $username, $password, $database);


if (isset($_FILES['front_view']['tmp_name'])) {
    $front_view = $_FILES['front_view']['tmp_name'];
    if ($front_view == "") {
        echo '<script>window.parent.location.reload();</script>';
    } else {

        if ($_FILES['front_view']['type'] == "image/jpg" || $_FILES['front_view']['type'] == "image/bmp" || $_FILES['front_view']['type'] == "image/jpeg" || $_FILES['front_view']['type'] == "image/gif" || $_FILES['front_view']['type'] == "image/png") {

            $front_view = $_FILES['front_view']['tmp_name'];

            $file = $_FILES['front_view']['tmp_name'];
            $image = addslashes(file_get_contents($_FILES['front_view']['tmp_name']));
            $image_name = addslashes($_FILES['front_view']['name']);

            move_uploaded_file($_FILES["front_view"]["tmp_name"], "images/products_images/" . $_FILES["front_view"]["name"]);

            $location = "images/products_images/" . $_FILES["front_view"]["name"];
            $id = $_POST['key'];
            $query = "update item_list set image_path = ('$location') where id = '$id' ";
            $result = mysqli_query($db_link, $query);

            $product_Name = $_POST['product_Name'];
            date_default_timezone_set("Asia/Tbilisi");
            $date = date('M d, Y  H:i:s');
            $user_id = ($_SESSION['id']);
            $action = "INSERT INTO actions(user_id,action,Date_Time) values ('$user_id','Change The Front View Picture Of Product $product_Name','$date')";
            $action_result = mysqli_query($db_link, $action);

            echo '<script>window.parent.location.reload();</script>';
            exit();
        } else {
            echo '<script language="JavaScript">alert("Invalid File. Please choose jpg, jpeg, bmp, gif, png file to upload.");</script>';
            echo '<script>window.parent.location.reload();</script>';
        }
    }
} elseif (isset($_FILES['left_view']['tmp_name'])) {
    $left_view = $_FILES['left_view']['tmp_name'];
    if ($left_view == "") {
        echo '<script>window.parent.location.reload();</script>';
    } else {

        if ($_FILES['left_view']['type'] == "image/jpg" || $_FILES['left_view']['type'] == "image/bmp" || $_FILES['left_view']['type'] == "image/jpeg" || $_FILES['left_view']['type'] == "image/gif" || $_FILES['left_view']['type'] == "image/png") {

            $left_view = $_FILES['left_view']['tmp_name'];

            $file = $_FILES['left_view']['tmp_name'];
            $image = addslashes(file_get_contents($_FILES['left_view']['tmp_name']));
            $image_name = addslashes($_FILES['left_view']['name']);

            move_uploaded_file($_FILES["left_view"]["tmp_name"], "images/products_images/" . $_FILES["left_view"]["name"]);

            $location = "images/products_images/" . $_FILES["left_view"]["name"];
            $id = $_POST['key'];
            $query = "update item_list set product_left_side = ('$location') where id = '$id' ";
            $result = mysqli_query($db_link, $query);

            $product_Name = $_POST['product_Name'];
            date_default_timezone_set("Asia/Tbilisi");
            $date = date('M d, Y  H:i:s');
            $user_id = ($_SESSION['id']);
            $action = "INSERT INTO actions(user_id,action,Date_Time) values ('$user_id','Change The Left View Picture Of Product $product_Name','$date')";
            $action_result = mysqli_query($db_link, $action);

            echo '<script>window.parent.location.reload();</script>';
            exit();
        } else {
            echo '<script language="JavaScript">alert("Invalid File. Please choose jpg, jpeg, bmp, gif, png file to upload.");</script>';
            echo '<script>window.parent.location.reload();</script>';
        }
    }
} elseif (isset($_FILES['back_view']['tmp_name'])) {
    $back_view = $_FILES['back_view']['tmp_name'];
    if ($back_view == "") {
        echo '<script>window.parent.location.reload();</script>';
    } else {

        if ($_FILES['back_view']['type'] == "image/jpg" || $_FILES['back_view']['type'] == "image/bmp" || $_FILES['back_view']['type'] == "image/jpeg" || $_FILES['back_view']['type'] == "image/gif" || $_FILES['back_view']['type'] == "image/png") {

            $back_view = $_FILES['back_view']['tmp_name'];

            $file = $_FILES['back_view']['tmp_name'];
            $image = addslashes(file_get_contents($_FILES['back_view']['tmp_name']));
            $image_name = addslashes($_FILES['back_view']['name']);

            move_uploaded_file($_FILES["back_view"]["tmp_name"], "images/products_images/" . $_FILES["back_view"]["name"]);

            $location = "images/products_images/" . $_FILES["back_view"]["name"];
            $id = $_POST['key'];
            $query = "update item_list set product_back = ('$location') where id = '$id' ";
            $result = mysqli_query($db_link, $query);

            $product_Name = $_POST['product_Name'];
            date_default_timezone_set("Asia/Tbilisi");
            $date = date('M d, Y  H:i:s');
            $user_id = ($_SESSION['id']);
            $action = "INSERT INTO actions(user_id,action,Date_Time) values ('$user_id','Change The Back View Picture Of Product $product_Name','$date')";
            $action_result = mysqli_query($db_link, $action);

            echo '<script>window.parent.location.reload();</script>';
            exit();
        } else {
            echo '<script language="JavaScript">alert("Invalid File. Please choose jpg, jpeg, bmp, gif, png file to upload.");</script>';
            echo '<script>window.parent.location.reload();</script>';
        }
    }
} elseif (isset($_FILES['right_view']['tmp_name'])) {
    $right_view = $_FILES['right_view']['tmp_name'];

    if ($right_view == "") {
        echo '<script>window.parent.location.reload();</script>';
    } else {

        if ($_FILES['right_view']['type'] == "image/jpg" || $_FILES['right_view']['type'] == "image/bmp" || $_FILES['right_view']['type'] == "image/jpeg" || $_FILES['right_view']['type'] == "image/gif" || $_FILES['right_view']['type'] == "image/png") {

            $right_view = $_FILES['right_view']['tmp_name'];

            $file = $_FILES['right_view']['tmp_name'];
            $image = addslashes(file_get_contents($_FILES['right_view']['tmp_name']));
            $image_name = addslashes($_FILES['right_view']['name']);

            move_uploaded_file($_FILES["right_view"]["tmp_name"], "images/products_images/" . $_FILES["right_view"]["name"]);

            $location = "images/products_images/" . $_FILES["right_view"]["name"];
            $id = $_POST['key'];
            $query = "update item_list set  product_right_side  = ('$location') where id = '$id' ";
            $result = mysqli_query($db_link, $query);

            $product_Name = $_POST['product_Name'];
            date_default_timezone_set("Asia/Tbilisi");
            $date = date('M d, Y  H:i:s');
            $user_id = ($_SESSION['id']);
            $action = "INSERT INTO actions(user_id,action,Date_Time) values ('$user_id','Change The Right View Picture Of Product $product_Name','$date')";
            $action_result = mysqli_query($db_link, $action);

            echo '<script>window.parent.location.reload();</script>';
            exit();
        } else {
            echo '<script language="JavaScript">alert("Invalid File. Please choose jpg, jpeg, bmp, gif, png file to upload.");</script>';
            echo '<script>window.parent.location.reload();</script>';
        }
    }
} elseif (isset($_FILES['profile']['tmp_name'])) {
    $profile = $_FILES['profile']['tmp_name'];
    if ($profile == "") {


        if ($_SESSION['access'] == "admin") {
            echo '<script language="JavaScript">alert("Please Select A Picture");window.location.assign("admin_lists.php");</script>';
        } else {
            echo '<script language="JavaScript">alert("Please Select A Picture");window.location.assign("profile.php");</script>';
        }
    } else {

        if ($_FILES['profile']['type'] == "image/jpg" || $_FILES['profile']['type'] == "image/bmp" || $_FILES['profile']['type'] == "image/jpeg" || $_FILES['profile']['type'] == "image/gif" || $_FILES['profile']['type'] == "image/png") {

            $profile = "images/user_images/" . $_FILES["profile"]["name"];
            $a = strlen($profile);
            if ($a > 45) {



                if ($_SESSION['access'] == "admin") {
                    echo '<script language="JavaScript">alert("Picture Name Must Be Less Than 20 Characters. Please Rename Your Picture");window.location.assign("admin_lists.php");</script>';
                } else {
                    echo '<script language="JavaScript">alert("Picture Name Must Be Less Than 20 Characters. Please Rename Your Picture");window.location.assign("profile.php");</script>';
                }
            } else {

                $profile = $_FILES['profile']['tmp_name'];

                $file = $_FILES['profile']['tmp_name'];
                $image = addslashes(file_get_contents($_FILES['profile']['tmp_name']));
                $image_name = addslashes($_FILES['profile']['name']);

                move_uploaded_file($_FILES["profile"]["tmp_name"], "images/user_images/" . $_FILES["profile"]["name"]);

                $location = "images/user_images/" . $_FILES["profile"]["name"];
                $id = $_POST['key'];
                $query = "update users set image_path = ('$location') where id = '$id' ";
                $result = mysqli_query($db_link, $query);
                
                if($_SESSION['access'] == "admin"){
                    header('Location: admin_lists.php');
                }
                else{
                    header('Location: profile.php');
                }
                exit();
            }
        } else {
            
            if($_SESSION['access'] == "admin"){
                    echo '<script language="JavaScript">alert("Invalid File. Please choose jpg, jpeg, bmp, gif, png file to upload.");window.location.assign("admin_lists.php");</script>';
                }
                else{
                    echo '<script language="JavaScript">alert("Invalid File. Please choose jpg, jpeg, bmp, gif, png file to upload.");window.location.assign("profile.php");</script>';
                }
            
        }
    }
} else {

    exit();
}
?>

