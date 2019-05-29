<?php
    include_once('./include/db_conn.php');
	//$cai_id = $_POST['cai_id'];
	//$cyimg = implode('',$_POST['cyimg']);
	// implode() 函数返回由数组元素组合成的字符串。
	// 注释：implode() 函数接受两种参数顺序。但是由于历史原因，explode() 是不行的，您必须保证 separator 参数在 string 参数之前才行。
	// 注释：implode() 函数的 separator 参数是可选的。但是为了向后兼容，推荐您使用使用两个参数。
	// 注释：该函数是二进制安全的。
    $cai_img = $_POST['cai_img'];
	$cai_name = $_POST['cai_name'];
	$cai_jiage = $_POST['cai_jiage'];
	$xiangxi = $_POST['xiangxi'];
	$cai_num = $_POST['cai_num'];
	$str = "INSERT INTO shop_cat VALUES (NULL, '$cai_img', '$cai_name', '$cai_jiage', '$xiangxi','$cai_num')";
	$nums = $dbh->exec($str);
	if($str!=[]){
		echo "1";
	}else{
		echo "0";
	}
?>