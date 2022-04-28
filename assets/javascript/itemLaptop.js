var laptopItem = document.querySelector(".laptop-item");

const itemLaptop = {
  laptops: [
    {
      name: "Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10",
      priceCurrent: "30.990.000",
      priceOld: "35.990.000",
      sold: 18,
      brand: "NMK-Shop",
      origin: "Cần Thơ",
      saleOffPecent: 14,
      imgLap: "https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn",
    },
    {
      name: "Laptop ASUS FX506LH-HN002T GTX1650 i5-10300H 8G 512G 15.6'' W10",
      priceCurrent: "21.170.000",
      priceOld: "21.990.000",
      sold: 7,
      brand: "NMK-Shop",
      origin: "Cần Thơ",
      saleOffPecent: 4,
      imgLap: "https://cf.shopee.vn/file/72741deedf79d2325d721aea0e1aceeb",
    },
    {
      name: "Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10",
      priceCurrent: "30.990.000",
      priceOld: "35.990.000",
      sold: 18,
      brand: "NMK-Shop",
      origin: "Cần Thơ",
      saleOffPecent: 14,
      imgLap: "https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn",
    },
    {
      name: "Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10",
      priceCurrent: "30.990.000",
      priceOld: "35.990.000",
      sold: 18,
      brand: "NMK-Shop",
      origin: "Cần Thơ",
      saleOffPecent: 14,
      imgLap: "https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn",
    },
    {
      name: "Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10",
      priceCurrent: "30.990.000",
      priceOld: "35.990.000",
      sold: 18,
      brand: "NMK-Shop",
      origin: "Cần Thơ",
      saleOffPecent: 14,
      imgLap: "https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn",
    },
    {
      name: "Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10",
      priceCurrent: "30.990.000",
      priceOld: "35.990.000",
      sold: 18,
      brand: "NMK-Shop",
      origin: "Cần Thơ",
      saleOffPecent: 14,
      imgLap: "https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn",
    },
    {
      name: "Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10",
      priceCurrent: "30.990.000",
      priceOld: "35.990.000",
      sold: 18,
      brand: "NMK-Shop",
      origin: "Cần Thơ",
      saleOffPecent: 14,
      imgLap: "https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn",
    },
    {
      name: "Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10",
      priceCurrent: "30.990.000",
      priceOld: "35.990.000",
      sold: 18,
      brand: "NMK-Shop",
      origin: "Cần Thơ",
      saleOffPecent: 14,
      imgLap: "https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn",
    },
    {
      name: "Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10",
      priceCurrent: "30.990.000",
      priceOld: "35.990.000",
      sold: 18,
      brand: "NMK-Shop",
      origin: "Cần Thơ",
      saleOffPecent: 14,
      imgLap: "https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn",
    },
    {
      name: "Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10",
      priceCurrent: "30.990.000",
      priceOld: "35.990.000",
      sold: 18,
      brand: "NMK-Shop",
      origin: "Cần Thơ",
      saleOffPecent: 14,
      imgLap: "https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn",
    },
  ],
  render() {
    const htmls = this.laptops.map((laptop, index) => {
      return `
                <div class="grid__column-2-4">
                <a href="" class="home-product-item__link">
                    <div class="home-product-item">
                        <div class="home-product-item__img" style="background-image: url(${laptop.imgLap})"></div>
                        <h4 class="home-product-item__name">${laptop.name}</h4>
                        <div class="home-product-item__price">
                            <span class="home-product-item__price-old">${laptop.priceOld}đ</span>
                            <span class="home-product-item__price-current">${laptop.priceCurrent}đ</span>
                        </div>
                        <div class="home-product-item__action">
                            <span class="home-product-item__like home-product-item__like--liked">
                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                            </span>
                            <div class="home-product-item__rating">
                                <i class="home-product-item__star--gold fas fa-star"></i>
                                <i class="home-product-item__star--gold fas fa-star"></i>
                                <i class="home-product-item__star--gold fas fa-star"></i>
                                <i class="home-product-item__star--gold fas fa-star"></i>
                                <i class="home-product-item__star--gold fas fa-star"></i>
                            </div>
                            <span class="home-product-item__sold">${laptop.sold} Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                            <span class="home-product-item__brand">${laptop.brand}</span>
                            <span class="home-product-item__origin-name">${laptop.origin}</span>
                        </div>
                        <div class="home-product-item__favourite">
                            <i class="fas fa-check"></i>
                            <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                            <span class="home-product-item__sale-off-percent">${laptop.saleOffPecent}%</span>
                            <span class="home-product-item__sale-off-label">GIẢM</span>
                        </div>
                        <div class="home-product-item__same">
                            <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                    </div>
                </a>
            </div>
            `;
    });
    laptopItem.innerHTML = htmls.join("");
  },
  start() {
    this.render();
  },
};

itemLaptop.start();
