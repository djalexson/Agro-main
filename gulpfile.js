const { watch, dest, series, src, parallel } = require('gulp');

const browserSync = require('browser-sync');

const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
const rename = require("gulp-rename");
const imagemin = require('gulp-imagemin');
const htmlmin = require('gulp-htmlmin');
//НОВЫЕ
const uglifyjs = require('gulp-uglifyjs'),
	concat = require('gulp-concat'),
	clean = require('gulp-clean'), // Подключаем модуль gulp-clean (вместо del)
	pngquant = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
	cssnano = require('gulp-cssnano'), // Подключаем пакет для минификации CSS
	cache = require('gulp-cache'),
	webpackStream = require('webpack-stream'),
	webpack = require('webpack'),
	TerserPlugin = require('terser-webpack-plugin');

function server() {

	browserSync.init({
		server: {
			baseDir: "src/"
		},
		ghostMode: { clicks: false },
		notify: false,
		online: true
	});
};


function styles() {
	return src("src/sass/**/*.+(scss|sass)")
		.pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
		.pipe(rename({ suffix: '.min', prefix: '' }))
		.pipe(autoprefixer())
		.pipe(cleanCSS({ compatibility: 'ie8' }))
		.pipe(dest("src/css"))
		.pipe(browserSync.stream());
};



function libsJs() {
	return src([ // Берем все необходимые библиотеки
		//'src/libs/jquery/dist/jquery.min.js', // Берем jQuer
		'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', // Берем jQuer
	])
		.pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
		//.pipe(uglifyjs()) // Сжимаем JS файл
		.pipe(dest('src/js')); // Выгружаем в папку src/js
};
function minJs() {
	return src(['src/js/*.js', '!src/js/*.min.js'])
		.pipe(webpackStream({
			mode: 'production',
			performance: { hints: false },
			plugins: [
				//new webpack.ProvidePlugin({ $: 'jquery', jQuery: 'jquery', 'window.jQuery': 'jquery' }), // jQuery (npm i jquery)
			],
			module: {
				rules: [
					{
						test: /\.m?js$/,
						exclude: /(node_modules)/,
						use: {
							loader: 'babel-loader',
							options: {
								presets: ['@babel/preset-env'],
								plugins: ['babel-plugin-root-import']
							}
						}
					}
				]
			},
			optimization: {
				minimize: true,
				minimizer: [
					new TerserPlugin({
						terserOptions: { format: { comments: false } },
						extractComments: false
					})
				]
			},
		}, webpack)).on('error', (err) => {
			this.emit('end')
		})
		.pipe(concat('app.min.js'))
		.pipe(dest('src/js'))
		.pipe(browserSync.stream())
}




function clearAll(callback) {
	return cache.clearAll();
}
function cleanAll() {
	return src('dist', { allowEmpty: true }).pipe(clean()); // Удаляем папку dist перед сборкой
};



async function build() {

	var buildCss = src([ // Переносим библиотеки в продакшен
		'src/css/style.min.css',
		'src/css/libs.min.css'
	])
		.pipe(dest('dist/css'))

	var buildFonts = src('src/fonts/**/*') // Переносим шрифты в продакшен
		.pipe(gdest('dist/fonts'))
	var buildIcons = src('src/icons/**/*') // Переносим шрифты в продакшен
		.pipe(gdest('dist/icons'))

	var buildJs = src('src/js/**/*') // Переносим скрипты в продакшен
		.pipe(dest('dist/js'))

	var buildHtml = src('src/*.html') // Переносим HTML в продакшен
		.pipe(dest('dist'));

};

function images() {
	return src("src/img/**/*")
		.pipe(cache(imagemin({
			interlaced: true,
			progressive: true,
			svgoPlugins: [{ removeViewBox: false }],
			use: [pngquant()]
		})))
		.pipe(dest("dist/img"));
};
function watchStart() {
	watch("src/sass/**/*.+(scss|sass)", { usePolling: true }, styles);
	watch("src/*.html", { usePolling: true }).on('change', browserSync.reload);
	watch(['src/js/**/*.js', '!src/js/**/*.min.js'], { usePolling: true }, minJs); // Наблюдение за главным JS файлом и за библиотеками

};

exports.default = series(minJs, libsJs, styles, parallel(server, watchStart));