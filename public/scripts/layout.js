document.addEventListener("DOMContentLoaded", function () {
  const toggleMenuButton = document.getElementById("toggleMenuButton");
  const mobileNav = document.querySelector("header nav:last-child");
  const root = document.getElementById("root");

  if (toggleMenuButton && mobileNav) {
    toggleMenuButton.addEventListener("click", function () {
      const isHidden = mobileNav.classList.contains("-translate-y-full") && mobileNav.classList.contains("top-0");

      // Toggle translation
      if (isHidden) {
        mobileNav.classList.remove("-translate-y-full", "top-0");
        mobileNav.classList.add("top-full");
        document.documentElement.classList.add("overflow-hidden");
        document.body.classList.add("overflow-hidden");
      } else {
        mobileNav.classList.remove("top-full");
        mobileNav.classList.add("-translate-y-full", "top-0");
        document.documentElement.classList.remove("overflow-hidden");
        document.body.classList.remove("overflow-hidden");
      }

      // Update button text
      toggleMenuButton.textContent = isHidden ? "Close" : "Menu";
    });
  }
});
