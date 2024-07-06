const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
       'public/assets/css/plugins/animate.min.css',
       'public/assets/css/plugins/fontawesome-5.css',
       'public/assets/css/plugins/swiper.min.css',
       'public/assets/css/plugins/unicons.css',
       'public/assets/css/vendor/bootstrap.min.css',
       'public/assets/css/master.css'
   ], 'public/assets/css/main.css');

mix.copy('resources/css/app.css', 'public/assets/css/app.css');
