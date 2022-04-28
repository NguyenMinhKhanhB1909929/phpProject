var $ = document.querySelector.bind(document);
var $$ = document.querySelectorAll.bind(document);

var registerButton = $(".js-register");
var loginButton = $(".js-login");
var registerChange = $(".js-change-login");
var loginChange = $(".js-change-register");
var backs = $$(".js-back");
var loginClose = $?.(".js-auth-form-login.login");
var registerClose = $?.(".js-auth-form-register.register");
var login = $(".js-auth-form-login");
var register = $(".js-auth-form-register");
var modal = $(".js-modal");
var authForms = $$(".auth-form");
var orderCart = $(".add__order-cart");
var addCartBtn = $(".item__description-order-cart");

//
authForms.forEach((authForm, i) => {
  authForm.onclick = function (e) {
    e.stopPropagation();
  };
});

//Show register
registerButton.onclick = function () {
  var modal = $(".js-modal");
  var register = $(".js-auth-form-register");
  modal.classList.add("open");
  register.classList.add("register");
};

// Show Login
loginButton.onclick = function () {
  var modal = $(".js-modal");
  var login = $(".js-auth-form-login");
  modal.classList.add("open");
  login.classList.add("login");
};

//
registerChange.onclick = function () {
  var registerClose = $(".js-auth-form-register.register");
  var login = $(".js-auth-form-login");
  registerClose.classList.remove("register");
  login.classList.add("login");
};

//
loginChange.onclick = function () {
  var loginClose = $(".js-auth-form-login.login");
  var register = $(".js-auth-form-register");
  loginClose.classList.remove("login");
  register.classList.add("register");
};
backs.forEach((back, i) => {
  back.onclick = () => {
    var modalOpen = $(".js-modal.open");
    var loginClose = $?.(".js-auth-form-login.login");
    var registerClose = $?.(".js-auth-form-register.register");
    loginClose?.classList.remove("login");
    registerClose?.classList.remove("register");
    modalOpen.classList.remove("open");
  };
});
modal.onclick = function (e) {
  var modalOpen = $(".js-modal.open");
  var loginClose = $?.(".js-auth-form-login.login");
  var registerClose = $?.(".js-auth-form-register.register");
  loginClose?.classList.remove("login");
  registerClose?.classList.remove("register");
  modalOpen.classList.remove("open");
};
