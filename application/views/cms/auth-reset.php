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
                <h4 class="font-20 m-b-5">Reset Password</h4>
                <p class="text-white-50 mb-4">Use accurate info</p>
                <a href="<? echo base_url(); ?>" class="logo logo-admin"><img
                            src="<? echo base_url() ?>global/assets/favicon.png"
                            height="80"
                            class="mt-3"
                            alt="logo"></a>
            </div>
            <div class="account-card-content">

                <div class="alert alert-success m-t-30" role="alert">
                    Enter your Email and instructions will be sent to you!
                </div>

                <form class="form-horizontal m-t-30" action="index.html">

                    <div class="form-group">
                        <label for="useremail">Email</label>
                        <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                    </div>

                    <div class="form-group row m-t-20 mb-0">
                        <div class="col-12 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>

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