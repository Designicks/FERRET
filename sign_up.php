<?Php include_once('include/header.php') ?>
    <div class="signup-section login-section">
        <div class="user-form-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-12">
                        <form>
                        <div class="registration-form-block">
                            <div class="registration-form-title">
                                <h4>Sign up</h4>
                            </div>
                            <div class="form-block">
                                <form class="form-common">
                                    <div class="form-group">
                                        <label for="userName">First Name <span class="star"> *</span></label>
                                        <input type="text" class="form-control" id="" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="userName">Last Name <span class="star"> *</span></label>
                                        <input type="text" class="form-control" id="" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="userName">Mobile No: <span class="star">* </span></label>
                                        <input type="text" class="form-control" id="" placeholder="Mobile">
                                    </div>
                                    <!--<div class="form-group">
                                        <label for="usertype">User Type *</label>
                                        <select class="form-control">
                                            <option value="">Select User Type</option>
                                            <option value="">User</option>
                                            <option value="">Owner</option>
                                        </select>
                                    </div>-->
                                    <div class="form-group">
                                        <label for="password">Password <span class="star"> *</span></label>
                                        <input type="password" class="form-control" id="password" placeholder="Enter your Passwoed">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-btn-block">
                                            <button type="submit" class="form-btn">
                                                <a href="otp_verification.php">
                                               Sign up & Verify No.</a>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="signin-others-option-block">
                                    <h5>Aleardy a Member? <a href="login.php">Sign in</a></h5>
                                </div>
                            </div>
                        </div>
                        </form>
                        <!-- panel -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once('include/footer.php') ?>