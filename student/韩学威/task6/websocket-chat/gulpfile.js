var gulp = require('gulp'); //本地安装gulp所用到的地方
// var watcher = gulp.watch('/**/*.js', ['uglify','reload']);
 
//定义一个testLess任务（自定义任务名称）
// gulp.task('testLess', function () {
//     gulp.src('src/less/index.less') //该任务针对的文件
//         .pipe(less()) //该任务调用的模块
//         .pipe(gulp.dest('src/css')); //将会在src/css下生成index.css
// });
 
// gulp.task('default',['testLess', 'elseTask']); 
//定义默认任务 elseTask为其他任务，该示例没有定义elseTask任务
 
//gulp.task(name[, deps], fn) 定义任务  name：任务名称 deps：依赖任务名称 fn：回调函数
//gulp.src(globs[, options]) 执行任务处理的文件  globs：处理的文件路径(字符串或者字符串数组) 
//gulp.dest(path[, options]) 处理完后文件生成路径

// gulp.task('app', function() {
//   // 将你的默认的任务代码放在这
//   gulp.src('./app.js');
// });
// gulp.task('default',['watch1']);

// gulp.task('watch1',function(){
// 	return gulp.watch('app.js');
// });
// watcher.on('change', function(event) {
//   console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
// });
gulp.task('default',function(){
	console.log('hahaha')
})