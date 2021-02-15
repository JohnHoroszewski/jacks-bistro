const gulp = require( 'gulp' );
const sourcemaps = require( 'gulp-sourcemaps' );
const sass = require('gulp-sass');
const csso = require('gulp-csso');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
 
sass.compiler = require('node-sass');

// Create browsersyn function
function sync(done) {
  browserSync.init({
    files: [
      './**/*.php'
    ],
    // Changegit
    proxy: 'http://localhost/jacks-bistro'
  });
  done();
}

// Create sass and sourcemaps function
function sassy() {
  return gulp.src('./assets/*.scss')
    .pipe( sourcemaps.init() )
    .pipe(sass().on('error', sass.logError))
    .pipe( autoprefixer() )
    .pipe(csso())
    .pipe( sourcemaps.write( './' ) )
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
};

// Create tasks for functions(probably not needed)
gulp.task( "sass", sassy );
gulp.task( "sync", sync );

// Create watch task
gulp.task( 'watch', function () {
  gulp.watch('./assets/*.scss', gulp.series('sass'));
  gulp.watch('./**/*.php', gulp.series('sync'));
});
