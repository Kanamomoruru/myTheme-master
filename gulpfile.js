var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');

gulp.task('convertToCss', function () {
    gulp.src('./src/scss/style.scss')
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err.messageFormatted);
                this.emit('end')
            }
        }))
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./'));
});

gulp.task('default', function () {
    gulp.watch('./src/scss/**/*.scss', ['convertToCss']);
});