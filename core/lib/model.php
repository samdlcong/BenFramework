<?php
namespace core\lib;
use core\lib\config;
class model extends \medoo {
	public function __construct(){
		$database =config::getAll('database');
		
		try{
			parent::__construct($database);
		}catch (\PDOException $e){
			p($e->getMessage());
		}
	}
}
