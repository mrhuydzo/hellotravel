var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat'); //noi file
var minifyCss = require('gulp-cssnano'); // nen file
var rename = require('gulp-rename');
var livereload = require('gulp-livereload');
var autoprefixer = require('gulp-autoprefixer');
var imagemin = require('gulp-imagemin');


var bs = require('browser-sync').create();
var browserSync = require('browser-sync');
var reload = browserSync.reload;

gulp.task('serve', [], function () {
    browserSync({
        notify: false,
        server: {
            baseDir: '.'
        },

        files: [
            "assets/css/*.css",
            {
                match: ["*.php"],
                fn:    function (event, file) {
                    /** Custom event handler **/
                }
            }
        ]
    });

    gulp.watch(['assets/*.html'], reload);
    gulp.watch(['assets/js/*.js'], reload);
    gulp.watch(['assets/css/*.css'], reload);
});

gulp.task('sass', function(){
    return gulp.src('assets/sass/*.scss') // cấu hình gulp địa chỉ của tập tin nguồn sass
        .pipe(sass()) // chuyển tập tin nguồn sass thành tập tin css
        .pipe(minifyCss()) //Nen file
        .pipe(rename('main.min.css'))
        .pipe(gulp.dest('assets/css')) // địa chỉ tập tin css sẽ được lưu lại
        .pipe(bs.reload({stream: true}))

});

gulp.task('watch', function(){
    gulp.watch('assets/sass/**/*.scss', ['sass']);
    gulp.watch("*.html").on('change', bs.reload);
    // Other watchers
});

gulp.task('autoprefix', function() {
    gulp.src('assets/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: [
                'last 3 versions',
                'iOS >= 8',
                'Safari >= 8',
                'ie 11',
            ]
        }))
        .pipe(gulp.dest('assets/css/'))
});

gulp.task ('imagein',function () {
    gulp.src('assets/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('assets/images'))
});

// Default Task
gulp.task('default', ['sass', 'watch','autoprefix']);