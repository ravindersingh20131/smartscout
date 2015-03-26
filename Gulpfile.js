var //elixir = require('laravel-elixir'),
    gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    autoprefixer = require( 'gulp-autoprefixer' ),
    notify = require( 'gulp-notify' ),
    gutil = require( 'gulp-util' ),
    rename = require( 'gulp-rename' ),
    minify = require( 'gulp-minify-css' );

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
    out: {
        js: "./public/assets/js/",
        css: "./public/assets/css/",
        font: "./public/assets/fonts/"
    },
    src: {
        bootstrap: './components/bootstrap-sass-official/assets/',
        fontawesome: './components/fontawesome/scss',
        fontawesomeCss: './components/fontawesome/css',
        requirejs: './components/requirejs',
        chartjs: './components/chartjs',
        bower: "./components/",
        css: "source/assets/sass/",
        js: "source/assets/js/"
    }
};

gulp.task('copybootstrap', function() {
    gulp.src(paths.bootstrap + '**/bootstrap.js')
        .pipe(gulp.dest('./public/assets/js'));
    gulp.src(paths.bootstrap + '**/*.{ttf,woff,eof,svg}')
        .pipe(gulp.dest('./public/assets/'));
});

gulp.task('css', function() {
    return gulp.src( paths.src.css + 'app.scss' )
        .pipe( sass({
                style: 'compressed',
                loadPath: [ 
                    paths.src.bootstrap + 'stylesheets/',
                    paths.src.fontawesome
                ]
            })
        )
        .pipe( autoprefixer( 'last 2 version' ) )
        .pipe( minify() )
        .pipe( rename( { suffix: '.min' } ) )
        .pipe( gulp.dest( paths.out.css ) )
        .pipe( notify({ message: "SASS to CSS complete and minified!" }) )
});

//specify watcher task
gulp.task('watch', function() {
    gulp.watch( paths.src.css + '**/*.scss', ['css'] );
});

gulp.task('default', ['css', 'watch']);
    
gulp.task( 'icon-fonts', function() { 
    return gulp.src(paths.src.bower + 'fontawesome/fonts/**.*')
        .pipe( gulp.dest( paths.out.font + 'fontawesome' ) )
        .pipe(notify({ message: 'font awesome fonts copied' }));
});

gulp.task('copy-fontawesome-css', function() {
    return gulp.src( paths.src.fontawesomeCss + '/font-awesome.min.css' )
            .pipe( gulp.dest( paths.out.css ) )
            .pipe(notify({ message: 'fontawesome css copied successfully!' }));
});

gulp.task('copy-requirejs', function() {
    return gulp.src( paths.src.requirejs + '/*.js' )
            .pipe( gulp.dest( paths.out.js ) )
            .pipe( notify( { message: 'requirejs copied successfully into assets folder!' } ) );
});

gulp.task('minify-bootstrapjs', function() {
    return gulp.src( paths.src.bootstrap + '/javascripts/bootstrap.js' )
            .pipe(uglify())
            .pipe(rename({ suffix: '.min' }))
            .pipe( gulp.dest( paths.out.js + '/javascripts' ) )
            .pipe( notify( { message: 'twitter bootstrap copied and minified!' } ) );
});

//make gulp task for copying chartjs

/*elixir(function(mix) {
    
    //mix.sass( 'style.scss', 'public/assets/css', { includePaths: [ paths.bootstrap + 'stylesheets/' ] } );
    //mix.sass( 'style.scss', 'public/assets/css/').version( [ 'assets/css/bootstrap.css' ] );
    //mix.sass( "bootstrap.scss", 'public/assets/css/bootstrap/', { includePaths: [ paths.bootstrap + 'stylesheets/' ] } ).version( ['assets/css/bootstrap.css' ] );

});*/
