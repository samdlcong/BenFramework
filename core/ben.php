<?php
namespace core;

class ben{
	static public $classMap=array();

	static public function run(){
		//p('ok');
		$route = new \core\lib\route();
		
	}
	static public function load($class){
		//自动加载类库
		if(isset(self::$classMap[$class])){
			return true;
		}else{
			$class = str_replace('\\', '/', $class);
			$file = BEN.'/'.$class.'.php';
			if(is_file($file)){
				include $file;
				self::$classMap[$class] = $class;
			}else{
				return false;
			}
		}
	}
}