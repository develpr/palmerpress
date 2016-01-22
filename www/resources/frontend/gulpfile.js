var gulp = require('gulp');  
var plumber = require('gulp-plumber');
var $    = require('gulp-load-plugins')();
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var gulpif = require('gulp-if');

var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

var config = {
  'bowerDirectory': './bower_components'
};



gulp.task('scripts', function() {
  return gulp.src([
        config.bowerDirectory + '/jquery/dist/jquery.min.js',
        config.bowerDirectory + '/foundation-sites/dist/foundation.min.js',
        './js/app.js',
        './js/auth.js'
      ])
      .pipe(concat('app.js'))
       .pipe(uglify())
      .pipe(gulp.dest('../../public/scripts/'))
      .pipe(concat('app.js'))
      .pipe(gulp.dest('../../public/scripts'));
});



gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
      .pipe(plumber())
    .pipe($.sass({
      includePaths: sassPaths
    })
        .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('css'))
    .pipe(gulp.dest('../../public/style'));
});

gulp.task('default', ['sass', 'scripts'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
  gulp.watch(['js/**/*.js'], ['scripts']);
});
