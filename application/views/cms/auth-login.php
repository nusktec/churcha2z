<?php
/**
 * Company: RSC BYTE LTD
 * Author: Revelation, A.F
 * Email: nusktecsoft@gmail.com
 * website: rscbyte.com
 * 2020-01-08 - revelation - churchaz2
 **/
//head
include "layouts/head.php";
?>
    <div class="wrapper-page">

        <div class="card overflow-hidden account-card mx-3">

            <div class="bg-primary p-4 text-white text-center position-relative">
                <h4 class="font-20 m-b-5">Welcome Back !</h4>
                <p class="text-white-50 mb-4">Sign in to continue</p>
                <a href="<? echo base_url(); ?>" class="logo logo-admin"><img
                            src="<? echo base_url() ?>global/assets/favicon.png"
                            height="80"
                            class="mt-3"
                            alt="logo"></a>
            </div>
            <div class="account-card-content">

                <form method="post" class="form-horizontal m-t-30">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username"
                               name="email" value="<? echo @$_REQUEST['email']?>"/>
                    </div>

                    <div class="form-group">
                        <label for="userpassword">Password</label>
                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password"
                               name="password" value="<? echo @$_REQUEST['password'] ?>">
                    </div>

                    <div class="form-group row m-t-20">
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light"
                                    type="submit">Log In
                            </button>
                        </div>
                    </div>
                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-12 m-t-20">
                            <a href="<? echo base_url("access/reset") ?>"><i class="mdi mdi-lock"></i> Forgot your
                                password?</a>
                        </div>
                    </div>
                    <input type="hidden" name="cmd" value="login"/>
                    <input type="hidden" name="formtoken" value="<? echo getFormToken(); ?>">
                </form>

            </div>
        </div>

    </div>

<?php
include "layouts/foot.php";

if (@$error) {
    ?>
    <script>
        showAlert('<? echo $error['msg']; ?>', '<? echo $error['type']; ?>');
    </script>
<? } ?>