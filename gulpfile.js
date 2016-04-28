/* jslint node: true */
"use strict";

var gulp = require('gulp');

var styleguide = require('devbridge-styleguide');

gulp.task('start-styleguide', function () {
  styleguide.startServer();
});


gulp.task('default', function () {
  // place code for your default task here
});