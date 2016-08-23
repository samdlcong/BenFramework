<?php
namespace app\model;
use core\lib\model;
class user2Model extends model{
	public $table = 'user2';
	public function getAll(){
		$res = $this->select($this->table,'*');
		return $res;
	}
	public function getOne($id){
		$res = $this->get($this->table,'*',array(
				'id'=>$id
				));
		return $res;
	}

	public function updateOne($id,$data){
		return $this->update($this->table,$data,array('id'=>$id));
	}

	public function deleteOne($id){
		return $this->delete($this->table,["id"=>$id]);
	}
}