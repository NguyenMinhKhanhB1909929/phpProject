<?php ob_start(); ?>
<?php
  include_once "./lib/session.php";
  Session::init();
?>
<?php
  include "./lib/database.php";
  include "./helpers/format.php";

  spl_autoload_register(function($className) {
    include_once "./classes/".$className.".php";
  });

  $db = new Database();
  $fm = new format();
  $ct = new cart();
  $us = new user();
  $pd = new product();
  $cat = new category();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NMK-SHOP</title>
    <link rel="icon" href="./assets/img/LOGO.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
    <link rel="stylesheet" href="./assets/css/base.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/ItemDes.css" />
    <link rel="stylesheet" href="./assets/css/myorder.css" />
    <link rel="stylesheet" href="./assets/css/myuser.css" />
    <link rel="stylesheet" href="./assets/css/orderSuccess.css" />
    <link rel="stylesheet" href="./assets/css/orderItem.css" />
    <link rel="stylesheet" href="./assets/css/pay.css" />
  </head>
  <body>
    <?php
        include_once "./include/formLogin-Register.php";
        ?>
    <div class="app">
      <header class="header">
        <div class="grid">
          <nav class="header__navbar">
            <ul class="header__navbar-list">
              <li
                class="
                  header__navbar-item
                  header__navbar-item-has-qr
                  header__navbar-item--separate
                "
              >
                Tải ứng dụng
                <!-- Header QR CODE -->
                <div class="header__qr">
                  <img
                    src="./assets/img/qr_code.png"
                    alt="QR Code"
                    class="header__qr-img"
                  />
                  <div class="header__qr-apps">
                    <a href="" class="header__qr-link">
                      <img
                        src="./assets/img/googleplay.png"
                        alt="Google Play"
                        class="header__qr-dowload-img"
                      />
                    </a>
                    <a href="" class="header__qr-link">
                      <img
                        src="./assets/img/appstore.png"
                        alt="App Store"
                        class="header__qr-dowload-img"
                      />
                    </a>
                  </div>
                </div>
              </li>
              <li class="header__navbar-item header__navbar-item--separate">
                <span class="header__navbar-title--no-pointer">Kết nối</span>
                <a href="" class="header__navbar-icon-link">
                  <i class="header__navbar-icon fab fa-facebook"></i>
                </a>
                <a href="" class="header__navbar-icon-link">
                  <i class="header__navbar-icon fab fa-instagram"></i>
                </a>
              </li>
              <li class="header__navbar-item">
                <i class="header__navbar-icon fas fa-phone-volume"></i>
                1900.1410
              </li>
            </ul>
            <ul class="header__navbar-list">
              <li class="header__navbar-item header__navbar-item--has-notify">
                <a href="" class="header__navbar-item-link">
                  <i class="header__navbar-icon far fa-bell"></i>
                  Thông báo
                </a>
                <!-- Mo Thong Bao -->
                <div class="header__notify">
                  <header class="header__notify-header">
                    <h3>Thông báo mới nhận</h3>
                  </header>
                  <ul class="header__notify-list">
                    <li class="header__notify-item">
                      <a
                        href=""
                        class="header__notify-link header__notify-item--viewed"
                      >
                        <img
                          class="header__notify-img"
                          src="https://cf.shopee.vn/file/9f5349ef51304baade9400f49efe34c6_tn"
                          alt=""
                        />
                        <div class="header__notify-info">
                          <span class="header__notify-name"
                            >Laptop Acer Nitro 5</span
                          >
                          <span class="header__notify-description"
                            >Laptop Acer Nitro 5 chính hãng</span
                          >
                        </div>
                      </a>
                    </li>
                    <li class="header__notify-item">
                      <a
                        href=""
                        class="header__notify-link header__notify-item--viewed"
                      >
                        <img
                          class="header__notify-img"
                          src="https://cf.shopee.vn/file/a8d348ae36cf07b53a3448a24ad64dcf_tn"
                          alt=""
                        />
                        <div class="header__notify-info">
                          <span class="header__notify-name">
                            Laptop Asus chính hãng</span
                          >
                          <span class="header__notify-description"
                            >Laptop Asus 2021</span
                          >
                        </div>
                      </a>
                    </li>
                    <li class="header__notify-item">
                      <a
                        href=""
                        class="header__notify-link header__notify-item--viewed"
                      >
                        <img
                          class="header__notify-img"
                          src="https://cf.shopee.vn/file/994228a247d6ede2b7c785449527ce2f_tn"
                          alt=""
                        />
                        <div class="header__notify-info">
                          <span class="header__notify-name"
                            >Macbook pro 2021</span
                          >
                          <span class="header__notify-description"
                            >Macbook pro 2021 khuyến mãi
                          </span>
                        </div>
                      </a>
                    </li>
                    <li class="header__notify-item">
                      <a
                        href=""
                        class="header__notify-link header__notify-item--viewed"
                      >
                        <img
                          class="header__notify-img"
                          src="https://cf.shopee.vn/file/7f7c772c33125a87a7950bbd7565b1b9_tn"
                          alt=""
                        />
                        <div class="header__notify-info">
                          <span class="header__notify-name"
                            >Laptop Dell mới nhất</span
                          >
                          <span class="header__notify-description"
                            >Laptop Dell văn phòng mới 2021</span
                          >
                        </div>
                      </a>
                    </li>
                  </ul>
                  <footer class="header__notify-footer">
                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                  </footer>
                </div>
              </li>
              <li class="header__navbar-item">
                <a href="" class="header__navbar-item-link">
                  <i class="header__navbar-icon far fa-question-circle"></i>
                  Trợ giúp
                </a>
              </li>
              <!-- Login/Log up -->
              <?php
                  if(isset($_POST['logout'])){
                    $delCart = $ct->del_all_cart();
                    session_destroy();
                    header("Location:index.php");
                  }
                $check_login = Session::get('userLogin');
                if(!$check_login) {
                ?>
                <li
                  class="
                    header__navbar-item
                    header__navbar-item--bold
                    header__navbar-item--separate
                    js-register
                    header__navbar-open-form
                  "
                >
                  Đăng ký
                </li>
                <li
                  class="
                    header__navbar-item header__navbar-item--bold
                    js-login
                    header__navbar-open-form
                  "
                >
                  Đăng nhập
                </li>
                <?php } else {?>
              <li class="header__navbar-item header__navbar-user">
                <img
                  src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                  alt=""
                  class="header__navbar-user-img"
                />
                <span class="header__navbar-user-name">Khánh Nguyễn</span>

                <ul class="header__navbar-user-menu">
                  <li class="header__navbar-user-item">
                    <a href="./myUser.php">Tài khoản của tôi</a>
                  </li>
                  <li class="header__navbar-user-item">
                    <a href="./myorder.php">Đơn mua</a>
                  </li>

                  <li
                    class="
                      header__navbar-user-item
                      header__navbar-user-item--separate
                    "
                  >
                  <form action="" method="post">
                    <button class="formLogout" type="submit" name="logout">Đăng xuất</button>
                  </form>
                  </li>
                </ul>
              </li>
              <?php }?>
            </ul>
          </nav>
          <!-- Header with Search -->
          <form action="SearchItem.php" method="post">
            <div class="header-with-search">
              <div class="header__logo">
                <a href="index.php" class="header__logo-link">
                  <img
                    src="./assets/img/LOGO.png"
                    class="header__logo-img"
                    alt=""
                  />
                </a>
              </div>
              <div class="header__search">
                <div class="header__search-input-wrap">
                  <input
                    type="text"
                    name="search"
                    class="header__search-input"
                    placeholder="Nhập tìm kiếm"
                  />
                  <!-- Search history -->
                  <div class="header__search-history"></div>
                </div>
                <div class="header__search-select">
                  <span class="header__search-select-label">Tên sản phấm</span>
                  <i class="header__search-select-icon fas fa-angle-down"></i>
                  <ul class="header__search-option">
                    <li
                      class="
                        header__search-option-item
                        header__search-option-item--active
                      "
                    >
                      <span>Tên sản phẩm</span>
                      <!-- <i class="fas fa-check"></i> -->
                    </li>
                    <li
                      class="
                        header__search-option-item
                        header__search-option-item--active
                      "
                    >
                      <span>Thương hiệu</span>
                      <!-- <i class="fas fa-check"></i> -->
                    </li>
                  </ul>
                </div>
                <button class="header__search-btn" type="submit">
                  <i class="header__search-icon fas fa-search"></i>
                </button>
              </div>
              <!-- Cart layout -->
              <div class="header__cart">
                <div class="header__cart-wrap">
                  <i class="header__cart-icon fas fa-shopping-cart"></i>
                  <?php
                  $checkCart = $ct->check_cart();
                  if($checkCart && Session::get("qty") > 0) {

             ?>
                  <span class="header__cart-notice"><?php
                  $qty = Session::get("qty");
                  echo $qty;
                  ?></span>
                  <?php
                                  }?>
                  <div class="header__cart-list header__cart-list--no-cart">
                    <!-- No cart: header__cart-list--no-cart -->
                    <img
                      src="./assets/img/no_cart.png"
                      alt=""
                      class="header__cart-list--no-cart-img"
                    />
                    <p class="header__cart-list--no-cart-msg">Chưa có sản phẩm</p>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

      </header>