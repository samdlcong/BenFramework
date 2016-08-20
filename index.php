<?php
/**
 * 入口文件
 * 1.定义框架
 * 2.加载函数库
 * 3.启动框架
 */

define('BEN', realpath('./'));
define('CORE', BEN.'/core');
define('APP', BEN.'/app');

define('DEBUG', true);

if(DEBUG){
	ini_set('display_error','On');
}else{
	ini_set('display_error','Off');
}


include CORE.'/common/function.php';
include CORE.'/ben.php';

spl_autoload_register('\core\ben::load');

\core\ben::run();
