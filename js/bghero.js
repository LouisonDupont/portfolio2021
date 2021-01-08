document.addEventListener("DOMContentLoaded", function () {
    var layer1 = document.getElementById("elem1");
    scroll = window.pageYOffset;
    document.addEventListener("scroll", function (e) {
        var offset = window.pageYOffset;
        scroll = offset;
        layer1.style.width = 100 + scroll / 5 + "%";
    });

    var layer2 = document.getElementById("elem2");
    scroll = window.pageYOffset;
    document.addEventListener("scroll", function (e) {
        var offset = window.pageYOffset;
        scroll = offset;
        layer2.style.width = 100 + scroll / 30 + "%";
    });
});