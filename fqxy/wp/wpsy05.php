<?php


if($npcc ==999){



include("./pz/ini_pz06.php");//调用ini缓存位置

} elseif($npcc ==402){//【内测福利】
include("./box/ncfl.php");//调用使用代码


} elseif($npcc ==422){//1千法宝经验

$wpzz=1000;//此wpid使用后所加的单个值 
include("./pz/ini_pzz027.php");
	 
} elseif($npcc ==423){//1万法宝经验

$wpzz=10000;//此wpid使用后所加的单个值 
include("./pz/ini_pzz027.php");
	 
	} elseif($npcc ==424){//10万法宝经验

$wpzz=100000;//此wpid使用后所加的单个值 
include("./pz/ini_pzz027.php"); 
	 
	} elseif($npcc ==425){//100万法宝经验

$wpzz=1000000;//此wpid使用后所加的单个值 
include("./pz/ini_pzz027.php"); 





} elseif($npcc ==427){//西游声望
//调用sw.ini是否存在
   $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));

$wpzz=10000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw['西游声望']+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['西游声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw";
$strsql = "update $q2 set swzz=$sw where wjid=$wjid and swid=8";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."西游声望！！</font><br>";





} elseif($npcc ==428){//〖风度偏偏〗
include("./pz/ini_pz10.php");//调用ini缓存位置
} elseif($npcc ==429){//〖至尊战神〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==430){//〖谁与争峰〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==431){//〖永不放弃〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==432){//〖威震幻影〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==453){//〖财宝箱〗



//银两加
$yl1=20000000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
$wpsy=2;





} elseif ($npcc==454) {//〖双倍掉宝符〗
$wwpmz="〖双倍掉宝符〗";//需要的到某个物品的名字    //
$zfsj1=600;//祝福时间秒数
include("./pz/ini_pz09.php");//调用ini缓存位置
} elseif ($npcc==455) {//〖四倍掉宝符〗
$wwpmz="〖四倍掉宝符〗";//需要的到某个物品的名字    //
$zfsj1=600;//祝福时间秒数
include("./pz/ini_pz09.php");//调用ini缓存位置
} elseif ($npcc==456) {//〖八倍掉宝符〗
$wwpmz="〖八倍掉宝符〗";//需要的到某个物品的名字    //
$zfsj1=600;//祝福时间秒数
include("./pz/ini_pz09.php");//调用ini缓存位置
} elseif ($npcc==457) {//【极品6位ID号（111111）】
$lh=111111;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==458) {//【极品6位ID号（222222）】
$lh=222222;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==459) {//【极品6位ID号（333333）】
$lh=333333;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==460) {//【极品6位ID号（444444）】
$lh=444444;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==461) {//【极品6位ID号（555555）】
$lh=555555;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==462) {//【极品6位ID号（666666）】
$lh=666666;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==463) {//【极品6位ID号（777777）】
$lh=777777;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==464) {//【极品6位ID号（888888）】
$lh=888888;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==465) {//【极品6位ID号（999999）】
$lh=999999;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==466) {//【极品6位ID号（123456）】
$lh=123456;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==467) {//【极品6位ID号（654321）】
$lh=654321;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==468) {//【极品6位ID号（520520）】
$lh=520520;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==469) {//【极品6位ID号（122222）】
$lh=122222;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==470) {//【极品6位ID号（133333）】
$lh=133333;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==471) {//【极品6位ID号（144444）】
$lh=144444;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==472) {//【极品6位ID号（155555）】
$lh=155555;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==473) {//【极品6位ID号（166666）】
$lh=166666;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==474) {//【极品6位ID号（177777）】
$lh=177777;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==475) {//【极品6位ID号（188888）】
$lh=188888;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==476) {//【极品6位ID号（199999）】
$lh=199999;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置




} elseif($npcc ==487){//〖大号财宝箱〗
//银两加
$yl1=200000000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
$wpsy=2;

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."打开了〖大号财宝箱〗从此富可敌国！！";
include("./msg/msgg02.php");
} elseif($npcc ==489){//【西游宣传礼包】


//////////////////////////////////////////////////【小蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【小蟠桃】";//需要的到某个物品的名字    // 
$wwpid=236;                   //需要的到某个物品的id      //
$wwpsl=5;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置

//////////////////////////////////////////////////【小蟠桃】/////////////////////////////////////////
//////////////////////////////////////////////////【蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【蟠桃】";//需要的到某个物品的名字    // 
$wwpid=237;                   //需要的到某个物品的id      //
$wwpsl=5;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////【蟠桃】/////////////////////////////////////////
//////////////////////////////////////////////////【三千年蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【三千年蟠桃】";//需要的到某个物品的名字    // 
$wwpid=238;                   //需要的到某个物品的id      //
$wwpsl=3;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【三千年蟠桃】/////////////////////////////////////////
		//////////////////////////////////////////////////【六千年蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【六千年蟠桃】";//需要的到某个物品的名字    // 
$wwpid=239;                   //需要的到某个物品的id      //
$wwpsl=2;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【六千年蟠桃】/////////////////////////////////////////
								//////////////////////////////////////////////////【九千年蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【九千年蟠桃】";//需要的到某个物品的名字    // 
$wwpid=240;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


////
						//////////////////////////////////////////////////〖铁魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖铁魂〗";//需要的到某个物品的名字    // 
$wwpid=308;                   //需要的到某个物品的id      //
$wwpsl=20;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖铁魂〗/////////////////////////////////////////


//////////////////////////////////////////////////〖铜魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖铜魂〗";//需要的到某个物品的名字    // 
$wwpid=309;                   //需要的到某个物品的id      //
$wwpsl=20;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置

//////////////////////////////////////////////////〖铜魂〗/////////////////////////////////////////

//////////////////////////////////////////////////银两增加/////////////////////////////////////////
$wwpsl=100000; 
include("./pz/ini_pz03.php");//调用ini缓存位置
//////////////////////////////////////////////////银两增加/////////////////////////////////////////





} elseif($npcc ==490){//【西游邀请礼包】

//////////////////////////////////////////////////〖金豆〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖金豆〗";//需要的到某个物品的名字    // 
$wwpid=127;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置

//////////////////////////////////////////////////〖金豆〗/////////////////////////////////////////
//////////////////////////////////////////////////【小蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【小蟠桃】";//需要的到某个物品的名字    // 
$wwpid=236;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置

//////////////////////////////////////////////////【小蟠桃】/////////////////////////////////////////
//////////////////////////////////////////////////【蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【蟠桃】";//需要的到某个物品的名字    // 
$wwpid=237;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////【蟠桃】/////////////////////////////////////////
//////////////////////////////////////////////////【三千年蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【三千年蟠桃】";//需要的到某个物品的名字    // 
$wwpid=238;                   //需要的到某个物品的id      //
$wwpsl=5;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【三千年蟠桃】/////////////////////////////////////////
		//////////////////////////////////////////////////【六千年蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【六千年蟠桃】";//需要的到某个物品的名字    // 
$wwpid=239;                   //需要的到某个物品的id      //
$wwpsl=5;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【六千年蟠桃】/////////////////////////////////////////
//////////////////////////////////////////////////【九千年蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【九千年蟠桃】";//需要的到某个物品的名字    // 
$wwpid=240;                   //需要的到某个物品的id      //
$wwpsl=5;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


////
						//////////////////////////////////////////////////〖铁魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖铁魂〗";//需要的到某个物品的名字    // 
$wwpid=308;                   //需要的到某个物品的id      //
$wwpsl=100;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖铁魂〗/////////////////////////////////////////


//////////////////////////////////////////////////〖铜魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖铜魂〗";//需要的到某个物品的名字    // 
$wwpid=309;                   //需要的到某个物品的id      //
$wwpsl=100;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置

//////////////////////////////////////////////////〖铜魂〗/////////////////////////////////////////

//////////////////////////////////////////////////银两增加/////////////////////////////////////////
$wwpsl=1000000; 
include("./pz/ini_pz03.php");//调用ini缓存位置
//////////////////////////////////////////////////银两增加/////////////////////////////////////////





} elseif($npcc ==491){//【西游新人礼包】

//////////////////////////////////////////////////〖金豆〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖金豆〗";//需要的到某个物品的名字    // 
$wwpid=127;                   //需要的到某个物品的id      //
$wwpsl=20;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置

//////////////////////////////////////////////////〖金豆〗/////////////////////////////////////////
//////////////////////////////////////////////////【小蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【小蟠桃】";//需要的到某个物品的名字    // 
$wwpid=236;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置

//////////////////////////////////////////////////【小蟠桃】/////////////////////////////////////////
//////////////////////////////////////////////////【蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【蟠桃】";//需要的到某个物品的名字    // 
$wwpid=237;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////【蟠桃】/////////////////////////////////////////
//////////////////////////////////////////////////【三千年蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【三千年蟠桃】";//需要的到某个物品的名字    // 
$wwpid=238;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【三千年蟠桃】/////////////////////////////////////////
		//////////////////////////////////////////////////【六千年蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【六千年蟠桃】";//需要的到某个物品的名字    // 
$wwpid=239;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【六千年蟠桃】/////////////////////////////////////////
//////////////////////////////////////////////////【九千年蟠桃】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【九千年蟠桃】";//需要的到某个物品的名字    // 
$wwpid=240;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


////
						//////////////////////////////////////////////////〖铁魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖铁魂〗";//需要的到某个物品的名字    // 
$wwpid=308;                   //需要的到某个物品的id      //
$wwpsl=100;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖铁魂〗/////////////////////////////////////////


//////////////////////////////////////////////////〖铜魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖铜魂〗";//需要的到某个物品的名字    // 
$wwpid=309;                   //需要的到某个物品的id      //
$wwpsl=100;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置

//////////////////////////////////////////////////〖铜魂〗/////////////////////////////////////////



//////////////////////////////////////////////////【公测生命丹】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【公测生命丹】";//需要的到某个物品的名字    // 
$wwpid=230;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【公测生命丹】/////////////////////////////////////////




//////////////////////////////////////////////////【公测攻击丹】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【公测攻击丹】";//需要的到某个物品的名字    // 
$wwpid=231;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【公测攻击丹】/////////////////////////////////////////


//////////////////////////////////////////////////【公测魔攻丹】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【公测魔攻丹】";//需要的到某个物品的名字    // 
$wwpid=232;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【公测魔攻丹】/////////////////////////////////////////


//////////////////////////////////////////////////【公测防御丹】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【公测防御丹】";//需要的到某个物品的名字    // 
$wwpid=233;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【公测防御丹】/////////////////////////////////////////

//////////////////////////////////////////////////〖铁星升星符〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖铁星升星符〗";//需要的到某个物品的名字    // 
$wwpid=314;                   //需要的到某个物品的id      //
$wwpsl=15;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖铁星升星符〗/////////////////////////////////////////





//////////////////////////////////////////////////银两增加/////////////////////////////////////////
$wwpsl=2000000; 
include("./pz/ini_pz03.php");//调用ini缓存位置
//////////////////////////////////////////////////银两增加/////////////////////////////////////////










} elseif($npcc ==492){//【公测礼包】

//////////////////////////////////////////////////【公测生命丹】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【公测生命丹】";//需要的到某个物品的名字    // 
$wwpid=230;                   //需要的到某个物品的id      //
$wwpsl=20;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【公测生命丹】/////////////////////////////////////////




//////////////////////////////////////////////////【公测攻击丹】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【公测攻击丹】";//需要的到某个物品的名字    // 
$wwpid=231;                   //需要的到某个物品的id      //
$wwpsl=20;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【公测攻击丹】/////////////////////////////////////////


//////////////////////////////////////////////////【公测魔攻丹】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【公测魔攻丹】";//需要的到某个物品的名字    // 
$wwpid=232;                   //需要的到某个物品的id      //
$wwpsl=20;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【公测魔攻丹】/////////////////////////////////////////


//////////////////////////////////////////////////【公测防御丹】/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="【公测防御丹】";//需要的到某个物品的名字    // 
$wwpid=233;                   //需要的到某个物品的id      //
$wwpsl=20;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////【公测防御丹】/////////////////////////////////////////

//////////////////////////////////////////////////〖铁星升星符〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖铁星升星符〗";//需要的到某个物品的名字    // 
$wwpid=314;                   //需要的到某个物品的id      //
$wwpsl=20;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖铁星升星符〗/////////////////////////////////////////

//////////////////////////////////////////////////〖金豆〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖金豆〗";//需要的到某个物品的名字    // 
$wwpid=127;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖金豆〗/////////////////////////////////////////
//////////////////////////////////////////////////〖背包扩容卷〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖背包扩容卷〗";//需要的到某个物品的名字    // 
$wwpid=400;                   //需要的到某个物品的id      //
$wwpsl=2;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖背包扩容卷〗/////////////////////////////////////////


//////////////////////////////////////////////////〖背包扩容卷〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖小智慧果〗";//需要的到某个物品的名字    // 
$wwpid=400;                   //需要的到某个物品的id      //
$wwpsl=2;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖小智慧果〗/////////////////////////////////////////




} elseif($npcc ==493){//〖瞌睡虫〗（典藏版）


$npcccz=$npcc;
$boxcwid=731;//宠物id
include("./pz/ini_pzz034.php");//调用ini缓存位置








} elseif($npcc ==494){//〖荣誉宝石〗2个
$bsid1=25;//宝石id
$jjmz="〖荣誉宝石〗";
$bssl1=2;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
include("./sql/mysql.php");//调用数据库连接 
//背包容量变更
include("./pz/ini_pzz05.php");
//这里是得到宝石代码
$kcrl=0;
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."x".$bssl."</font>"."<br>";
$wpsy=2;//使用成功

} elseif($npcc ==495){//〖荣誉宝石〗5个
$bsid1=25;//宝石id
$jjmz="〖荣誉宝石〗";
$bssl1=5;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
include("./sql/mysql.php");//调用数据库连接 
//背包容量变更
include("./pz/ini_pzz05.php");
//这里是得到宝石代码
$kcrl=0;
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."x".$bssl."</font>"."<br>";
$wpsy=2;//使用成功

} elseif($npcc ==496){//〖荣誉宝石〗15个
$bsid1=25;//宝石id
$jjmz="〖荣誉宝石〗";
$bssl1=15;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
include("./sql/mysql.php");//调用数据库连接 
//背包容量变更
include("./pz/ini_pzz05.php");
//这里是得到宝石代码
$kcrl=0;
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."x".$bssl."</font>"."<br>";
$wpsy=2;//使用成功
} elseif($npcc ==497){//〖荣誉宝石〗40个
$bsid1=25;//宝石id
$jjmz="〖荣誉宝石〗";
$bssl1=40;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
include("./sql/mysql.php");//调用数据库连接 
//背包容量变更
include("./pz/ini_pzz05.php");
//这里是得到宝石代码
$kcrl=0;
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."x".$bssl."</font>"."<br>";
$wpsy=2;//使用成功
} elseif($npcc ==498){//〖荣誉宝石〗100个
$bsid1=25;//宝石id
$jjmz="〖荣誉宝石〗";
$bssl1=100;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
include("./sql/mysql.php");//调用数据库连接 
//背包容量变更
include("./pz/ini_pzz05.php");
//这里是得到宝石代码
$kcrl=0;
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."x".$bssl."</font>"."<br>";
$wpsy=2;//使用成功


} elseif($npcc ==499){//〖冲榜助力包〗


//////////////////////////////////////////////////〖冲榜助力包〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="〖钻魂〗";//需要的到某个物品的名字    // 
$wwpid=312;                   //需要的到某个物品的id      //
$wwpsl=100;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖冲榜助力包〗/////////////////////////////////////////

//////////////////////////////////////////////////大幸运草/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp";                //数据库位置               //
$wwpmz="大幸运草";//需要的到某个物品的名字    // 
$wwpid=307;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////大幸运草/////////////////////////////////////////




$wpsy=2;//使用成功


include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."打开了〖冲榜助力包〗愿所有西游玩家为他祈福吧！！祝他马到成功心想事成";
include("./msg/msgg02.php");













} else{
$wpsy=1;//使用失败
include("wpsyts.php");

}











	

?>




