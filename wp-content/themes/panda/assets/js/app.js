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




// // ============================
// // Init 1st slider and fancybox
// // ============================

// // fancybox
// $('[data-fancybox]').fancybox({
//   // Options will go here
//   buttons: [
//     'close'
//   ],
//   wheel: false,
//   transitionEffect: "slide",
//   // thumbs          : false,
//   // hash            : false,
//   loop: true,
//   // keyboard        : true,
//   toolbar: false,
//   // animationEffect : false,
//   // arrows          : true,
//   clickContent: false
// });

// // Slick
// $(".main-slider").slick({
//   slidesToShow: 1,
//   infinite: true,
//   dots: true,
//   arrows: true
// });

// // ============================================
// // Attach custom click event on cloned elements, 
// // trigger click event on corresponding link
// // ============================================
// $(document).on('click', '.slick-cloned', function (e) {
//   var $slides = $(this)
//     .parent()
//     .children('.slick-slide:not(.slick-cloned)');

//   $slides
//     .eq(($(this).attr("data-slick-index") || 0) % $slides.length)
//     .trigger("click.fb-start", { $trigger: $(this) });

//   return false;
// });