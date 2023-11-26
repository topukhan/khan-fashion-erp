const mix = require('laravel-mix');

mix.js("resources/js/app.js", "public/ui/js")
  .postCss("resources/css/app.css", "public/ui/css", [
    require("tailwindcss"),
  ]);