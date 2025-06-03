const explore_container = document.getElementById("explore-container");
const explore_content = explore_container.innerHTML;

var demos_disabled = false;

function disable_demos() {
  demos_disabled = true;
  explore_container.innerHTML =
    "<p class='demo-disabled-message'>Project demo page only compatible with wide screen devices.<br><br>View the embedded demos on a laptop or desktop computer.</p>";
}

function enable_demos() {
  demos_disabled = false;
  explore_container.innerHTML = explore_content;
}

document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth <= 1024) {
    disable_demos();
  }
});

window.addEventListener("resize", function () {
  if (window.innerWidth <= 1024 && !demos_disabled) {
    disable_demos();
  } else if (window.innerWidth > 1024 && demos_disabled) {
    enable_demos();
  }
});
