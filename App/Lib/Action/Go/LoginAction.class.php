<?php
	class LoginAction extends Action{
		Public function Index(){
			$this->display();
		}

		Public function Login(){
			$con = mysql_connect("localhost","root","root") or die('Cloud not connect:'.mysql_error());
    		mysql_select_db("baby",$con);

			$rootname=I('username');
			$password=I('password');

			// var_dump($_SESSION['verify']);
			// var_dump(md5($_POST['code']));
			// exit();

			if($_SESSION['verify']!=md5($_POST['code'])){
				$this->error('验证码错误');
			}

			$result=mysql_query("select * from baby_admin1 where rootname='$rootname'");
		    $row = mysql_fetch_array($result);
		    if($row) {
		        if($row['password'] == md5($password)){
		        	$_SESSION['rootname'] = $rootname;
		        	// $_SESSION['email'] = $row['email'];
		        	// $_SESSION['password'] = md5($password);
		        	// $_SESSION['sex']=
					$this->success('登陆成功',U('Go/Index/Index'));
				}else{
					$this->error('用户名不存在或密码错误');
				}
			}else{
				$this->error('用户名不存在或密码错误');
			}
		}

		Public function Verify(){
			import('ORG.Util.Image');
			image::buildImageVerify(4,1,'png',80,25);
		}
	}
?>