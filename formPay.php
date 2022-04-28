<?php include "./include/header.php"; ?>
<?php
  if(isset($_GET['orderId']) && $_GET['orderId']=='order') {
    $userId = Session::get('userId');
    $insertOrder = $ct->insertOrder($userId);
    $delCart = $ct->del_all_cart();
    header("Location:orderedSuccess.php");
  }
?>
      <div class="app__container">
        <div class="grid">
          <div class="link__curr">
            <i class="home-icon fas fa-home"></i>
            <span class="">Trang chủ</span>
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="">Giỏ hàng</span>
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="isHere">Thông tin giao hàng</span>
          </div>
          <div class="user-information-wrap">
            <?php
$checkLogin = Session::get('userLogin');
  if(!$checkLogin) {
    echo "Vui lòng Đăng nhập để thanh toán";
  } else {
    $id = Session::get('userId');
    $getUser = $us->showUser($id);
    if($getUser) {
      while($resultUser = $getUser->fetch_assoc()){
        ?>

            <div class="user__info">
              <h1 class="user__infor-titile">Thông tin người nhận</h1>
              <div class="user__infor-name">
                <div class="user__infor-name-label">Họ và tên:</div>
                <input
                  type="text"
                  class="user__infor-name-input"
                  value="<?php echo $resultUser['fullName'];?>"
                />
              </div>
              <div class="user__infor-email">
                <div class="user__infor-email-label">Email:</div>
                <input
                  type="text"
                  class="user__infor-email-input"
                  value="<?php echo $resultUser['Email'];?>"
                />
              </div>
              <div class="user__infor-phone">
                <div class="user__infor-phone-label">Số điện thoại:</div>
                <input
                  type="number"
                  class="user__infor-phone-input"
                  value="<?php echo $resultUser['phone'];?>"
                />
              </div>
              <div class="user__infor-address">
                <div class="user__infor-address-label">Địa chỉ:</div>
                <input
                  type="text"
                  class="user__infor-address-input"
                  value="46/14, KV5"
                />
              </div>
              <div class="user__infor-address-select">
                <div class="user__infor-address-wrap">
                  <div class="user__infor-address-wrap-label">Tỉnh thành:</div>
                  <input
                  type="text"
                  class="user__infor-address-input"
                  value="<?php echo $resultUser['tinh'];?>"
                />
                </div>
                <div class="user__infor-address-wrap">
                  <div class="user__infor-address-wrap-label">Quận huyện:</div>
                  <input
                  type="text"
                  class="user__infor-address-input"
                  value="<?php echo $resultUser['quan'];?>"
                />
                </div>
                <div class="user__infor-address-wrap">
                  <div class="user__infor-address-wrap-label">Phường xã:</div>
                  <input
                  type="text"
                  class="user__infor-address-input"
                  value="<?php echo $resultUser['phuong'];?>"
                />
                </div>
              </div>
              <div class="user__infor-note">
                <div class="user__infor-note-label">Ghi chú:</div>
                <textarea
                  name=""
                  id=""
                  cols="30"
                  rows="7"
                  class="user__infor-note-input"
                ></textarea>
              </div>
            </div>
            <div class="odered-and-payment">
              <div class="user-odered">
                <h1 class="user-odered__titile">Đơn hàng của bạn</h1>
                <?php
              $cartShow = $ct->getCart();
              if($cartShow) {
                $total = 0;
                while($resultGetCart = $cartShow->fetch_assoc()) {
              ?>
                <div class="user-odered__item-wrap">
                  <div class="user-odered__item-img"></div>
                  <div class="user-odered__item-name">
                    <?php echo $resultGetCart['productName'];?>
                  </div>
                  <div style="font-size: 1.8rem; padding: 0 18px 0 0">x<?php echo $resultGetCart['quantity'];?></div>
                  <div class="user-odered__item-price"><?php $totalItem = $resultGetCart['price']*$resultGetCart['quantity'];
                  echo $fm->format_currency($totalItem). ' đ';?></div>
                </div>
                              <?php
            $total +=   $resultGetCart['price'];
          }
}
              ?>
                <div class="separate"></div>

                <div class="user-odered__subtotal">
                  <div class="user-odered-subtotal-wrap">
                    <div class="user-odered-subtotal-title">Tạm tính</div>
                    <div class="user-odered-subtotal-price"><?php echo $fm->format_currency($total) .' đ';?></div>
                  </div>
                  <div class="user-odered-subtotal-travel-wrap">
                    <div class="user-odered-subtotal-travel-title">
                      Phí vận chuyển
                    </div>
                    <div class="user-odered-subtotal-travel-price">
                      Miễn phí
                    </div>
                  </div>
                </div>
                <div class="separate" style="height: 2px"></div>
                <div class="user-odered__total-wrap">
                  <div class="user-odered__total-wrap-title">Tổng cộng</div>
                  <div class="user-odered__total-wrap-price"><?php echo $fm->format_currency($total).' đ';?></div>
                </div>
              </div>
              <div class="user-payment">
                <h1 class="user-payment-titile">Phương thức thanh toán</h1>
                <div class="user-payment-options">
                  <div class="user-payment-option-wrap">
                    <input type="radio" name="1" class="user-payment-option" />
                    <label for="" class="user-payment-option-label"
                      >Thanh toán tại cửa hàng</label
                    >
                  </div>
                  <div class="user-payment-option-wrap">
                    <input type="radio" name="1" class="user-payment-option" />
                    <label for="" class="user-payment-option-label"
                      >Thanh toán khi nhận hàng (COD)</label
                    >
                  </div>
                  <div class="user-payment-option-wrap">
                    <input type="radio" name="1" class="user-payment-option" />
                    <label for="" class="user-payment-option-label"
                      >Thanh toán trực tiếp bằng thẻ ATM, IB, QRCode qua
                      Alepay</label
                    >
                  </div>
                  <div class="user-payment-option-wrap">
                    <input type="radio" name="1" class="user-payment-option" />
                    <label for="" class="user-payment-option-label"
                      >Thanh toán trả góp online</label
                    >
                  </div>
                </div>
              </div>
            </div>
            <?php       }
    }
  }?>
          </div>
          <div class="payment-btn-wrap">
            <a
              href="./orderItem.php"
              class="payment-btn"
              style="background-color: #0e40be"
              >Quay về giỏ hàng</a
            >
            <a href="?orderId=order" class="payment-btn">Đặt hàng</a>
          </div>
        </div>
      </div>

 <?php include "../nienluan/include/footer.php"; ?>
