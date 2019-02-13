const concat = require('gulp-concat');
const gulp = require('gulp');
const sass = require('gulp-sass');

sass.compiler = require('node-sass');

const paths = {
  theme: './wp/wp-content/themes/blankslate-child/',
}

gulp.task('sass', function () {
  return gulp.src(paths.theme + 'scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    // .pipe(concat('style.css'))
    .pipe(gulp.dest(paths.theme));
});

gulp.task('sass:watch', function () {
  gulp.watch(paths.theme + 'scss/*.scss', gulp.series('sass'));
});
