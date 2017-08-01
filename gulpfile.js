var gulp = require('gulp');
var sass = require('gulp-sass');

// Compile Sass files to CSS.
gulp.task('sass', function(){
	return gulp.src('sass/style.scss')
			.pipe(sass())
			.pipe(gulp.dest('./'))
});

// Watch changes in resources.
gulp.task('watch', function(){
	gulp.watch('sass/**/*.sass', ['sass']);
	gulp.watch('sass/**/*.scss', ['sass']);
});