var gulp                      = require('gulp'),
    postcss                   = require('gulp-postcss'),
    uglify                    = require('gulp-uglify'),
    browserSync               = require('browser-sync'),
    rename                    = require("gulp-rename"),
    concat                    = require("gulp-concat"),
    cssnano                   = require("gulp-cssnano"),
    runSequence               = require('run-sequence'),
    inlinesource              = require('gulp-inline-source');

gulp.task('phpandcss', function() {
    runSequence('php', 'css-1', 'css-2', 'css-3', 'css-4');
});

gulp.task('php', function() {
    return gulp.src('./vincentmvdm_src/**/*.php')
        .pipe(gulp.dest('./vincentmvdm'))
});

gulp.task('css-1', function() {
    return gulp.src('./vincentmvdm_src/css/style.css')
        .pipe(postcss([require('autoprefixer')]))
        .pipe(cssnano({ safe: true }))
        .pipe(gulp.dest('./vincentmvdm_temp/css'));
});

gulp.task('css-2', function() {
    return gulp.src('./vincentmvdm_src/css/app.css')
        .pipe(postcss([require('postcss-import'),
                       require('postcss-custom-media'),
                       require('postcss-custom-properties'),
                       require('postcss-calc')]))
        .pipe(rename("app.min.css"))
        .pipe(gulp.dest('./vincentmvdm/css'));
});

gulp.task('css-3', function() {
    return gulp.src('./vincentmvdm/includes/head.php')
        .pipe(inlinesource())
        .pipe(gulp.dest('./vincentmvdm/includes/'))
});

gulp.task('css-4', function() {
    return gulp.src('./vincentmvdm_src/css/vendor.css')
        .pipe(postcss([require('postcss-import'),
                       require('postcss-custom-media'),
                       require('postcss-custom-properties'),
                       require('postcss-calc')]))
        .pipe(rename("vendor.min.css"))
        .pipe(gulp.dest('./vincentmvdm/css'));
});

gulp.task('data', function() {
    return gulp.src('./vincentmvdm_src/data/*')
        .pipe(gulp.dest('./vincentmvdm/data'))
});

gulp.task('favicon', function() {
    return gulp.src('./vincentmvdm_src/favicon/*')
        .pipe(gulp.dest('./vincentmvdm/favicon'))
});

gulp.task('fonts', function() {
    return gulp.src('./vincentmvdm_src/fonts/*')
        .pipe(gulp.dest('./vincentmvdm/fonts'))
});

gulp.task('images', function() {
    return gulp.src('./vincentmvdm_src/images/**/*')
        .pipe(gulp.dest('./vincentmvdm/images'))
});

gulp.task('js-1', function() {
    return gulp.src('./vincentmvdm_src/js/picturefill.min.js')
        .pipe(gulp.dest('./vincentmvdm/js'))
});

gulp.task('js-2', function() {
    return gulp.src(['./vincentmvdm_src/js/jquery-3.1.1.min.js', './vincentmvdm_src/js/smooth-scroll.js', './vincentmvdm_src/js/jquery.ba-throttle-debounce.min.js', './vincentmvdm_src/js/jquery.fluidbox.min.js', './vincentmvdm_src/js/index.js', './vincentmvdm_src/js/animate-scroll.js'])
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(rename("app.min.js"))
        .pipe(gulp.dest('./vincentmvdm/js'))
});

gulp.task('js', function() {
    runSequence('js-1', 'js-2');
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost:8888"
    });
});

gulp.task('watch', function() {
    gulp.watch('./vincentmvdm_src/**/*.php', ['phpandcss']);
    gulp.watch('./vincentmvdm_src/css/*.css', ['phpandcss']);
    gulp.watch('./vincentmvdm_src/data/*', ['data']);
    gulp.watch('./vincentmvdm_src/favicon/*', ['favicon']);
    gulp.watch('./vincentmvdm_src/fonts/*', ['fonts']);
    gulp.watch('./vincentmvdm_src/images/**/*', ['images']);
    gulp.watch('./vincentmvdm_src/js/*.js', ['js']);
    gulp.watch('./vincentmvdm/**/*').on('change', browserSync.reload);
});

gulp.task('default', ['phpandcss', 'data', 'favicon', 'fonts', 'images', 'js', 'browser-sync', 'watch']);
