var swiper0 = new Swiper('.s0', {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    direction: getDirection(),
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    600: {
        slidesPerView: 1,
        spaceBetween: 25,
    },
    on: {
      resize: function () {
        swiper.changeDirection(getDirection());
      },
    },
  });

  function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    return direction;
  }

  var swiper1 = new Swiper('.s1', {
    slidesPerView: 4,
    spaceBetween: 25,
    loop: true,
    direction: getDirection(),
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    600: {
        slidesPerView: 1,
        spaceBetween: 25,
    },
    on: {
      resize: function () {
        swiper.changeDirection(getDirection());
      },
    },
  });

  function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    return direction;
  }

  var swiper2 = new Swiper('.s2', {
    slidesPerView: 4,
    spaceBetween: 25,
    loop: true,
    direction: getDirection(),
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    600: {
        slidesPerView: 1,
        spaceBetween: 25,
    },
    on: {
      resize: function () {
        swiper.changeDirection(getDirection());
      },
    },
  });

  function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    return direction;
  }

