// Подключаем Gulp и все необходимые библиотеки
var gulp           = require('gulp'),
		gutil          = require('gulp-util' ),
		sass           = require('gulp-sass'),
		browserSync    = require('browser-sync'),
		cleanCSS       = require('gulp-clean-css'),
		autoprefixer   = require('gulp-autoprefixer'),
		bourbon        = require('node-bourbon'),
		ftp            = require('vinyl-ftp'),
		uglify = require('gulp-uglify'),
    	concat = require('gulp-concat'),
		babel = require('gulp-babel');



/*gulp.task('min-js',function () {
    gulp.src('birthday-wishes-report/js/birthday-wishes-report.js')
		.pipe(concat('birthday-wishes-report.min.js'))
		.pipe(uglify('birthday-wishes-report.min.js'))
        .pipe(gulp.dest('birthday-wishes-report/js/'))
});*/


/*gulp.task('min-css',function () {
    gulp.src('birthday-wishes-report/css/birthday-wishes-report.css')
        .pipe(concat('birthday-wishes-report.min.css'))
        .pipe(cleanCSS('birthday-wishes-report.min.js'))
        .pipe(gulp.dest('birthday-wishes-report/css/'))
});*/

// Обновление страниц сайта на локальном сервере
gulp.task('browser-sync', function() {
	browserSync({
        port: 5001,
		proxy: "sharpex",
		notify: false
	});
});

	gulp.task('babel', function() {
		return gulp.src('es6/*.js')
			.pipe(babel({
				presets: ['es2015']
			}))
			.pipe(gulp.dest('js/'))
			.pipe(browserSync.reload({stream: true}))
	});
// Компиляция stylesheet.css
gulp.task('sass', function() {
	return gulp.src('css/stylesheet.sass')
		.pipe(sass({
			includePaths: bourbon.includePaths
		}).on('error', sass.logError))
		.pipe(autoprefixer(['last 15 versions']))
		//.pipe(cleanCSS())
		.pipe(gulp.dest('css/'))
		.pipe(browserSync.reload({stream: true}))
});

// Наблюдение за файлами
gulp.task('watch', ['sass', 'browser-sync'], function() {
	gulp.watch('css/*.sass', ['sass']);
	gulp.watch('es6/*.js', ['babel']);
	gulp.watch('**/*.php', browserSync.reload);
	gulp.watch('js/*.js', browserSync.reload);
});

// Выгрузка изменений на хостинг
gulp.task('deploy', function() {
	var conn = ftp.create({
		host:      'hostname.com',
		user:      'username',
		password:  'userpassword',
		parallel:  10,
		log: gutil.log
	});
	var globs = [
	'catalog/view/theme/sharpex/**'
	];
	return gulp.src(globs, {buffer: false})
	.pipe(conn.dest('/path/to/folder/on/server'));
});

gulp.task('default', ['watch']);
