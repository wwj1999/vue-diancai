<?php
	include_once('./include/db_conn.php');
    //$db_conn=conn();
    $cai_id = $_POST['id'];
	$cai_num = $_POST['num'];
	$sql="UPDATE wu_geowu SET num = '$cai_num' WHERE zhuo_id = '$cai_id' ";
	$nums = $dbh->exec($sql);
	echo $nums;
?>