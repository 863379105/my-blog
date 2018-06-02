<?php 
	require_once('connect.php');
	$id = intval($_GET['id']);
	$sql = "select * from article where id=$id";
	$query = mysqli_query($con,$sql);
	if($query&&mysqli_num_rows($query)){
		$row = mysqli_fetch_assoc($query);
	}else{
		echo "这篇文章不存在";
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/leftPanel.css">
    <link rel="stylesheet" href="src/css/labelPanel.css">
    <link rel="stylesheet" href="src/css/detail.css">
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <script src="src/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <!-- 引入样式文件-->
     <!--<link rel="stylesheet" href="src/editor.md-master/examples/css/style.css" />-->
    <link rel="stylesheet" href="src/editor.md-master/css/editormd.preview.css" /> 
    <!--引入js文件-->
    <script src="src/editor.md-master/examples/js/jquery.min.js"></script>
    <script src="src/editor.md-master/lib/marked.min.js"></script>
    <script src="src/editor.md-master/lib/prettify.min.js"></script>
    <script src="src/editor.md-master/lib/raphael.min.js"></script>
    <script src="src/editor.md-master/lib/underscore.min.js"></script>
    <script src="src/editor.md-master/lib/sequence-diagram.min.js"></script>
    <script src="src/editor.md-master/lib/flowchart.min.js"></script>
    <script src="src/editor.md-master/lib/jquery.flowchart.min.js"></script>
    <script src="src/editor.md-master/editormd.js"></script>
    <script src="src/js/detail.js"></script>
    <title>Onnow</title>
</head>
<body>
    <div id="">
        <!--左侧面板开始-->
        <div id="left-panel">
            <div id="avatar-panel">
            <a href="index.php"><img src="src/img/Avatar.jpg" alt=""></a>
                <p>Onnow</p>
            </div>
            <div id="other-site">
                <ul>
                <li><a href="http://www.github.com" target="_blank"><img src="src/img/github.png" alt=""></a></li>
                </ul>
            </div>
            <div id="nav-panel">
                <ul>
                    <li><a href="index.php">个人文章</a></li>
                    <li><a href="index.php">相关链接</a></li>
                    <li><a href="index.php">关于我</a></li>
                </ul>
            </div>
            <div id="qrcode-panel">
                <p>打赏我</p>
                <img src="src/img/qrcode.jpg">
            </div>
            <div id="system-panel">
                <p>&copy2017-2018&nbsp;&nbsp;Onnow</p>
            </div>
        </div>
        <!--左侧面板结束-->
        <!--右侧面板开始-->
        <div id="right-panel">
            <!--label标签栏-->
            <div id="label-panel">
                <ul>
                    <li>
                        <a href="index.php"><button class="button button-glow button-border button-rounded button-primary">All</button></a>
                    </li>
                    <li>
                        <a href="index.php?label=Python"><button class="button button-glow button-border button-rounded button-primary">Python</button></a>
                    </li>
                    <li>
                        <a href="index.php?label=OpenCV"><button class="button button-glow button-border button-rounded button-primary">OpenCV</button></a>
                    </li>
                    <li>
                        <a href="index.php?label=Tensorflow"><button class="button button-glow button-border button-rounded button-primary">Tensorflow</button></a>
                    </li>
                    <li>
                        <a href="index.php?label=life"><button class="button button-glow button-border button-rounded button-primary">life</button></a>
                    </li>
                </ul>
            </div>
            <div id="header-panel">
                <span id="header-title">
                    <!--文章标题放置到这里-->
                     <?php echo $row['title']?>
                </span>
                <span id="header-rollbackBTN">
                    <button class="button button-rounded button-tiny rollbackBTN">返回</button>
                </span>
            </div>
            <!-- 文章面板-->
            <div id="article-panel">
                <div id="msg-panel">
                    <span id="msg-avatar"><img src="src/img/Avatar.jpg" alt=""></span>
                    <span id="msg-author">Onnow</span>
                    <span id="msg-date">
                        <!--文章时间放置到这里--><?php echo $row['dateline']?>
                    </span>
                </div>
                <div id="detail-panel">
                    <textarea id="demo1" style="width:800px;height:300px;display: none;"><!--文章内容放置到这里--><?php echo $row['content']?></textarea>
                </div>
            </div>
        </div>
        <!--右侧面板结束-->
    </div>
</body>

</html>