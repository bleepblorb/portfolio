var gulp       = require('gulp'),
    svgSymbols = require('gulp-svg-symbols');

gulp.task('sprites', function () {
    return gulp.src( './resources/assets/icons/**/*.svg' )
      .pipe(
        svgSymbols({
          title: '%f icon',
          templates: ['./resources/assets/icons/icon-system.js']
        })
      )
      .pipe(gulp.dest('./resources/assets/js/components'));
});

gulp.task('build', ['sprites'], function() {
});
