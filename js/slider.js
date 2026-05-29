document.addEventListener('DOMContentLoaded', function () {

  const slider1 = new Splide('.splide1', {
    type: 'loop',
    direction: "ttb",
    perPage: 1,
    height: "25px", 
    arrows: false,
    pagination: false,
    autoplay: true,
    breakpoints: {
      768: {
        height: "50px", 
      },
    }
  });

  const slider2 = new Splide('.splide2', {
    type: 'loop',
    perPage: 3,
    gap: 40,
    arrows: false,
    pagination: false,
    autoScroll: {
      speed: 1,
      pauseOnHover: false,
    },
    breakpoints: {
      1180: {
        perPage: 2,
        gap: 23,
      },
      768: {
        perPage: 1,
        arrows: true,
        gap: 23,
      },
    }
  });

  const slider3 = new Splide('.splide3', {
    type: 'loop',
    perPage: 1,
    gap: 20,
    arrows: false,
    pagination: false,
    pauseOnHover: false,
    autoScroll: {
      speed: 1,
    }
  });

  slider1.on('mounted', function () {
    document.querySelector('.splide1').classList.add('is-initialized');
  });
  slider2.on('mounted', function () {
    document.querySelector('.splide2').classList.add('is-initialized');
  });
  slider3.on('mounted', function () {
    document.querySelector('.splide3').classList.add('is-initialized');
  });

  // マウント
  slider1.mount();
  slider2.mount(window.splide.Extensions);
  slider3.mount(window.splide.Extensions);

});
