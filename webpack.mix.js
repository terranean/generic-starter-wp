// https://laravel-mix.com/docs/6.0/installation

let mix = require('laravel-mix');

mix.js('js/frontend.js', 'scripts.js')
    .postCss("css/styles.css", "styles.css", [
    require("tailwindcss"),
    ])