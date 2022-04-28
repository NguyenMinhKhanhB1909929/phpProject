<?php ob_start(); ?>
<?php
  include "../../lib/session.php";
  Session::checkSession();
?>
<!DOCTYPE html
>
<html
 lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/php
    ; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="../docs/images/LOGO.png" type="image/ico" />

    <title>NMK - ADMIN</title>

    <!-- Bootstrap -->
    <link
      href="../vendors/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      href="../vendors/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

    <!-- bootstrap-progressbar -->
    <link
      href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
      rel="stylesheet"
    />
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link
      href="../vendors/bootstrap-daterangepicker/daterangepicker.css"
      rel="stylesheet"
    />

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../docs/css/AFormIndex.css" />
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0">
              <a href="index.php
              " class="site_title"
                ><img
                  src="../docs/images/LOGO.png"
                  alt=""
                  style="height: 50px"
                />
                <span>ADMIN</span></a
              >
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img
                  src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                  alt="..."
                  class="img-circle profile_img"
                />
              </div>
              <div class="profile_info">
                <span>Xin chào,</span>
                <h2><?php
                  echo Session::get("adminName");
                ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div
              id="sidebar-menu"
              class="main_menu_side hidden-print main_menu"
            >
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li>
                    <a href="./index.php
                    "
                      ><i class="fa fa-home"></i> Trang chủ
                    </a>
                  </li>
                  <li>
                    <a
                      ><i class="fa fa-inbox"></i>Danh mục sản phẩm
                      <span class="fa fa-chevron-down"></span
                    ></a>
                    <ul class="nav child_menu">
                      <li>
                        <a href="./addCategory.php
                        ">Thêm danh mục</a>
                      </li>
                      <li>
                        <a href="./category.php
                        ">Danh mục sản phẩm</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a
                      ><i class="fa fa-inbox"></i> Sản phẩm
                      <span class="fa fa-chevron-down"></span
                    ></a>
                    <ul class="nav child_menu">
                      <li>
                        <a href="./AddItem.php
                        ">Thêm sản phẩm</a>
                      </li>
                      <li>
                        <a href="./ListItem.php
                        ">Danh sách sản phẩm</a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a href="./Ordered.php
                    "
                      ><i class="fa fa-edit"></i> Đơn hàng</a
                    >
                  </li>
                  <li>
                    <a href="./User.php
                    "
                      ><i class="fa fa-user"></i> Khách hàng
                    </a>
                  </li>
                  <li>
                    <a href="./Comment.php
                    "
                      ><i class="fa fa-comment-o"></i>Đánh giá
                    </a>
                  </li>
                  <li>
                    <a href="./Revenue.php
                    "
                      ><i class="fa fa-bar-chart-o"></i> Doanh thu
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <nav class="nav navbar-nav">
              <ul class="navbar-right" style="position: relative">
                <li class="nav-item dropdown open" style="padding-left: 15px">
                  <a
                    href="javascript:;"
                    class="user-profile dropdown-toggle"
                    aria-haspopup="true"
                    id="navbarDropdown"
                    data-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <img
                      src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                      alt=""
                    /><?php
                  echo Session::get("adminName");
                ?>
                  </a>
                  <div
                    class="dropdown-menu dropdown-usermenu pull-right"
                    aria-labelledby="navbarDropdown"
                  >
                    <a class="dropdown-item" href="javascript:;">Hồ sơ cá nhân</a>
                    <a class="dropdown-item" href="javascript:;">
                      <span>Cài đặt</span>
                    </a>
                    <a class="dropdown-item" href="javascript:;">Trợ giúp</a>

                    <?php
                      if(isset($_GET['action']) && $_GET['action']=='logout'){
                        Session::destroy();
                      }
                    ?>
                    <a class="dropdown-item" href="?action=logout"
                      >
                      <i class="fa fa-sign-out pull-right"></i>
                      Đăng xuất</a
                    >

                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>