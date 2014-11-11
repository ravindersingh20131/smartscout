var elixir = require('laravel-elixir');
var gulp = require('gulp');

/*
 |----------------------------------------------------------------
 | Have a Drink
 |----------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic
 | Gulp tasks for your Laravel application. Elixir supports
 | several common CSS, JavaScript and even testing tools!
 |
 */

var paths = {
    'bootstrap': './components/bootstrap-sass-official/assets/'
}

gulp.task('copybootstrap', function() {
    gulp.src(paths.bootstrap + '**/bootstrap.js')
        .pipe(gulp.dest('./public/assets/js'));
    gulp.src(paths.bootstrap + '**/*.{ttf,woff,eof,svg}')
        .pipe(gulp.dest('./public/assets/'));
});

elixir(function(mix) {

	//mix.sass( "style.scss", 'public/css/', { includePaths: [ paths.bootstrap + 'stylesheets/' ] } );
    /*mix.sass("bootstrap.scss")
    	.version()
    	.scripts()
    	.routes()
    	.events();*/

});
