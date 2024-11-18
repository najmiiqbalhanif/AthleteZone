document.addEventListener("DOMContentLoaded", function () {
    const dashboardTitle = document.querySelector(".dashboard-title");
    const sections = document.getElementById("sections");

    // Tampilkan sections saat kursor berada di dashboard-title
    dashboardTitle.addEventListener("mouseenter", () => {
        sections.classList.remove("hidden");
        sections.style.opacity = "1";
        sections.style.maxHeight = "500px";
    });

    // Sembunyikan sections saat kursor keluar dari sections
    sections.addEventListener("mouseleave", () => {
        sections.classList.add("hidden");
        sections.style.opacity = "0";
        sections.style.maxHeight = "0";
    });
});
