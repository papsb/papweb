var gulp = require('gulp');
var serve = require('gulp-serve');
var livereload = require('gulp-livereload');

gulp.task('serve', serve({
  root: [ 'public' ],
  hostname: '0.0.0.0', //fix for v1.4 so we can access from other PC
  port: 8000
}));

gulp.task('watch', ['serve'], function () {
  gulp.watch(['!public/libs/**', 'public/**']).on('change', function (file) {
    livereload.changed(file.path);
  })
})
