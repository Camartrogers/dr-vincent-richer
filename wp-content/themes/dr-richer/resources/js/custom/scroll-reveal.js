import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

const revealArr = document.getElementsByClassName("scroll-reveal");

for (let i = 0; i < revealArr.length; i++) {
  gsap.fromTo(
    revealArr[i],
    { y: -50, autoAlpha: 0 },
    {
      y: 0,
      autoAlpha: 1,
      duration: 1,
      scrollTrigger: {
        trigger: revealArr[i],
        toggleActions: "play none none none",
        start: "top 80%",
      },
    }
  );
}
