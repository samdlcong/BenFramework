<?php
namespace app\ctrl;
class indexCtrl {
	public function index(){
		p('it is index');
		$model = new \core\lib\model();
		$sql = 'select * from user';
		$res = $model->query($sql);
		$arr = $res->fetchAll(\PDO::FETCH_ASSOC);
		p($arr);
	}
}