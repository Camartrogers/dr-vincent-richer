import Alpine from "alpinejs";
import focus from "@alpinejs/focus";

// Custom
import "./custom/splide";
import "./custom/sticky-header";
import "./custom/scroll-reveal";
import "./custom/scroll-to";

// Call Alpine
window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.start();

console.log("hello");
