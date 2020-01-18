<?php
/**
 * Company: RSC BYTE LTD
 * Author: Revelation, A.F
 * Email: nusktecsoft@gmail.com
 * website: rscbyte.com
 * 2020-01-07 - revelation - churchaz2
 **/
?>
<!DOCTYPE html>
<html lang="en">

<? include "layouts/head.php"; ?>

<body>
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    <? include "layouts/topbar.php"; ?>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <? include "layouts/leftnav.php"; ?>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page" id="<? echo (@in_array('vue', $setup)) ? 'app' : ''; ?>">
        <!-- Start content -->
        <? echo @$contents; ?>
        <!-- content -->
        <? include "layouts/footer.php"; ?>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- jQuery  -->
<? include "layouts/foot.php"; ?>
</body>

<?
if (@$error) {
    ?>
    <script>
        showAlert('<? echo $error['msg']; ?>', '<? echo $error['type']; ?>');
    </script>
<? } ?>
