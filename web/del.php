<?php
	include_once('./include/db_conn.php');
	//$db_conn=conn();
	$id = $_POST['id'];
	$sql="DELETE FROM wu_geowu WHERE cai_id = '$id'";
	$nums = $dbh->exec($sql);
	echo $nums;
?>