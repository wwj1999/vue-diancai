<?php
	include_once('./include/db_conn.php');
	if(isset($_POST['zhuo_id'])&&isset($_POST['diancai_id'])){
		$db_conn=conn();
		$zhuo_id=$_POST['zhuo_id'];
		$diancai_id=$_POST['diancai_id'];
		$caidan_name=$_POST['cai_name'];
		$caidan_jiag=$_POST['cai_jiage'];
		$caidan_img=$_POST['cai_img'];
		$xiangxis=$_POST['xiangxi'];
		$num=(int) $_POST['cai_num'];
		$sql="select * from wu_geowu where zhuo_id='$zhuo_id' and diancai_id='$diancai_id' and caidan_name='$caidan_name' and zifu=0";
		$query=$db_conn->prepare($sql);
		$query->execute();
		$result1=$query->fetchAll(PDO::FETCH_ASSOC);
		if($result1!=[]){
			$num+=$result1[0]['num'];
			echo $num;
			$sql="update wu_geowu set num='$num' where zhuo_id='$zhuo_id' and diancai_id='$diancai_id' and caidan_name='$caidan_name' and zifu=0";
			$query=$db_conn->prepare($sql);
			$query->execute();
		}else{
			$sql="insert into wu_geowu values(null,'$zhuo_id','$diancai_id','$caidan_name','$caidan_img','$caidan_jiag','$num',0,'$xiangxis')";
			$query=$db_conn->prepare($sql);
			$query->execute();
			echo $num;
		}
		$db_conn=null;
	}
?>