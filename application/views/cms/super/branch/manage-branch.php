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
        <!--Breadcrumb-->
        <? include __DIR__ . "/../../layouts/breadcrumb.php"; ?>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Branch Data Table</h4>
                        <p class="text-muted m-b-30">
                            Records Analytics
                        </p>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Slogan</th>
                                    <th>Country</th>
                                    <th>Address 1/2</th>
                                    <th>Phone 1/2</th>
                                    <th>Email</th>
                                    <th>CAS Number</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
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