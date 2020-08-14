const babel = require('gulp-babel');
const clean = require('gulp-clean');
const gulp = require('gulp');
const postcss = require('gulp-postcss');
const sass = require('gulp-sass');
const zip = require('gulp-zip');

/**
 * Empty the dist folder.
 *
 * @returns {*}
 */
gulp.task('clean', () => gulp.src('dist/**/*.*', {read: false})
  .pipe(clean({force: true})));

/**
 * Run babel on the javascript files.
 *
 * @returns {*}
 */
gulp.task('build:js', () => gulp.src('src/js/**/*.js')
  .pipe(babel())
  .pipe(gulp.dest('assets/js')));

/**
 * Compile and run postcss.
 *
 * @returns {*}
 */
gulp.task('build:scss', () => gulp.src('src/scss/**/*.scss')
  .pipe(sass())
  .pipe(postcss())
  .pipe(gulp.dest('assets/css')));

/**
 * Copy the static css files and images.
 *
 * @returns {*}
 */
gulp.task('copy', () => gulp.src([
  'src/css/**/*.*',
  'src/img/**/*.*',
], {
  base: 'src',
})
  .pipe(gulp.dest('assets')));

/**
 * Collect all files and put it in a zip file.
 *
 * @returns {*}
 */
gulp.task('zip', () => gulp.src([
  '*.png',
  'LICENSE',
  'assets',
  'includes',
  'languages',
  'migration',
  'readme.txt',
  'templates',
  'woocommerce-myparcel.php',
])
  .pipe(zip('woocommerce-myparcel.zip'))
  .pipe(gulp.dest('./')));

/**
 * The default task.
 */
const build = gulp.series(
  'clean',
  gulp.parallel(
    'build:js',
    'build:scss',
    'copy',
  ),
  'zip',
);

gulp.task('build', () => build);

gulp.task('watch', () => {
  gulp.watch(['src/css/**/*.*', 'src/images/**/*.*'], null, gulp.series('copy'));
  // Skip babel in watch mode
  gulp.watch(['src/js/**/*.*'], null, () => gulp.src('src/js/**/*.js').pipe(gulp.dest('assets/js')));
  gulp.watch(['src/scss/**/*.*'], null, gulp.series('build:scss'));
});

exports.default = build;
