<?php
    session_start();
        $user = $_SESSION["user_data"];
    session_write_close();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard v.1.0 | Niu - Finance Tool</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="css/modals.css">
    <!-- tabs CSS
		============================================ -->
    <link rel="stylesheet" href="css/tabs.css">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="darklayout">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="images/message/1.jpg" alt="" />
                    </a>
                    <h3>Andrar Son</h3>
                    <p>Developer</p>
                    <strong>AP+</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="dashboard.php" class="dropdown-item">Dashboard v.1</a>
                                <a href="old/dashboard-2.html" class="dropdown-item">Dashboard v.2</a>
                                <a href="old/analytics.html" class="dropdown-item">Analytics</a>
                                <a href="old/widgets.html" class="dropdown-item">Widgets</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Mailbox</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="old/inbox.html" class="dropdown-item">Inbox</a>
                                <a href="old/view-mail.html" class="dropdown-item">View Mail</a>
                                <a href="old/compose-mail.html" class="dropdown-item">Compose Mail</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Interface</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="old/google-map.html" class="dropdown-item">Google Map</a>
                                <a href="old/data-maps.html" class="dropdown-item">Data Maps</a>
                                <a href="old/pdf-viewer.html" class="dropdown-item">Pdf Viewer</a>
                                <a href="old/x-editable.html" class="dropdown-item">X-Editable</a>
                                <a href="old/code-editor.html" class="dropdown-item">Code Editor</a>
                                <a href="old/tree-view.html" class="dropdown-item">Tree View</a>
                                <a href="old/preloader.html" class="dropdown-item">Preloader</a>
                                <a href="old/images-cropper.html" class="dropdown-item">Images Cropper</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Miscellaneous</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="old/profile.html" class="dropdown-item">Profile</a>
                                <a href="old/contact-client.html" class="dropdown-item">Contact Client</a>
                                <a href="old/contact-client-v.1.html" class="dropdown-item">Contact Client v.1</a>
                                <a href="old/project-list.html" class="dropdown-item">Project List</a>
                                <a href="old/project-details.html" class="dropdown-item">Project Details</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Charts</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                                <a href="old/bar-charts.html" class="dropdown-item">Bar Charts</a>
                                <a href="old/line-charts.html" class="dropdown-item">Line Charts</a>
                                <a href="old/area-charts.html" class="dropdown-item">Area Charts</a>
                                <a href="old/rounded-chart.html" class="dropdown-item">Rounded Charts</a>
                                <a href="old/c3.html" class="dropdown-item">C3 Charts</a>
                                <a href="old/sparkline.html" class="dropdown-item">Sparkline Charts</a>
                                <a href="old/peity.html" class="dropdown-item">Peity Charts</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Data Tables</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="old/static-table.html" class="dropdown-item">Static Table</a>
                                <a href="old/data-table.html" class="dropdown-item">Data Table</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Forms Elements</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="old/basic-form-element.html" class="dropdown-item">Basic Elements</a>
                                <a href="old/advance-form-element.html" class="dropdown-item">Advance Elements</a>
                                <a href="old/password-meter.html" class="dropdown-item">Password Meter</a>
                                <a href="old/multi-upload.html" class="dropdown-item">Multi Upload</a>
                                <a href="old/tinymc.html" class="dropdown-item">Text Editor</a>
                                <a href="old/dual-list-box.html" class="dropdown-item">Dual List Box</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">App views</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                                <a href="old/notifications.html" class="dropdown-item">Notifications</a>
                                <a href="old/alerts.html" class="dropdown-item">Alerts</a>
                                <a href="old/modals.html" class="dropdown-item">Modals</a>
                                <a href="old/buttons.html" class="dropdown-item">Buttons</a>
                                <a href="old/tabs.html" class="dropdown-item">Tabs</a>
                                <a href="old/accordion.html" class="dropdown-item">Accordion</a>
                                <a href="old/tab-menus.html" class="dropdown-item">Tab Menus</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Pages</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="login.html" class="dropdown-item">Login</a>
                                <a href="old/register.html" class="dropdown-item">Register</a>
                                <a href="old/captcha.html" class="dropdown-item">Captcha</a>
                                <a href="old/checkout.html" class="dropdown-item">Checkout</a>
                                <a href="old/contact.html" class="dropdown-item">Contacts</a>
                                <a href="old/review.html" class="dropdown-item">Review</a>
                                <a href="old/order.html" class="dropdown-item">Order</a>
                                <a href="old/comment.html" class="dropdown-item">Comment</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="images/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">About</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                            <div role="menu" class="dropdown-menu animated flipInX">
                                                <a href="#" class="dropdown-item">Company Info</a>
                                                <a href="#" class="dropdown-item">Documentation</a>
                                                <a href="#" class="dropdown-item">Expert Backend</a>
                                                <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                <a href="#" class="dropdown-item">Contact Support</a>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="adminpro-icon adminpro-chat-pro"></span><span class="indicator-ms"></span></a>
                                            <div role="menu" class="author-message-top dropdown-menu animated flipInX">
                                                <div class="message-single-top">
                                                    <h1>Message</h1>
                                                </div>
                                                <ul class="message-menu">
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="images/message/1.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="images/message/4.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="images/message/3.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="images/message/2.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="message-view">
                                                    <a href="#">View All Messages</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                            <div role="menu" class="notification-author dropdown-menu animated flipInX">
                                                <div class="notification-single-top">
                                                    <h1>Notifications</h1>
                                                </div>
                                                <ul class="notification-menu">
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-checked-pro"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-cloud-computing-down"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-shield"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-analytics-arrow"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="notification-view">
                                                    <a href="#">View All Notification</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">
                                                <?
                                                echo "".$user->user_type;
                                                /*echo "PRUEBA";*/
                                                ?>
                                                </span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="#"><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>My Account</a>
                                                </li>
                                                <li><a href="#"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                                </li>
                                                <li><a href="#"><span class="adminpro-icon adminpro-money author-log-ic"></span>User Billing</a>
                                                </li>
                                                <li><a href="#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
                                                </li>
                                                <li><a href="#"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>

                                            <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
                                                <ul class="nav nav-tabs custon-set-tab">
                                                    <li class="active"><a data-toggle="tab" href="#Notes">Notes</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="Notes" class="tab-pane fade in active">
                                                        <div class="notes-area-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-comments-o"></i> Latest Notes</h2>
                                                                <p>You have 10 new message.</p>
                                                            </div>
                                                            <div class="notes-list-area notes-menu-scrollbar">
                                                                <ul class="notes-menu-list">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="images/notification/5.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="images/notification/1.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="images/notification/2.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="images/notification/3.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="images/notification/4.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="images/notification/5.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="images/notification/6.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="images/notification/1.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="images/notification/2.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="images/notification/3.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Projects" class="tab-pane fade">
                                                        <div class="projects-settings-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-cube"></i> Latest projects</h2>
                                                                <p> You have 20 projects. 5 not completed.</p>
                                                            </div>
                                                            <div class="project-st-list-area project-st-menu-scrollbar">
                                                                <ul class="projects-st-menu-list">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Web Development</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">1 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 28%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Software Development</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">2 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl">
                                                                                    <p>Completion with: 68%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 68%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Graphic Design</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">3 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 78%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 78%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Web Design</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">4 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl2">
                                                                                    <p>Completion with: 38%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Business Card</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">5 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 28%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Ecommerce Business</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">6 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl">
                                                                                    <p>Completion with: 68%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 68%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Woocommerce Plugin</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">7 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 78%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 78%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Wordpress Theme</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">9 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl2">
                                                                                    <p>Completion with: 38%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Settings" class="tab-pane fade">
                                                        <div class="setting-panel-area">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                <p> You have 20 Settings. 5 not completed.</p>
                                                            </div>
                                                            <ul class="setting-panel-list">
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Show notifications</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                    <label class="onoffswitch-label" for="example">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Disable Chat</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                    <label class="onoffswitch-label" for="example3">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Enable history</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                    <label class="onoffswitch-label" for="example4">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Show charts</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                    <label class="onoffswitch-label" for="example7">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Update everyday</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                    <label class="onoffswitch-label" for="example2">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Global search</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                    <label class="onoffswitch-label" for="example6">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Offline users</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                    <label class="onoffswitch-label" for="example5">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <h2>Thanks for Visits</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="dashboard.php">Dashboard v.1</a>
                                                </li>
                                                <li><a href="old/dashboard-2.html">Dashboard v.2</a>
                                                </li>
                                                <li><a href="old/analytics.html">Analytics</a>
                                                </li>
                                                <li><a href="old/widgets.html">Widgets</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="old/inbox.html">Inbox</a>
                                                </li>
                                                <li><a href="old/view-mail.html">View Mail</a>
                                                </li>
                                                <li><a href="old/compose-mail.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="old/profile.html">Profile</a>
                                                </li>
                                                <li><a href="old/contact-client.html">Contact Client</a>
                                                </li>
                                                <li><a href="old/contact-client-v.1.html">Contact Client v.1</a>
                                                </li>
                                                <li><a href="old/project-list.html">Project List</a>
                                                </li>
                                                <li><a href="old/project-details.html">Project Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="old/google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="old/data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="old/pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="old/x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="old/code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="old/tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="old/preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="old/images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="old/bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="old/line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="old/area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="old/rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="old/c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="old/sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="old/peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="old/static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="old/data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="old/basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="old/advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="old/password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="old/multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="old/tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="old/dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="old/basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="old/advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="old/password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="old/multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="old/tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="old/dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="old/register.html">Register</a>
                                                </li>
                                                <li><a href="old/captcha.html">Captcha</a>
                                                </li>
                                                <li><a href="old/checkout.html">Checkout</a>
                                                </li>
                                                <li><a href="old/contact.html">Contacts</a>
                                                </li>
                                                <li><a href="old/review.html">Review</a>
                                                </li>
                                                <li><a href="old/order.html">Order</a>
                                                </li>
                                                <li><a href="old/comment.html">Comment</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <h2>Thanks for Visits</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- welcome Project, sale area start-->
            <div class="welcome-adminpro-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="welcome-wrapper shadow-reset res-mg-t mg-b-30">
                                <div class="welcome-adminpro-title">
                                    <h1>Welcome
                                        <?
                                        echo "".$user->username;
                                        ?>
                                    </h1>
                                    <p>You have 100 messages and 10 notifications.</p>
                                </div>
                                <div class="adminpro-message-list">
                                    <ul class="message-list-menu">
                                        <li><span class="message-serial message-cl-one">1</span> <span class="message-info">Please contact me</span> <span class="message-time">09:00 pm</span>
                                        </li>
                                        <li><span class="message-serial message-cl-two">2</span> <span class="message-info">Sign a contract</span> <span class="message-time">10:00 pm</span>
                                        </li>
                                        <li><span class="message-serial message-cl-three">3</span> <span class="message-info">Please delevary project</span> <span class="message-time">05:00 pm</span>
                                        </li>
                                        <li><span class="message-serial message-cl-four">4</span> <span class="message-info">Open new shop</span> <span class="message-time">04:00 pm</span>
                                        </li>
                                        <li><span class="message-serial message-cl-five">5</span> <span class="message-info">Improtant Notification here</span> <span class="message-time">09:00 pm</span>
                                        </li>
                                        <li><span class="message-serial message-cl-five">5</span> <span class="message-info">Improtant Notification here</span> <span class="message-time">09:00 pm</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <div class="dashboard-line-chart shadow-reset mg-b-30">
                                <div class="flot-chart dashboard-chart">
                                    <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="linechart-dash-rate">
                                            <h2>$5,000</h2>
                                            <p>Sales report</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="linechart-dash-rate">
                                            <h2>$7,000</h2>
                                            <p>Annual Sales</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="linechart-dash-rate">
                                            <h2>$3,000</h2>
                                            <p>revenue Sales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 desplay-n-tablet">
                            <div class="dashone-adminprowrap shadow-reset mg-b-30">
                                <div class="dash-adminpro-project-title">
                                    <h2>Project progress</h2>
                                    <p>You have two project right now.</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dashone-doughnut">
                                            <div id="sparklinedask1"></div>
                                            <h3>Design</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dashone-doughnut">
                                            <div id="sparklinedask2"></div>
                                            <h3>Development</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="project-dashone-phara">
                                            <p>Lorem Ipsum is simply dummy one text of the printing and the typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- welcome Project, sale area start-->
            <!-- stockprice, feed area start-->
            <!--<div class="stockprice-feed-project-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="sparkline7-list stock-price-section shadow-reset nt-mg-b-30">
                                <div class="sparkline7-hd">
                                    <div class="main-spark7-hd">
                                        <h1>Stock Price Report</h1>
                                        <div class="sparkline7-outline-icon">
                                            <span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline7-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline7-graph">
                                    <div class="dashone-bar-small dashone-bar">
                                        <span class="bar_dashboard">5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span>
                                        <p>$505400055.00</p>
                                    </div>
                                    <div class="dashone-bar-heading">
                                        <h2>ADN Stock Price Data!</h2>
                                        <a href="#">Check the stock price!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sparkline11-list shadow-reset nt-mg-b-30">
                                        <div class="sparkline11-hd">
                                            <div class="main-sparkline11-hd">
                                                <h1>Latest Comments</h1>
                                                <div class="sparkline11-outline-icon">
                                                    <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                    <span><i class="fa fa-wrench"></i></span>
                                                    <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sparkline11-graph dashone-comment comment-scrollbar">
                                            <div class="comment-phara">
                                                <div class="comment-adminpr">
                                                    <p class="comment-content"><a href="#">@Toman Alva</a> Start each day with a prayer and end your day with a prayer and thank God for a another day.</p>
                                                </div>
                                                <div class="admin-comment-month">
                                                    <p class="comment-clock"><i class="fa fa-clock-o"></i> 1 minuts ago</p>
                                                    <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo1">...</button>
                                                    <ul id="adminpro-demo1" class="comment-action-st collapse">
                                                        <li><a href="#">Add</a>
                                                        </li>
                                                        <li><a href="#">Report</a>
                                                        </li>
                                                        <li><a href="#">Hide Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn on Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn off Comment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="comment-phara">
                                                <div class="comment-adminpr">
                                                    <p class="comment-content"><a href="#">@William Jon</a> Simple & easy online tools to increase the website visitors, improve SEO, marketing & sales, automatic blog!</p>
                                                    <div class="sparkline-dashone">
                                                        <span id="sparkline8"></span>
                                                    </div>
                                                </div>
                                                <div class="admin-comment-month">
                                                    <p class="comment-clock"><i class="fa fa-clock-o"></i> 5 minuts ago</p>
                                                    <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo2">...</button>
                                                    <ul id="adminpro-demo2" class="comment-action-st collapse">
                                                        <li><a href="#">Add</a>
                                                        </li>
                                                        <li><a href="#">Report</a>
                                                        </li>
                                                        <li><a href="#">Hide Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn on Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn off Comment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="comment-phara">
                                                <div class="comment-adminpr">
                                                    <p class="comment-content"><a href="#">@mexicano</a> Soy cursi, twitteo frases pedorras y vendo antojitos mexicanos. Santa Rosa, La Pampa, Argentina</p>
                                                </div>
                                                <div class="admin-comment-month">
                                                    <p class="comment-clock"><i class="fa fa-clock-o"></i> 15 minuts ago</p>
                                                    <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo3">...</button>
                                                    <ul id="adminpro-demo3" class="comment-action-st collapse">
                                                        <li><a href="#">Add</a>
                                                        </li>
                                                        <li><a href="#">Report</a>
                                                        </li>
                                                        <li><a href="#">Hide Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn on Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn off Comment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="comment-phara">
                                                <div class="comment-adminpr">
                                                    <p class="comment-content"><a href="#">@Bhadkamkar</a> News love and follow Jesus and my family and friends l hope God bless you always.</p>
                                                </div>
                                                <div class="admin-comment-month">
                                                    <p class="comment-clock"><i class="fa fa-clock-o"></i> 20 minuts ago</p>
                                                    <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo4">...</button>
                                                    <ul id="adminpro-demo4" class="comment-action-st collapse">
                                                        <li><a href="#">Add</a>
                                                        </li>
                                                        <li><a href="#">Report</a>
                                                        </li>
                                                        <li><a href="#">Hide Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn on Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn off Comment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="comment-phara">
                                                <div class="comment-adminpr">
                                                    <p class="comment-content"><a href="#">@SHAKHAWAT</a> Make the Best Use of What You Have.You Never Know When & Where You Find Yourself..</p>
                                                </div>
                                                <div class="admin-comment-month">
                                                    <p class="comment-clock"><i class="fa fa-clock-o"></i> 25 minuts ago</p>
                                                    <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo5">...</button>
                                                    <ul id="adminpro-demo5" class="comment-action-st collapse">
                                                        <li><a href="#">Add</a>
                                                        </li>
                                                        <li><a href="#">Report</a>
                                                        </li>
                                                        <li><a href="#">Hide Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn on Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn off Comment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="comment-phara comment-bd-phara">
                                                <div class="comment-adminpr">
                                                    <p class="comment-content"><a href="#">@Sarah</a> A 'Power Chick' committed to using my superpowers for good. Author, speaker, radio host.</p>
                                                </div>
                                                <div class="admin-comment-month">
                                                    <p class="comment-clock"><i class="fa fa-clock-o"></i> 27 minuts ago</p>
                                                    <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo6">...</button>
                                                    <ul id="adminpro-demo6" class="comment-action-st collapse">
                                                        <li><a href="#">Add</a>
                                                        </li>
                                                        <li><a href="#">Report</a>
                                                        </li>
                                                        <li><a href="#">Hide Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn on Comment</a>
                                                        </li>
                                                        <li><a href="#">Turn off Comment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="about-sparkline shadow-reset desplay-n-tablet-pro">
                                <div class="sparkline-hd">
                                    <div class="main-spark-hd">
                                        <h1>Project Timeline </h1>
                                        <div class="outline-icon">
                                            <span class="collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline-content timeline-scrollbar">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="timeline-hd-main">
                                                <div class="timeline-heading-admin">
                                                    <h1>You have meeting today!</h1>
                                                    <p><i class="fa fa-map-marker"></i> Meeting is on 6:00am. Check your schedule to see detail.</p>
                                                </div>
                                                <div class="mapcontainer">
                                                    <div class="map">
                                                        <span>Alternative content for the map</span>
                                                    </div>
                                                    <div class="plotLegend"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timelinewrap-admin res-mg-b-10">
                                        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 timeline-date-time-bd">
                                            <div class="icon-date-timeline">
                                                <i class="fa fa-briefcase"></i>
                                                <p>6:00 am</p>
                                                <p class="timeline-hr-cl">5 Min ago</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12 timeline-adminpro-cn timeline-adminpro-bd-ct">
                                            <div class="timeline-content">
                                                <h3>Managing Director at Leather Export</h3>
                                                <p>Hope you all are doing good. We are one of manufacturer and supplier of Cow Crust and finished leather from USA. Please feel free to contact us if you have any queries.</p>
                                                <div class="admin-timeline-graph">
                                                    <span data-diameter="40" class="updating-chart">2,5,9,6,5,9,7,3,5,2,5,3,9,6,5,8,7,8,5,2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timelinewrap-admin res-mg-b-10">
                                        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 timeline-date-time-bd">
                                            <div class="icon-date-timeline">
                                                <i class="fa fa-briefcase"></i>
                                                <p>6:00 am</p>
                                                <p class="timeline-hr-cl">10 Min ago</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12 timeline-adminpro-cn">
                                            <div class="timeline-content">
                                                <h3>Founder/CEO  at Intcs, Inc.</h3>
                                                <p>Yes, millennials are changing the way. This week on Radiate we're highlighting benefits and challenges of working across generator and cultures. Watch the newest Radiate Expert to join us.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timelinewrap-admin res-mg-b-10">
                                        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 timeline-date-time-bd">
                                            <div class="icon-date-timeline">
                                                <i class="fa fa-briefcase"></i>
                                                <p>6:00 am</p>
                                                <p class="timeline-hr-cl">13 Min ago</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12 timeline-adminpro-cn">
                                            <div class="timeline-content">
                                                <h3>Meeting Fixed Blue</h3>
                                                <p>Toys are watching you so is your car and your vacuum cleaner Here are 39 ways your privacy is being compromised, and 8 guides to protecting your digital self.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timelinewrap-admin res-mg-b-10">
                                        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 timeline-date-time-bd">
                                            <div class="icon-date-timeline">
                                                <i class="fa fa-briefcase"></i>
                                                <p>6:00 am</p>
                                                <p class="timeline-hr-cl">20 Min ago</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12 timeline-adminpro-cn">
                                            <div class="timeline-content">
                                                <h3>USA Institute of Management</h3>
                                                <p>The biggest Challenge which I have been use to Win is to in-house raw materials on time based on customer demand forecast and production capacity concentrating Seasonal impacts and considering foreign suppliers's cultural holidays, and Port congestion.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timelinewrap-admin res-mg-b-10">
                                        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 timeline-date-time-bd">
                                            <div class="icon-date-timeline">
                                                <i class="fa fa-briefcase"></i>
                                                <p>6:00 am</p>
                                                <p class="timeline-hr-cl">30 Min ago</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12 timeline-adminpro-cn">
                                            <div class="timeline-content">
                                                <h3>Meeting Fixed</h3>
                                                <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the sale.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timelinewrap-admin">
                                        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 timeline-date-time-bd">
                                            <div class="icon-date-timeline">
                                                <i class="fa fa-briefcase"></i>
                                                <p>6:00 am</p>
                                                <p class="timeline-hr-cl">34 Min ago</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12 timeline-adminpro-cn">
                                            <div class="timeline-content">
                                                <h3>Meeting Fixed</h3>
                                                <p>My objective is to pursue a career leading company where I would gain experience while adding value to the business of the organization.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Income</h2>
                                        <div class="main-income-phara">
                                            <p>Monthly</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span>$</span><span class="counter">6,08,88,200</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"></span>
                                        </div>
                                    </div>
                                    <div class="income-range">
                                        <p>Total income</p>
                                        <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Orders</h2>
                                        <div class="main-income-phara order-cl">
                                            <p>Annual</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter">7,23,20</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline6"></span>
                                        </div>
                                    </div>
                                    <div class="income-range order-cl">
                                        <p>New Orders</p>
                                        <span class="income-percentange">66% <i class="fa fa-level-up"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Visitor</h2>
                                        <div class="main-income-phara visitor-cl">
                                            <p>Today</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter">8,88,200</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline2"></span>
                                        </div>
                                    </div>
                                    <div class="income-range visitor-cl">
                                        <p>New Visitor</p>
                                        <span class="income-percentange">55% <i class="fa fa-level-up"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>User activity</h2>
                                        <div class="main-income-phara low-value-cl">
                                            <p>Low Value</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter">88,200</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline5"></span>
                                        </div>
                                    </div>
                                    <div class="income-range low-value-cl">
                                        <p>In first month</p>
                                        <span class="income-percentange">33% <i class="fa fa-level-down"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- stockprice, feed area end-->
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Projects Data Table</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="id">ID</th>
                                                    <th data-field="name" data-editable="true">Project</th>
                                                    <th data-field="email" data-editable="true">Email</th>
                                                    <th data-field="phone" data-editable="true">Phone</th>
                                                    <th data-field="company" data-editable="true">Company</th>
                                                    <th data-field="complete">Completed</th>
                                                    <th data-field="task" data-editable="true">Task</th>
                                                    <th data-field="date" data-editable="true">Date</th>
                                                    <th data-field="price" data-editable="true">Price</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>Web Development</td>
                                                    <td>admin@uttara.com</td>
                                                    <td>+8801962067309</td>
                                                    <td>Aber Ltd.</td>
                                                    <td class="datatable-ct"><span class="pie">1/6</span>
                                                    </td>
                                                    <td>10%</td>
                                                    <td>Jul 14, 2018</td>
                                                    <td>$5455</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>2</td>
                                                    <td>Graphic Design</td>
                                                    <td>fox@itpark.com</td>
                                                    <td>+8801762067304</td>
                                                    <td>Abitibi Inc.</td>
                                                    <td class="datatable-ct"><span class="pie">230/360</span>
                                                    </td>
                                                    <td>70%</td>
                                                    <td>fab 2, 2018</td>
                                                    <td>$8756</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>3</td>
                                                    <td>Software Development</td>
                                                    <td>gumre@hash.com</td>
                                                    <td>+8801862067308</td>
                                                    <td>Acambis plc</td>
                                                    <td class="datatable-ct"><span class="pie">0.42/1.461</span>
                                                    </td>
                                                    <td>5%</td>
                                                    <td>Seb 5, 2018</td>
                                                    <td>$9875</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>4</td>
                                                    <td>Woocommerce</td>
                                                    <td>kyum@frok.com</td>
                                                    <td>+8801962066547</td>
                                                    <td>ACLN Ltd.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>Oct 10, 2018</td>
                                                    <td>$3254</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>5</td>
                                                    <td>Joomla</td>
                                                    <td>jams@game.com</td>
                                                    <td>+8801962098745</td>
                                                    <td>ACS-Tech Ltd.</td>
                                                    <td class="datatable-ct"><span class="pie">200,133</span>
                                                    </td>
                                                    <td>80%</td>
                                                    <td>Nov 20, 2018</td>
                                                    <td>$58745</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>6</td>
                                                    <td>Wordpress</td>
                                                    <td>flat@yem.com</td>
                                                    <td>+8801962254781</td>
                                                    <td>ActFits.com Inc.</td>
                                                    <td class="datatable-ct"><span class="pie">0.42,1.051</span>
                                                    </td>
                                                    <td>30%</td>
                                                    <td>Aug 25, 2018</td>
                                                    <td>$789879</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>7</td>
                                                    <td>Ecommerce</td>
                                                    <td>hasan@wpm.com</td>
                                                    <td>+8801962254863</td>
                                                    <td>ActivCard S.A.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>July 17, 2018</td>
                                                    <td>$21424</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>8</td>
                                                    <td>Android Apps</td>
                                                    <td>ATM@devep.com</td>
                                                    <td>+8801962875469</td>
                                                    <td>Adecco S.A.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>June 11, 2018</td>
                                                    <td>$78978</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>9</td>
                                                    <td>Prestashop</td>
                                                    <td>presta@Prest.com</td>
                                                    <td>+8801962067524</td>
                                                    <td>AEGON N.V.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>May 9, 2018</td>
                                                    <td>$45645</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>10</td>
                                                    <td>Game Development</td>
                                                    <td>Dev@game.com</td>
                                                    <td>+8801962067457</td>
                                                    <td>Aerco Ltd.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>April 5, 2018</td>
                                                    <td>$4564545</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>11</td>
                                                    <td>Angular Js</td>
                                                    <td>gular@angular.com</td>
                                                    <td>+8801962067124</td>
                                                    <td>Agrium Inc.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>Dec 1, 2018</td>
                                                    <td>$645455</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>12</td>
                                                    <td>Opencart</td>
                                                    <td>open@cart.com</td>
                                                    <td>+8801962067587</td>
                                                    <td>Air Canada</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>Jan 6, 2018</td>
                                                    <td>$78978</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>13</td>
                                                    <td>Education</td>
                                                    <td>john@example.com</td>
                                                    <td>+8801962067471</td>
                                                    <td>Alcan Inc.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>Feb 6, 2016</td>
                                                    <td>$456456</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>14</td>
                                                    <td>Construction</td>
                                                    <td>mary@example.com</td>
                                                    <td>+8801962012457</td>
                                                    <td>Alcatel</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>Jan 6, 2016</td>
                                                    <td>$87978</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>15</td>
                                                    <td>Real Estate</td>
                                                    <td>july@example.com</td>
                                                    <td>+8801962067309</td>
                                                    <td>Alstom</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>Dec 1, 2016</td>
                                                    <td>$454554</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>16</td>
                                                    <td>Personal Regume</td>
                                                    <td>john@example.com</td>
                                                    <td>+8801962067306</td>
                                                    <td>Altarex Corp.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>May 9, 2016</td>
                                                    <td>$564555</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>17</td>
                                                    <td>Admin Template</td>
                                                    <td>mary@example.com</td>
                                                    <td>+8801962067305</td>
                                                    <td>Alvarion Ltd.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>June 11, 2016</td>
                                                    <td>$454565</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>18</td>
                                                    <td>FrontEnd</td>
                                                    <td>july@example.com</td>
                                                    <td>+8801962067304</td>
                                                    <td>Amcor Ltd.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>May 9, 2015</td>
                                                    <td>$456546</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>19</td>
                                                    <td>Backend</td>
                                                    <td>john@range.com</td>
                                                    <td>+8801962067303</td>
                                                    <td>Amdocs Ltd.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>Feb 9, 2014</td>
                                                    <td>$564554</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>20</td>
                                                    <td>Java Advance</td>
                                                    <td>lamon@ghs.com</td>
                                                    <td>+8801962067302</td>
                                                    <td>Amersham plc</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>July 6, 2014</td>
                                                    <td>$789889</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>21</td>
                                                    <td>Jquery Advance</td>
                                                    <td>hasad@uth.com</td>
                                                    <td>+8801962067301</td>
                                                    <td>Amvescap plc</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>Jun 6, 2013</td>
                                                    <td>$4565656</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-success w-25 href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro">Open</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data table area End-->
        </div>
    </div>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2018 Colorlib All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- Chat Box Start-->
    <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
            </div>
            <div id="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
                <div class="chat-main-list">
                    <div class="chat-heading">
                        <h2>Messanger</h2>
                    </div>
                    <div class="chat-content chat-scrollbar">
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:15 am</span></h3>
                            <p>Hi, what you are doing and where are you gay?</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:10 am</span></h3>
                            <p>Now working in graphic design with coding and you?</p>
                        </div>
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:05 am</span></h3>
                            <p>Practice in programming</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:02 am</span></h3>
                            <p>That's good man! carry on...</p>
                        </div>
                    </div>
                    <div class="chat-send">
                        <input type="text" placeholder="Type..." />
                        <span><button type="submit">Send</button></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chat Box End-->
    <!-- Modals Data -->
    <!--<div id="PrimaryModalblbgpro" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <?php
/*                    $homepage = file_get_contents('menu.html');
                    echo $homepage;
                    */?>
                </div>
            </div>
        </div>
    </div>-->
    <!-- End Modals Data -->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/flot/jquery.flot.spline.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/jquery.flot.pie.js"></script>
    <script src="js/flot/Chart.min.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="js/map/raphael.min.js"></script>
    <script src="js/map/jquery.mapael.js"></script>
    <script src="js/map/france_departments.js"></script>
    <script src="js/map/world_countries.js"></script>
    <script src="js/map/usa_states.js"></script>
    <script src="js/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- modal JS
		============================================ -->
    <script src="js/modal-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>