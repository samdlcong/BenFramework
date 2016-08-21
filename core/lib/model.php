<?php
namespace core\lib;
use core\lib\config;
class model extends \PDO {
	public function __construct(){
		$database =config::getAll('database');
		
		try{
			parent::__construct($database['DSN'],$database['USERNAME'],$database['PASSWD']);
		}catch (\PDOException $e){
			p($e->getMessage());
		}
	}
}
