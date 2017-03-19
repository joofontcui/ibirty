<?php
	class AdminAction extends Action{
		Public function Index(){
			$data=M('admin1')->select();
			$this->data=$data;
			$this->display();
		}

		Public function Deleteadmin(){
			$id=I('id');
			$res=M('admin1')->delete($id);
			if($res){
				$this->success('删除成功',U('Index'));
			}else{
				$this->error('删除失败');
			}
		}

		Public function Insertadmin(){
			$insertdata=array(
				'id'=>I('id'),
				'rootname'=>I('rootname'),
				'password'=>I('password'),
				'phone'=>I('phone'),
				'email'=>I('email'),
				'power'=>I('power')
				);
			$res=M('admin1')->data($insertdata)->add();
			if($res){
				$this->success('添加成功',U('Index'));
			}else{
				$this->error('添加失败');
			}
		}

		Public function Updateadmin(){
			$con = mysql_connect("localhost","root","root") or die('Cloud not connect:'.mysql_error());
    		mysql_select_db("baby",$con);

    		$id=I('id');
			$rootname=I('rootname');
			// $insertdata=array(
			$password=md5(I('password'));
			$phone=I('phone');
			$email=I('email');
				// );
			// $res=M('user')->where($username)->update($insertdata);
			$res=mysql_query("update baby_admin1 set rootname='$rootname',password='$password',phone='$phone',email='$email' where id='$id'");

			if($res){
				$this->success('修改成功',U('Index'));
			}else{
				$this->error('修改失败');
			}
		}
	}
?>