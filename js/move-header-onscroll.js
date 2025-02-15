var header = document.getElementById("header-nav-container");
let pixel_limit = 80;
    
window.onscroll = function() {
    handle_scroll();
};

function handle_scroll() {
    if (document.body.scrollTop > pixel_limit || document.documentElement.scrollTop > pixel_limit) {
        header.className = "header-nav-container scrolled";
    } else {
        header.className = "header-nav-container";
    }
}