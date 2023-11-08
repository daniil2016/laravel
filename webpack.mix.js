//mix.js('resources/js/app.js', 'public/js')
    //.postCss('resources/css/app.css', 'public/css');

    const { mix } = require('laravel-mix');
    const path = require('path');
    const glob = require('glob');
    
    mix.js(glob.sync('resources/js/**/*.js'), 'public/js/app.js');