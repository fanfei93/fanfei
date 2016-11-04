<?php
namespace core\lib;
class route{
	public $ctrl;
	public $action;
	function __construct(){
		/**
		* 1.隐藏index.php
		* 2.获取URL参数部分
		* 3.返回对应的控制器和方法
		*/

		if(isset($_SERVER[REQUEST_URI]) && $_SERVER[REQUEST_URI] !='/myFramework/'){
			//
			$path=$_SERVER[REQUEST_URI];
			$arr=explode('/',trim($path,'/'));
			unset($arr[0]);
			if (isset($arr[1])) {
				$this->ctrl=$arr[1];
			}
			unset($arr[1]);
			if (isset($arr[2])) {
				$this->action=$arr[2];
				unset($arr[2]);
			}else{
				$this->action='index';
			}
			//url多余部分转换成GET
			p($arr);
			
		}else{
			$this->ctrl = 'index';
			$this->action = 'index';
		}

	}
}