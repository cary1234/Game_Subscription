<?php require("navbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <div name="top"></div>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Subscription - Subscription</title>


    <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap Core -->
    <link href="css/carousel.css" rel="stylesheet"><!-- Carousel -->
    <link href="css/spacer.css" rel="stylesheet"><!-- Spacer -->
    <link href="css/styles.css" rel="stylesheet"><!-- Personal CSS -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->




</head>
<body>

    <div class="row spacer"></div>
    <div class="row spacer"></div>
    <div class="row spacer"></div>

    <?php
    require_once("config.php");
    $db_link = mysqli_connect($host, $username, $password, $database);

    if (!isset($_SESSION['id'])) {
        
    } else {

        $query = "SELECT fname, lname, rem_subscription, points, image_path FROM users WHERE id = " . "'" . $_SESSION['id'] . "'" . " LIMIT 1";

        $result = mysqli_query($db_link, $query);

        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <h2>
                                <img class="img-circle" src="<?php echo $row['image_path']; ?>" onerror="this.src='images/default_picture.jpg';" width="160" height="180"><br>
                                <?php echo $row['fname'] . " " . $row['lname']; ?>
                                <span class="text-muted">
                                    <h3 id="subs-status_group">
                                        <?php
                                        if (!$row['rem_subscription']) {
                                            echo "<p id='subs_status'>You does not have any subscription</p>";
                                        } else {
                                            echo "<p id='subs_status'>You have " . $row['rem_subscription'] . " days of subscription.</p>";
                                        }
                                        ?>
                                    </h3>
                                </span>
                            </h2>
                        </div>
                        <div class="col-md-3">
                            <span class="text-muted">
                                <h3 id="points-status_group">
                                    <?php
                                    if (!$row['points']) {
                                        echo "<p class='text-danger' id='points_status'>0 Points</p>";
                                    } else {
                                        echo "<p class='text-success' id='points_status'>" . $row['points'] . " Points</p>";
                                    }
                                    ?>

                                </h3>
                            </span>
                            <form id="points_convert" action="subscription_points.php" method="POST">

                                <div id="points-no_group" class="form-group">
                                    <select class="form-control" id="searchType" name="points_convert">
                                        <option value="convert_0">Convert the Points</option>
                                        <option value="convert_30">30 Points = Free 30 Days</option>
                                        <option value="convert_60">60 Points = Free 65 Days</option>
                                        <option value="convert_90">90 Points = Free 100 Days</option>
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-success">Convert<span class="fa fa-arrow-right"></span></button>
                                </div>
                            </form>


                        </div>
                        <div  id="game-status_group" class="col-md-6">
                            <?php
                            if ($row['rem_subscription'] <= "0") {
                                echo "<div id='game_status'><h2 class='text-danger'>You does not have any subscription.<br/>Please subscribe to play games.</h2></div>";
                            } else {
                                ?>
                                <div id="game_status">
                                    <div class="row">
                                        <h2>
                                            Games:
                                        </h2>
                                    </div>
                                    <div class="row">
                                        <h4>
                                            <a href="games\game-off-2012\index.php" target="_blank">Game Off</a>
                                        </h4>
                                    </div>
                                    <div class="row">
                                        <h4>
                                            <a href="games\CrappyBird\index.php" target="_blank">Crappy Bird</a>
                                        </h4>
                                    </div>
                                    <div class="row">
                                        <h4>
                                            <a href="games\AlienInvasion\index.php" target="_blank">Alien Invasion</a>
                                        </h4>
                                    </div>
                                </div><?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="row spacer"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <form id="card_subs" action="subscription_result.php" method="POST">

                                <!--Card Number-->
                                <div id="card-no_group" class="form-group">
                                    <label for="card_no">Card Number</label>
                                    <input minlength="16" maxlength="16" type="text" class="form-control" required name="card_no" placeholder="XXXXXXXXXXXXXXXX">
                                    <!-- errors will go here -->
                                </div>
                                <!--Pin Number-->
                                <div id="pin-no_group" class="form-group">
                                    <label for="pin_no">Pin Number</label>
                                    <input type="text" minlength="4" maxlength="4" class="form-control" required name="pin_no" placeholder="XXXX">
                                    <!-- errors will go here -->
                                </div>
                                <button type="submit" class="btn btn-success">Submit <span class="fa fa-arrow-right"></span></button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="NS7WC3SKY3ZZL">
                                <table>
                                    <tr><td><input type="hidden" name="on0" value="Subscriptions">Subscriptions</td></tr><tr><td><select name="os0">
                                                <option value="3 Months">3 Months P600.00 PHP</option>
                                                <option value="6 Months">6 Months P1,000.00 PHP</option>
                                                <option value="12 Months">12 Months P1,500.00 PHP</option>
                                            </select> </td></tr>
                                </table>
                                <input type="hidden" name="currency_code" value="PHP">
                                <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/holder.js"></script><!--This is to hold  images like the one in the header (140x140)-->
    <script src="js/subscription_ajax.js"></script> <!-- load our javascript file -->
    <script src="js/subscription_points.js"></script> <!-- load our javascript file -->
</body>
</html>





















