const menu = document.getElementById("menu");
const navmenu = document.getElementById("navmenu");
let menuclicked = false;

$(document).ready(function () {
    $(menu).click(function () {
        if (!menuclicked) {
            $(navmenu).removeClass("navmenu-show").addClass("navmenu-hide");
            menuclicked = true;
        } else {
            $(navmenu).removeClass("navmenu-hide").addClass("navmenu-show");
            menuclicked = false;
        }
    });
});
