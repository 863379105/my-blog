<?php 
    require_once('connect.php');
    if(is_array($_GET)&&count($_GET)>0){
        
        $label = $_GET['label'];
        $sql = "select * from article where label= '$label'";
        $query = mysqli_query($con,$sql);
        if($query&&mysqli_num_rows($query)){
            while($row = mysqli_fetch_assoc($query)){
                $data[] = $row;
            }
        }
    }else{
        $sql = "select * from article order by dateline desc";
        $query = mysqli_query($con,$sql);
        if($query&&mysqli_num_rows($query)){
            while($row = mysqli_fetch_assoc($query)){
                $data[] = $row;
            }
        }
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
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/index.css">
    <script src="src/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <script src="src/js/index.js"></script>
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
                <span id="header-title">名称</span>
                <span id="header-date">时间</span>
            </div>
            <!-- 文章列表-->
            <div id="article-panel">
                <ul id="article-list">
                <?php
                    if(empty($data)){	
                        echo "当前没有文章，请管理员在后台添加文章";
                    }else{
                        foreach($data as $value){
                ?>
                    <li>
                        <span class="article-title">
                            <a href="detail.php?id=<?php echo $value['id']?>">
                                <?php echo $value['title']?>
                            </a>
                        </span>
                        <button class="button button-rounded button-tiny"><?php echo $value['label']?></button>
                        <span class="article-date"><?php echo $value['dateline']?></span>
                    </li>
                <?php
                        }
                    }
                ?>    
                </ul>
            </div>
            <!-- 底部面板开始-->
            <div id="footer-panel" class="navbar-fixed-bottom">

            </div>
            <!-- 底部面板结束-->
        </div>
        <!--右侧面板结束-->
    </div>
</body>

</html>