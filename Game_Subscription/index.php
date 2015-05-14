<?php require("navbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <div name="top"></div>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Subscription - Home Page</title>


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
    <div class="row spacer">
    </div>

    <?php require_once("carousel_index.php"); ?>


    <div class="row spacer">
    </div>

    <div class="container marketing">

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-xs-4">
                    <img class="img-responsive" src="images/Feature_Logo.jpg" />
                </div>
                <div class="col-xs-8">
                    <img class="img-responsive" src="images/Feature_Banner.jpg" />
                </div>
            </div>
        </div>


        <div class="row spacer">
        </div>


        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive center-block" src="images/customer_1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2 class="text-center">Intense</h2>
                <p class="text-justify">"Your games are awesome! So intense that I can't stop myself from playing it."</p>
            </div>

            <div class="col-sm-4">
                <img class="img-circle img-responsive center-block" src="images/customer_2.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2 class="text-center">Heartwarming</h2>
                <p class="text-justify">"It moved me when I play your RPG games! It feels like I'm in the actual game, thanks!"</p>
                
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-4">
                <img class="img-circle img-responsive center-block" src="images/customer_3.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2 class="text-center">Secured</h2>
                <p class="text-justify">"I totally feel secured whenever I top up my cards, thanks to the security of your website."</p>
               
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->



        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">600 Pesos
                    <br />
                    <span class="text-muted">
                        3 Months Subscription
                    </span>
                </h2>
                <p class="lead">3 months subscription is equivalent to 90 days, which will cost you 600 PHP. Concentrate on playing your games and don't be afraid to win!</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" src="images/featurette_1.jpg" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" src="images/featurette_2.jpg" alt="Generic placeholder image">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">1,000 Pesos
                    <br />
                    <span class="text-muted">
                        6 Months Subscription
                    </span>
                </h2>
                <p class="lead">6 months subscription is equivalent to 180 days, which will cost you 1,000 PHP. Life is a game, all you need to do is to know how to play it.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">1,500 Pesos
                    <br />
                    <span class="text-muted">
                        1 Year Subscription
                    </span>
                </h2>
                <p class="lead">1 year subscription if equivalent to 365 days, which will cost you 1,500 PHP. If you have a good time playing the game, you're a winner even if you lose!</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" src="images/featurette_3.jpg" alt="Generic placeholder image">
            </div>
        </div>

        <!-- /END THE FEATURETTES -->



    </div>


</div>


<?php require_once("modal_index.php"); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script src="js/smooth-scroll.js"></script><!--This is the function for the going back to top-->
<script src="js/holder.js"></script><!--This is to hold  images like the one in the header (140x140)-->

<?php require("footer.php"); ?>
</body>
</html>