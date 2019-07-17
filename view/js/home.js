$(document).ready(function () {
    var img = $(".imageAccount")
    $(".username").hover(function () {
        $(this).css("color", "black");
        img.css("background-image", 'url("../image/account_circle_black.png")');
    }, function () {
        $(this).css("color", "white");
        img.css("background-image", 'url("../image/account_circle_white.png")');
    });
});