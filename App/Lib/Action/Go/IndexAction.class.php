<?php
	class IndexAction extends Action{
		Public function Index(){
			if($_SESSION['rootname']){
				$this->display();
			}else{
				$this->error('非法访问',U('Go/Login/Index'));
			}
		}

		Public function Adminquit(){
			if(session_destroy()){
				$this->success('退出成功，请重新登陆',U('Go/Login/Index'));
			}else{
				$this->error('退出失败，请重试');
			}
			
		}
	}
?>