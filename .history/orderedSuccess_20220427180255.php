<?php include "../nienluan/include/header.php"; ?>

      <div class="app__container">
        <div class="grid">
          <div class="ordered__success">
            <div class="ordered__success-icon-wrap">
              <i class="ordered__success-icon fas fa-check-circle"></i>
            </div>
            <div class="ordered__success-titile">Đặt hàng thành công</div>
          </div>
          <div class="ordered__success-table">
            <div class="ordered__success-table-title">
              <div class="ordered__success-table-title-time" style="width: 15%">
                Thời gian
              </div>
              <div class="ordered__success-table-title-name" style="width: 50%">
                Tên sản phẩm
              </div>
              <div
                class="ordered__success-table-title-quantity"
                style="width: 15%"
              >
                Số lượng
              </div>
              <div
                class="ordered__success-table-title-price"
                style="width: 20%"
              >
                Thành tiền
              </div>
            </div>
            <?php
              $userId = Session::get('userId');
              $getOrder = $ct->getOrder($userId);
              $total = 0;
              if($getOrder) {
                while($resultOrder = $getOrder->fetch_assoc()) {

            ?>
            <div class="ordered__success-table-content">
              <div
                class="ordered__success-table-content-time-wrap"
                style="width: 15%"
              >
                <div class="ordered__success-table-content-hour"><?php echo $resultOrder['date_order']; ?></div>
              </div>
              <div
                class="ordered__success-table-content-name"
                style="width: 50%"
              >
                <?php echo $resultOrder['productName']; ?>
              </div>
              <div
                class="ordered__success-table-content-quantity"
                style="width: 15%"
              >
                x<?php echo $resultOrder['quantity']; ?>
              </div>
              <div
                class="ordered__success-table-content-price"
                style="width: 20%"
              >
                <?php  $totalItem = $resultOrder['price'];
                echo $fm->format_currency($totalItem).' đ'; ?>
              </div>
            </div>
             <?php
                  $total +=   $totalItem;
                      }
              } else {header("Location:index.php");}?>
            <div class="ordered__success-table-content">
              <div
                class="ordered__success-table-content-time-wrap"
                style="width: 15%"
              >
                <div class="ordered__success-table-content-hour">Tổng tiền:</div>
              </div>
              <div
                class="ordered__success-table-content-name"
                style="width: 50%"
              >
              </div>
              <div
                class="ordered__success-table-content-quantity"
                style="width: 15%"
              >
              </div>
              <div
                class="ordered__success-table-content-price"
                style="width: 20%"
              >
                <?php echo $fm->format_currency($total).' đ';?>
              </div>
            </div>
          </div>
          <div class="order__success-des">
            <h3 class="order__success-des-title1">
              Chúng tôi sẽ liên hệ với bạn sau khi nhận được đơn hàng này
            </h3>
            <h3 class="order__success-des-title2">
              Mọi thắc mắc xin vui lòng liên hệ hotline: 1900.1410
            </h3>
          </div>
          <div class="order__success-btn-wrap">
            <a href="./index.php" class="order__success-btn">
              <i class="order__success-home-icon fas fa-home"></i>
              <span class="order__success-btn-title">Trở về Trang chủ</span>
            </a>
          </div>
        </div>
      </div>

 <?php include "../nienluan/include/footer.php"; ?>
