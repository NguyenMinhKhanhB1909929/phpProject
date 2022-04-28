<?php
  include "./include/header.php";
?>
      <div class="app__container">
        <div class="grid">
          <div class="banner">
            <img src="./assets/img/banner.png" class="banner_img" alt="" />
          </div>
          <div class="trademark">
            <img src="./assets/img/xiaomi.jpg" class="trademark-img" alt="" />
            <img
              src="./assets/img/samsung-img.jpg"
              class="trademark-img"
              alt=""
            />
            <img src="./assets/img/msi-img.jpg" class="trademark-img" alt="" />
            <img src="./assets/img/hp-img.jpg" class="trademark-img" alt="" />
            <img
              src="./assets/img/apple-img.jpg"
              class="trademark-img"
              alt=""
            />
            <img src="./assets/img/asus-img.jpg" class="trademark-img" alt="" />
          </div>
          <div class="item-highlight">
            <span class="text-item-highlight">SẢN PHẨM THEO NHU CẦU</span>
            <div class="items-highlight">
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/432b8d98e98460fc9f1d3a04d1818f6f);
                  "
                ></div>
                <div class="text-item">GAMING</div>
              </div>
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/b8ae87c9b51fb3b795eba17051a891b5);
                  "
                ></div>
                <div class="text-item">MỎNG NHẸ</div>
              </div>
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/09c2f034008754ef305ad3c4d16d8b3c);
                  "
                ></div>
                <div class="text-item">MACBOOK</div>
              </div>
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/d8c891e04742f6ae3f2e2bb0ed4272b1);
                  "
                ></div>
                <div class="text-item">TRUYỀN THÔNG</div>
              </div>
            </div>
          </div>
          <div class="link__curr">
            <i class="home-icon fas fa-home"></i>
            <a
              href="./index.php"
              class=""
              style="color: inherit; text-decoration: none"
              >Trang chủ</a
            >
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="link__curr-text isHere">Tất cả sản phẩm</span>
          </div>
          <div class="grid__row app__content">
            <div class="grid__column-2">
              <nav class="category">
                <h3 class="category__heading">
                  <i class="category__heading-icon fas fa-list"></i>
                  Danh mục
                </h3>
                <ul class="category-list">
                  <li class="category-item1 category-item--active">
                    <div class="category-item__link">Tất cả sản phẩm</div>
                  </li>
                   <?php
                    $categoryList = $cat->getCat();
                    if($categoryList) {
                      while($resultCat = $categoryList->fetch_assoc()){
                  ?>
                  <li class="category-item1">
                    <a href="./productByCat.php?catId=<?php echo $resultCat['catId']; ?>" class="category-item__link"><?php echo $resultCat['catName'];?></a>
                  </li>
                  <?php
                     }
                    }
                  ?>
                  <li class="category-item1">
                    <div class="category-item__link">
                      Thêm
                      <i class="icon-ctg-item fas fa-angle-down"></i>
                    </div>
                  </li>
                </ul>
              </nav>
              <nav class="category">
                <h3 class="category__heading">
                  <i class="category__heading-icon fas fa-coins"></i>
                  Khoảng giá
                </h3>
                <ul class="category-list">
                  <li class="category-item category-item--active">
                    <div class="category-item__link">Tất cả</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Dưới 10 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Từ 10 - 15 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Từ 15 - 20 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Từ 20 - 25 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Trên 25 triệu</div>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="grid__column-10">
              <!-- Home Filter -->
              <div class="home-filter">
                <span class="home-filter__label">Sắp xếp theo</span>
                <button class="home-filter__btn btn btn-primary">
                  Phổ biến
                </button>
                <button class="home-filter__btn btn">Mới nhất</button>
                <button class="home-filter__btn btn">Bán chạy</button>

                <div class="select-input">
                  <span class="select-input__label">Giá</span>
                  <i class="select-input__icon fas fa-angle-down"></i>
                  <!-- List option -->
                  <ul class="select-input__list">
                    <li class="select-input__item1">
                      <div class="select-input__link">Giá: Thấp đến cao</div>
                    </li>
                    <li class="select-input__item1">
                      <div class="select-input__link">Giá: Cao đến thấp</div>
                    </li>
                  </ul>
                </div>
                <div class="select-input">
                  <span class="select-input__label">Thương hiệu</span>
                  <i class="select-input__icon fas fa-angle-down"></i>
                  <!-- List option -->
                  <ul class="select-input__list">
                    <li class="select-input__item">
                      <div class="select-input__link">ASUS</div>
                    </li>
                    <li class="select-input__item">
                      <div class="select-input__link">DELL</div>
                    </li>
                    <li class="select-input__item">
                      <div class="select-input__link">HP</div>
                    </li>
                  </ul>
                </div>

                <div class="home-filter__page">
                  <span class="home-filter__page-num">
                    <span class="home-filter__page-current">1</span>/2
                  </span>
                  <div class="home-filter__page-control">
                    <a
                      href=""
                      class="
                        home-filter__page-btn home-filter__page-btn--disable
                      "
                    >
                      <i class="fas fa-angle-left"></i>
                    </a>
                    <a href="" class="home-filter__page-btn">
                      <i class="fas fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!-- San Pham -->
              <div class="home-product page-current">
                <div class="grid__row" style="width:100%">
                <?php
                  $getProduct = $pd->getProduct();
                  if($getProduct) {
                    while ($result = $getProduct->fetch_assoc()){
                  ?>
                  <div class="grid__column-2-4">
                    <a href="./ItemDes.php?productId=<?php echo $result['productId']; ?>" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(./Admin/production/uploads/<?php echo $result['image'];?>
                            );
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          <?php
                            echo $result['productName'];
                          ?>
                        </h4>
                        <div class="home-product-item__price">
                          <!-- <span class="home-product-item__price-old"
                            >35.990.000đ</span
                          > -->
                          <span class="home-product-item__price-current"
                            ><?php echo $fm->format_currency($result['price']).' VNĐ'; ?></span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                          </div>
                          <!-- <span class="home-product-item__sold">18 Đã bán</span> -->
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <?php
                          if($result['productId'] == 6) {
                        ?>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <?php };?>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >14%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <?php
                    }
                  };
                  ?>
                </div>
              </div>

              <!-- Pagination -->
              <ul class="pagination">
                <li class="pagination-item">
                  <div class="pagination-item__link">
                    <i class="pagination-item__icon fas fa-angle-left"></i>
                  </div>
                </li>
                <li class="pagination-item-page pagination-item__active">
                  <div class="pagination-item__link">1</div>
                </li>
                <li class="pagination-item-page">
                  <div class="pagination-item__link">2</div>
                  <!-- </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">3</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">4</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">5</a>
                </li>
                <li class="pagination-item">
                  <span
                    class="
                      pagination-item__link--no-hover pagination-item__link
                    "
                    >...</span
                  >
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">14</a>
                </li> -->
                </li>

                <li class="pagination-item">
                  <div href="" class="pagination-item__link">
                    <i class="pagination-item__icon fas fa-angle-right"></i>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
<?php
  include "include/footer.php";
?>
