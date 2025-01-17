let mix = require("laravel-mix");
let path = require("path");

mix.setResourceRoot("../");
mix.setPublicPath(path.resolve("./"));

mix.webpackConfig({
    watchOptions: {
        ignored: [
            path.posix.resolve(__dirname, "./node_modules"),
            path.posix.resolve(__dirname, "./css"),
            path.posix.resolve(__dirname, "./js"),
        ],
    },
});

mix.js("resources/js/app.js", "dist/js");

mix.postCss("resources/css/app.css", "dist/css");

mix.postCss("resources/css/editor-style.css", "dist/css");

mix.copy("resources/favicon/**.*", "dist/favicon/");
// mix.browserSync({
//     proxy: 'http://tailpress.test',
//     host: 'tailpress.test',
//     open: 'external',
//     port: 8000
// });

if (mix.inProduction()) {
    mix.version();
} else {
    Mix.manifest.refresh = (_) => void 0;
}
