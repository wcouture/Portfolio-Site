document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth <= 768) {
    let explore_container = document.getElementById("explore-container");
    explore_container.innerHTML =
      "<p class='demo-disabled-message'>Project demo page only compatible with wide screen devices.<br><br>View the embedded demos on a laptop or desktop computer.</p>";
  }
});
