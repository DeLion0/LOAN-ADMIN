document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".dropdown").forEach(btn => {
    btn.addEventListener("click", () => {
      const submenu = btn.nextElementSibling;
      if (submenu) submenu.classList.toggle("show");
    });
  });
});
