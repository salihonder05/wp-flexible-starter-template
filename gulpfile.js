// https://gist.github.com/leymannx/f7867942184d01aa2311

var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    sassLint    = require('gulp-sass-lint'),
    sourcemaps  = require('gulp-sourcemaps'),
	prefix      = require('gulp-autoprefixer');


// SETTINGS
// ---------------

var sassOptions = {
  outputStyle: 'expanded'
};


// BUILD SUBTASKS
// ---------------

gulp.task('styles', function() {
	return gulp.src('./style.scss')
		.pipe(sourcemaps.init())
		.pipe(sass(sassOptions))
		.pipe(prefix())
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./'));
});

gulp.task('sass-lint', function() {
	return gulp.src('scss/**/*.scss')
		.pipe(sassLint())
		.pipe(sassLint.format())
		.pipe(sassLint.failOnError());
});

gulp.task('watch', function() {
	gulp.watch('./style.scss', gulp.series('styles'));
	gulp.watch('scss/**/*.scss', gulp.series('styles'));
});


// BUILD TASKS
// ------------

gulp.task('default', gulp.series('styles', 'watch'));
gulp.task('build', gulp.series('styles'));