<?php
	$host='localhost';
	$user='root';
	$pass='';
	$db='assfilm';

	$link=mysqli_connect($host,$user,$pass,$db) or die('Lỗi kết nối');
	mysqli_query($link,'set names utf8');
?>
