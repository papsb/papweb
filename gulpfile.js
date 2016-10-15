var gulp = require('gulp');
var serve = require('gulp-serve');
var livereload = require('gulp-livereload');
var fs = require('fs');

livereload.listen({
  "server": "localhost",
  "port": "35729",
  "reloadPage": "index.html"
});

gulp.task('serve', serve({
  root: [ 'public' ],
  hostname: '0.0.0.0', // this fix gulp-serve v1.4 to open from another PC
  port: 8000
}));

gulp.task('watch', ['serve'], function () {
  gulp.watch(['!public/libs/**', 'public/**']).on('change', function (file) {
    livereload.listen();
    livereload.changed(file.path);
  })
})

gulp.task('default', function () {
  var files = fs.readdirSync('public/');
  console.log(files);
})
