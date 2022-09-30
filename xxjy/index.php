<?php
include_once __DIR__ . '/../includes/constants.php';
include_once ROOT . '/includes/functions.php';
include_once ROOT . '/sql/mysql.php';


session_start();
$message = empty($_SESSION['message']) ? '' : $_SESSION['message'];
$error = empty($_SESSION['error']) ? '' : $_SESSION['error'];
$_SESSION = [];

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    try {
        if (empty($_POST['username']) || empty($_POST['password']) || !preg_match('/^[0-9a-zA-Z]{6,}$/', $_POST['username'])) {
            throw new InvalidArgumentException('无效用户名或密码');
        }
        $db = DB::instance();
        $username = $_POST['username'];
        $info1 = $db->get('o_user_list', ['uid', 'password', 'name'], ['username' => $username]);
        if (empty($info1)) {
            throw new InvalidArgumentException('无效用户名或密码');
        }

        $pass1 = $info1['password'];
        $uid = $info1['uid'];
        $pass = md5($_POST['password'] . 'ALL_PS');
        $name = $info1['name'];
        if (!hash_equals($pass1, $pass)) {
            throw new InvalidArgumentException('无效用户名或密码');
        }

        // 更新随机令牌，用于分区验证
        $token = str_rand();
        $db->update('o_user_list', ['ma' => $token], ['uid' => $info1['uid']]);

        //成功登录游戏
        //分区页面，使用随机令牌替代原来的密码
        $xyurl = "xywap.php?uid=$uid&token=$token";
        header("location: $xyurl", true, 302);
        exit;
    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
        header("location: index.php", true, 302);
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
    <title>幻想西游</title>
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
        <form action="index.php" method="POST">
            账号：<input type="text" name="username" placeholder="请输入你的账号"><br>
            密码：<input type="password" name="password" placeholder="请输入你的密码"><br>
            <button>登录游戏</button><br>
        </form>
    </div>
    <span>==================</span>
    <br>
    <a href='/xxjy/register.php'><font color=blue>注册账号</font></a>
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