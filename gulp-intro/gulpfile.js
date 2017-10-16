var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');


// Sass Source
var scssFiles = './src/scss/style.scss';

// CSS destination
var cssDest = './css';

// Options for development
var sassDevOptions = {
  outputStyle: 'expanded'
}

// Options for production
var sassProdOptions = {
  outputStyle: 'compressed'
}

gulp.task('sassdev', function() {
  return gulp.src(scssFiles)
  .pipe(sass(sassDevOptions)).on('error', sass.logError)
  .pipe(gulp.dest(cssDest));
});

gulp.task('sassprod', function() {
  return gulp.src(scssFiles)
    .pipe(sass(sassProdOptions).on('error', sass.logError))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest(cssDest));
});

gulp.task('watch', function() {
  gulp.watch(scssFiles, ['sassdev', 'sassprod']);
});

gulp.task('default', ['sassdev', 'sassprod', 'watch']);