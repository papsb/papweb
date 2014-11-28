var gulp = require('gulp');
var serve = require('gulp-serve');
var livereload = require('gulp-livereload');


gulp.task('serve', serve('public'));

gulp.task('watch', ['serve'], function () {
  gulp.watch(['!public/libs/**', 'public/**']).on('change', function (file) {
    livereload.changed(file.path);
  })
})
