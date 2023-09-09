const { src, dest, series } = require('gulp');
const sass = require('gulp-dart-sass')

function css() {
    return src('assets/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('assets/css/'));
}

exports.default = css;