'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {
  return gulp.src('./public/css/dev/**/*.scss')
    .pipe(sourcemaps.init())
	.pipe(sass().on('error', sass.logError))
	.pipe(sourcemaps.write('./maps'))
	.pipe(sourcemaps.write())
    .pipe(gulp.dest('./public/css/dist'));
});

gulp.task('default', function () {
  gulp.watch('./public/css/dev/**/*.scss', ['sass']);
});