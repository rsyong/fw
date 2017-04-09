<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index()
	{
		$this->display();
	}

	public function getcode()
	{

		$data = file_get_contents("http://api.xiaoaitech.com/aipro/?service=Code.ReturnCode&phone=".$_GET['phone']);

		echo $data;
	}

	public function details()
	{
		$this->display();
	}

	public function getname()
	{
		$data = file_get_contents("http://api.xiaoaitech.com/aipro/?service=Login.CheckLogin&phone=".$_GET['phone']);

		$data = json_decode(substr($data,3),true);

		if ($data['data']['user_basicMsg']['name']) {
			echo $data['data']['user_basicMsg']['name'];
		} else {
			echo $data['data']['userMsg']['uid'];
		}
	}

	public function details_load()
	{
		$this->display();
	}
	public function detailstwo()
	{
		$this->assign('uid',$_GET['uid']);
		$this->display();
	}
	public function add()
	{
		$this->assign('uid',$_GET['uid']);
		$this->display();
	}
	public function id1()
	{
		$this->display();
	}
	public function getbasic()
	{
		$data = file_get_contents("http://api.xiaoaitech.com/aipro/?service=Login.CheckLogin&phone=".$_GET['phone']);

		$data = json_decode($data,true);


		$data = json_encode($data['data']['user_basicMsg']);

		echo $data;
	}
	public function getreport()
	{
		$data = file_get_contents("http://api.xiaoaitech.com/aipro/?service=report.Select&phone=".$_GET['phone']);
		
		$data = json_decode($data,true);

		if ($data['data']==1) {
			echo " ";
		} else {
			$data['data']['date'] = date("Y-m-d H:i",substr($data['data']['date'], 0,10));
			$data = json_encode($data['data']);

			echo $data;
		}
		
	}
}