document.addEventListener("DOMContentLoaded", function () {
  var backToTopButton = document.getElementById("back-to-top");

  // Mostrar ou ocultar o botão com base no scroll
  window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
      backToTopButton.style.display = "block";
    } else {
      backToTopButton.style.display = "none";
    }
  });

  // Voltar para o topo ao clicar no botão
  backToTopButton.addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});

if (document.getElementById("myCarousel")) {

  // fancybox
  const container = document.getElementById("myCarousel");
  const options = { Dots: false };

  new Carousel(container, options, { Thumbs });

  Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });
}