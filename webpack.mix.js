
const mix = require('laravel-mix');
const webpackConfig = require('./webpack.config'); // Importando a configuração customizada do Webpack

mix.js('resources/js/app.js', 'public/js')
('resources/js/bootstrap.js', 'public/js')
   .webpackConfig(webpackConfig); // Usando a configuração customizada do Webpack

