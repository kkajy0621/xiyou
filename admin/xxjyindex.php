<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>幻想西游GM管理平台-登录成功</title>
    <link rel="icon" href="../img/favicon.png" type="image/x-icon" />
    <style type="text/css">
    </style>
</head>
<body>

<?php
error_reporting(E_ALL & ~E_NOTICE);
$wjid=$_GET['wjid'];
$password=$_GET['pass'];
//ini文件名字
$inina="user2.ini";
//路径
$path='../ache/gm';
//判断ini文件是否存在
$ininame = $path."/".$inina;
$filename = $ininame;
if(file_exists($filename)){
    include("../class/iniclass.php");//调用iniclass文件
    //调用user.ini是否存在
    include("../ini/user2_ini.php");
    # 获取一个分类下某个子项的值
    $pass=($iniFile->getItem('验证信息','玩家验证'));

    if($pass!=""||$password!=""){

    }else{
        $pass=1;
    }

    if($pass==$password){
        $name=($iniFile->getItem('验证信息','玩家昵称'));
        include("../url/url.php");

        $xyurl="http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password";
        $zcxx="<font color=red>登录成功</font>"."<br>";
        $zcxx1="<font color=red>".$name."欢迎您回来！！小轩游戏社区有你更精彩！！</font>"."<br>";
    } else {
        include("../url/url.php");

        $xyurl="http://".$xxjyurl."/admin/login.php";
        $zcxx="<font color=red>当前验证信息失效,请重新登录</font>"."<br><br><a href='login.php'><font color=blue>返回GM登录</font></a>"."<br>";

    }


} else {
    include("../url/url.php");
    $xyurl="http://".$xxjyurl."/admin/login.php";
    $zcxx="<font color=red>当前验证信息失效,请重新登录</font>"."<br><br><a href='login.php'><font color=blue>返回GM登录</font></a>"."<br>";
}

?>




<div class="g-hd f-cb">

    <img src="../images/logo2.jpg" alt="">

    <div align="right">
        <div style="margin-right: 10px;" class="m-icon-list">
            <br />

        </div>
    </div>
</div>
<div class="g-mn">
    <div class="m-box">
        <div class="m-box-hd" style="margin-left: 3%;">
            <div class="tt">
                <?echo $zcxx;?><br>

            </div>
        </div>
        <div class="m-box-mn" style="padding: 5px 10px 0px 10px;">

            <?echo $zcxx1;?><br>
            <br>

            <br>
            <br>
            <br>





            <div class="article-content" style="font-size: 15px;margin-top: 10px;">

            </div>
        </div>
    </div>
</div>
<div class="g-ft f-cb">
    <div class="f-fr"><a href="<?php echo $xyurl;?>" class="to-top">返回小轩GM管理平台</a><br /></div>
</div>
</body>
</html>




