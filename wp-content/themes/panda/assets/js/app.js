// An object literal
var app = {
  init: function () {
    app.copyLink();
    app.addRadioListeners();
    app.addContainerListeners();
  },
  copyLink: function () {
    // Código da função um
  },
  scrollTop: function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  },
  addRadioListeners: function () {
    var radioButtons = document.querySelectorAll('input[name="radio-group"]');

    radioButtons.forEach(function (radioButton) {
      radioButton.addEventListener('change', function () {
        var content = this.closest('.radio-container').querySelector('.content');

        // Remover a classe "active" de todos os containers
        var containers = document.querySelectorAll('.radio-container');
        containers.forEach(function (container) {
          container.classList.remove('active');
        });

        if (this.checked) {
          app.hideAllContent();
          content.style.maxHeight = 'initial';
          content.style.margin = '54px 0 54px 0';

          // Adicionar a classe "active" ao container do radio selecionado
          var container = this.closest('.radio-container');
          container.classList.add('active');
        } else {
          content.style.maxHeight = 0;
          content.style.margin = 0;
        }
      });

      // Verificar o radio selecionado no carregamento da página
      if (radioButton.checked) {
        var container = radioButton.closest('.radio-container');
        container.classList.add('active');
      }
    });
  },
  addContainerListeners: function () {
    var containers = document.querySelectorAll('.radio-container');

    containers.forEach(function (container) {
      container.addEventListener('click', function () {
        var radioButton = this.querySelector('input[name="radio-group"]');
        radioButton.checked = true;
        radioButton.dispatchEvent(new Event('change'));
      });
    });
  },
  hideAllContent: function () {
    var allContent = document.querySelectorAll('.content');
    allContent.forEach(function (content) {
      content.style.maxHeight = 0;
      content.style.margin = 0;
    });
  },
};

(function () {
  // Seu código de inicialização da página aqui
  // O DOM estará disponível aqui
  app.init();

  $('.learn-slick').slick({
    dots: true,
  });
  $('.learn-slick-mob').slick({
    dots: true,
  });
  $('.teacher-slick').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $('.spec-slick').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
})();
