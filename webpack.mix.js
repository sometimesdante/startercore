// webpack.mix.js

let mix = require("laravel-mix");

mix.js("src/app.js", "dist").setPublicPath("dist");
mix.sass("/style.scss", "dist");

mix
  .postCss("src/css/theme.scss", "scss", [
    require("tailwindcss"),
    require("postcss-nested"),
  ])
  .options({
    processCssUrls: false,
  });
