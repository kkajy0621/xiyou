<?php
include_once __DIR__ . '/../includes/constants.php';
include_once ROOT . '/includes/functions.php';
include_once ROOT . '/sql/mysql.php';

session_start();
$message = empty($_SESSION['message']) ? '' : $_SESSION['message'];
$error = empty($_SESSION['error']) ? '' : $_SESSION['error'];
$_SESSION = [];
$db = DB::instance();

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    try {
        if (empty($_POST['zc1'])) {
            throw new InvalidArgumentException('帐号不能为空');
        }
        if (empty($_POST['zc2'])) {
            throw new InvalidArgumentException('密码不能为空');
        }
        if (empty($_POST['zc3'])) {
            throw new InvalidArgumentException('密码不能为空');
        }
        if (empty($_POST['zc4']) || !preg_match('/^[a-zA-Z0-9]{6,12}$/', $_POST['zc4'])) {
            throw new InvalidArgumentException('无效安全码');
        }
        if (empty($_POST['zc6'])) {
            throw new InvalidArgumentException('昵称不能为空');
        }
        if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $_POST['zc1'])) {
            throw new InvalidArgumentException('账号只能为6-12位字母或数字');
        }
        if (!preg_match('/^[\x{4e00}-\x{9fa5}]{2,5}$/u', $_POST['zc6'])) {
            throw new InvalidArgumentException('昵称只能为2-5位汉字');
        }

        $zczh1 = $_POST['zc1']; // 帐号
        $zczh2 = $_POST['zc2']; // 密码
        $zczh3 = $_POST['zc3']; // 确认密码
        $zczh6 = $_POST['zc6']; // 昵称
        $zczh4 = $_POST['zc4']; // 安全码

        //查询账号是否已占有
        $info1 = $db->get('o_user_list', 'uid', ['username' => $zczh1]);
        if (!empty($info1)) {
            throw new InvalidArgumentException('对不起该账号已存在了');
        }
        $info1 = $db->get('o_user_list', 'uid', ['name' => $zczh6]);
        if (!empty($info1)) {
            throw new InvalidArgumentException('对不起！这个昵称太火了换一个吧');
        }

        //获取最大值
        $q2 = "o_user_list";
        $sql1 = mysql_query("select MAX(uid) as i from $q2");
        $abc = mysql_fetch_array($sql1);
        $maxid = empty($abc) ? 0 : $abc['i'];
        $maxidd = $maxid + 1;

        // 默认token
        $ma = str_rand();
        $aqm = md5($zczh4 . 'ALL_PS');
        $zczh2 = md5($zczh2 . 'ALL_PS');
        $y = date('Y') * 1;
        $m = date('m') * 1;
        $d = date('d') * 1;
        $h = date('H') * 1;
        $i = date('i') * 1;
        $s = date('s') * 1;

        $q2 = "o_user_list";
        $sql = "insert into $q2 (uid,m_id,name,username,password,n,y,r,s,f,m,ma,aqm)  values('$maxidd','0','$zczh6','$zczh1','$zczh2','$y','$m','$d','$h','$i','$s','$ma','$aqm')";
        if (!mysql_query($sql)) {
            throw new InvalidArgumentException('帐号创建失败，请联系管理员！');
        }
        $_SESSION['message'] = '注册成功，请登录游戏';
        header("location: index.php", true, 302);
        exit;
    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
        header("location: register.php", true, 302);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>幻想西游-注册</title>
    <link rel="shortcut icon" href="pic/ico/favicon.ico"/>
</head>
<body>
<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>
    <img src="/fqxy/pic/login/1.jpg" alt="图片"/>
    <p>古典神话网游，持神兵利器，降五爪金龙，携爱行走西游路……</p>
    <?php if ($error):?>
        <span style="color: red"><?php echo $error;?></span></br>
    <?php endif;?>
    <?php if ($message):?>
        <span style="color: green"><?php echo $message;?></span></br>
    <?php endif;?>
    <span>==================</span>
    <div >
        <form action="register.php" method="post">
            昵称　　：<input type="text" name="zc6" placeholder="2-5位汉字"><br>
            账号　　：<input type="text" name="zc1" placeholder="6-12位的字母或数字"><br>
            密码　　：<input type="text" name="zc2" placeholder="密码"><br>
            确认密码：<input type="text" name="zc3" placeholder="确认密码"><br>
            安全码　：<input type="text" name="zc4" placeholder="6-12位的字母或数字" ><br>
            <button>注册帐号</button><br>
        </form>
    </div>
    <span>==================</span>
    <br>
    <a href='/xxjy/index.php'><font color=blue>登录游戏</font></a>
    <font color=black>|</font>
    <a href='/xxjy/xxjyxg.php'><font color=blue>修改密码</font></a>
    <font color=black>|</font>
    <a href='/xxjy/xxjywj.php'><font color=blue>忘记密码</font></a>
    <font color=black>|</font>
    <a href="http://42.194.147.154/admin/login.php">GM后台</a>
    <p>游戏问题请加入QQ群反馈：待添加 </p>
</div>
</body>
</html>
