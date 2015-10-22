var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var plumber = require('gulp-plumber');

gulp.task('sass', function () {
    gulp.src('assets/sass/*.scss')
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest('assets/css'));
});

gulp.task('js', function () {
    gulp.src(['assets/js/**/*.js', '!assets/js/min/**/*.js'])
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('assets/js/min'));
});

gulp.task('build', ['sass', 'js']);

gulp.task('watch', ['build'], function () {
    gulp.watch('assets/sass/**/*.scss', ['sass']);
    gulp.watch(['assets/js/**/*.js', 'assets/!js/min/**/*.js'], ['js']);
});
