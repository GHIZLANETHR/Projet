const navItems = document.querySelectorAll(".nav-item");

navItems.forEach((navItem, i) => {
  navItem.addEventListener("click", () => {
    navItems.forEach((item, j) => {
      item.className = "nav-item";
    });
    navItem.className = "nav-item active";
  });
});

function showContent(contentId) {
  // Hide all content divs
  document.querySelectorAll('.content > div').forEach(function(div) {
      div.style.display = 'none';
  });

  // Show the selected content
  document.getElementById(contentId + 'Content').style.display = 'block';
}