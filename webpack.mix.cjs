const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
.js('resources/js/yourLocation.js', 'public/js')
.js('resources/js/adminLogin.js', 'public/js')
.js('resources/js/contact.js', 'public/js')
.js('resources/js/admindashboard.js', 'public/js')
.js('resources/js/adminContactdetails.js', 'public/js')
.js('resources/js/adminjsController.js', 'public/js')
.sass('resources/scss/app.scss', 'public/css')
.sass('resources/scss/admindashboard.scss', 'public/css')
.sass('resources/scss/adminLogin.scss', 'public/css')
.copyDirectory('resources/img', 'public/img')
.setPublicPath('public');
