<?php
	require_once('config.php');
	//连库
	$con=mysqli_connect("localhost","root","","myblog");
	if(!($con = mysqli_connect("localhost","root","","myblog"))){
		echo mysqli_error();
	}
	//字符集
	if(!mysqli_query($con,'set names utf8')){
		echo mysqli_error();
	}
?>