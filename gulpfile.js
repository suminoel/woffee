/**
 * CSS/JSファイルのコンパイル・監視・圧縮・ブラウザのオートリロードを行う
 */

/* モジュールの読み込み
--------------------------------------------------------- */
const { series, src, dest, watch, parallel} = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require("browser-sync").create();

let hostname;

/**
 * コマンドライン引数でホスト名を必須とする
 *
 * @param {*} done
 */
function checkParam(done){
	if ( "--hostname" == process.argv[3] ){
		hostname = process.argv[4];
	} else {
		console.log("ERROR: hostname is not specified.");
		console.log("Run command like: gulp watchSync --hostname example.com");
		return;
	}
	done();
}

/**
 * Sassファイルをコンパイル
 */
function compileSass() {
	return src([
		'./assets/sass/*.scss'
	]).pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(sass({outputStyle: 'expanded'}))
		.pipe(dest('./'));
}

/**
 * Sassを監視
 */
function watchSass() {
	watch( [
		'./assets/sass/**/*.scss'
	], series(compileSass) );
}

/* browerSync
See document: https://www.browsersync.io/docs/options
--------------------------------------------------------- */
/**
 * watchSyncタスクのための関数
 * watchSyncタスクは、Sassファイルを変更するとブラウザが更新される
 */
function runBrowserSync() {
	browserSync.init({
		proxy: hostname,
		browser: 'sidekick',
		files: ['*.css']
	});
}

/* Public tasks: 利用可能なコマンド
--------------------------------------------------------- */
exports.default = series(compileSass);
exports.watch = series(watchSass);
exports.watchSync = series(checkParam, compileSass, parallel(runBrowserSync, watchSass) );
