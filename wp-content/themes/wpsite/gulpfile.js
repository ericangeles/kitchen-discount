// Gulp Dependencies
var gulp = require('gulp');
var rename = require('gulp-rename');
// Build Dependencies
var uglify = require('gulp-uglify');
// Style Dependencies
var sass = require('gulp-sass');
var minifyCSS = require('gulp-minify-css');
// Development Dependencies
var jshint = require('gulp-jshint');
var notify = require("gulp-notify");

// SASS to CSS task
gulp.task('styles', function() {
  gulp.src('src/sass/**/*.scss')
  	.pipe(sass({includePaths: [
      'bower_components/bootstrap-sass/assets/stylesheets',
      'bower_components/owl.carousel/dist',
      'bower_components/photoswipe/dist',
      'node_modules/bourbon-libsass/dist'
    ]}))
    .pipe(sass().on('error', sass.logError))
    .pipe(minifyCSS())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./dist/css/'))
    .pipe(notify({ message: 'SASS task complete' }));
});

// JSHint task
gulp.task('js-hint', function() {
  gulp.src('js/**/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

// Uglify JS task
gulp.task('uglify', ['js-hint'], function() {
  gulp.src([
    'src/js/**/*.js',
    'bower_components/jquery/dist/jquery.js',
    'bower_components/owl.carousel/dist/owl.carousel.js',
    'bower_components/photoswipe/dist/photoswipe.js',
    'bower_components/photoswipe/dist/photoswipe-ui-default.js',
    'bower_components/parallax.js/parallax.js',
    'bower_components/bootstrap-sass/assets/javascripts/bootstrap.js'])
    //.pipe(uglify())
    //.pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./dist/js/'));
});

// Watch task
gulp.task('watch', function() {
  gulp.watch('src/sass/**/*.scss', ['styles']);
  gulp.watch('src/js/**/*.js', ['uglify']);
});

gulp.task('default', ['styles', 'js-hint', 'uglify', 'watch']);
