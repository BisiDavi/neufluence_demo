let menu = false;
const open_menu = document.getElementById("open_menu");
const close_menu = document.getElementById("close_menu");
const site_nav = document.getElementsByClassName("site_nav");
const banner = document.getElementById("banner");

open_menu.addEventListener("click", () => {
  site_nav[0].classList.add("show");
  if (site_nav[0].classList.contains("hide")) {
    site_nav[0].classList.remove("hide");
  }
});

close_menu.addEventListener("click", () => {
  site_nav[0].classList.add("hide");
  if (site_nav[0].classList.contains("show")) {
    site_nav[0].classList.remove("show");
  }
  site_nav[0].classList.add("hide");
});
