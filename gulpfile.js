var gulp = require('gulp');

var clean = require('gulp-clean');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');

var bases = {
 app: 'bower_components/',
 dist_js: 'public_html/assets/js/',
 dist_css: 'public_html/assets/css/',
};

var paths = {
 scripts: ['bower_components/**/*.js'],
 styles: ['bower_components/**/*.css'],
 fonts: ['images/**/*.png'],
};

// Delete the JS directory
gulp.task('clean_js', function() {
 return gulp.src(bases.dist_js)
 .pipe(clean());
});
// Delete the CSS directory
gulp.task('clean_css', function() {
 return gulp.src(bases.dist_css)
 .pipe(clean());
});

// Process scripts and concatenate them into one output file
gulp.task('scripts',  function() {
 gulp.src(paths.scripts)
 //.pipe(uglify())
 //.pipe(concat('app.min.js'))
 .pipe(gulp.dest(bases.dist_js));
});

// Imagemin images and ouput them in dist
gulp.task('imagemin',  function() {
 gulp.src(paths.images)
 .pipe(imagemin())
 .pipe(gulp.dest(bases.dist + 'images/'));
});

// Copy all other files to dist directly
gulp.task('copy', function() {

 // Copy styles
 gulp.src(paths.styles, {cwd: bases.app})
 .pipe(gulp.dest(bases.dist_css));

});

// A development task to run anytime a file changes
//gulp.task('watch', function() {
 //gulp.watch('app/**/*', ['scripts', 'copy']);
//});

// Define the default task as a sequence of the above tasks
//gulp.task('default', ['clean_js', 'clean_css','scripts', 'imagemin', 'copy']);
gulp.task('default', ['scripts', 'copy']);