var loginBtn = document.querySelector(".btn-login");
var formUser = document.querySelector(".header__navbar-user");
var formA = document.querySelectorAll(".header__navbar-open-form");
var formLogout = document.querySelector(".formLogout");
loginBtn.onclick = function () {
  var modalOpen = document.querySelector(".js-modal.open");
  modalOpen.classList.remove("open");
  formUser.style.display = "flex";
  formA.forEach((text) => {
    text.style.display = "none";
  });
};
formLogout.onclick = function () {
  formUser.style.display = "flex";
  formA.forEach((text) => {
    text.style.display = "flex";
  });
  formUser.style.display = "none";
};
