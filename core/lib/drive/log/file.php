<?php
namespace core\lib\drive\log;
use core\lib\config;
class file{
	public $path;//日志存储位置
	public function __construct(){
		$config = config::get('OPTION','log');
		$this->path = $config['PATH'];
	}
	public function log($message,$file = 'log'){
		/**
		 * 1.确定存储位置是否存在 新建目录
		 * 2.写入日志
		 */
		if(!is_dir($this->path.date('Ymd'))){
			mkdir($this->path.date('Ymd'),'0777',true);
		}
		//$message =date('Y-m-d H:i:s').' '.$message;
		//p($message);
		return file_put_contents($this->path.date('Ymd').'/'.$file.'.php',date('Y-m-d H:i:s').' '.json_encode($message).PHP_EOL,FILE_APPEND);
	}
}