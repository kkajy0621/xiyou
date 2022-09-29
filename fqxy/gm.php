<!DOCTYPE html >
<html lang="zh">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>幻想西游GM管理平台</title>
</head>
<body>
<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>
    <?php

    include __DIR__ . '/../includes/constants.php';
    $configs = include XY_CONFIG_DIR . '/config.php';

    session_start();

    if (empty($_SESSION['admin'])) {
        $uid = $_GET['uid'] ?? null;
        $password = $_GET['password'] ?? null;
        $success = 0;
        if (!empty($uid) && !empty($password)) {
            $post_data = $uid. '|' . $password;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $configs['jy_url'] . '/admin/validate.php');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($ch);
            curl_close($ch);
            if ($response === "1") {
                $success = 1;
            }
        }

        if (!$success) {
            echo "<font color=red>当前验证信息失效,请重新登录</font>" . "<br>";
            echo "<a href='{$configs['jy_url']}/admin/login.php'><font color=blue>返回GM登录</font></a><br>";
            exit;
        }

        $_SESSION['admin'] = $uid;
        $_SESSION['admin_password'] = $password;
    }

    if ($configs['debug'] ?? false) {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL & ~E_NOTICE);
    } else {
        error_reporting(0);
    }

    ini_set("date.timezone","PRC");//时间效准代码

    include XY_DIR . '/sql/mysql.php';
    include_once ROOT . '/includes/wrappers.php';
    include_once XY_DIR . '/class/iniclass.php';
    include_once XY_DIR . '/helper/common.php';


    $gid=$_GET['gid'] ?? null;
    $wjid=$_GET['user'] ?? null;
    $wpid=$_GET['wpid'] ?? null;
    $wpsl=$_GET['wpsl'] ?? null;
    $wpmz=$_GET['wpmz'] ?? null;
    $wpfl=$_GET['wpfl'] ?? null;
    $wjname=$_GET['wjname'] ?? null;
    $hbid=$_GET['hbid'] ?? null;

    $xxjyurl = $configs['jy_url'];
    $url = $configs['xy_url'];
    echo "当前GM页面：".$gid."<br>";
    if($gid==1){
        include("admin/gm01.php");//【玩家管理】和【系统管理】
    } elseif($gid==2){
        include("admin/gm02.php");//【玩家管理】
    } elseif($gid==3){
        include("admin/gm03.php");//【系统管理】
    } elseif($gid==4){
        include("admin/gm04.php");//【查询玩家】
    } elseif($gid==5){
        include("admin/gm05.php");//【发放物品】
    } elseif($gid==6){
        include("admin/gm06.php");//【发放物品】
    } elseif($gid==7){
        include("admin/gm07.php");//【发放物品】

    } elseif($gid==8){
        include("admin/gm08.php");//【发布系统消息】

    } elseif($gid==9){
        include("admin/gm09.php");//【禁止发言】30
    } elseif($gid==10){
        include("admin/gm10.php");//【禁止发言】2小时
    } elseif($gid==11){
        include("admin/gm11.php");//【禁止发言】1天
    } elseif($gid==12){
        include("admin/gm12.php");//【禁止发言】1周
    } elseif($gid==13){
        include("admin/gm13.php");//【禁止发言】永久
    } elseif($gid==14){
        include("admin/gm14.php");//【解除禁止发言】

    } elseif($gid==15){
        include("admin/gm15.php");//【封号】1天
    } elseif($gid==16){
        include("admin/gm16.php");//【封号】1周
    } elseif($gid==17){
        include("admin/gm17.php");//【封号】1月
    } elseif($gid==18){
        include("admin/gm18.php");//【封号】半年
    } elseif($gid==19){
        include("admin/gm19.php");//【封号】半年
    } elseif($gid==20){
        include("admin/gm20.php");//【解除封号】

    } elseif($gid==21){
        include("admin/gm21.php");//【刷新数据】
    } elseif($gid==22){
        include("admin/gm22.php");//【刷新公共数据】
    } elseif($gid==23){
        include("admin/gm23.php");//【刷新公共数据】执行
    } elseif($gid==24){
        include("admin/gm24.php");//【GM代码】
    } elseif($gid==26){
        include("admin/gm26.php");//【得到代码】
    } elseif($gid==27){
        include("admin/gm27.php");//【判物代码】
    } elseif($gid==28){
        include("admin/gm28.php");//【银两经验物品】

    } elseif($gid==29){
        include("admin/gm29.php");//10元
    } elseif($gid==30){
        include("admin/gm30.php");//20元
    } elseif($gid==31){
        include("admin/gm31.php");//50元
    } elseif($gid==32){
        include("admin/gm32.php");//100元
    } elseif($gid==33){
        include("admin/gm33.php");//200元
    } elseif($gid==34){
        include("admin/gm34.php");//500元
    } elseif($gid==35){
        include("admin/gm35.php");//1000元
    } elseif($gid==36){
        include("admin/gm36.php");//2000元


    } elseif($gid==37){
        include("admin/gm37.php");//【刷新排行榜数据】
    } elseif($gid==38){
        include("admin/gm38.php");//【刷新排行榜数据】
    } elseif($gid==39){
        include("admin/gm39.php");//【初始化奖池】
    } elseif($gid==40){
        include("admin/gm40.php");//【全服发奖励】
    } elseif($gid==41){
        include("admin/gm41.php");//【全服发奖励】二次确认
    } elseif($gid==42){
        include("admin/gm42.php");//【全服发奖励】

    } elseif($gid==43){
        include("admin/gm43.php");//【幻想西游充值管理】
    } elseif($gid==44){
        include("admin/gm44.php");//【订单清空】

    } elseif($gid==45){
        include("admin/gm45.php");//【幻想西游红包管理】

    } elseif($gid==46){
        include("admin/gm46.php");//【清理红包】

    } elseif($gid==47){
        include("admin/gm47.php");//【充值1元红包】

    } elseif($gid==48){
        include("admin/gm48.php");//【充值10元红包】

    } elseif($gid==49){
        include("admin/gm49.php");//【充值20元红包】
    } elseif($gid==50){
        include("admin/gm50.php");//【充值50元红包】
    } elseif($gid==51){
        include("admin/gm51.php");//【充值100元红包】

    } elseif($gid==52){
        include("admin/gm52.php");//【幻想西游娱乐统计】

    } elseif($gid==53){
        include("admin/gm53.php");//【天降财神统计】

    } elseif($gid==54){
        include("admin/gm54.php");//【天降红包统计】

    } elseif($gid==55){
        include("admin/gm55.php");//【天降红包统计清零】
    } elseif($gid==56){
        include("admin/gm56.php");//【天降红包统计清零】

    } elseif($gid==57){
        include("admin/gm57.php");//【兑换码提取】

    } elseif($gid==58){
        include("admin/gm58.php");//【兑换码提取】宣传SDK码


    } elseif($gid==59){
        include("admin/gm59.php");//【兑换码提取】拉人SDK码
    } elseif($gid==60){
        include("admin/gm60.php");//【兑换码提取】福利SDK码
    } elseif($gid==61){
        include("admin/gm61.php");//【兑换码提取】新区SDK码
    } elseif($gid==62){
        include("admin/gm62.php");//【全服某个物品数量】

    } elseif($gid==63){
        include("admin/gm63.php");//【全服某个物品数量】
    } else {

    }
    ?>
</div>

</body>
</html>




