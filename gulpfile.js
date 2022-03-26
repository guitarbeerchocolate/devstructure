var gulp = require("gulp");
var watch = require("gulp-watch");

gulp.task("watch-php", function() {
  return watch("src/**/*.php", { ignoreInitial: false }).pipe(
    gulp.dest("dist")
  );
});

gulp.task("watch-png", function() {
  return watch("src/**/*.png", { ignoreInitial: false }).pipe(
    gulp.dest("dist")
  );
});

gulp.task("watch-pdf", function() {
  return watch("src/**/*.pdf", { ignoreInitial: false }).pipe(
    gulp.dest("dist")
  );
});

gulp.task("copy-composer", function() {
  gulp.src("composer.json").pipe(gulp.dest("dist"));
});

gulp.task("copy-babelrc", function() {
  gulp.src(".babelrc").pipe(gulp.dest("dist"));
});

gulp.task("copy-favicon", function() {
  gulp.src("src/favicon.ico").pipe(gulp.dest("dist"));
});

gulp.task(
  "start",
  gulp.parallel(
    "watch-php",
    "watch-png",
    "watch-pdf",
    "copy-composer",
    "copy-babelrc",
    "copy-favicon"
  )
);

gulp.task("default", gulp.series("start"));
