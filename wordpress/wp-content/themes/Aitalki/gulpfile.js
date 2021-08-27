//===
// IMPORTS
//===
const { series, parallel, src, dest, watch } = require('gulp');
const browserSync = require('browser-sync').create();
const exec = require('gulp-exec');
const sourcemaps = require('gulp-sourcemaps');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const sass = require('gulp-sass')(require('sass'));
const htmlmin = require('gulp-htmlmin');
const iconfont = require('gulp-iconfont');
const runTimestamp = Math.round(Date.now()/1000);

const fontName = 'icons'

//===
// VARIABLES
//===
const SRC_PATH = 'assets';
const DEST_PATH = 'dist';
const DIST_JS = 'main.min.js';

//===
// TASKS
//===

// Static server with reload
function initBrowserSync(cb) {
    browserSync.init({
        /*server: {   // Folder
            baseDir: "./" + DEST_PATH
        },*/
        proxy: "localhost:8085",
    });
    return cb;
}

// Delete dist folder
function cleanOld(cb) {
    return src('.')
        .pipe(exec('rd /s /q dist'))
        .pipe(exec('mkdir dist'));
}

// HTML min
function html(cb) {
    return src(SRC_PATH + '/*.html')
        .pipe(htmlmin({ collapseWhitespace: true }))
        .pipe(dest(DEST_PATH))
        .pipe(browserSync.stream()) ;
}

// IMGs
function img(cb) {
    return src(SRC_PATH + '/img/**/*')
        .pipe(dest(DEST_PATH + '/img/'))
        .pipe(browserSync.stream()) ;
}

// Videos
function video(cb) {
    return src(SRC_PATH + '/videos/**/*')
        .pipe(dest(DEST_PATH + '/videos/'))
        .pipe(browserSync.stream()) ;
}

function fonts(cb) {
    return src(SRC_PATH + '/fonts/*')
        .pipe(dest(DEST_PATH + '/fonts/'))
        .pipe(browserSync.stream()) ;
}



// JS concat + sourcemaps + babel + min
function js(cb) {
    return src([SRC_PATH + '/js/*.js'])
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(sourcemaps.write('.'))
        .pipe(dest(DEST_PATH + '/js/'))
        .pipe(browserSync.stream()) ;
}

// JS vendors
 function jsVendors(cb) {
    return src(SRC_PATH)
        .pipe(exec(`cp -r ${SRC_PATH}/js/vendors ${DEST_PATH}`))
        .pipe(browserSync.stream());
}

// Compile SASS + sourcemaps
function sassCompile(cb) {
    return src([SRC_PATH + '/sass/desktop.sass', SRC_PATH + '/sass/mobile.sass', SRC_PATH + '/sass/tablet.sass'])
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(rename({ extname: '.min.css' }))
        .pipe(sourcemaps.write('.'))
        .pipe(dest(DEST_PATH + '/css/'))
        .pipe(browserSync.stream()) ;
}

// Build Font icons. *.svg to font-icos.woff2
function buildFontIcons() {
    return src(SRC_PATH + '/fonts/icons/*.svg')
        .pipe(iconfont({
            fontName: 'font-icons',
            prependUnicode: true,
            formats: ['woff2'],
            timestamp: runTimestamp
        }))
        .pipe(dest(DEST_PATH + '/fonts/'))
        .pipe(browserSync.stream()) ;

}


//===
// Commands
//===

const build = series(cleanOld, parallel(html, img, fonts, js, sassCompile, buildFontIcons));

// gulp dev
exports.dev = function () {
    build();
    watch(SRC_PATH + '/*.html', html);
    watch(SRC_PATH + '/**/*', img);
    watch(SRC_PATH + '/js/*.js', js);
    watch(SRC_PATH + '/fonts/*', fonts);
    watch([SRC_PATH + '/sass/*.sass', SRC_PATH + '/sass/**/*.sass'], sassCompile);
    initBrowserSync();
    watch([SRC_PATH + '/fonts/icons/*.svg'], buildFontIcons);
}

// gulp
exports.default = build;
