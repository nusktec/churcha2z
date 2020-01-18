<?php
/**
 * Company: RSC BYTE LTD
 * Author: Revelation, A.F
 * Email: nusktecsoft@gmail.com
 * website: rscbyte.com
 * 2020-01-07 - revelation - churcha2z
 **/
?>
<script>
    let page_data = <? echo json_encode(@$page_data); ?>
</script>
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <? include __DIR__ . "/../layouts/breadcrumb.php"; ?>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="<? echo base_url() ?>global/assets/images/services-icon/01.png" alt="">
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Branches</h5>
                            <h4 class="font-500">0 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0">Since last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <form>
                <input type="hidden" name="formtoken" value="<? echo getFormToken(); ?>"/>
                <input type="hidden" name="cmd" value="addpastor"/>
            </form>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="<? echo base_url() ?>global/assets/images/services-icon/02.png" alt="">
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Pastors</h5>
                            <h4 class="font-500">0 <i class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0">Since last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="<? echo base_url() ?>global/assets/images/services-icon/03.png" alt="">
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">New Converts</h5>
                            <h4 class="font-500">0 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0">Since last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="<? echo base_url() ?>global/assets/images/services-icon/04.png" alt="">
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">First Timer</h5>
                            <h4 class="font-500">0 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0">Since last month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->

</div>
<!-- content -->