<?php
namespace app\ctrl;
class indexCtrl extends \core\ben {
	public function index(){
		p('it is index');
		$temp = \core\lib\config::get('ACTION','route');
		//p($temp);
		$temp = \core\lib\config::get('ACTION','route');
		//p($temp);
		$model = new \core\lib\model();
		$sql = 'select * from user';
		$res = $model->query($sql);
		$arr = $res->fetchAll(\PDO::FETCH_ASSOC);
		p($arr);
		$data ='hello world';
		$date = date('Y-m-d H:i:s');
		$this->assign('data',$data);
		$this->assign('date',$date);
		$this->display('index/index.html');
	}
}