<?php
namespace core;
class jay{
	public static $classMap=array();
	static public function run(){
		//p('ok');
		$route=new \core\lib\route();
		p($route);
	}
	static public function load($class){
		//自动加载类库
		if(isset($classMap[$class])){
			return true;
		}else{
			$class=str_replace('\\', '/', $class);
			if(is_file(MYFRAME.'/'.$class.'.class.php')){
				include MYFRAME.'/'.$class.'.class.php';
				self::$classMap[$class]=$class;
			}else{
				return false;
			}
		}
	}
}