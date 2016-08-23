<?php
namespace app\ctrl;
use core\lib\model;
class indexCtrl extends \core\ben {
	public function index(){
		//p('it is index');
		//$temp = \core\lib\config::get('ACTION','route');
		//p($temp);
		//$temp = \core\lib\config::get('ACTION','route');
		//p($temp);
		$model = new \app\model\user2Model();
		//$res = $model->getAll();
		//$res = $model->getOne(4);
		//$data = array('name'=>'lisisisi','email'=>'hah@126.com');
		//$res = $model->updateOne(4,$data);
		//$res = $model->deleteOne(6);
		//dump($res);
		// $sql = 'select * from user';
		// $res = $model->query($sql);
		// $arr = $res->fetchAll(\PDO::FETCH_ASSOC);
		//p($arr);
		//$res = $model->select('user2','*');
		//dump($res);
		// $d = array(
		// 	'name'=>'zhangsan',
		// 	'age'=>20,
		// 	'email'=>'szhangsa@126.com'
		// 	);
		// $res = $model->insert('user2',$d);
		// dump($res);
		$data ='hello world';
		$date = date('Y-m-d H:i:s');
		$this->assign('data',$data);
		$this->assign('date',$date);
		$this->display('index\index.html');
	}

	public function test(){
		$data ='test';
		$this->assign('data',$data);
		$this->display('index\test.html');
	}
}	
