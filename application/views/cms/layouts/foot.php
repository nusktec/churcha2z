<?php
/**
 * Company: RSC BYTE LTD
 * Author: Revelation, A.F
 * Email: nusktecsoft@gmail.com
 * website: rscbyte.com
 * 2020-01-07 - revelation - churchaz2
 **/
?>
<script src="<? echo base_url() ?>global/assets/js/jquery.min.js?<? echo rand(111, 999); ?>"></script>
<script src="<? echo base_url() ?>global/assets/js/bootstrap.bundle.min.js?<? echo rand(111, 999); ?>"></script>
<script src="<? echo base_url() ?>global/assets/js/metisMenu.min.js?<? echo rand(111, 999); ?>"></script>
<script src="<? echo base_url() ?>global/assets/js/jquery.slimscroll.js?<? echo rand(111, 999); ?>"></script>
<script src="<? echo base_url() ?>global/assets/js/waves.min.js?<? echo rand(111, 999); ?>"></script>
<script src="<? echo base_url() ?>global/assets/js/app.js?<? echo rand(111, 999); ?>"></script>

<!--Third party library-->
<script src="<? echo base_url() ?>global/tp/vue.min.js?<? echo rand(111, 999); ?>"></script>
<script src="<? echo base_url() ?>global/tp/axios.min.js?<? echo rand(111, 999); ?>"></script>
<script src="<? echo base_url() ?>global/tp/NProgress.js?<? echo rand(111, 999); ?>"></script>
<script src="<? echo base_url() ?>global/tp/topper.js?<? echo rand(111, 999); ?>"></script>
<script src="<? echo base_url() ?>global/tp/functions.js?<? echo rand(111, 999); ?>"></script>
<?
if (!empty($scripts)) {
    foreach ($scripts as $key => $v) {
        ?>
        <script src="<? echo base_url() ?>scripts/rs_<? echo $v; ?>.js?<? echo rand(111, 999); ?>"></script>
        <?
    }
}
?>
