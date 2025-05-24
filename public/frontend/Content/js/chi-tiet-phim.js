$(document).ready(function () {
    $(".popup-youtube").magnificPopup({
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 300,
        preloader: false,
        fixedContentPos: false,
    });
});
document.querySelectorAll(".showtime-btn").forEach(function (btn) {
    let realHref = btn.getAttribute("href");
    btn.addEventListener("mouseenter", function () {
        btn.setAttribute("data-href", realHref);
        btn.setAttribute("href", "javascript:void(0)");
    });
    btn.addEventListener("mouseleave", function () {
        btn.setAttribute("href", btn.getAttribute("data-href"));
    });
    btn.addEventListener("click", function (e) {
        window.location.href = btn.getAttribute("data-href");
    });
});