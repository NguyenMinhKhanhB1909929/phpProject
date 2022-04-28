<?php include_once "../nienluan/include/header.php"; ?>
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
                <a href="./myuser.php" class="myuser__navbar-des-content"
                  >Hồ sơ</a
                >
                <a
                  href="./changePass.php"
                  class="myuser__navbar-des-content ishover"
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

            <div class="grid__column-10">
              <div class="myuser__content">
                <h1 class="myuser__content-title">Đổi mật khẩu</h1>
                <div class="myuser__container">
                  <div class="myuser__content-wrap" style="width: 100%">
                    <div
                      class="myuser__content-fullname-wrap"
                      style="justify-content: center; position: relative"
                    >
                      <div
                        class="myuser__content-label"
                        style="min-width: 165px"
                      >
                        Mật khẩu hiện tại:
                      </div>
                      <input
                        type="text"
                        class="myuser__content-fullname-input flex0"
                        style="padding-right: 80px"
                      />
                      <div class="myuser__content-forgot-pass">
                        Quên mật khẩu?
                      </div>
                    </div>

                    <div
                      class="myuser__content-address-wrap"
                      style="justify-content: center"
                    >
                      <div
                        class="myuser__content-label"
                        style="min-width: 165px"
                      >
                        Mật khẩu mới:
                      </div>
                      <input
                        type="text"
                        class="myuser__content-address-input flex0"
                        style="padding-right: 80px"
                      />
                    </div>
                    <div
                      class="myuser__content-address-wrap"
                      style="justify-content: center"
                    >
                      <div
                        class="myuser__content-label"
                        style="min-width: 165px"
                      >
                        Xác nhận Mật khẩu:
                      </div>
                      <input
                        type="text"
                        class="myuser__content-address-input flex0"
                        style="padding-right: 80px"
                      />
                    </div>
                  </div>
                </div>
                <div class="myuser__content-save-wrap">
                  <a href="/" class="myuser__content-save-btn">Xác nhận</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php include "../nienluan/include/footer.php"; ?>