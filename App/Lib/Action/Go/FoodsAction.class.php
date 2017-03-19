<?php
	class FoodsAction extends Action{
		Public function Index(){
			$data=M('foods')->select();
			$this->data=$data;
			$this->display();
		}

		Public function Deletefoods(){
			$id=I('id');
			$res=M('foods')->delete($id);
			if($res){
				$this->success('删除成功',U('Index'));
			}else{
				$this->error('删除失败');
			}
		}

		Public function Insertfoods(){
			$insertdata=array(
				'id'=>I('id'),
				'foodname'=>I('foodname'),
				'foodtext'=>I('foodtext'),
				'foodmoney'=>I('foodmoney'),
				'foodno'=>I('foodno')
				);
			$file=I('file');
			$this->Addimage($file);
			
			// 封装函数体开始
			// if ((($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg")) && ($_FILES["file"]["size"] < 200000)) 
			// { 
			// 	if ($_FILES["file"]["error"] > 0) 
			// 		{ 
			// 		echo "Return Code: " . $_FILES["file"]["error"] . "<br />"; 
			// 		} else { 
			// 			echo "Upload: " . $_FILES["file"]["name"] . "<br />"; 
			// 			echo "Type: " . $_FILES["file"]["type"] . "<br />"; 
			// 			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />"; 
			// 			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />"; 
			// 			if (file_exists("./Baby/foods/" . $_FILES["file"]["name"])) 
			// 			{ 
			// 			echo $_FILES["file"]["name"] . " already exists. "; 
			// 			} else { 
			// 				move_uploaded_file($_FILES["file"]["tmp_name"], 
			// 				"./Baby/foods/" . $_FILES["file"]["name"]); 
			// 				echo "Stored in: " . "./Baby/foods/" . $_FILES["file"]["name"]; } 
			// 		} 
			// } else { 
			// 	echo "Invalid file"; 
			// }
			// 封装函数体结束
			$res=M('foods')->data($insertdata)->add();
			if($res){
				$this->success('添加成功',U('Index'));
			}else{
				$this->error('添加失败');
			}
		}

		Public function Updatefoods(){
			$con = mysql_connect("localhost","root","root") or die('Cloud not connect:'.mysql_error());
    		mysql_select_db("baby",$con);

			$id=I('id');
			$foodname=I('foodname');
			$foodtext=I('foodtext');
			$foodmoney=I('foodmoney');
			$foodno=I('foodno');

			$file=I('file');
			$this->Addimage($file);

			// $res=M('user')->where($username)->update($insertdata);
			$res=mysql_query("update baby_foods set foodname='$foodname',foodtext='$foodtext',foodmoney='$foodmoney',foodno='$foodno' where id='$id'");

			if($res){
				$this->success('修改成功',U('Index'));
			}else{
				$this->error('修改失败');
			}
		}

		Public function Addimage($file){
			if ((($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg")) && ($_FILES["file"]["size"] < 200000)) 
			{ 
				if ($_FILES["file"]["error"] > 0) 
					{ 
					echo "Return Code: " . $_FILES["file"]["error"] . "<br />"; 
					} else { 
						echo "Upload: " . $_FILES["file"]["name"] . "<br />"; 
						echo "Type: " . $_FILES["file"]["type"] . "<br />"; 
						echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />"; 
						echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />"; 
						if (file_exists("./Baby/foods/" . $_FILES["file"]["name"])) 
						{ 
						echo $_FILES["file"]["name"] . " already exists. "; 
						} else { 
							move_uploaded_file($_FILES["file"]["tmp_name"], 
							"./Baby/foods/" . $_FILES["file"]["name"]); 
							echo "Stored in: " . "./Baby/foods/" . $_FILES["file"]["name"]; } 
					} 
			} else { 
				echo "Invalid file"; 
			} 
		}
	}
?>