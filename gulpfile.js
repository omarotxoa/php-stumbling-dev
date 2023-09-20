const { src, dest, series } = require('gulp');
const sass = require('gulp-dart-sass')

function css() {
    return src('assets/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('assets/css/'));
}
function admin() {
    return src('admin/assets/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('admin/assets/'));
}
exports.default = css;
exports.admin = admin;