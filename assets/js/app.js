document.addEventListener("DOMContentLoaded", function () {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
            scrollToTopBtn.style.display = "block";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    });

    scrollToTopBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});

lightGallery(document.getElementById('lightgallery-livros'), {
    plugins: [lgZoom],
    licenseKey: '0000-0000-0000-0000',
    speed: 500,
    thumbnail: true,
    // ... other settings
});
lightGallery(document.getElementById('lightgallery-livros-2'), {
    plugins: [lgZoom],
    licenseKey: '0000-0000-0000-0000',
    speed: 500,
    thumbnail: true,
    // ... other settings
});

