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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Add new branch</h4>
                        <p class="text-muted m-b-30 font-14">An existing branch will be listed on duplicates</p>

                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="post">
                            <h3>Branch Details</h3>
                            <fieldset/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Location
                                            Name</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameBilling" name="loc_name" type="text"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Email
                                            Address</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameBilling" name="loc_email" type="text"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCompanyBilling" class="col-lg-3 col-form-label">Phone 1</label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyBilling" name="loc_phone_one" type="text"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">Phone
                                            2</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="loc_phone_two"
                                                   type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtAddress1Billing" class="col-lg-3 col-form-label">Address
                                            1</label>
                                        <div class="col-lg-9">
                                                <textarea id="txtAddress1Billing" name="loc_add_one" rows="4"
                                                          class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Address
                                            2</label>
                                        <div class="col-lg-9">
                                                <textarea id="txtAddress2Billing" name="loc_add_two" rows="4"
                                                          class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCityBilling" class="col-lg-3 col-form-label">Location
                                            Slogan</label>
                                        <div class="col-lg-9">
                                            <input id="txtCityBilling" name="loc_slog" type="text"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="loc_cas" class="col-lg-3 col-form-label">CAS
                                            Code</label>
                                        <div class="col-lg-5">
                                            <input id="txtStateProvinceBilling" name="loc_cas"
                                                   type="text" class="form-control">
                                        </div>
                                        <div class="col-lg-4">
                                            <button type="button" class="btn btn-light waves-effect form-control">
                                                Generate One
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9">
                                            <button type="submit"
                                                    class="btn btn-danger btn-lg btn-block waves-effect waves-light">
                                                Add Branch
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input name="formtoken" value="<? echo getFormToken(); ?>" type="hidden">
                            <input name="cmd" value="addNew" type="hidden">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- container-fluid -->