import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import Lenis from "lenis";

gsap.registerPlugin(ScrollToPlugin);

document.querySelectorAll(".scroll-contact").forEach((btn) => {
  btn.addEventListener("click", () => {
    gsap.to(window, {
      duration: 1,
      scrollTo: { y: "#contact-form", offsetY: 70 },
    });
  });
});

let beforeNow = document.getElementById("before-now");

if (beforeNow) {
  document.querySelectorAll(".scroll-to__before-now").forEach((btn) => {
    btn.addEventListener("click", () => {
      gsap.to(window, {
        duration: 1,
        scrollTo: { y: beforeNow, offsetY: 70 },
      });
    });
  });
}

const lenis = new Lenis();

lenis.on("scroll", (e) => {});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);
