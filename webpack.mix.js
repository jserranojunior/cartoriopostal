const mix = require('laravel-mix');
mix.setPublicPath('/')


mix.js('resources/js/main.js', 'js');
mix.js('resources/js/components/*.vue',         'resources/js/compiler/compiler.js');
mix.js('resources/js/components/layouts/*.vue', 'resources/js/compiler/compiler.js');

    // mix.sass('resources/sass/theme_bootstrap.scss', 'css/theme_bootstrap.scss');
