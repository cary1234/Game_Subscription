<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" name="loginForm" id="loginForm" method="post" action="admin_card_register.php">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Create Card</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">


                                    <?php
                                    require_once 'config.php';
                                    $stmt = $db_link->prepare("SELECT * FROM subs_card ORDER BY id DESC
LIMIT 1");


                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $row = $result->fetch_assoc();


                                    $last_row = $row['id'];

                                    $card_no = str_pad($last_row + 1, 16, '0', STR_PAD_LEFT);
                                    ?>

                                    <div class="form-group">
                                        <input type="text" readonly="" class="form-control input-lg" tabindex="1" value="<?php echo $card_no; ?>" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" minlength="4" maxlength="4" required name="pin_no" id="pin_no" class="form-control input-lg" placeholder="Enter Pin #" tabindex="1">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <select  name="subs_type" name="subs_type" id="subs_type" class="form-control">
                                            <option value="1">90 Days</option>
                                            <option value="2">180 Days</option>
                                            <option value="3">365 Days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Card</button>
                </div>
            </form>
        </div>
    </div>