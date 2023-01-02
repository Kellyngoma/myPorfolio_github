"use strict";
const inputPass = document.querySelectorAll("input[type=password");

inputPass.forEach((element) => {
  element.addEventListener("input", () => {
    // console.log(element.value);
    // console.log(element.id);
    if (element.id == "password") {
      if (element.value.length > 3) {
        progress(prPassword, "40");
        prPassword.style.left = "-60px";
      }
      if (element.value.length >= 8) {
        progress(prPassword, "60");
        prPassword.style.left = "-30px";
      }
      if (element.value.length == 0) {
        prPassword.style.width = "0%";
      }
    } else {
      if (element.value.length > 3) {
        progress(prConPassword, "40");
        element.style.left = "-60px";
      }
      if (element.value.length >= 8) {
        progress(prConPassword, "60");
        prConPassword.style.left = "-30px";
      }
      if (element.value.length == 0) {
        prConPassword.style.width = "0%";
      }
    }
  });
});
const progress = (element, percentage) => {
  element.style.width = percentage + "%";
  element.style.transition = " progress 8s ease-in-out";
};
form.addEventListener("submit", (e) => {
  e.preventDefault();

  if (password.value == confirmPassword.value) {
    prConPassword.style.width = "80%";
    prConPassword.style.left = "0px";
    prPassword.style.width = "80%";
    prPassword.style.left = "0px";
  }
});
