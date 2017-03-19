<?php
return array(
	//'配置项'=>'配置值'

	//数据库连接参数
	'URL_MODEL'				=>	'3',		//妈的试试看   2017-01-04
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'carPart',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'think_',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志

	//开启应用分组
	'APP_GROUP_LIST' => 'Index,Admin,Go',
	'DEFAULT_GROUP' => 'Index',

	//点语法默认解析
	'TMPL_VAR_IDENTIFY' => 'array',

	//模板路径
	'TMPL_FILE_DEPR' => '_',

	//默认过滤函数
	'DEFAULT_FILTER' => 'htmlspecialchars',
);
?>