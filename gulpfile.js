'use strict';

//REQUIRES

var gulp     = require('gulp');
var sass     = require('gulp-sass')(require('sass'));
var concat   = require('gulp-concat');
var uglify   = require('gulp-uglify');

//REQUIRES
//CONFIGS

var srcPath  = 'site/themes/tema-padrao/src/';
var distPath = 'site/themes/tema-padrao/public/';

//SASS

gulp.task('sass', function () {
    return gulp.src( srcPath + 'sass/*.sass')
        .pipe(concat('style.min.css'))
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest( distPath + 'css'));
});

//SCRIPTS

var jsFiles = [
    srcPath + 'js/mask.js',
    srcPath + 'js/main.js'
];

gulp.task('main', function() {
    return gulp.src(jsFiles)
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest( distPath + 'js'));
});

//WATCH

gulp.task('w', function () {

    gulp.watch( srcPath + 'sass/*.sass', gulp.series('sass'));
    gulp.watch( srcPath + 'sass/**/*.scss', gulp.series('sass'));

    gulp.watch( srcPath + 'js/*.js', gulp.series('main'));

});
