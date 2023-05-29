let menu = false;
const open_menu = document.getElementById("open_menu");
const close_menu = document.getElementById("close_menu");
const menuList = document.getElementsByClassName(".menu-top-menu-container");
const banner = document.getElementById("banner");

console.log("hello");
console.log("open_menu", open_menu);
console.log("close_menu", close_menu);
console.log("menuList", menuList);
console.log("banner", banner);

if (open_menu) {
  open_menu.addEventListener("click", () => {
    menuList[0].classlist.add("show");
    console.log("working");
  });
}

if (close_menu) {
  close_menu.addEventListener("click", () => {
    menuList[0].classlist.add("hide");
    console.log("see me");
  });
}
