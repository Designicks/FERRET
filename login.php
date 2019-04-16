<?Php include_once('include/header.php') ?>
    <div class="login-section">
        <div class="user-form-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-12">
                        <form>
                        <div class="registration-form-block">
                            <div class="registration-form-title">
                                <h4>Sign in</h4>
                            </div>
                            <div class="form-block">
                                <form class="form-common">
                                    <div class="form-group">
                                        <label for="userName">Username <span class="star">*</span></label>
                                        <input type="text" class="form-control" id="userName" placeholder="Enter your Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <span class="star">*</span></label>
                                        <input type="password" class="form-control" id="password" placeholder="Enter your Passwoed">
                                    </div>
                                    <div class="form-group row form-check-row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="form-check">
                                                    <label class="custom-checkbox">Remember Me
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="forgot-link-block ml-5">
                                                    <a href="forget_password.php" class="forgot-link pl-4">Forget Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-btn-block">
                                            <button type="submit" class="btn btn-primary">
                                               <a href="javascript:void(0)">Sign in</a> </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="signin-others-option-block">
                                    <h5>Not a Member? <a href="sign_up.php">Sign up</a></h5>
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