<?php




$wpsy=2;//使用成功
$ysmz1="〖国庆充值10元消费礼包〗";
echo "<font color=black>恭喜你！打开了".$ysmz1."</font><br>";





//////////////////////////////////////////////////〖云梯石〗/////////////////////////////////////////
//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖云梯石〗";//需要的到某个物品的名字    // 
$wwpid=821;                   //需要的到某个物品的id      //
$wwpsl=4;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////〖云梯石〗/////////////////////////////////////////

//////////////////////////////////////////////////【小宇宙】/////////////////////////////////////////
//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【小宇宙】";//需要的到某个物品的名字    // 
$wwpid=729;                   //需要的到某个物品的id      //
$wwpsl=50;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////【小宇宙】/////////////////////////////////////////


//////////////////////////////////////////////////【国庆金铲】/////////////////////////////////////////
//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【国庆金铲】";//需要的到某个物品的名字    // 
$wwpid=837;                   //需要的到某个物品的id      //
$wwpsl=5;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=6;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////【国庆金铲】/////////////////////////////////////////

//////////////////////////////////////////////////〖国庆万能字〗/////////////////////////////////////////
//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖国庆万能字〗";//需要的到某个物品的名字    // 
$wwpid=836;                   //需要的到某个物品的id      //
$wwpsl=20;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=6;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////〖国庆万能字〗/////////////////////////////////////////


include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."打开了".$ysmz1."获得了大量回馈奖励~~~具体关注游戏首页介绍";
include("./msg/msgg02.php");










?>


