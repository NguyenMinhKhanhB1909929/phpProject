<?php include "../nienluan/include/header.php"; ?>
<?php
  $checkLogin = Session::get('userLogin');
  if(!$checkLogin) {
    header("Location:index.php");
  }
        ?>
      <div class="app__container">
        <div class="grid">
          <div class="link__curr">
            <i class="home-icon fas fa-home"></i>
            <a
              href="./FormUser.php"
              class=""
              style="color: inherit; text-decoration: none"
              >Trang chủ</a
            >
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="link__curr-text isHere">Tài khoản của tôi</span>
          </div>
          <div class="grid__row app__content" style="padding-bottom: 18px">
            <div class="grid__column-2">
              <div class="myuser__navbar">
                <div class="myuser__navbar-des-wrap">
                  <div class="myuser__navbar-des-img-wrap">
                    <img
                      src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                      alt=""
                      class="myuser__navbar-des-img"
                    />
                  </div>
                  <div class="myuser__navbar-des-name-wrap">
                    <div class="myuser__navbar-des-name">KhanhB1909929</div>
                    <div class="myuser__navbar-des-setting">
                      <i class="myuser__navbar-des-setting-icon fas fa-pen"></i>
                      <span class="myuser__navbar-des-setting-title"
                        >Sửa hồ sơ</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="myuser__navbar-des">
                <div class="myuser__navbar-des-title-wrap">
                  <i class="myuser__navbar-des-title-icon fas fa-user"></i>
                  <span class="myuser__navbar-des-title-text"
                    >Tài khoản của tôi</span
                  >
                </div>
                <a href="./myuser.php" class="myuser__navbar-des-content"
                  >Hồ sơ</a
                >
                <a href="./changePass.php" class="myuser__navbar-des-content"
                  >Đổi mật khẩu</a
                >
                <div class="myuser__navbar-des-title-wrap">
                  <i class="myuser__navbar-des-title-icon fas fa-clipboard"></i>
                  <a
                    href="./myorder.php"
                    class="myuser__navbar-des-title-text ishover"
                    ishover
                    >Đơn mua</a
                  >
                </div>
              </div>
            </div>

            <div class="grid__column-10">
              <div class="myuser__content">
                <h1 class="myuser__content-title">Đơn hàng của tôi</h1>
                <div class="myorder__content-wrap">
                  <div class="myorder__content-wrap-title" style="width: 5%">
                    STT
                  </div>
                  <div class="myorder__content-wrap-title" style="width: 24%">
                    Ngày đặt hàng
                  </div>
                  <div class="myorder__content-wrap-title" style="width: 34%">
                    Tên sản phẩm
                  </div>
                  <div class="myorder__content-wrap-title" style="width: 15%">
                    Tình trạng
                  </div>
                  <div class="myorder__content-wrap-title" style="width: 22%">
                    Yêu cầu
                  </div>
                </div>
              <?php
              $userId = Session::get('userId');
              $getOrder = $ct->getOrdered($userId);
              if($getOrder) {
                $i=1;
                while($resultOrder = $getOrder->fetch_assoc()) {
            ?>
                <div class="myorder__content-item-wrap" style="margin-top: 0">
                  <div class="myorder__content-wrap-item" style="width: 5%">
                    <?php echo $i++;?>
                  </div>
                  <div
                    class="myorder__content-wrap-item flexcol"
                    style="width: 24%"
                  >
                    <div class="myorder__content-wrap-item1"><?php echo $resultOrder['date_order'];?></div>
                  </div>
                  <div class="myorder__content-wrap-item" style="width: 34%">
                    <?php echo $resultOrder['productName'];?>
                  </div>
                  <div class="myorder__content-wrap-item" style="width: 15%">
                    <?php
                      if($resultOrder['status']) {
                        echo "Đang giao hàng";
                      } else { echo "Chờ duyệt";}
                    ?>
                  </div>
                  <div class="myorder__content-wrap-item" style="width: 22%">
                    <div class="myorder__content-wrap-see-btn-wrap">
                      <i class="myorder__content-wrap-see fas fa-eye"></i>
                      Xem chi tiết
                    </div>
                    <div class="myorder__content-wrap-stop-btn-wrap">
                      <i
                        class="myorder__content-wrap-stop-btn fas fa-times"
                      ></i>
                      Hủy
                    </div>
                  </div>
                </div>
                <?php }
              }?>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php include "../nienluan/include/footer.php"; ?>
