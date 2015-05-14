<!DOCTYPE html>
<?php
require("navbar.php");
?>
<html lang="en">
    <head>
    <br><br>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Game Subscription - Action List</title>

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
    <link href="css/bootstrap-select.css" link rel="stylesheet">
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
        <br>
        <div class="container">
            <div class="well col-sm-12 col-md-8 col-md-offset-2">
                
                <?php
                if ($_SESSION['access'] == "admin") { 
?>
                <form action="<?php echo 'action_lists_result.php' ?>" method="GET">      
                    <br>
                    <div class="container-row">
                        <div class="row">
                            <div class="col-md-3">
                                <select class="form-control" id="searchType">
                                    <option value="View_All_Users">View All Users</option>
                                    <option value="First_Name">Search By First Name</option>
                                    <option value="Last_Name">Search By Last Name</option>
                                </select>
                            </div>

                            <div class="search col-md-2" id="View_All_Users" style="display:none">
                                <button class="btn btn-danger" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>

                            <div class="search col-md-3" id="First_Name" style="display:none">
                                <span class="input-group input-group-btn">
                                    <input name="First_Name" type="text" 
                                           class="form-control" placeholder="Search by First Name" />
                                    <button class="btn btn-danger" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>

                            <div class="search col-md-3" id="Last_Name" style="display:none">
                                <span class="input-group input-group-btn">
                                    <input name="Last_Name" type="text"
                                           class="form-control" placeholder="Search by Last Name" />  	
                                    <button class="btn btn-danger" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>

                            <div class="search col-md-3" id="Email" style="display:none">
                                <span class="input-group input-group-btn">
                                    <input name="Email" type="text"
                                           class="form-control" placeholder="Search by Email" />  	
                                    <button class="btn btn-danger" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>

                            <div class="search col-md-3" id="Status" style="display:none">
                                <span class="input-group input-group-btn">
                                    <select name="Status" class="form-control">
                                        <option value="0">Select Value</option>
                                        <option value="Activated">Activated</option>
                                        <option value="">Unconfirmed</option>
                                    </select>
                                    <button class="btn btn-danger" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>

                            <div class="search col-md-3" id="Access" style="display:none">
                                <span class="input-group input-group-btn">
                                    <select name="Access" class="form-control">
                                        <option value="">Select Value</option>
                                        <option value="admin">Admin</option>
                                        <option value="member">Member</option>
                                    </select>
                                    <button class="btn btn-danger" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
                
                <?php
                }
                ?>
                <br><br>
                <script>
                    $(function () {
                        $('#View_All_Users').show();<!-- Make the default selected value visible-->
                        $('#searchType').change(function () {
                            $('.search').hide();<!-- Hide all search class-->
                            $('#' + $(this).val()).show();<!-- Show what the user selected depending on their id-->
                        });
                    });


                    $(function () {
                        $('.priceCategory').hide();<!-- Make the default selected value visible-->
                        $('#higher-than').show();<!-- Make the default selected value visible-->
                        $('#priceType').change(function () {
                            $('.priceCategory').hide();<!-- Hide all search class-->
                            $('#' + $(this).val()).show();<!-- Show what the user selected depending on their id-->
                        })
                        ;
                    });
                </script>



                <?php
                require_once("config.php");
                $db_link = mysqli_connect($host, $username, $password, $database);

        
                if ($_SESSION['access'] == "admin") { 
                $First_Name = $_GET['First_Name'];
                $Last_Name = $_GET['Last_Name'];
                $Status = $_GET['Status'];
                $Access = $_GET['Access'];
                }
                $Email = $_GET['email'];

            
                if ($_SESSION['access'] == "admin") {
                if ($First_Name != "") {
                    $query = "SELECT * FROM `actions` JOIN `users` ON actions.user_id = users.id WHERE users.fname LIKE '%" . $First_Name . "%' GROUP BY users.id ORDER BY users.fname ASC";
                } else if ($Last_Name != "") {
                    $query = "SELECT * FROM `actions` JOIN `users` ON actions.user_id = users.id WHERE users.fname LIKE '%" . $Last_Name . "%' GROUP BY users.id ORDER BY users.fname ASC";
                } else {
                    $query = "SELECT * FROM `actions` JOIN `users` ON actions.user_id = users.id GROUP BY users.id ORDER BY users.fname ASC";
                }
                } else{
                    $query = "SELECT * FROM `actions` JOIN `users` ON actions.user_id = users.id WHERE users.email = '$Email' GROUP BY users.id ORDER BY users.fname ASC";
                }               
                $result = mysqli_query($db_link, $query);

                while ($row = mysqli_fetch_array($result)) {
                    ?>

                    <div class="row user-row">
                        <div class="col-md-1">
                            <img class="img-circle" src="<?php echo $row['image_path']; ?>"
                                 onerror="this.src='images/default_picture.jpg';" width="50" height="50">
                        </div>

                        <div class="col-md-10">
                            <strong><?php echo $row['fname'] . " " . $row['lname']; ?></strong><br>
                            <span class="text-muted">User level: <?php echo $row['access']; ?></span>
                        </div>
                        <div class="col-md-1 dropdown-user" data-for="<?php echo "." . $row['id']; ?>">
                            <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                        </div>
                    </div>
                    <div class="row user-infos <?php echo $row['id']; ?>">
                        <div class="col-sm-10 col-md-10 col-md-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">User information</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">


                                        <div class="col-md-12">
                                            <table class="table table-condensed table-responsive table-user-information">
                                                <tbody>
                                                    <tr>
                                                        <?php
                                                        $query_actions = "SELECT * FROM `actions` WHERE user_id = " . $row['id'] . " ORDER BY date_time ASC";

                                                        $result_actions = mysqli_query($db_link, $query_actions);

                                                        while ($row = mysqli_fetch_array($result_actions)) {
                                                            ?>
                                                        <tr>
                                                            <td><?php
                                                                echo $row['action'];
                                                                ?>
                                                            </td>
                                                            <td><?php
                                                                echo $row['date_time'];
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <script>
                    $(document).ready(function() {

                            $("#save<?php echo $row['id']; ?>").hide();
                            $("#access<?php echo $row['id']; ?>").hide();
                    $(" #edit<?php echo $row['id']; ?>").click(function(event) {
                    < !-- Disabled textbox will become edittable-- >
                            $("#lname<?php echo $row['id']; ?>").attr('readonly', false);
                            $("#fname<?php echo $row['id']; ?>").attr('readonly', false);
                            $("#email<?php echo $row['id']; ?>").attr('readonly', false);
                            $("#status<?php echo $row['id']; ?>").attr('readonly', false);
                            $("#ac cess<?php echo $row['id']; ?>").attr('readonly', false);
                            $("#password<?php echo $row['id']; ?>").attr('readonly', false);
                            $("#confirm_password<?php echo $row['id']; ?>").attr('readonly', false);<!-- Hide the fields are showed -->
                            $("#edit<?php echo $row['id']; ?>").hide();
                            $("#textaccess<?php echo $row['id']; ?>").hide();<!-- Get the ID when button is triggered -->
                                    $("#save<?php echo $row['id']; ?>").show();
                                    $("#access<?php echo $row['id']; ?>").show();<!-- Button to show when the edit button was clicked -->
                                    $("#trigger<?php echo $row['id']; ?>").val('edit');
                      });<!-- Delete button, the red one -->
                                $("#btn_delete<?php echo $row['id']; ?>").click(function(event) {
                                        $("#trigger<?php echo $row['id']; ?>").val('delete');
                                });
                						
                                <!-- Save button -->
                                $("#save<?php echo $row['id']; ?>").click(function(event) {
                                        $("#trigger<?php echo $row['id']; ?>").val('edit');
                                });
                						
                        });	
                    </script><?php }
                                                ?>
            </div>
        </div><!-- /.container -->
        <?php require("admin_list_modal.php"); ?>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
</body>
</html>


