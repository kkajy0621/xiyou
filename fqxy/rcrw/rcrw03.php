<?php


include("./ini/zxrw_ini.php");
//首次接取任务	
////////////////////任务属性//////////////
$rwidd=3;//任务的id
$rwfl=5;//任务的分类1主线2支线5日常4活动
$rwmz="大唐国师的请求（40-60）";
include("./rwmap/rwpd.php");
////////////////////任务属性//////////////
//首次接取任务	
$rwstr=$rwidd."_".$rwfl;
$rcrwbl=($iniFile->getItem('任务变量',$rwstr));
$rw5=$rwfl;
$rw1=$rwidd;
if ($rcrwbl==1) {
echo "<font color=black>最近小雁塔来了一大批具有攻击性的怪物来了这可如何是好啊！</font>"."<br>";
//任务进程改变
$rwjc1=2;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="大唐国师的请求（40-60）";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=18;//移动坐标x
$ydy=12;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务	

} elseif ($rcrwbl==2) {
echo "<font color=black>最近小雁塔来了一大批具有攻击性的怪物来了这可如何是好啊！</font>"."<br>";
echo "<font color=black>需要除掉10只蜡烛怪，快去吧！</font>"."<br>";

//快速任务
$ydx=18;//移动坐标x
$ydy=12;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务	
} elseif ($rcrwbl==3) {
	
echo "<font color=black>这是给你的奖励！拿好吧！</font>"."<br>";
//任务进程改变
$rwjc1=4;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=20;//任务要杀怪
$rwjc4="大唐国师的请求（40-60）";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//经验加
$jy=5000000;	
include("./pz/ini_pzz023.php");
//删除任务
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw";
$strsql = "delete from $q2 where wjid=$wjid and rwid=$rwidd and rwfl=$rwfl ";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwstr=$rwidd."_".$rwfl;
# 删除一个子项
$iniFile->delItem('任务id', $rwstr);
# 删除一个子项
$iniFile->delItem('任务变量', $rwstr);
# 删除一个子项
$iniFile->delItem('已杀怪', $rwstr);
# 删除一个子项
$iniFile->delItem('要杀怪', $rwstr);
# 删除一个子项
$iniFile->delItem('任务分类', $rwstr);
# 删除一个子项
$iniFile->delItem('任务名字', $rwstr);
//删除任务

	$hdcs=$hdcs+1;
$q2="hd";
$strsql = "update $q2 set hdcs=$hdcs where wjid=$wjid and hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动次数', [$hdid => $hdcs]);	


} else{	
echo "<font color=red>对不起！请联系GM处理</font></br>"; 	

}


?>