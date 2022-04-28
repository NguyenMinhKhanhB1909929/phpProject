<?php include "./include/header.php"; ?>

<?php
 if(isset($_GET['cartId']) ) {
    $cartId = $_GET['cartId'];
    $deleteCart = $ct->deleteCart($cartId);
   }
   if(isset($_POST['update'])) {
      $productId = $_POST['productId'];
      $quantityItem = $_POST['quantityItem'];
      $updateCart = $ct->updateCart($productId,$quantityItem);
   }
?>
<?php
  if(!isset($_GET['id'])) {
    echo "<meta http-equiv='refresh' content='0;URL=?id=live'";
  }
?>
      <div class="app__container">
        <form action="" method="post">
        <div class="grid">
          <div class="link__curr">
            <i class="home-icon fas fa-home"></i>
            <span class="">Trang chủ</span>
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="isHere">Giỏ hàng</span>
          </div>
          <h1 class="cart-heading">Giỏ hàng</h1>
          <div class="table__item">
            <div class="table__item-title">
              <div class="table__item-title-text" style="width: 17%">
                Ảnh sản phầm
              </div>
              <div class="table__item-title-text" style="width: 33%">
                Tên sản phẩm
              </div>
              <div class="table__item-title-text" style="width: 15%">
                Đơn giá
              </div>
              <div class="table__item-title-text" style="width: 14%">
                Số lượng
              </div>
              <div class="table__item-title-text" style="width: 15%">
                Thành tiền
              </div>
              <div class="table__item-title-text" style="width: 6%">Xóa</div>
            </div>
            <?php
              $cartList = $ct->getCart();
              $subTotal = 0;
              $qty = 0;
              if($cartList) {
                while($result = $cartList->fetch_assoc()) {
            ?>
            <div class="table__item-content">
              <div class="table__item-title-text" style="width: 17%">
                <a
                  href="./ItemDes.php"
                  class="table__item-content-img"
                  style="
                    background-image: url(./Admin/production/uploads/<?php echo $result['image']; ?>);
                  "
                ></a>
              </div>
              <div class="table__item-content-text" style="width: 33%">
                <a href="./ItemDes.php"
                  ><?php echo $result['productName']; ?></a
                >
              </div>
              <div class="table__item-content-text" style="width: 15%">
                <span value="<?php echo $result['price']; ?>" class="table__item-content-price1"
                  ><?php echo $fm->format_currency($result['price']). " đ";?></span
                >
              </div>
              <div class="table__item-content-text" style="width: 14%">
                <div class="item__description-quantity-input">
                  <button style="background-color: white;" name="update" class="item__description-quantity-prev">-</button>
                  <input
                    type="text"
                    class="item__description-quantity-number"
                    value="<?php echo $result['quantity']; ?>"
                    name="quantityItem"
                  />
                  <input type="hidden" name="productId" value="<?php echo $result['productId'];?>">
                  <button style="background-color: white;" name="update" class="item__description-quantity-next">+</button>
                </div>
              </div>
              <div class="table__item-content-text" style="width: 15%">
                <span value="<?php
                $total = $result['price'] * $result['quantity'];
                $qty += $result['quantity'];
                echo $total;
                ?>" class="table__item-content-price"
                  ><?php
                echo $fm->format_currency($total). " đ";
              ?></span
                >
              </div>

              <div class="table__item-content-text" style="width: 6%">
                <form action="" method="get"><a href="orderItem.php?cartId=<?php echo $result['cartId'];?>"><i class="deleted-icon fas fa-times"></i></a></form>
              </div>

            </div>
            <?php
              $subTotal += $total;
              Session::set("qty", $qty);
                }
              };
            ?>


            <div class="table__item-sum-price">
              <div class="table__item-sum-price-text">Tổng tiền:</div>
              <span class="table__item-sum-price-number"><?php
                echo $fm->format_currency($subTotal). " VNĐ";
              ?>
            </span>
            </div>
          </div>

          <div class="btn-continue-ordered">
              <a class="btn-continue" href="./index.php" style="border: none">Tiếp tục mua hàng</a>
              <a class="btn-ordered" href="./formPay.php" name="" style="border: none">
                Thực hiện thanh toán
              </a>
            </div>

        </div>
            </form>
      </div>

 <?php include "../nienluan/include/footer.php"; ?>
