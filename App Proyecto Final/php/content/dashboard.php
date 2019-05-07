<?php
    $upload = $_GET[upload];

    session_start();
        $user = $_SESSION["user_data"];
    session_write_close();

    function showMainContent(){
        require('dashboardContent.php');
    }

    function showUploadPageContent(){
        require('upload.php');
    }
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
    <link rel="stylesheet" href="../../css/modals.css">
    <!-- tabs CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/tabs.css">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="../../css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
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
                    <a href="#"><img src="../../images/message/1.jpg" alt="" />
                    </a>
                    <h3>
                        <?
                            echo "".$user->username;
                        ?>
                    </h3>
                    <p>
                        <?
                            echo "".$user->user_type;
                        ?>
                    </p>
                    <strong>AP+</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <!--<a href="dashboard.php" class="dropdown-item">Home</a>-->
                                <form action="dashboard.php?upload=no" method="post">
                                    <button>Home</button>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-upload"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <!--<a href="upload.php" class="dropdown-item">Import</a>-->
                                <form action="dashboard.php?upload=yes" method="post">
                                    <button>Import</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">

            <div id="displayDashContent" class="mainContent">
                <?php
                    showMainContent();
                ?>
            </div>

            <?php
                if( $upload === "no"){
            ?>
            <!-- Data table area Start -->
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
            <!-- Data table area End -->
            <?php
                }else{
                    include "upload.php";
                }
            ?>
            </div>-->
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
    <div id="PrimaryModalblbgpro" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <?php
                        include "../tool/index.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modals Data -->
    <!-- jquery
		============================================ -->
    <script src="../../js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../../js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../../js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../../js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="../../js/counterup/jquery.counterup.min.js"></script>
    <script src="../../js/counterup/waypoints.min.js"></script>
    <script src="../../js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="../../js/peity/jquery.peity.min.js"></script>
    <script src="../../js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="../../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../../js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="../../js/flot/jquery.flot.js"></script>
    <script src="../../js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../../js/flot/jquery.flot.spline.js"></script>
    <script src="../../js/flot/jquery.flot.resize.js"></script>
    <script src="../../js/flot/jquery.flot.pie.js"></script>
    <script src="../../js/flot/Chart.min.js"></script>
    <script src="../../js/flot/flot-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="../../js/map/raphael.min.js"></script>
    <script src="../../js/map/jquery.mapael.js"></script>
    <script src="../../js/map/france_departments.js"></script>
    <script src="../../js/map/world_countries.js"></script>
    <script src="../../js/map/usa_states.js"></script>
    <script src="../../js/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="../../js/data-table/bootstrap-table.js"></script>
    <script src="../../js/data-table/tableExport.js"></script>
    <script src="../../js/data-table/data-table-active.js"></script>
    <script src="../../js/data-table/bootstrap-table-editable.js"></script>
    <script src="../../js/data-table/bootstrap-editable.js"></script>
    <script src="../../js/data-table/bootstrap-table-resizable.js"></script>
    <script src="../../js/data-table/colResizable-1.5.source.js"></script>
    <script src="../../js/data-table/bootstrap-table-export.js"></script>
    <!-- modal JS
		============================================ -->
    <script src="../../js/modal-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../../js/main.js"></script>
</body>

</html>