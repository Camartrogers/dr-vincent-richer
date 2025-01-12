//--------------------------------------------------------------------------
// Tailwind site typography configuration
//--------------------------------------------------------------------------
//
// defines typography and text levels
//

// const theme = require("tailwindcss/defaultTheme");
// const defaultTheme = require("tailwindcss/defaultTheme");
const plugin = require("tailwindcss/plugin");

module.exports = {
  theme: {
    colors: {
      primary: "#8F8D70", // primary green
      secondary: "#2D5155", // dark green
      third: "#A09F85", // pale green
      neutral: {
        DEFAULT: "#F5F5F5", // near white
        dark: "#EAE6E1",
      },
      dark: "#272323", // near black
    },
    fontFamily: {
      sans: ["Roboto Mono"],
      serif: ["Manrope"],
    },
    fontWeight: {
      thin: 200,
      light: 300,
      normal: 400,
      medium: 500,
      semibold: 600,
      bold: 700,
      extrabold: 800,
    },
  },
  plugins: [
    plugin(function ({ addBase, theme }) {
      addBase({
        // Used to hide alpine elements before being rendered.
        "[x-cloak]": {
          display: "none !important",
        },
        // Default color transition on links unless user prefers reduced motion.
        "@media (prefers-reduced-motion: no-preference)": {
          a: {
            transition:
              "color .3s ease-in-out, background-color .3s ease-in-out",
          },
        },
        html: {
          color: theme("colors.primary"),
          fontFamily: theme("fontFamily.sans"),
        },
        body: {
          fontSize: theme("fontSize.base"), // 16px
          fontFamily: theme("fontFamily.serif"),
        },
        // Typography
        "h1, h2, h3, h4, h5, p": {
          fontWeight: theme("fontWeight.normal"),
          marginBottom: theme("spacing.4"),
        },
        h1: {
          fontFamily: theme("fontFamily.sans"),
          fontSize: "1rem",
          lineHeight: 1,
          fontWeight: theme("fontWeight.bold"),
          color: theme("color.primary"),
          textTransform: "uppercase",
        },
        h2: {
          fontSize: "4.125rem",
          fontWeight: theme("fontWeight.light"),
        },
        h3: {
          fontSize: "2.5rem",
        },
        h4: {
          fontSize: "1.5rem",
        },
        h5: {
          fontSize: theme("fontSize.sm"),
        },
        p: {
          fontSize: theme("fontSize.base"), // 16px
        },
        "ul, ol": {
          marginLeft: theme("spacing.4"),
          marginBottom: theme("spacing.4"),
        },
        ul: {
          listStyle: "disc",
        },
        ol: {
          listStyle: "decimal",
        },
        li: {
          "&:not(:last-of-type) > p": {
            marginBottom: theme("space.2"),
          },
          "&:last-of-type > p": {
            marginBottom: 0,
          },
        },
      });
    }),
  ],
};
