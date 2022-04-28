var sortBtn = document.querySelectorAll(".home-filter__btn");
var pageBtn = document.querySelectorAll(".pagination-item-page");
var pageItem = document.querySelectorAll(".home-product");
var pageNum = document.querySelector(".home-filter__page-current");
var sortSelect = document.querySelectorAll(".select-input__link");
var pageBut = document.querySelectorAll(".home-filter__page-btn");
var category1 = document.querySelectorAll(".category-item1");
var category = document.querySelectorAll(".category-item");
var SelectItemSort1 = document.querySelectorAll(".select-input__item1");
var SelectItemCurrent = document.querySelectorAll(".select-input__label");
var SelectItemSort = document.querySelectorAll(".select-input__item");
var linkCurrentText = document.querySelector(".link__curr-text");

console.log(linkCurrentText);

SelectItemSort1.forEach(function (s1) {
  s1.onclick = function () {
    SelectItemCurrent[0].innerHTML = s1.innerHTML;
  };
});

SelectItemSort.forEach(function (s) {
  s.onclick = function () {
    SelectItemCurrent[1].innerHTML = s.innerHTML;
  };
});

console.log(pageBut);

sortBtn.forEach(function (a) {
  a.onclick = function () {
    sortBtn.forEach(function (e) {
      e.classList.remove("btn-primary");
    });
    a.classList.add("btn-primary");
  };
});

pageBtn.forEach(function (page, index) {
  page.onclick = function () {
    pageBtn.forEach(function (p) {
      p.classList.remove("pagination-item__active");
    });
    page.classList.add("pagination-item__active");
    pageItem.forEach(function (pa) {
      pa.classList.remove("page-current");
    });
    pageItem[index].classList.add("page-current");
    pageNum.innerHTML = `${index + 1}`;
    pageBut.forEach(function (a) {
      a.classList.remove("home-filter__page-btn--disable");
    });
    pageBut[index].classList.add("home-filter__page-btn--disable");
  };
});

sortSelect.forEach(function (s) {
  s.onclick = function () {
    console.log(s.innerHTML);
  };
});

category1.forEach(function (c1) {
  c1.onclick = function () {
    category1.forEach(function (i) {
      i.classList.remove("category-item--active");
    });
    c1.classList.add("category-item--active");
    console.log(c1.innerText);
    linkCurrentText.innerHTML = c1.innerText;
  };
});

category.forEach(function (c) {
  c.onclick = function () {
    category.forEach(function (i) {
      i.classList.remove("category-item--active");
    });
    c.classList.add("category-item--active");
  };
});
