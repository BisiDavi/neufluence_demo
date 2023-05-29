let menu = false;
const open_menu = document.getElementById("open");
const close_menu = document.getElementById("close");
const menuList = document.getElementsByClassName(".menu-top-menu-container");

console.log("open_menu", open_menu);
console.log("close_menu", close_menu);

open_menu.addEventListener("click", () => {
  menuList[0].classlist.add("show");
});

close_menu.addEventListener("click", () => {
  menuList[0].classlist.add("hide");
});
