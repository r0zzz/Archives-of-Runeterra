let starterclicked = false;
let basicclicked = false;
let bootsclicked = false;
let epicclicked = false;
let legendaryclicked = false;
let mythicclicked = false;

// show or hide content on click
$(document).ready(function() {
    $("#starter").click(function() {
        if (starterclicked == false) {
            $("#starterctn").removeClass("itemcat-hide").addClass("itemcat-show");
            starterclicked = true;
        } else {
            $("#starterctn").removeClass("itemcat-show").addClass("itemcat-hide");
            starterclicked = false;
        }
    });

    $("#basic").click(function() {
        if (basicclicked == false) {
            $("#basicctn").removeClass("itemcat-hide").addClass("itemcat-show");
            basicclicked = true;
        } else {
            $("#basicctn").removeClass("itemcat-show").addClass("itemcat-hide");
            basicclicked = false;
        }
    });

    $("#epic").click(function() {
        if (epicclicked == false) {
            $("#epicctn").removeClass("itemcat-hide").addClass("itemcat-show");
            epicclicked = true;
        } else {
            $("#epicctn").removeClass("itemcat-show").addClass("itemcat-hide");
            epicrclicked = false;
        }
    });

    $("#legendary").click(function() {
        if (legendaryclicked == false) {
            $("#legendaryctn").removeClass("itemcat-hide").addClass("itemcat-show");
            legendaryclicked = true;
        } else {
            $("#legendaryctn").removeClass("itemcat-show").addClass("itemcat-hide");
            legendaryclicked = false;
        }
    });

    $("#mythic").click(function() {
        if (mythicclicked == false) {
            $("#mythicctn").removeClass("itemcat-hide").addClass("itemcat-show");
            mythicclicked = true;
        } else {
            $("#mythicctn").removeClass("itemcat-show").addClass("itemcat-hide");
            mythicclicked = false;
        }
    });
});