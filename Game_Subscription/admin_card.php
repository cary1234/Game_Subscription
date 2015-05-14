<!DOCTYPE html>
<?php
require("navbar.php");
if ($_SESSION['access'] != "admin") {
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

    <title>Game Subscription - Card Lists</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin_panel.js"></script>
    <script src="js/jquery-1.5.js"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-select.css" link rel="stylesheet">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Custom styles for this template -->
    <link href="css/admin_panel.css" rel="stylesheet">
    <script language="JavaScript" type="text/javascript">
        function checkupdate() {
            return confirm('Are You Sure You want To Delete This Card?');
        }
    </script>
    <script type="text/javascript">
        function showContent() {
            document.getElementById("loading").style.display = 'none';
            document.getElementById("content").style.display = 'block';
        }
    </script>



   








</head>

<body onload="showContent()">

    <script type="text/javascript">
        document.write('<div id="loading"><center><img src = "images/icon_images/loading.gif" height="30" width="30"><br><br>Loading...Please wait. </center></div>');
    </script>
    <div id="content">
        <script type="text/javascript">
            //hide content of the whole website until finish loading
            document.getElementById("content").style.display = 'none';
        </script>
        <br>
        <div class="container">
            <div class="well col-sm-12 col-md-8 col-md-offset-2">
                <!--
                                <form action="<?php echo 'admin_card_result.php' ?>" method="GET">      
                                    <br>
                                    <div class="container-row">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control" id="searchType">
                                                    <option value="View_All_Users">View All Users</option>
                                                    <option value="First_Name">Search By First Name</option>
                                                    <option value="Last_Name">Search By Last Name</option>
                                                    <option value="Email">Search By Email</option>
                                                    <option value="Status">Search By Status</option>
                                                    <option value="Access">Search By Access</option>
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
                                
                -->

                <button class="btn btn-primary btn-md center-block" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>

                <br><br>
                <script>
                    $(function () {
                        $('#View_All_Users').show(); //Make the default selected value visible-->
                        $('#searchType').change(function () {
                            $('.search').hide(); //Hide all search class-->
                            $('#' + $(this).val()).show(); //Show what the user selected depending on their id-->
                        });
                    });


                    $(function () {
                        $('.priceCategory').hide(); //Make the default selected value visible-->
                        $('#higher-than').show(); // Make the default selected value visible-->
                        $('#priceType').change(function () {
                            $('.priceCategory').hide(); // Hide all search class-->
                            $('#' + $(this).val()).show(); //Show what the user selected depending on their id-->
                        });
                    });
                </script>



                <?php
                require_once("config.php");
                $db_link = mysqli_connect($host, $username, $password, $database);
                $query = "SELECT subs_card.id AS id, subs_card.subs_type AS subs_type, subs_Card.pin_no AS pin_no, users.email AS email FROM subs_card LEFT JOIN users ON subs_card.users_id = users.id ORDER BY subs_card.id ASC";
                $result = mysqli_query($db_link, $query);

                while ($row = mysqli_fetch_array($result)) {

                    if ($row['subs_type'] == "1") {
                        $subs_type = "90 Days";
                    } elseif ($row['subs_type'] == "2") {

                        $subs_type = "180 Days";
                    } elseif ($row['subs_type'] == "3") {

                        $subs_type = "365 Days";
                    }
                    ?>


                    <div class="row user-row">
                        <div class="col-md-10">
                            <strong><?php echo $row['id'] ?></strong><br>
                            <span class="text-muted"><?php
                                echo $subs_type;
                                ?></span>
                        </div>
                        <div class="col-md-1 dropdown-user" data-for="<?php echo "." . $row['id']; ?>">
                            <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                        </div>
                    </div>
                    <div class="row user-infos <?php echo $row['id']; ?>">
                        <div class="col-sm-10 col-md-10 col-md-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Card information</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form action="edit_card.php" method="post">

                                                <table class="table table-condensed table-responsive table-user-information">
                                                    <tbody>
                                                        <tr>
                                                            <td>Card #:</td>
                                                            <td>
                                                                <input type="text" readonly id="card_no<?php echo $row['id'] ?>" value="<?php echo $row['id'] ?>">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pin #:</td>
                                                            <td><input readonly  name="pin_no" id='pin_no<?php echo $row['id'] ?>' size="30" type="text" value="<?php echo $row['pin_no'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td>





                                                                <input type="text" name="subs_type_prev" readonly id="text_subs_type<?php echo $row['id'] ?>" value="<?php echo $subs_type ?>">
                                                                <select  name="subs_type" id="subs_type<?php echo $row['id'] ?>" class="form-control">
                                                                    <?php if ($row['subs_type'] == "1") {
                                                                        ?>
                                                                        <option value="1">90 Days</option>
                                                                        <option value="2">180 Days</option>
                                                                        <option value="3">365 Days</option>
                                                                        <?php
                                                                    } elseif ($row['subs_type'] == "2") {
                                                                        ?>
                                                                        <option value="2">180 Days</option>
                                                                        <option value="1">90 Days</option>
                                                                        <option value="3">365 Days</option>
                                                                    <?php } elseif ($row['subs_type'] == "3") {
                                                                        ?>
                                                                        <option value="3">365 Days</option>
                                                                        <option value="1">90 Days</option>
                                                                        <option value="2">180 Days</option>
                                                                    <?php }
                                                                    ?>
                                                                </select>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Used by:</td>
                                                            <td><input readonly  name="users_id" id="users_id<?php echo $row['id'] ?>" size="30" type="text" value="<?php echo $row['email'] ?>"></td>

                                                        </tr>

                                                        <tr>
                                                    <input name="saved" size="30" type="hidden" value=<?php echo $row['id'] ?>>
                                                    <input name="trigger" id="trigger<?php echo $row['id']; ?>" size="30" type="hidden" value="">
                                                    </tr>
                                                    </tbody>
                                                </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-sm btn-primary" type="button" id="btn_message" data-toggle="tooltip" data-original-title="Send message to user">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </button>
                                    <span class="pull-right">   
                                        <button class="btn btn-sm btn-warning" type="button" id="edit<?php echo $row['id']; ?>" data-toggle="tooltip" data-original-title="Edit this user">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </button>
                                        <button type="submit" name="save" id="save<?php echo $row['id']; ?>" data-toggle="tooltip" data-original-title="Save User Info">
                                            <i class="glyphicon glyphicon-save"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" onclick="return checkupdate()" id="btn_delete<?php echo $row['id']; ?>" data-toggle="tooltip" data-original-title="Remove this user">
                                            <i class="glyphicon glyphicon-remove"></i>
                                        </button>
                                    </span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function () {
                            $("#save<?php echo $row['id']; ?>").hide();
                            $("#subs_type<?php echo $row['id']; ?>").hide();

                            $("#edit<?php echo $row['id']; ?>").click(function () {
                                // Disabled textbox will become edittable
                                $("#card_no<?php echo $row['id']; ?>").attr('readonly', true);
                                $("#pin_no<?php echo $row['id']; ?>").attr('readonly', true);
                                $("#subs_type<?php echo $row['id']; ?>").attr('readonly', false);
                                $("#users_id<?php echo $row['id']; ?>").attr('readonly', false);
                                //Hide the fields are showed
                                $("#edit<?php echo $row['id']; ?>").hide();
                                $("#text_subs_type<?php echo $row['id']; ?>").hide(); //Get the ID when button is triggered
                                $("#save<?php echo $row['id']; ?>").show();
                                $("#subs_type<?php echo $row['id']; ?>").show();
                                //Button to show when the edit button was clicked -->
                                $("#trigger<?php echo $row['id']; ?>").val('edit');
                            });

                            //Delete button, the red one
                            $("#btn_delete<?php echo $row['id']; ?>").click(function () {
                                $("#trigger<?php echo $row['id']; ?>").val('delete');
                            });
                            //Save button
                            $("#save<?php echo $row['id']; ?>").click(function () {
                                $("#trigger<?php echo $row['id']; ?>").val('edit');
                            });
                        });
                    </script><?php }
                                                                ?>
            </div>
        </div><!-- /.container -->
    </div>
    <?php require("admin_card_modal.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</body>
</html>
