<?php
/**
 * Company: RSC BYTE LTD
 * Author: Revelation, A.F
 * Email: nusktecsoft@gmail.com
 * website: rscbyte.com
 * 2020-01-07 - revelation - churchaz2
 **/
?>
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="<? echo makeUrl(""); ?>" class="logo">
                        <span>
                                <img src="<? echo base_url() ?>global/assets/logo.png?<? echo rand(11, 99) ?>" alt=""
                                     width="150">
                        </span>
            <i>
                <img src="<? echo base_url() ?>global/assets/favicon.png?<? echo rand(11, 99) ?>" alt="" width="40">
            </i>
        </a>
    </div>

    <nav class="navbar-custom">
        <ul class="navbar-right list-inline float-right mb-0">
            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                <form role="search" class="app-search">
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" placeholder="Search..">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </li>

            <!-- language-->
            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                   role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="<? echo base_url("global") ?>/assets/images/flags/us_flag.jpg" class="mr-2" height="12"
                         alt=""/> English <span
                            class="mdi mdi-chevron-down"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right language-switch d-none">
                    <a class="dropdown-item" href="#"><img
                                src="<? echo base_url("global") ?>/assets/images/flags/germany_flag.jpg" alt=""
                                height="16"/><span> English </span></a>
                </div>
            </li>

            <!-- full screen -->
            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                    <i class="mdi mdi-fullscreen noti-icon"></i>
                </a>
            </li>

            <!-- notification -->
            <li class="dropdown notification-list list-inline-item">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                   role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-bell-outline noti-icon"></i>
                    <span class="badge badge-pill badge-danger noti-icon-badge"><? echo count(@$page_data['defaults']['noti']['unread']); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                    <!-- item-->
                    <h6 class="dropdown-item-text">
                        Notifications
                    </h6>
                    <div class="slimscroll notification-item-list">
                        <!-- item-->
                        <? $unread_noti = @$page_data['defaults']['noti']['unread']; ?>
                        <? foreach (@$unread_noti as $key => $v) { ?>
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-alert-circle"></i></div>
                                <p class="notify-details"><? echo $v['ndata']; ?></span>
                                </p>
                            </a>
                        <? } ?>
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>
            <li class="dropdown notification-list list-inline-item">
                <div class="dropdown notification-list nav-pro-img">
                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown"
                       href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<? echo base_url() ?>global/assets/images/users/user-4.jpg" alt="user"
                             class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="mdi mdi-view-dashboard m-r-5"></i> Dashboard</a>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-alert m-r-5"></i> Notifications</a>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Account</a>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-key m-r-5"></i> License</a>
                        <a class="dropdown-item d-block" href="#"><i
                                    class="mdi mdi-settings m-r-5"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="<? echo base_url("logout"); ?>"><i
                                    class="mdi mdi-power text-danger"></i>
                            Logout</a>
                    </div>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
            <li class="d-none d-sm-block">
                <div class="dropdown pt-3 d-inline-block">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quick Actions
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Add New Branch</a>
                        <a class="dropdown-item" href="#">Add Pastor Profile</a>
                        <a class="dropdown-item" href="#">Add New Member</a>
                        <a class="dropdown-item" href="#">Add New Convert</a>
                    </div>
                </div>
            </li>
        </ul>

    </nav>

</div>
