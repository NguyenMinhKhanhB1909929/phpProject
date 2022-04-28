var nextQuantitys = document.querySelectorAll(
  ".item__description-quantity-next"
);
var prevQuantitys = document.querySelectorAll(
  ".item__description-quantity-prev"
);
var quantityNum1 = document.querySelectorAll(
  ".item__description-quantity-number"
);
var priceItem1 = document.querySelectorAll(".table__item-content-price1");
var priceSumItems1 = document.querySelectorAll(".table__item-content-price");
var deletedBtn = document.querySelectorAll(".deleted-icon");
var priceItem = document.querySelectorAll(".table__item-content-price[value]");
var priceSumItems = document.querySelector(".table__item-sum-price-number");

nextQuantitys.forEach(function (n, index) {
  n.onclick = function () {
    quantityNum1[index].value++;
    quantityNum1[index].setAttribute("value", quantityNum1[index].value);
    let number = Number(quantityNum1[index].getAttribute("value"));
    let priceNumber = Number(priceItem1[index].getAttribute("value"));
  };
});
prevQuantitys.forEach(function (p, index) {
  p.onclick = function () {
    if (quantityNum1[index].value == 0) {
    } else {
      quantityNum1[index].value--;
      quantityNum1[index].setAttribute("value", quantityNum1[index].value);
    }
  };
});

deletedBtn.forEach(function (d, index) {
  d.onclick = function () {
    console.log(d);
    d.parentElement.parentElement.outerHTML = "";
    let numprice = 0;
    priceItem[index].setAttribute("Value", 0);
    priceItem.forEach(function (price) {
      console.log(price);
      numprice += Number(price.getAttribute("Value"));
    });
  };
});
