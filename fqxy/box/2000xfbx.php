<?php




$wpsy=2;//使用成功
$ysmz1="〖半周岁10元消费礼宝箱〗";
echo "<font color=black>恭喜你！打开了".$ysmz1."</font><br>";





//////////////////////////////////////////////////〖原料购物票〗/////////////////////////////////////////
//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖原料购物票〗";//需要的到某个物品的名字    // 
$wwpid=904;                   //需要的到某个物品的id      //
$wwpsl=20000;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=6;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////〖原料购物票〗/////////////////////////////////////////

//////////////////////////////////////////////////〖麦乐堡甜品箱〗/////////////////////////////////////////
//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖麦乐堡甜品箱〗";//需要的到某个物品的名字    // 
$wwpid=892;                   //需要的到某个物品的id      //
$wwpsl=400;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=8;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////〖麦乐堡甜品箱〗/////////////////////////////////////////
//////////////////////////////////////////////////〖云梯石〗/////////////////////////////////////////
//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖云梯石〗";//需要的到某个物品的名字    // 
$wwpid=821;                   //需要的到某个物品的id      //
$wwpsl=2000;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////〖云梯石〗/////////////////////////////////////////

//////////////////////////////////////////////////【10元充值卡】/////////////////////////////////////////
//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【2000元充值卡】";//需要的到某个物品的名字    // 
$wwpid=784;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////【10元充值卡】/////////////////////////////////////////



include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."打开了".$ysmz1."获得了大量庆典奖励~~~具体关注游戏首页介绍";
include("./msg/msgg02.php");










?>


