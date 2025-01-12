const header = document.querySelector(".js-header");
const container = document.querySelector(".js-main-container");
function adjustMainContainerSpacing() {
    if (!header) {
        return;
    }
    var headerHeight = header.offsetHeight - 1;
    container.style.paddingTop = headerHeight + "px";
}

document.addEventListener("DOMContentLoaded", adjustMainContainerSpacing);

window.addEventListener("resize", function () {
    adjustMainContainerSpacing();
});

window.addEventListener("orientationchange", function () {
    adjustMainContainerSpacing();
});
