<?php
$wpsl=$bssl;
$sl=5;
if($wpsl>$sl){   

$wpsl=$wpsl-$sl;
//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////
include("./sql/mysql.php");//调用数据库连接 
$q2="qt";
$strsql = "update $q2 set wpsl=$wpsl where wjid=$wjid and wpid=$bsid1";//物品id号必改值
$result = mysql_query($strsql);
///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////
include("./ini/qt_ini.php");
$iniFile->updItem('其他数量', [$bsid1 => $wpsl]);
/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////
$bsid=$bsid1;
include("./wp/zbbs.php");
$wpmz=$bsmz;
include("./ini/bbrl_ini.php");
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$bszl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);
//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////

echo "<font color=red>失去".$wpmz."x".$sl."</font>"."<br>";
echo "<br>";


} elseif($wpsl==$sl){  

//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////
$wpsl=$wpsl-$sl;
include("./sql/mysql.php");//调用数据库连接 
$q2="qt";
$strsql = "delete from $q2 where wjid=$wjid and wpid=$bsid1 ";//物品id号必改值
$result = mysql_query($strsql);
///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////
include("./ini/qt_ini.php");
$iniFile->updItem('其他数量', [$bsid1 => $wpsl]);
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$bsid1));
# 删除一个子项
$iniFile->delItem('其他id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $bsid1);
# 删除一个子项
$iniFile->delItem('其他数量', $bsid1);
# 删除一个子项
$iniFile->delItem('其他名字', $bsid1);

/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////
$bsid=$bsid1;
include("./wp/zbbs.php");
$wpmz=$bsmz;
include("./ini/bbrl_ini.php");
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$bszl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);

} else{


} 




?>
