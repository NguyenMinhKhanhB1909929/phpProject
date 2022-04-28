<?php
  include "include/header.php";
?>
<?php
  $getProduct = $pd->getProduct();
  if(!isset($_GET['productId']) || $_GET['productId'] == NULL  ) {
    echo "<script>window.location='index.php'</script>";
  } else {
    $productId = $_GET['productId'];
  }
  if(isset($_POST['submit']) && isset($_POST['cartQuantity']) && $_POST['cartQuantity'] > 0) {
    $cartQuantity = $_POST['cartQuantity'];
    $addCart = $ct->addCart($productId,$cartQuantity);
  }
    $detail = $pd->detailProduct($productId);
    if($detail) {
      while($result = $detail->fetch_assoc()) {
?>

      <div class="app__container">
        <div class="grid">
          <div class="link__curr">
            <i class="home-icon fas fa-home"></i>
            <span class="">Trang chủ</span>
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="">Laptop</span>
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="isHere"> <?php echo $result['productName'];?> </span>
          </div>
          <div class="item__description">
            <div class="grid__row">
              <div class="gird__col-5">
                <div class="item__description-img">
                  <div class="item__img-current" style="
                            background-image: url(./Admin/production/uploads/<?php echo $result['image']; ?>);
                          "></div>

                  <div class="item__img-list">
                    <div class="grid__row">
                      <div class="grid__col-3">
                        <div
                          class="item__img isCurrent"
                          style="
                            background-image: url(https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn);
                          "
                        ></div>
                      </div>
                      <div class="grid__col-3">
                        <div
                          class="item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/5e3b5d83900b750827956764031c1213_tn);
                          "
                        ></div>
                      </div>
                      <div class="grid__col-3">
                        <div
                          class="item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/2dbedfe360dad10ff5d51e5ab4a3c7c1_tn);
                          "
                        ></div>
                      </div>
                      <div class="grid__col-3">
                        <div
                          class="item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/33692e0e86189b2e44df1029e5923889_tn);
                          "
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="grid__col-7">
                <div class="item__description-name">
                  <h2 class="item__name">
                    <?php
                      echo $result['productName'];
                    ?>
                  </h2>
                  <div class="item__review-wrap">
                    <div class="item__star">
                      <span>Đánh giá</span>
                      <i class="item__star-icon fas fa-star"></i
                      ><i class="item__star-icon fas fa-star"></i
                      ><i class="item__star-icon fas fa-star"></i
                      ><i class="item__star-icon fas fa-star"></i
                      ><i class="item__star-icon fas fa-star"></i>
                    </div>
                    <div class="item__sold">2 Đã bán</div>
                  </div>
                  <div class="item__description-price-wrap">
                    <span class="item__description-price"><?php echo $fm->format_currency($result['price']). " VNĐ";?></span>
                  </div>
                  <div class="item__description-parameter">
                    <ul class="item__parameter-list">
                      <li class="item__parameter-item">
                        <i class="item__parameter-item-icon fas fa-check"></i>
                        CPU AMD Ryzen R7-5800H (16MB, up to 4.40GHz)
                      </li>
                      <li class="item__parameter-item">
                        <i class="item__parameter-item-icon fas fa-check"></i>
                        RAM 8GB DDR4 3200MHz (1x8GB)
                      </li>
                      <li class="item__parameter-item">
                        <i class="item__parameter-item-icon fas fa-check"></i
                        >SSD 512GB PCIe NVMe
                      </li>
                      <li class="item__parameter-item">
                        <i class="item__parameter-item-icon fas fa-check"></i>
                        VGA NVIDIA GeForce RTX 3060 6GB GDDR6
                      </li>
                      <li class="item__parameter-item">
                        <i class="item__parameter-item-icon fas fa-check"></i>
                        Display 15.6Inch FHD IPS 144Hz
                      </li>
                      <li class="item__parameter-item">
                        <i class="item__parameter-item-icon fas fa-check"></i
                        >Pin 4Cell 57WHrs
                      </li>
                      <li class="item__parameter-item">
                        <i class="item__parameter-item-icon fas fa-check"></i>
                        Color Shale Black (Đen)
                      </li>
                      <li class="item__parameter-item">
                        <i class="item__parameter-item-icon fas fa-check"></i
                        >Weight 2.20 kg
                      </li>
                      <li class="item__parameter-item">
                        <i class="item__parameter-item-icon fas fa-check"></i>OS
                        Windows 11 Home
                      </li>
                    </ul>
                  </div>
                  <form action="" method="post">
                    <div class="item__description-quantity">
                      <span class="item__description-quantity-text"
                        >Số lượng</span
                      >
                      <div class="item__description-quantity-input">
                        <div class="item__description-quantity-prev">-</div>
                        <input
                          type="number"
                          class="item__description-quantity-number"
                          value="1"
                          name="cartQuantity"
                        />
                        <div class="item__description-quantity-next">+</div>
                      </div>
                      <span class="item__description-quantity-text-number"
                        >Còn <?php echo $result['quantity'];?> sản phẩm</span
                      >
                    </div>
                    <div class="item__description-order">
                      <div
                        class="item__description-order-cart"
                        style="cursor: pointer"
                      >
                        <i
                          class="
                            item__description-order-cart-icon
                            fas
                            fa-cart-plus
                          "
                        ></i>
                        <button name="submit" style="border: none; background-color: white; color: var(--primary-color); cursor: pointer;">
                          Thêm vào giỏ hàng
                        </button>
                      </div>
                      <button
                        href=""
                        class="item__description-ordered"
                        name="submit"
                        style="border: none;"
                      >
                        Mua hàng
                      </button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
          <div class="item__details-and-top-item">
            <div class="grid__row">
              <div class="grid__column-10">
                <div class="item__details">
                  <h1 class="item__details-heading">Mô tả sản phẩm</h1>
                  <ul class="item__details-list">
                    <span class="item__details-list-heading"
                      >Thông số Acer Nitro 5 AN515-45-R0B6</span
                    >
                    <li class="item__details-item">
                      CPU AMD Ryzen 7 5800H 3.2GHz up to 4.4GHz 16MB
                    </li>
                    <li class="item__details-item">
                      RAM 8GB DDR4 3200MHz (2x SO-DIMM socket, up to 32GB SDRAM)
                    </li>
                    <li class="item__details-item">
                      Ổ cứng 512GB SSD M.2 PCIE (Còn trống 1 khe SSD M.2 PCIE và
                      1 khe 2.5" SATA)
                    </li>
                    <li class="item__details-item">
                      Card đồ họa NVIDIA GeForce RTX 3060 6GB GDDR6 + AMD
                      Radeon™ Graphics
                    </li>
                    <li class="item__details-item">
                      Màn hình 15.6" FHD (1920 x 1080) IPS, 144Hz, Anti-Glare
                    </li>
                    <li class="item__details-item">
                      Cổng giao tiếp 1x USB 3.2 Gen 2 Type-C Ports (up to 10
                      Gbps)
                    </li>
                    <li class="item__details-item">
                      1x USB 3.2 Gen 2 Type-A Ports
                    </li>
                    <li class="item__details-item">
                      2x USB 3.2 Gen 1 Type-A Ports
                    </li>
                    <li class="item__details-item">RJ45</li>
                    <li class="item__details-item">1x HDMI</li>
                    <li class="item__details-item">Ổ quang None</li>
                    <li class="item__details-item">
                      Audio Waves MaxxAudio®, Acer TrueHarmony™
                    </li>
                    <li class="item__details-item">Led-Keyboard RGB 4 vùng</li>
                    <li class="item__details-item">Đọc thẻ nhớ None</li>
                    <li class="item__details-item">
                      Chuẩn LAN 10/100/1000/Gigabits Base T
                    </li>
                    <li class="item__details-item">
                      Chuẩn WIFI 802.11AX (2x2)
                    </li>
                    <li class="item__details-item">Bluetooth v5.0</li>
                    <li class="item__details-item">Webcam HD Webcam</li>
                    <li class="item__details-item">
                      Hệ điều hành Windows 10 Home
                    </li>
                    <li class="item__details-item">Pin 4 Cell 57WHr</li>
                    <li class="item__details-item">Trọng lượng 2.30 kg</li>
                    <li class="item__details-item">Màu sắc Đen</li>
                    <li class="item__details-item">
                      Kích thước 363.4 x 255 x 23.9 mm
                    </li>
                    <span class="item__details-item"
                      >Sản phẩm Full Box gồm : Máy + Sạc + Sách hướng dẫn sử
                      dụng.</span
                    ><br />
                    <span class="item__details-item"
                      >Sản phẩm được bảo hành 12 tháng tại các TTBH hãng trên
                      toàn quốc.</span
                    ><br />
                    <span class="item__details-item"
                      >Ngoài ra bạn có thể đem đến các chi nhánh để được hỗ trợ
                      kỹ thuật.</span
                    >
                  </ul>
                </div>
              </div>
              <div class="grid__column-2">
                <div class="item__top-list">
                  <h3 class="item__top-list-heading">Top sản phẩm bán chạy</h3>
                  <a href="" class="item-top-wrap-link">
                    <div
                      class="item-top-wrap"
                      style="
                        background-image: url(https://cf.shopee.vn/file/5e02016132da0cb33eaaeea8c96d5438_tn);
                      "
                    >
                      <h4 class="item-top-name">
                        Laptop Asus UX331UAL EG021TS i5-8250, 8Gb Ram, SSD
                        512GB, intel HD Graphics, Win 10, 13.3 inch FHD
                      </h4>
                      <h4 class="item-top-price">17.150.000đ</h4>
                    </div>
                  </a>
                  <a href="" class="item-top-wrap-link">
                    <div
                      class="item-top-wrap"
                      style="
                        background-image: url(https://cf.shopee.vn/file/28ce3982dbcd64a485bad85c027cd7ef_tn);
                      "
                    >
                      <h4 class="item-top-name">
                        Laptop Asus VivoBook A412FA i3-10110U/ 4Gb Ram/ 512Gb
                        SSD/ Intel HD Graphics/ 14.0 inch FHD/ win10
                      </h4>
                      <h4 class="item-top-price">19.990.000đ</h4>
                    </div>
                  </a>
                  <a href="" class="item-top-wrap-link">
                    <div
                      class="item-top-wrap end"
                      style="
                        background-image: url(https://cf.shopee.vn/file/b7c41621ef098b3794cb9fdd0d6b718e_tn);
                      "
                    >
                      <h4 class="item-top-name">
                        Laptop MSI GF63 Thin 10SC-468VN i5-10500H 8GB 512GB
                        GTX1650 15.6' 144Hz Win 10
                      </h4>
                      <h4 class="item-top-price">20.690.000đ</h4>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="evaluate__item">
            <h2 class="evaluate__text">Đánh giá sản phẩm</h2>
            <div class="evaluate-content-wrap">
              <div class="evaluate__item-start-group">
                <div class="evaluate__item-star-group-number">
                  <h1 style="font-size: 36px">4.3/</h1>
                  <span>5</span>
                  <i class="fas fa-star" style="font-size: 23px"></i>
                </div>
                <div class="evaluate__item-star-wrap">
                  <div class="evaluate__item-star-wrap-gr">
                    <div class="evaluate__item-star-label">
                      5 <i class="fas fa-star"></i>
                    </div>
                    <div class="evaluate__item-star-input5"></div>
                    <div class="evaluate__item-star-percent">70%</div>
                  </div>
                  <div class="evaluate__item-star-wrap-gr">
                    <div class="evaluate__item-star-label">
                      4 <i class="fas fa-star"></i>
                    </div>
                    <div class="evaluate__item-star-input4"></div>
                    <div class="evaluate__item-star-percent">22%</div>
                  </div>
                  <div class="evaluate__item-star-wrap-gr">
                    <div class="evaluate__item-star-label">
                      3 <i class="fas fa-star"></i>
                    </div>
                    <div class="evaluate__item-star-input3"></div>
                    <div class="evaluate__item-star-percent">5%</div>
                  </div>
                  <div class="evaluate__item-star-wrap-gr">
                    <div class="evaluate__item-star-label">
                      2 <i class="fas fa-star"></i>
                    </div>
                    <div class="evaluate__item-star-input2"></div>
                    <div class="evaluate__item-star-percent">2%</div>
                  </div>
                  <div class="evaluate__item-star-wrap-gr">
                    <div class="evaluate__item-star-label">
                      1 <i class="fas fa-star"></i>
                    </div>
                    <div class="evaluate__item-star-input1"></div>
                    <div class="evaluate__item-star-percent">1%</div>
                  </div>
                </div>
              </div>
              <div class="evaluate__wrap">
                <div class="evaluate__user">
                  <img
                    src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                    alt=""
                    class="evaluate__user-img"
                  />
                </div>
                <div class="evaluate__comment-wrap">
                  <textarea
                    placeholder="Nội dung đánh giá sản phẩm"
                    class="evaluate__content"
                  ></textarea>
                  <div class="evaluate__comment-star">
                    <div class="evaluate__comment-label">Đánh giá:</div>
                    <i class="evaluate__comment-star-icon fa fa-star"></i>
                    <i class="evaluate__comment-star-icon fa fa-star"></i>
                    <i class="evaluate__comment-star-icon fa fa-star"></i>
                    <i class="evaluate__comment-star-icon fa fa-star"></i>
                    <i class="evaluate__comment-star-icon fa fa-star"></i>
                  </div>
                  <div class="evaluate__comment-btn-wrap">
                    <a href="" class="evaluate__comment-btn">Gửi</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item__similars">
            <div class="item__similars-box">Sản phẩm tương tự</div>
            <div class="grid__row">
              <div class="grid__column-2">
                <div
                  class="item__similar"
                  style="
                    background-image: url(https://cf.shopee.vn/file/72741deedf79d2325d721aea0e1aceeb);
                  "
                >
                  <h4 class="item-similar-name">
                    Laptop ASUS FX506LH-HN002T GTX1650 i5-10300H 8G 512G 15.6''
                    W10
                  </h4>
                  <h4 class="item-similar-price">21.170.000đ</h4>
                </div>
              </div>
              <div class="grid__column-2">
                <div
                  class="item__similar"
                  style="
                    background-image: url(https://cf.shopee.vn/file/532fd35f902fb4a9532b11baddaaa7f5_tn);
                  "
                >
                  <h4 class="item-similar-name">
                    Laptop Acer Aspire 3 A315-56-502X i5-1035G1 | 4GB | 256GB |
                    15.6" FHD | Win 10
                  </h4>
                  <h4 class="item-similar-price">13.990.000đ</h4>
                </div>
              </div>
              <div class="grid__column-2">
                <div
                  class="item__similar"
                  style="
                    background-image: url(https://cf.shopee.vn/file/a8d348ae36cf07b53a3448a24ad64dcf_tn);
                  "
                >
                  <h4 class="item-similar-name">
                    Laptop ASUS ROG Strix G513IC-HN002T R7-4800H 8GB 512GB RTX™
                    3050 15.6' 144Hz W10
                  </h4>
                  <h4 class="item-similar-price">26.990.000đ</h4>
                </div>
              </div>
              <div class="grid__column-2">
                <div
                  class="item__similar"
                  style="
                    background-image: url(https://cf.shopee.vn/file/d62811fc7d1453e11a12c088781712af_tn);
                  "
                >
                  <h4 class="item-similar-name">
                    Laptop MSI Katana GF76 11UC-096VN i7-11800H | 8GB | 512GB |
                    GeForce RTX™ 3050 4GB | 17.3' FHD 144Hz | Win 10
                  </h4>
                  <h4 class="item-similar-price">28.990.000đ</h4>
                </div>
              </div>
              <div class="grid__column-2">
                <div
                  class="item__similar"
                  style="
                    background-image: url(https://cf.shopee.vn/file/be17b74ba24d7028a4cc2b5fb2c63eb9_tn);
                  "
                >
                  <h4 class="item-similar-name">
                    Laptop Acer Nitro 5 AN515-45-R3SM R5-5600H 8GB 512GB GTX
                    1650 15.6' W10
                  </h4>
                  <h4 class="item-similar-price">22.690.000đ</h4>
                </div>
              </div>
              <div class="grid__column-2">
                <div
                  class="item__similar"
                  style="
                    background-image: url(https://cf.shopee.vn/file/9232c230dc2ae4a5a414a19cb7d76fa3_tn);
                  "
                >
                  <h4 class="item-similar-name">
                    Laptop Acer Aspire 7 A715-42G-R1SB R5-5500U | 8GB | 256GB |
                    GeForce® GTX 1650 4GB | 15.6' FHD 144Hz | Win 10
                  </h4>
                  <h4 class="item-similar-price">20.690.000đ</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <?php
              }
            };
            ?>

<?php include "../nienluan/include/footer.php"; ?>
