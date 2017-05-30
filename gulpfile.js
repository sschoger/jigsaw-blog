var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';

elixir(function(mix) {
    var env = argv.e || argv.env || 'local';

    mix.sass('main.scss')
    	.exec('rm -rf ./**/*/.DS_Store')
        .exec('jigsaw build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*']);
});
