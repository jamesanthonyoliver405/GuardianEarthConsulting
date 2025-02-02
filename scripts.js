document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll("nav ul li a").forEach(anchor => {
        anchor.addEventListener("click", function(event) {
            event.preventDefault();
            const sectionId = this.getAttribute("href");
            document.querySelector(sectionId).scrollIntoView({
                behavior: "smooth"
            });
        });
    });
});