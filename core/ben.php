<?php
namespace core;

class ben{
	static public $classMap=array();
	public $assign =array();
	static public function run(){
		//p('ok');
		\core\lib\log::init();
		//\core\lib\log::log('test');
		//\core\lib\log::log($_SERVER,'server');
		$route = new \core\lib\route();
		$ctrlClass =$route->ctrl;
		$action = $route->action;
		$ctrlfile= APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
		$ctrlClass = MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
		//p($ctrlClass);
		if(is_file($ctrlfile)){
			include $ctrlfile;
			//new MODULE.'\ctrl\\'.$ctrlClass();
			$ctrl = new $ctrlClass();
			$ctrl->$action();
			//print_r($ctrl);
			\core\lib\log::log('Ctrl: '.$ctrlClass.'  '.'Action: '.$action);
		}else{
			throw new \Exception('找不到控制器'.$ctrlClass);
		}
		
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

	public function assign($name,$value){
		$this->assign[$name] = $value;
	}

	public function display($file){
		$file = APP.'/views/'.$file;
		//p($file);
		if(is_file($file)){
			//extract($this->assign);
			\Twig_Autoloader::register();

			$loader = new \Twig_Loader_Filesystem(APP.'/views');
			$twig = new \Twig_Environment($loader,array(
				'cache'=>BEN.'/log/twig',
				'debug'=>DEBUG
			));
			$template = $twig->loadTemplate('index\index.html');
			$template->display($this->assign?$this->assign:'');


		}
	}
}