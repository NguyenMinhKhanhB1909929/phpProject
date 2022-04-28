<?php include "./include/header.php"; ?>
<?php
          if(isset($_POST['save'])) {
            $id = $id = Session::get('userId');
            $updateUser = $us->updateUser($_POST,$id);
          }
        ?>
<?php
  $checkLogin = Session::get('userLogin');
  if(!$checkLogin) {
    header("Location:index.php");
  } else {
    $id = Session::get('userId');
    $getUser = $us->showUser($id);
    if($getUser) {
      while($resultUser = $getUser->fetch_assoc()){
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
          <div class="grid__row app__content">
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
                <a
                  href="./myuser.php"
                  class="myuser__navbar-des-content ishover"
                  >Hồ sơ</a
                >
                <a href="./changePass.php" class="myuser__navbar-des-content"
                  >Đổi mật khẩu</a
                >
                <div class="myuser__navbar-des-title-wrap">
                  <i class="myuser__navbar-des-title-icon fas fa-clipboard"></i>
                  <a href="./myorder.php" class="myuser__navbar-des-title-text"
                    >Đơn mua</a
                  >
                </div>
              </div>
            </div>

              <div class="grid__column-10"><form action="" method="post">

                  <div class="myuser__content">
                    <h1 class="myuser__content-title">Hồ sơ của tôi</h1>
                    <div class="myuser__container">
                      <div class="grid__col-7">
                          <div class="myuser__content-wrap">
                            <div class="myuser__content-fullname-wrap">
                              <div class="myuser__content-label">Họ và tên:</div>
                              <input
                                type="text"
                                name="fullName"
                                class="myuser__content-fullname-input"
                                value="<?php echo $resultUser['fullName'];?>"
                              />
                            </div>
                            <div class="myuser__content-email-wrap">
                              <div class="myuser__content-label">Email:</div>
                              <input name="email" type="text" class="myuser__content-email-input" value="<?php echo $resultUser['Email'];?>">
                            </div>
                            <div class="myuser__content-phone-wrap">
                              <div class="myuser__content-label">Số điện thoại:</div>
                              <input type="text" name="phone" class="myuser__content-phone-input" value="<?php echo $resultUser['phone'];?>">
                            </div>
                            <div class="myuser__content-sex-wrap">
                              <div class="myuser__content-label">Giới tính:</div>
                              <input
                                type="radio"
                                name="sex"
                                class="myuser__content-sex-input"
                                value='0'
                                <?php
                                if($resultUser['sex']==0) echo "checked ";
                                ?>
                              />
                              <span class="myuser__content-sex-input-label">Nam</span>
                              <input
                                type="radio"
                                name="sex"
                                class="myuser__content-sex-input"
                                value='1'
                                <?php
                                 if($resultUser['sex']==1) echo "checked";
                                ?>
                              />
                              <span class="myuser__content-sex-input-label">Nữ</span>
                            </div>
                            <div class="myuser__content-address-wrap">
                              <div class="myuser__content-label">Địa chỉ:</div>
                              <input
                                type="text"
                                class="myuser__content-address-input"
                                value="46/14, KV5"
                              />
                            </div>
                            <div class="myuser__content-address-des-wrap">
                              <div class="myuser__content-label">Tỉnh thành:</div>
                              <input
                                type="text"
                                name="tinh"
                                class="myuser__content-address-input"
                                value="<?php echo $resultUser['tinh'];?>"
                              />

                            </div>
                            <div class="myuser__content-address-des-wrap">
                              <div class="myuser__content-label">Quận huyện:</div>
                              <input
                                type="text"
                                name="quan"
                                class="myuser__content-address-input"
                                value="<?php echo $resultUser['quan'];?>"
                              />
                            </div>
                            <div class="myuser__content-address-des-wrap">
                              <div class="myuser__content-label">Phường xã:</div>
                              <input
                                type="text"
                                name="phuong"
                                class="myuser__content-address-input"
                                value="<?php echo $resultUser['phuong'];?>"
                              />
                            </div>
                          </div>
                </div>
                      <div class="gird__col-5 myuser__content-main">
                        <div class="myuser__content-main-img-wrap">
                          <img
                            src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                            alt=""
                            class="myuser__content-main-img"
                          />
                        </div>
                        <div class="myuser__content-main-btn-wrap">
                          <a href="" class="myuser__content-main-btn">Chọn Ảnh</a>
                        </div>
                        <h4 class="myuser__content-main-des">
                          Dụng lượng file tối đa 1 MB
                        </h4>
                        <h4 class="myuser__content-main-des">
                          Định dạng:.JPEG, .PNG
                        </h4>
                      </div>
                    </div>
                    <div class="myuser__content-save-wrap">
                      <button name="save" type="submit" class="myuser__content-save-btn">Lưu</button>
                    </div>
                  </div>

              </form></div>
          </div>
        </div>
      </div>
<?php       }
    }
  }?>
 <?php include "../nienluan/include/footer.php"; ?>
