


import { 
    src, 
    dest, 
    watch, 
    series 
} from 'gulp';
import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';

const sass = gulpSass(dartSass);

export function js(done) {
    src('src/js/app.js', {sourcemaps: true})
        .pipe(dest('scripts', {sourcemaps: '.'}));
    done();
}

export function css(done) {
    src('src/scss/main.scss', {sourcemaps: true})
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(dest('styles', {sourcemaps: '.'}));
        
    done();
}

export function dev() {
    watch('src/scss/**/*.scss', css);
    watch('src/js/**/*.js', js);
}

export default series(js, css, dev);