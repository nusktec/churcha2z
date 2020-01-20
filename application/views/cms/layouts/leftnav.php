<?php
/**
 * Company: RSC BYTE LTD
 * Author: Revelation, A.F
 * Email: nusktecsoft@gmail.com
 * website: rscbyte.com
 * 2020-01-07 - revelation - churchaz2
 **/
?>
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="<? echo makeUrl(""); ?>" class="waves-effect">
                        <i class="ti-home"></i><span class="badge badge-primary badge-pill float-right d-none">2</span>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> Branches <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="<? echo makeUrl("addbranch"); ?>">Add New</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="#">Manage Branches</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="#">Branch Reports</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> Pastors <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="#">Add New</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="#">Manage Pastors</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="#">Pastors Report</a></li>
                    </ul>
                </li>

                <!--Apply roles logic-->
                <? if (ROLE_NO == 2) { ?>
                    <li class="menu-title">Sub Administrator</li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i
                                    class="ti-archive"></i><span> Dashboard <span
                                        class="float-right menu-arrow"><i
                                            class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="#">Sample Menu</a></li>
                        </ul>
                    </li>
                <? } ?>
                <!--end of role logic-->

                <? if (ROLE_NO == 1) { ?>
                    <li class="menu-title">Administrator</li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i
                                    class="ti-archive"></i><span> Authentication <span
                                        class="float-right menu-arrow"><i
                                            class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="#">Manage CAS</a></li>
                        </ul>
                        <ul class="submenu">
                            <li><a href="#">Update Profile</a></li>
                        </ul>
                        <ul class="submenu">
                            <li><a href="#">Change Password</a></li>
                        </ul>
                    </li>
                <? } ?>
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
