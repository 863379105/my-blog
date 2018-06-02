<?php
	require_once('../connect.php');
	//把传递过来的信息入库,在入库之前对所有的信息进行校验。
	date_default_timezone_set('Asia/Shanghai');//'Asia/Shanghai'   亚洲/上海
	if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
		echo "<script>alert('标题不能为空');window.location.href='article.add.php';</script>";
	}
    $title = $_POST['title'];
    $label = $_POST['labels'];
	$content = $_POST['content'];
	$insertsql = "insert into article(title, label, content) values('$title', '$label', '$content')";
    if(mysqli_query($con,$insertsql)){
		echo "<script>alert('发布文章成功');window.location.href='article.manage.php';</script>";
	}else{
		echo "<script>alert('发布失败');window.location.href='article.manage.php';</script>";
	}
?>