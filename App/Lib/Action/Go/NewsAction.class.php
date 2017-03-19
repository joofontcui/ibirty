<?php
	class NewsAction extends Action{
		Public function Index(){
			$data=M('news')->select();
			$this->data=$data;
			$this->display();
		}

		Public function DeleteNews(){
			$id=I('id');
			$res=M('news')->delete($id);
			if($res){
				$this->success('删除成功',U('Index'));
			}else{
				$this->error('删除失败');
			}
		}

		Public function InsertNews(){
			$insertdata=array(
				'id'=>I('id'),
				'newsname'=>I('newsname'),
				'newsurl'=>I('newsurl')
				);
			$res=M('news')->data($insertdata)->add();
			if($res){
				$this->success('添加成功',U('Index'));
			}else{
				$this->error('添加失败');
			}
		}

		Public function UpdateNews(){
			$con = mysql_connect("localhost","root","root") or die('Cloud not connect:'.mysql_error());
    		mysql_select_db("baby",$con);

			$id=I('id');
			// $insertdata=array(
			$newsname=I('newsname');
			$newsurl=I('newsurl');

			iconv('', 'UTF-8', $newsname);
			iconv('', 'UTF-8', $newsurl);
				// );
			$res=mysql_query("update baby_news set newsname='$newsname',newsurl='$newsurl' where id='$id'");

			if($res){
				$this->success('修改成功',U('Index'));
			}else{
				$this->error('修改失败');
			}
		}
	}
?>