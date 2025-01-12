//--------------------------------------------------------------------------
// Tailwind site system configuration
//--------------------------------------------------------------------------
//
// defines grid, spacing
//

// const colors = require("tailwinds/plugin");
const plugin = require("tailwindcss/plugin");

module.exports = {
  plugins: [
    plugin(function ({ addComponents, theme }) {
      const components = {
        // The main wrapper for all sections on our website. Has a max width and is centered.
        ".fluid-container": {
          width: "100%",
          maxWidth: theme("screens.xl"),
          marginLeft: "auto",
          marginRight: "auto",
          // Use safe-area-inset together with default padding for Apple devices with a notch.
          paddingLeft: `calc(env(safe-area-inset-left, 0rem) + ${theme(
            "padding.8"
          )})`,
          paddingRight: `calc(env(safe-area-inset-right, 0rem) + ${theme(
            "padding.8"
          )})`,
        },
        // The outer grid where all block builder blocks are a child of. Spreads out all blocks
        // vertically with a uniform space between them.
        ".outer-grid": {
          width: "100%",
          display: "grid",
          paddingTop: theme("spacing.16"),
          paddingBottom: theme("spacing.16"),
          // If the last child of the outer grid is full width (e.g. when it has a full width
          // colored background), give it negative margin bottom to get it flush to your
          // sites footer.
          "& > *:first-child.full-width": {
            marginTop: `-${theme("spacing.16")}`,
          },
          "& > *:last-child.full-width": {
            marginBottom: `-${theme("spacing.16")}`,
          },
        },
        ".content": {
          "> *:last-child": {
            marginBottom: 0,
          },
        },
        // Sizing utilities for sets
        ".size-sm, .size-md, .size-lg, .size-full": {
          gridColumn: "span 12 / span 12",
        },
        "@media screen(md)": {
          // Larger vertical spacing between blocks on larger screens.
          ".outer-grid": {
            paddingTop: theme("spacing.14"),
            paddingBottom: theme("spacing.14"),
            "& > *:first-child.full-width": {
              marginTop: `-${theme("spacing.14")}`,
            },
            "& > *:last-child.full-width": {
              marginBottom: `-${theme("spacing.14")}`,
            },
          },
          ".size-sm": {
            gridColumn: "span 8 / span 8",
            gridColumnStart: "3",
          },
          ".size-md": {
            gridColumn: "span 8 / span 8",
            gridColumnStart: "3",
          },
          ".size-lg": {
            gridColumn: "span 10 / span 10",
            gridColumnStart: "2",
          },
          ".size-full": {
            gridColumn: "span 12 / span 12",
          },
        },
        "@media screen(lg)": {
          // Larger horizontal padding on larger screens.
          ".fluid-container": {
            // Use safe-area-inset together with default padding for Apple devices with a notch.
            paddingLeft: `calc(env(safe-area-inset-left, 0rem) + ${theme(
              "padding.10"
            )})`,
            paddingRight: `calc(env(safe-area-inset-right, 0rem) + ${theme(
              "padding.10"
            )})`,
          },
          // Larger vertical spacing between blocks on larger screens.
          ".outer-grid": {
            paddingTop: "3rem",
            paddingBottom: "3rem",
            "& > *:first-child.full-width": {
              marginTop: `-${theme("spacing.24")}`,
            },
            "& > *:last-child.full-width": {
              marginBottom: `-${theme("spacing.24")}`,
            },
          },
          ".size-sm": {
            gridColumn: "span 6 / span 6",
            gridColumnStart: "4",
          },
        },
      };
      addComponents(components);
    }),
  ],
};
