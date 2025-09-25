// minimal JS initializer for components
(function () {
  function initUI() {
    // Example: delegate click for elements with data-ui-toggle
    document.querySelectorAll("[data-ui-toggle]").forEach((el) => {
      el.addEventListener("click", () => {
        const target = document.querySelector(
          el.getAttribute("data-ui-toggle")
        );
        if (target) target.classList.toggle("hidden");
      });
    });
  }

  if (typeof window !== "undefined") {
    window.initUI = initUI;
    document.addEventListener("DOMContentLoaded", initUI);
  }
})();
