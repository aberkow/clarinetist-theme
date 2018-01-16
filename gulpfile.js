const gulp = require('gulp');
const jshint = require('jshint');
const stylish = require('jshint-stylish');
const pluginsOptions = {
  // enable debugging, camel case hyphenated names, and lazily load plugins.
  DEBUG: true,
  camelize: true,
  lazy: true
};
const plugins = require('gulp-load-plugins')(pluginsOptions);
const del = require('del');

const onError = (err) => {
  console.log(`Error - ${err}`);
};

gulp.task('js', () => {
  gulp.src('js/index.js')
    .pipe(plugins.plumber({
      errorHandler: onError
    }))
    .pipe(plugins.sourcemaps.init())
      .pipe(plugins.babel({
        presets: ['babel-preset-env']
      }))
      .pipe(plugins.size())
    .pipe(plugins.sourcemaps.write('./'))
    .pipe(gulp.dest('build', {
      overwrite: true
    }));
});

gulp.task('sass', () => {
  gulp.src('sass/main.scss')
    .pipe(plugins.plumber({
      errorHandler: onError
    })) 
    .pipe(plugins.sourcemaps.init())
      .pipe(plugins.sass())
      .pipe(plugins.autoprefixer({
        browsers: ['last 3 versions', 'ie 8'],
        cascade: false
      }))
      .pipe(plugins.cssnano())
      .pipe(plugins.size())
    .pipe(plugins.sourcemaps.write('./'))
    .pipe(gulp.dest('build', {
      overwrite: true
    }));
});

gulp.task('default', ['js', 'sass'], () => {
  gulp.watch(['js/**/*.js'], ['js']);
  gulp.watch(['sass/**/*.scss', ['sass']]);
});

// gulp.task('default', () => {
//   console.log('ran');
// });

// gulp.task('default', ['js', 'sass']);