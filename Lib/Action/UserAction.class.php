<?php
class UserAction extends Action{
	public function index()
	{
		//$this->title='hello ,thinkPHP';
		$Data = M('user'); // 实例化Data数据模型
		$condition = '';
        $this->data = $Data->field('',true)->order('id desc')->limit(10)->select();
        $this->assign('title','用户管理');
		$this->display();
	}
	function add(){
		//dump($_POST);
		if($_POST['password'] != $_POST['repassword']) {
			$this->error('输入的两次密码不正确');
		}
		$user = D('user');
		if($vo = $user->create()){//create 方法把post 过来的数据直接创建数据对象，相当神奇
			$user->createtime = time();
			$user->ip = $_SERVER['SERVER_ADDR'];
			if($user->add()){
				$this->success('用户注册成功！');
			}else {
				$this->error('用户注册失败，返回上级页面');
			}
		}else{
			$this->error($user->getError());
		}


	}
	function delete(){
		$user = D('user');
		$id = $_GET['id'];
		if($user->delete($id)) {
			$this->success('delete success!');
		}else {
			$this->error('delete failure!');
		}
		
	}
	function edit(){
		$id = $_GET['id'];
		$user = M('user');
		$list = $user->where("id=$id")->find();
		$this->assign('list',$list);
		$this->assign('title','修改用户信息');
		$this->display();
		
	}
	function update(){
		$id = $_GET['id'];
		$user = M('user');
		//print_r($user->create());
		if($user->create()){
			if($user->save()){
				$this->success('update success');
			}else{
				$this->error('update failure');
			}
		}else{
			$this->error($user->getError());
		}
		
	}
}
?>