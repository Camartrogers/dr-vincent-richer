import Splide from "@splidejs/splide";

let beforeAfterSliders = document.querySelectorAll(".before-after");

if (beforeAfterSliders) {
  beforeAfterSliders.forEach((slider) => {
    new Splide(slider, {
      type: "loop",
      pagination: false,
      gap: "1rem",
      perMove: 1,
      breakpoints: {
        10000: {
          perPage: 2,
        },
        800: {
          perPage: 1,
        },
      },
    }).mount();
  });
}

if (document.querySelector("#testimonials")) {
  new Splide("#testimonials", {
    type: "loop",
    pagination: false,
    gap: "1rem",
    perMove: 1,
    perPage: 2,
    breakpoints: {
      800: {
        destroy: true,
      },
    },
  }).mount();
}

let gallerySlider = document.getElementById("gallery-slider");

if (gallerySlider) {
  new Splide(gallerySlider, {
    type: "loop",
    pagination: false,
    gap: "1rem",
    perMove: 1,
    breakpoints: {
      10000: {
        perPage: 2,
      },
      800: {
        perPage: 1,
      },
    },
  }).mount();
}
