var gulp       = require('gulp'),
    svgSymbols = require('gulp-svg-symbols');

gulp.task('sprites', function () {
    return gulp.src( './resources/assets/icons/**/*.svg' )
    //   .pipe(
    //     svgSymbols({
    //       title: '%f icon',
    //       templates: ['default-svg']
    //     })
    //   )
    //   .pipe(gulp.dest('./public/img/UI'))
      .pipe(
        svgSymbols({
          title: '%f icon',
          templates: ['./resources/assets/icons/icon-system.js']
        })
      )
      .pipe(gulp.dest('./resources/assets/js/components'));
});

gulp.task('dev', ['sprites'], function() {
});

gulp.task('watch', ['dev'], function() {

});
