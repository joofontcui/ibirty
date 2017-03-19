<?php
	class MemberAction extends Action{
		Public function Index(){
			$data=M('user')->select();
			$this->data=$data;
			$this->display();
		}

		Public function DeleteMember(){
			$username=I('username');
			$res=M('user')->delete($username);
			if($res){
				$this->success('删除成功',U('Index'));
			}else{
				$this->error('删除失败');
			}
		}

		Public function Insertmember(){
			$insertdata=array(
				'username'=>I('username'),
				'password'=>md5(I('password')),
				'sex'=>I('sex'),
				'email'=>I('email'),
				'face'=>I('face')
				);
			$res=M('user')->data($insertdata)->add();
			if($res){
				$this->success('添加成功',U('Index'));
			}else{
				$this->error('添加失败');
			}
		}

		Public function Updatemember(){
			$con = mysql_connect("localhost","root","root") or die('Cloud not connect:'.mysql_error());
    		mysql_select_db("baby",$con);

			$username=I('username');
			// $insertdata=array(
			$password=md5(I('password'));
			$sex=I('sex');
			$email=I('email');
			$face=I('face');
				// );
			// $res=M('user')->where($username)->update($insertdata);
			$res=mysql_query("update baby_user set password='$password',sex='$sex',email='$email',face='$face' where username='$username'");

			if($res){
				$this->success('修改成功',U('Index'));
			}else{
				$this->error('修改失败');
			}
		}
	}
?>