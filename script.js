
document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector("header");
    header.style.opacity = "0";
    setTimeout(function() {
        header.style.opacity = "1";
    }, 500);
});
