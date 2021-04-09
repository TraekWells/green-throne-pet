const gulp = require("gulp"),
  sass = require("gulp-dart-sass"),
  postcss = require("gulp-postcss"),
  autoprefixer = require("autoprefixer"),
  cssnano = require("cssnano"),
  browserSync = require("browser-sync").create(),
  sourcemaps = require("gulp-sourcemaps");

function scss() {
  return gulp
    .src("./assets/scss/**/*.scss")
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss([autoprefixer, cssnano]))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("./assets/css"))
    .pipe(browserSync.stream());
}

function watch() {
  browserSync.init({
    server: {
      baseDir: "./",
      notify: false,
    },
  });
  gulp.watch("./assets/scss/**/*.scss", scss);
  gulp.watch("./assets/js/**.js").on("change", browserSync.reload);
  gulp.watch("./**.html").on("change", browserSync.reload);
}

exports.scss = scss;
exports.watch = watch;
