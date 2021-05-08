const mix = require("laravel-mix");

mix.js("resources/js/dashboard.js", "public/js").vue({ version: 2 });

mix.postCss(
    "resources/css/app.css",
    "public/css",
    [require("tailwindcss")]
);
