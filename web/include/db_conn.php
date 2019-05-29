<?php
	//header('Access-Control-Allow-Origin: http://192.168.157.12:80');
	header('Access-Control-Allow-Origin: *');
	header("Content-type: text/html; charset=utf-8");
	// header("Access-Control-Allow-Origin: *");
	header('Access-Control-Allow-Methods:*');
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Allow-Headers:x-requested-with,content-type');
	function conn(){
		$url = "localhost";//连接数据库的地址
		$user = "root"; //账号
		$password = "";//密码
		$dbdata="order";//数据库名称
		$dbms="mysql";
		$dsn="$dbms:host=$url;dbname=$dbdata";
		try{
			$dbh=new PDO($dsn,$user,$password);
			$dbh->query("set names utf8");
		}catch(PDOException $e){
			die("错误");
			exit;
		}
		return $dbh;
	}
	$dbh = conn();
?>