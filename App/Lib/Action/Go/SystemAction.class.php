<?php
	class SystemAction extends Action{
		Public function Index(){
			mysql_connect('127.0.0.1','root','root'); 

			$data=array(
				'data1'=>phpversion(),
				'data2'=>mysql_get_server_info(), 
				'data3'=>apache_get_version(),

				'data4'=>M('user')->count(),
				'data5'=>M('admin1')->count(),
				'data6'=>M('news')->count(),
				'data7'=>M('foods')->count()
				);
			
			$this->data=$data;
			$this->display();
		}

		Public function Information(){

		}
	}
?>