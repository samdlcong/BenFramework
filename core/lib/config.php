<?php
namespace core\lib;

class config{
	static public $configs = array();
	static public function get($name,$file){
		/**
		 * 1. 判断配置文件是否存在
		 * 2. 判断配置是否存在
		 * 3. 缓存配置
		 */
		if(isset(self::$configs[$file])){
			return self::$configs[$file][$name];
		}else{
			$path = BEN.'/core/config/'.$file.'.php';
			if(is_file($path)){
				$conf = include $path;
				if(isset($conf[$name])){
					self::$configs[$file] = $conf;
					return $conf[$name];
				}else{
				throw new \Exception('没有这个配置项'.$name);
				}
			}else{
			throw new \Exception('找不到配置文件'.$path);
			}
		}
	}
	static public function getAll($file){
		if(isset(self::$configs[$file])){
			return self::$configs[$file];
		}else{
			$path = BEN.'/core/config/'.$file.'.php';
			if(is_file($path)){
				$conf = include $path;
				self::$configs[$file]=$conf;
				return $conf;
			}else{
				throw new \Exception('找不到配置文件'.$path);
			}
		}
	}
}