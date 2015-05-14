<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
		<form role="form" name="loginForm" id="loginForm" method="post" action="signup_result.php">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Admin Registration</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" required name="fname" id="fname"
                                        class="form-control input-lg" placeholder="First Name" tabindex="1">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" required name="lname" id="lname"
                                        class="form-control input-lg" placeholder="Last Name" tabindex="2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" required name="email" id="email"
                                class="form-control input-lg" placeholder="Email Address" tabindex="4">
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" required name="password"
                                        id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" required name="confirmpassword"
                                        id="confirmpassword" class="form-control input-lg"
                                        placeholder="Confirm Password" tabindex="6">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <select class="form-control" required name="accesstype" id="accesstype">
                                        <option value="">Access Type</option>
                                        <option value="member">Member</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add User</button>
            </div>
      </form>
  </div>
</div>