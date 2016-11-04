<?php
/**
* 入口文件
* 1.定义常量
* 2.加载函数库
* 3.启动框架
*/
//框架根目录
define('MYFRAME',realpath('./'));
//框架核心文件路径
define('CORE', MYFRAME.'\core');
//项目文件 控制器 模型
define('APP',MYFRAME.'/app');

//debug模式
define('DEBUG', true);

if(DEBUG){
	ini_set('display_errors','on');
}else{
	ini_set('display_errors', 'off');
}

//加载函数库
include CORE.'\common\function.php';
include CORE.'/jay.class.php';

//实例化的类不存在时触发jay类的load方法
spl_autoload_register('\core\jay::load');
\core\jay::run();


