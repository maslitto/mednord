'use strict';

function swallowError( error ){
	var date = new Date();
	console.error('[' + date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds() + '] Error: ' + error.message);
	this.emit('end');
}

var gulp = require('gulp'),
	watch = require('gulp-watch'),
	prefixer = require('gulp-autoprefixer'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-sass'),
	rigger = require('gulp-rigger'),
	fileinclude = require('gulp-file-include'),
	cssnano = require('gulp-cssnano'),
	imagemin = require('gulp-imagemin'),
	pngquant = require('imagemin-pngquant'),
	rimraf = require('rimraf'),
	browserSync = require("browser-sync"),
	plumber = require('gulp-plumber'),
	replace = require('gulp-replace'),
	htmlmin = require('gulp-htmlmin'),
	iconfont = require('gulp-iconfont'),
	iconfontCss = require('gulp-iconfont-css'),
	runTimestamp = Math.round(Date.now() / 1000),
	reload = browserSync.reload;

var path = {
	build: {
		html:      '../public/',
		index_dir: '../public/',
		js:        '../public/js/',
		css:       '../public/css/',
		img:       '../public/img/',
		fonts:     '../public/fonts/',
		icon_font: '../public/fonts/svg_icons/'

	},
	src:   {
		html:      ['*.html', 'html/**/*.html'],
		js:        'js/*.js',
		jsVendor:  'js/vendor/*.js',
		style:     'scss/*.scss',
		img:       'img/**/*.*',
		fonts:     'fonts/**/*.*',
		index_dir: 'index_dir/**/*.*',
		svg:       'img/svg/*.svg',
		svg_font_source:       'img/svg-font/*.svg'
	},
	watch: {
		html:      ['*.html', 'html/**/*.html', 'html/**/*.tpl'],
		js:        'js/**/*.js',
		style:     'scss/**/*.scss',
		img:       'img/**/*.*',
		fonts:     'fonts/**/*.*',
		index_dir: 'index_dir/**/*.*',
		svg:       'img/svg/*.svg'
	},
	clean: './build'
};

var config = {
	server:    {
		baseDir: "../public/"
	},
	port:      3002,
	//tunnel: true,
	host:      'localhost',
	logPrefix: "browser-sync"
};
var fontName = 'icon_font';
gulp.task('iconfont:build', function (){
	gulp.src(path.src.svg_font_source)
		.pipe(iconfontCss({
			fontName: fontName,
			path: 'node_modules/gulp-iconfont-css/templates/_icons.scss',
			targetPath: '../frontend/desktop/scss/base/_' + fontName + '.scss',
			fontPath: '../fonts/svg_icons/',
			cssClass: 'icon',
			normalize: true,
			fontHeight: 512,
			descent: 70
			//centerHorizontally: true
		}))
		.pipe(iconfont({
			fontName:       fontName, // required
			prependUnicode: true, // recommended option
			formats:        ['ttf', 'eot', 'woff', 'woff2'], // default, 'woff2' and 'svg' are available
			timestamp:      runTimestamp, // recommended to get consistent builds when watching files,
			normalize: true
			//fontHeight: 512,
			//descent: 70
		}))

		.pipe(gulp.dest(path.build.icon_font));
});

gulp.task('webserver', function (){
	browserSync.init(config);
});

gulp.task('clean', function ( cb ){
	rimraf(path.clean, cb);
});

gulp.task('html:build', function (){
	gulp.src(path.src.html)
		.pipe(fileinclude({
			basepath: '@file',
			context:  {
				addImg:      false,
				borderedImg: false,
				title:       false,
				class:       false,
				redArc:      false,
				prevStep:    false
			}
		}))
		.on('error', swallowError)
		.pipe(gulp.dest(path.build.html))
		.pipe(reload({stream: true}));
});

gulp.task('html:site', function (){
	gulp.src(path.src.html)
		.pipe(fileinclude({
			basepath: '@file',
			context:  {
				addImg:      false,
				borderedImg: false,
				title:       false,
				class:       false,
				redArc:      false,
				prevStep:    false
			}
		}))
		.on('error', swallowError)

		.pipe(htmlmin({collapseWhitespace: true}))
		.pipe(replace(/src="\.*\/*img/g, 'src="' + path.build.imgSite + 'img'))
		.pipe(replace(/^.*<!-- trim start -->(.*)<!-- trim end -->.*$/g, '$1'))
		.pipe(gulp.dest(path.build.html))
		.pipe(reload({stream: true}));
});

gulp.task('js:build', function (){
	gulp.src(path.src.js)
		.pipe(plumber())
		.pipe(rigger())
		.pipe(uglify())
		.pipe(gulp.dest(path.build.js))
		.pipe(reload({stream: true}));

	gulp.src(path.src.jsVendor)
		.pipe(plumber())
		.pipe(uglify())
		.pipe(gulp.dest(path.build.js + 'vendor/'))
		.pipe(reload({stream: true}));
});

gulp.task('style:build', function (){
	gulp.src(path.src.style)
		.pipe(sass({
			sourceMap:       false,
			errLogToConsole: true,
			//outputStyle: 'expanded',
			outputStyle: 'compressed',
			includePaths:    require('node-bourbon').includePaths
		}).on('error', sass.logError))
		.pipe(prefixer())
		//.pipe(cssnano())
		.pipe(gulp.dest(path.build.css))
		.pipe(reload({stream: true}));
});

gulp.task('image:build', function (){
	gulp.src(path.src.img)
		.pipe(imagemin({
			progressive: true,
			svgoPlugins: [{removeViewBox: false}],
			use:         [pngquant()],
			interlaced:  true
		}))
		.pipe(gulp.dest(path.build.img))
		.pipe(reload({stream: true}));
});

gulp.task('fonts:build', function (){
	gulp.src(path.src.fonts)
		.pipe(gulp.dest(path.build.fonts))
});

gulp.task('index_dir:build', function (){
	gulp.src(path.src.index_dir)
		.pipe(gulp.dest(path.build.index_dir))
});

gulp.task('build', [
	//'html:build',
	//'index_dir:build',
	//'js:build',
	'style:build'
	//'fonts:build',
	//'image:build',
	//'iconfont:build'
]);

gulp.task('watch', function (){
    watch([path.watch.style], function ( event, cb ){
        gulp.start('style:build');
    });
	/*watch(path.watch.html, function ( event, cb ){
		gulp.start('html:build');
	});
	watch([path.watch.js], function ( event, cb ){
		gulp.start('js:build');
	});
	watch([path.watch.img], function ( event, cb ){
		gulp.start('image:build');
	});
	watch([path.watch.fonts], function ( event, cb ){
		gulp.start('fonts:build');
	});
	watch([path.watch.index_dir], function ( event, cb ){
		gulp.start('index_dir:build');
	});*/
});

gulp.task('default', ['build', 'watch']); //, 'webserver'
