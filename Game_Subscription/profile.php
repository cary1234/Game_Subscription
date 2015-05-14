<!DOCTYPE html>
<?php
require("navbar.php");
if ($_SESSION['access'] != "member") {
    header('Location: signin_form.php');
}
?>
<html lang="en">
    <head>
    <br><br>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Game Subscription - Profile</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin_panel.js"></script>
    <script src="js/jquery-1.5.js"></script>
    <script type="text/javascript">
        function showContent() {
            document.getElementById("loading").style.display = 'none';
            document.getElementById("content").style.display = 'block';
        }
    </script>
    <script language="JavaScript" type="text/javascript">
        function checkupdate() {
            return confirm('Are You Sure You want To Delete This User?');
        }
    </script>
    <!-- Bootstrap core CSS -->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <href="css/bootstrap-select.css" link rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <!-- Custom styles for this template -->
        <link href="css/admin_panel.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        </head>

        <body onload="showContent()">



            <script type="text/javascript">
                document.write('<div id="loading"><center><img src = "images/loading.gif" height="30" width="30"><br><br>Loading...Please wait. </center></div>');
            </script>
            <div id="content">
                <script type="text/javascript">
                    //hide content of the whole website until finish loading
                    document.getElementById("content").style.display = 'none';
                </script>
                <br><br><br><br>

                <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                    <?php
                    require_once("config.php");
                    $db_link = mysqli_connect($host, $username, $password, $database);


                    $user_id = $_SESSION['id'];
                    $query = "SELECT * FROM users WHERE id =" . $user_id . "";

                    $result = mysqli_query($db_link, $query);

                    while ($row = mysqli_fetch_array($result)) {
                        ?>

                        <div class="col-md-4">
                            <img class="img-circle" src="<?php echo $row['image_path']; ?>" onerror="this.src='images/default_picture.jpg';" width="160" height="180"><br><br>
                            <form action="change_pix.php" method="post" enctype="multipart/form-data" name="addroom">
                                <input type="hidden" name="key" value="<?php echo $row['id']; ?>">
                                <input type="file" name="profile">
                                <input type="submit" name="Submit" value="Upload" id="button1" />
                            </form>
                        </div>
                        <div class="col-md-8">
                            <form action="edit_users.php" method="post">
                                <strong>
                                    <input type="text" name="fname" id='fname<?php echo $row['id'] ?>' type="text"value='<?php echo $row['fname'] ?>' 
                                           size="10" style="text-align: center">&nbsp;
                                    <input type="text" name="lname" id='lname<?php echo $row['id'] ?>' type="text"value='<?php echo $row['lname'] ?>' 
                                           size="10" style="text-align: center">
                                </strong><br>
                                <table class="table table-condensed table-responsive table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>Email:</td>
                                            <td><input type="text" name="email" id='email<?php echo $row['id'] ?>' size="30" type="text" value=<?php echo $row['email'] ?>></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input type="password" name="password" id='password<?php echo $row['id'] ?>' size="30" type="password" value=""></td>

                                        </tr>
                                        <tr>
                                            <td>Confirm Password</td>
                                            <td><input type="password" name="confirm_password" id='confirm_password<?php echo $row['id'] ?>' size="30" type="password" value=""></td>

                                        </tr>

                                        <tr>


                                    <input name="saved" size="30" type="hidden" value=<?php echo $row['id'] ?>>
                                    <input name="trigger" id="trigger<?php echo $row['id']; ?>" size="30" type="hidden" value="">
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="text-danger">Note: When changing picture, please upload it before updating your profile.</p>
                                <div class="col-md-6">
                                    <button type="submit" class="center-block btn btn-primary btn-lg" name="trigger" value="edit" id="save<?php echo $row['id']; ?>">Update Profile</button>
                                </div>
                                <div class="col-md-6">
                                   
                                    <a class="center-block btn btn-primary btn-lg" href="action_lists_result.php?email=<?php echo $row['email']; ?>" role="button">View My Logs</a>
                                </div>
                            </form>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </body>
</html>