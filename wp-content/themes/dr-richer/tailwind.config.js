const theme = require("./theme.json");
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");
const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./resources/css/*.css",
    "./resources/js/*.js",
    "./safelist.txt",
  ],
  presets: [
    require("./tailwind.config.site.js"),
    require("./tailwind.config.system.js"),
  ],
  theme: {
    container: {
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "0rem",
      },
    },
    boxShadow: {
      DEFAULT: "0px 15px 24px rgba(149, 157, 165, 0.05)",
    },
    extend: {
      colors: tailpress.colorMapper(
        tailpress.theme("settings.color.palette", theme)
      ),
      fontSize: tailpress.fontSizeMapper(
        tailpress.theme("settings.typography.fontSizes", theme)
      ),
    },
    fontWeight: {
      normal: 400,
      semibold: 600,
      bold: 700,
    },
    screens: {
      xs: "480px",
      sm: "640px",
      md: "782px",
      lg: tailpress.theme("settings.layout.contentSize", theme),
      xl: tailpress.theme("settings.layout.wideSize", theme),
      "2xl": "1536px",
    },
  },
  safelist: [
    {
      pattern: /col-span-(1|2|3|4|5|6|7|8|9|10|11|12)/,
      variants: ["sm", "md", "lg"],
    },
  ],
  plugins: [tailpress.tailwind, require("@tailwindcss/aspect-ratio")],
};
