<?php
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=173;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>&nbsp【离开诛仙台】</font></a>"."<br>";
if ($dty==0) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
$tttid=468;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1401;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【千里眼】</font></a>"."<br>";
} else{	
echo "<font color=red>【千里眼】（已阵亡）</font></br>"; 	
} 
$tttid=469;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1402;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【千里眼】</font></a>"."<br>";
} else{	
echo "<font color=red>【千里眼】（已阵亡）</font></br>"; 	
} 
  //出口
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>诛仙台（一层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==1) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
$tttpdid1=468;
$tttpdid2=469;
$tttpdid3=470;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台二层】</font></a>"."<br>";
} else{	
} 
$tttid=470;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1403;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【顺风耳】</font></a>"."<br>";
} else{	
echo "<font color=red>【顺风耳】（已阵亡）</font></br>"; 	
} 
  //出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>诛仙台（一层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==2) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
$tttid=471;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1404;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【炼丹童子】</font></a>"."<br>";
} else{	
echo "<font color=red>【炼丹童子】（已阵亡）</font></br>"; 	
} 
$tttid=472;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
  //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1405;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【炼丹童子】</font></a>"."<br>";
} else{	
echo "<font color=red>【炼丹童子】（已阵亡）</font></br>"; 	
} 
  //出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>诛仙台（二层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==3) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
$tttpdid1=471;
$tttpdid2=472;
$tttpdid3=473;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
  $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台三层】</font></a>"."<br>";
} else{	
} 
$tttid=473;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1406;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【善财童子】</font></a>"."<br>";
} else{	
echo "<font color=red>【善财童子】（已阵亡）</font></br>"; 	
} 
  //出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>诛仙台（二层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==4) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=474;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1407;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【推云童子】</font></a>"."<br>";
} else{	
echo "<font color=red>【推云童子】（已阵亡）</font></br>"; 	
} 
$tttid=475;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1408;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【推云童子】</font></a>"."<br>";
} else{	
echo "<font color=red>【推云童子】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（三层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==5) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=474;
$tttpdid2=475;
$tttpdid3=476;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台四层】</font></a>"."<br>";
} else{	
} 
$tttid=476;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1409;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【红孩儿】</font></a>"."<br>";
} else{	
echo "<font color=red>【红孩儿】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（三层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==6) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=477;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1410;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金咤】</font></a>"."<br>";
} else{	
echo "<font color=red>【金咤】（已阵亡）</font></br>"; 	
} 
$tttid=478;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1411;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金咤】</font></a>"."<br>";
} else{	
echo "<font color=red>【金咤】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（四层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==7) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=477;
$tttpdid2=478;
$tttpdid3=479;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台五层】</font></a>"."<br>";
} else{	
} 
$tttid=479;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1412;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【木咤】</font></a>"."<br>";
} else{	
echo "<font color=red>【木咤】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（四层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==8) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=480;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1413;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玉兔】</font></a>"."<br>";
} else{	
echo "<font color=red>【玉兔】（已阵亡）</font></br>"; 	
} 
$tttid=481;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1414;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玉兔】</font></a>"."<br>";
} else{	
echo "<font color=red>【玉兔】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（五层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==9) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=480;
$tttpdid2=481;
$tttpdid3=482;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台六层】</font></a>"."<br>";
} else{	
} 
$tttid=482;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1415;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【嫦娥】</font></a>"."<br>";
} else{	
echo "<font color=red>【嫦娥】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（五层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==10) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=483;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1416;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【电母】</font></a>"."<br>";
} else{	
echo "<font color=red>【电母】（已阵亡）</font></br>"; 	
} 
$tttid=484;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1417;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【电母】</font></a>"."<br>";
} else{	
echo "<font color=red>【电母】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（六层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==11) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=483;
$tttpdid2=484;
$tttpdid3=485;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台七层】</font></a>"."<br>";
} else{	
} 
$tttid=485;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1418;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【雷公】</font></a>"."<br>";
} else{	
echo "<font color=red>【雷公】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（六层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==12) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=486;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1419;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【猪八戒】</font></a>"."<br>";
} else{	
echo "<font color=red>【猪八戒】（已阵亡）</font></br>"; 	
} 
$tttid=487;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1420;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【猪八戒】</font></a>"."<br>";
} else{	
echo "<font color=red>【猪八戒】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（七层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==13) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=486;
$tttpdid2=487;
$tttpdid3=488;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台八层】</font></a>"."<br>";
} else{	
} 
$tttid=488;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1421;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【唐僧】</font></a>"."<br>";
} else{	
echo "<font color=red>【唐僧】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（七层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==14) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=489;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1422;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【沙僧】</font></a>"."<br>";
} else{	
echo "<font color=red>【沙僧】（已阵亡）</font></br>"; 	
} 
$tttid=490;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1423;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【沙僧】</font></a>"."<br>";
} else{	
echo "<font color=red>【沙僧】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（八层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==15) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=489;
$tttpdid2=490;
$tttpdid3=491;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台九层】</font></a>"."<br>";
} else{	
} 
$tttid=491;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1424;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【孙悟空】</font></a>"."<br>";
} else{	
echo "<font color=red>【孙悟空】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（八层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==16) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=492;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1425;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【云神】</font></a>"."<br>";
} else{	
echo "<font color=red>【云神】（已阵亡）</font></br>"; 	
} 
$tttid=493;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1426;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【云神】</font></a>"."<br>";
} else{	
echo "<font color=red>【云神】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（九层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==17) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=492;
$tttpdid2=493;
$tttpdid3=494;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台十层】</font></a>"."<br>";
} else{	
} 
$tttid=494;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1427;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【夜游神】</font></a>"."<br>";
} else{	
echo "<font color=red>【夜游神】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（九层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==18) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=495;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1428;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【游奕灵官】</font></a>"."<br>";
} else{	
echo "<font color=red>【游奕灵官】（已阵亡）</font></br>"; 	
} 
$tttid=496;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1429;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【游奕灵官】</font></a>"."<br>";
} else{	
echo "<font color=red>【游奕灵官】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==19) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=495;
$tttpdid2=496;
$tttpdid3=497;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台十一层】</font></a>"."<br>";
} else{	
} 
$tttid=497;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1430;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【赤脚大仙】</font></a>"."<br>";
} else{	
echo "<font color=red>【赤脚大仙】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==20) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=498;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1431;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太阴星君】</font></a>"."<br>";
} else{	
echo "<font color=red>【太阴星君】（已阵亡）</font></br>"; 	
} 
$tttid=499;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1432;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太阴星君】</font></a>"."<br>";
} else{	
echo "<font color=red>【太阴星君】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十一层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==21) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=498;
$tttpdid2=499;
$tttpdid3=500;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台十二层】</font></a>"."<br>";
} else{	
} 
$tttid=500;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1433;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太白金星】</font></a>"."<br>";
} else{	
echo "<font color=red>【太白金星】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十一层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==22) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=501;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1434;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【巨灵神】</font></a>"."<br>";
} else{	
echo "<font color=red>【巨灵神】（已阵亡）</font></br>"; 	
} 
$tttid=502;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1435;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【巨灵神】</font></a>"."<br>";
} else{	
echo "<font color=red>【巨灵神】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十二层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==23) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=501;
$tttpdid2=502;
$tttpdid3=503;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台十三层】</font></a>"."<br>";
} else{	
} 
$tttid=503;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1436;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【夜游神】</font></a>"."<br>";
} else{	
echo "<font color=red>【夜游神】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十二层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==24) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=504;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1437;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【西王母】</font></a>"."<br>";
} else{	
echo "<font color=red>【西王母】（已阵亡）</font></br>"; 	
} 
$tttid=505;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1438;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【西王母】</font></a>"."<br>";
} else{	
echo "<font color=red>【西王母】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十三层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==25) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=504;
$tttpdid2=505;
$tttpdid3=506;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台十四层】</font></a>"."<br>";
} else{	
} 
$tttid=506;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1439;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【王母娘娘】</font></a>"."<br>";
} else{	
echo "<font color=red>【王母娘娘】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十三层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==26) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=507;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1440;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【十八罗汉】</font></a>"."<br>";
} else{	
echo "<font color=red>【十八罗汉】（已阵亡）</font></br>"; 	
} 
$tttid=508;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1441;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【十八罗汉】</font></a>"."<br>";
} else{	
echo "<font color=red>【十八罗汉】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十四层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==27) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=507;
$tttpdid2=508;
$tttpdid3=509;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台十五层】</font></a>"."<br>";
} else{	
} 
$tttid=509;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1442;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【镇元大仙】</font></a>"."<br>";
} else{	
echo "<font color=red>【镇元大仙】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十四层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==28) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=510;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1443;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【二郎神】</font></a>"."<br>";
} else{	
echo "<font color=red>【二郎神】（已阵亡）</font></br>"; 	
} 
$tttid=511;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1444;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【二郎神】</font></a>"."<br>";
} else{	
echo "<font color=red>【二郎神】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十五层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==29) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=510;
$tttpdid2=511;
$tttpdid3=512;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台十六层】</font></a>"."<br>";
} else{	
} 
$tttid=512;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1445;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太白金星】</font></a>"."<br>";
} else{	
echo "<font color=red>【太白金星】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十五层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==30) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=513;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1446;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【哪吒】</font></a>"."<br>";
} else{	
echo "<font color=red>【哪吒】（已阵亡）</font></br>"; 	
} 
$tttid=514;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1447;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【哪吒】</font></a>"."<br>";
} else{	
echo "<font color=red>【哪吒】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十六层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==31) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=513;
$tttpdid2=514;
$tttpdid3=515;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台十七层】</font></a>"."<br>";
} else{	
} 
$tttid=515;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1448;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【李靖】</font></a>"."<br>";
} else{	
echo "<font color=red>【李靖】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十六层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==32) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=516;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1449;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【卷帘大将】</font></a>"."<br>";
} else{	
echo "<font color=red>【卷帘大将】（已阵亡）</font></br>"; 	
} 
$tttid=517;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1450;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【卷帘大将】</font></a>"."<br>";
} else{	
echo "<font color=red>【卷帘大将】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十七层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==33) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=516;
$tttpdid2=517;
$tttpdid3=518;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台十八层】</font></a>"."<br>";
} else{	
} 
$tttid=518;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1451;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【天蓬元帅】</font></a>"."<br>";
} else{	
echo "<font color=red>【天蓬元帅】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十七层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==34) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=519;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1452;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【五炁真君】</font></a>"."<br>";
} else{	
echo "<font color=red>【五炁真君】（已阵亡）</font></br>"; 	
} 
$tttid=520;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1453;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【五炁真君】</font></a>"."<br>";
} else{	
echo "<font color=red>【五炁真君】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十八层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==35) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=519;
$tttpdid2=520;
$tttpdid3=521;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台十九层】</font></a>"."<br>";
} else{	
} 
$tttid=521;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1454;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太上老君】</font></a>"."<br>";
} else{	
echo "<font color=red>【太上老君】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十八层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==36) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=522;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1455;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【南极星君】</font></a>"."<br>";
} else{	
echo "<font color=red>【南极星君】（已阵亡）</font></br>"; 	
} 
$tttid=523;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1456;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【南极星君】</font></a>"."<br>";
} else{	
echo "<font color=red>【南极星君】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十九层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==37) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=522;
$tttpdid2=523;
$tttpdid3=524;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台二十层】</font></a>"."<br>";
} else{	
} 
$tttid=524;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1457;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金顶大仙】</font></a>"."<br>";
} else{	
echo "<font color=red>【金顶大仙】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（十九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（十九层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==38) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=525;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1458;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金蝉子】</font></a>"."<br>";
} else{	
echo "<font color=red>【金蝉子】（已阵亡）</font></br>"; 	
} 
$tttid=526;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1459;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金蝉子】</font></a>"."<br>";
} else{	
echo "<font color=red>【金蝉子】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==39) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=525;
$tttpdid2=526;
$tttpdid3=527;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台二十一层】</font></a>"."<br>";
} else{	
} 
$tttid=527;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1460;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【如来佛祖】</font></a>"."<br>";
} else{	
echo "<font color=red>【如来佛祖】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==40) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=528;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1461;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【神瑛侍卫】</font></a>"."<br>";
} else{	
echo "<font color=red>【神瑛侍卫】（已阵亡）</font></br>"; 	
} 
$tttid=529;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1462;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【神瑛侍卫】</font></a>"."<br>";
} else{	
echo "<font color=red>【神瑛侍卫】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十一层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==41) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=528;
$tttpdid2=529;
$tttpdid3=530;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台二十二层】</font></a>"."<br>";
} else{	
} 
$tttid=530;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1463;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【三清道人】</font></a>"."<br>";
} else{	
echo "<font color=red>【三清道人】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十一层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==42) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=531;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1464;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【银炉童子】</font></a>"."<br>";
} else{	
echo "<font color=red>【银炉童子】（已阵亡）</font></br>"; 	
} 
$tttid=532;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1465;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【银炉童子】</font></a>"."<br>";
} else{	
echo "<font color=red>【银炉童子】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十二层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==43) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=531;
$tttpdid2=532;
$tttpdid3=533;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台二十三层】</font></a>"."<br>";
} else{	
} 
$tttid=533;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1466;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【如意真仙】</font></a>"."<br>";
} else{	
echo "<font color=red>【如意真仙】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十二层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==44) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=534;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1467;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金炉童子】</font></a>"."<br>";
} else{	
echo "<font color=red>【金炉童子】（已阵亡）</font></br>"; 	
} 
$tttid=535;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1468;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金炉童子】</font></a>"."<br>";
} else{	
echo "<font color=red>【金炉童子】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十三层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==45) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=534;
$tttpdid2=535;
$tttpdid3=536;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台二十四层】</font></a>"."<br>";
} else{	
} 
$tttid=536;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1469;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【广目天王】</font></a>"."<br>";
} else{	
echo "<font color=red>【广目天王】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十三层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==46) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=537;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1470;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【武曲星君】</font></a>"."<br>";
} else{	
echo "<font color=red>【武曲星君】（已阵亡）</font></br>"; 	
} 
$tttid=538;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1471;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【武曲星君】</font></a>"."<br>";
} else{	
echo "<font color=red>【武曲星君】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十四层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==47) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=537;
$tttpdid2=538;
$tttpdid3=539;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台二十五层】</font></a>"."<br>";
} else{	
} 
$tttid=539;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1472;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【文殊菩萨】</font></a>"."<br>";
} else{	
echo "<font color=red>【文殊菩萨】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十四层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==48) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=540;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1473;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【文昌星君】</font></a>"."<br>";
} else{	
echo "<font color=red>【文昌星君】（已阵亡）</font></br>"; 	
} 
$tttid=541;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1474;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【文昌星君】</font></a>"."<br>";
} else{	
echo "<font color=red>【文昌星君】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十五层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==49) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=540;
$tttpdid2=541;
$tttpdid3=542;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台二十六层】</font></a>"."<br>";
} else{	
} 
$tttid=542;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1475;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【姜子牙】</font></a>"."<br>";
} else{	
echo "<font color=red>【姜子牙】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十五层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==50) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=543;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1476;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【多闻天王】</font></a>"."<br>";
} else{	
echo "<font color=red>【多闻天王】（已阵亡）</font></br>"; 	
} 
$tttid=544;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1477;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【多闻天王】</font></a>"."<br>";
} else{	
echo "<font color=red>【多闻天王】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十六层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==51) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=543;
$tttpdid2=544;
$tttpdid3=545;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台二十七层】</font></a>"."<br>";
} else{	
} 
$tttid=545;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1478;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【观世音菩萨】</font></a>"."<br>";
} else{	
echo "<font color=red>【观世音菩萨】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十六层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==52) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=546;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1479;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【纠察灵官】</font></a>"."<br>";
} else{	
echo "<font color=red>【纠察灵官】（已阵亡）</font></br>"; 	
} 
$tttid=547;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1480;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【纠察灵官】</font></a>"."<br>";
} else{	
echo "<font color=red>【纠察灵官】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十七层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==53) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=546;
$tttpdid2=547;
$tttpdid3=548;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台二十八层】</font></a>"."<br>";
} else{	
} 
$tttid=548;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1481;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【菩提祖师】</font></a>"."<br>";
} else{	
echo "<font color=red>【菩提祖师】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十七层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==54) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=549;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1482;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太乙真人】</font></a>"."<br>";
} else{	
echo "<font color=red>【太乙真人】（已阵亡）</font></br>"; 	
} 
$tttid=550;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1483;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太乙真人】</font></a>"."<br>";
} else{	
echo "<font color=red>【太乙真人】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十八层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==55) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=549;
$tttpdid2=550;
$tttpdid3=551;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台二十九层】</font></a>"."<br>";
} else{	
} 
$tttid=551;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1484;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太乙天尊】</font></a>"."<br>";
} else{	
echo "<font color=red>【太乙天尊】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十八层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==56) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=552;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1485;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【美猴王】</font></a>"."<br>";
} else{	
echo "<font color=red>【美猴王】（已阵亡）</font></br>"; 	
} 
$tttid=553;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1486;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【美猴王】</font></a>"."<br>";
} else{	
echo "<font color=red>【美猴王】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十九层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==57) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（二十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=552;
$tttpdid2=553;
$tttpdid3=554;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台三十层】</font></a>"."<br>";
} else{	
} 
$tttid=554;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1487;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玉皇大帝】</font></a>"."<br>";
} else{	
echo "<font color=red>【玉皇大帝】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（二十九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（二十九层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==58) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（三十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=555;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1488;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太上老君】</font></a>"."<br>";
} else{	
echo "<font color=red>【太上老君】（已阵亡）</font></br>"; 	
} 
$tttid=556;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1489;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太上老君】</font></a>"."<br>";
} else{	
echo "<font color=red>【太上老君】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（三十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（三十层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==59) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（三十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
echo "<font color=red>【诛仙台】：神挡杀神，佛挡杀佛，我命由我不由天！！</font>"."<br>";
$tttpdid1=555;
$tttpdid2=556;
$tttpdid3=557;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔一层】</font></a>"."<br>";
} else{	
} 
$tttid=557;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1490;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【元始天尊】</font></a>"."<br>";
} else{	
echo "<font color=red>【元始天尊】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（三十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（三十层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==60) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=558;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1491;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【千里眼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【千里眼】（魔）（已阵亡）</font></br>"; 	
} 
$tttid=559;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1492;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【千里眼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【千里眼】（魔）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔一层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==61) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=558;
$tttpdid2=559;
$tttpdid3=560;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔二层】</font></a>"."<br>";
} else{	
} 
$tttid=560;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1493;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【顺风耳】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【顺风耳】（魔）（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔一层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==62) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=561;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1494;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【炼丹童子】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【炼丹童子】（魔）</font></br>"; 	
} 
$tttid=562;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1495;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【炼丹童子】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【炼丹童子】（魔）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔二层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==63) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=561;
$tttpdid2=562;
$tttpdid3=563;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔三层】</font></a>"."<br>";
} else{	
} 
$tttid=563;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1496;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【善财童子】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【善财童子】（魔）（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔二层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==64) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=564;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1497;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【推云童子】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【推云童子】（魔）（已阵亡）</font></br>"; 	
} 
$tttid=565;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1498;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【推云童子】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【推云童子】（魔）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔三层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==65) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=564;
$tttpdid2=565;
$tttpdid3=566;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔四层】</font></a>"."<br>";
} else{	
} 
$tttid=566;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1499;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【红孩儿】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【红孩儿】（魔）（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔三层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==66) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=567;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1500;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金咤】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【金咤】（魔）（已阵亡）</font></br>"; 	
} 
$tttid=568;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1501;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金咤】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【金咤】（魔）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔四层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==67) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=567;
$tttpdid2=568;
$tttpdid3=569;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔五层】</font></a>"."<br>";
} else{	
} 
$tttid=569;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1502;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【木咤】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【木咤】（魔）（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔四层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==68) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=570;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1503;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【玉兔】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【玉兔】（魔）（已阵亡）</font></br>"; 	
} 
$tttid=571;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1504;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【玉兔】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【玉兔】（魔）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔五层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==69) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=570;
$tttpdid2=571;
$tttpdid3=572;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔六层】</font></a>"."<br>";
} else{	
} 
$tttid=572;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1505;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【嫦娥】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【嫦娥】（魔）（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔五层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==70) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=573;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1506;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【电母】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【电母】（魔）（已阵亡）</font></br>"; 	
} 
$tttid=574;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1507;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【电母】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【电母】（魔）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔六层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==71) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=573;
$tttpdid2=574;
$tttpdid3=575;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔七层】</font></a>"."<br>";
} else{	
} 
$tttid=575;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1508;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【雷公】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【雷公】（魔）（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔六层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==72) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=576;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1509;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【猪八戒】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【猪八戒】（魔）（已阵亡）</font></br>"; 	
} 
$tttid=577;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1510;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【猪八戒】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【猪八戒】（魔）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔七层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==73) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=576;
$tttpdid2=577;
$tttpdid3=578;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔八层】</font></a>"."<br>";
} else{	
} 
$tttid=578;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1511;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【唐僧】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【唐僧】（魔）（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔七层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==74) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=579;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1512;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【沙僧】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【沙僧】（魔）（已阵亡）</font></br>"; 	
} 
$tttid=580;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1513;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【沙僧】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【沙僧】（魔）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔八层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==75) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=579;
$tttpdid2=580;
$tttpdid3=581;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔九层】</font></a>"."<br>";
} else{	
} 
$tttid=581;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1514;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【孙悟空】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【孙悟空】（魔）（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔八层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==76) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=582;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1515;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【云神】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【云神】（魔）（已阵亡）</font></br>"; 	
} 
$tttid=583;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1516;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【云神】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【云神】（魔）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔九层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==77) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=582;
$tttpdid2=583;
$tttpdid3=584;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔十层】</font></a>"."<br>";
} else{	
} 
$tttid=584;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1517;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【夜游神】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【夜游神】（魔）（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔九层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==78) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=585;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1518;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【游奕灵官】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【游奕灵官】（魔）（已阵亡）</font></br>"; 	
} 
$tttid=586;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1519;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【游奕灵官】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【游奕灵官】（魔）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔十层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==79) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>诛仙台（魔十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=585;
$tttpdid2=586;
$tttpdid3=587;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔尊一层】</font></a>"."<br>";
} else{	
} 
$tttid=587;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1520;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【赤脚大仙】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【赤脚大仙】（魔）（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>诛仙台（魔十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>诛仙台（魔十层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==80) {
$map01="诛仙台（魔尊一层）";//地名
$map03="";//出口上
$map04="诛仙台（魔尊一层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=588;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1521;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【太阴星君】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【太阴星君】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=589;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1522;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【太阴星君】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【太阴星君】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==81) {
$map01="诛仙台（魔尊一层）";//地名
$map03="诛仙台（魔尊一层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttpdid1=587;
$tttpdid2=588;
$tttpdid3=589;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔尊二层】</font></a>"."<br>";
} else{	
} 
$tttid=590;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1523;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【太白金星】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【太白金星】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==82) {
$map01="诛仙台（魔尊二层）";//地名
$map03="";//出口上
$map04="诛仙台（魔尊二层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=591;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1524;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【巨灵神】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【巨灵神】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=592;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1525;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【巨灵神】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【巨灵神】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==83) {
$map01="诛仙台（魔尊二层）";//地名
$map03="诛仙台（魔尊二层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttpdid1=590;
$tttpdid2=591;
$tttpdid3=592;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔尊三层】</font></a>"."<br>";
} else{	
} 
$tttid=593;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1526;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【夜游神】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【夜游神】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==84) {
$map01="诛仙台（魔尊三层）";//地名
$map03="";//出口上
$map04="诛仙台（魔尊三层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=594;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1527;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【西王母】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【西王母】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=595;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1528;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【西王母】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【西王母】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==85) {
$map01="诛仙台（魔尊三层）";//地名
$map03="诛仙台（魔尊三层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttpdid1=593;
$tttpdid2=594;
$tttpdid3=595;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔尊四层】</font></a>"."<br>";
} else{	
} 
$tttid=596;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1529;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【王母娘娘】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【王母娘娘】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==86) {
$map01="诛仙台（魔尊四层）";//地名
$map03="";//出口上
$map04="诛仙台（魔尊四层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=597;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1530;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【十八罗汉】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【十八罗汉】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=598;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1531;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【十八罗汉】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【十八罗汉】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==87) {
$map01="诛仙台（魔尊四层）";//地名
$map03="诛仙台（魔尊四层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttpdid1=596;
$tttpdid2=597;
$tttpdid3=598;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔尊五层】</font></a>"."<br>";
} else{	
} 
$tttid=599;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1532;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【镇元大仙】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【镇元大仙】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==88) {
$map01="诛仙台（魔尊五层）";//地名
$map03="";//出口上
$map04="诛仙台（魔尊五层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=600;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1533;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【二郎神】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【二郎神】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=601;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1534;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【二郎神】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【二郎神】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==89) {
$map01="诛仙台（魔尊五层）";//地名
$map03="诛仙台（魔尊五层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttpdid1=599;
$tttpdid2=600;
$tttpdid3=601;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔尊六层】</font></a>"."<br>";
} else{	
} 
$tttid=602;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1535;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【北斗仙君】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【北斗仙君】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==90) {
$map01="诛仙台（魔尊六层）";//地名
$map03="";//出口上
$map04="诛仙台（魔尊六层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=603;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1536;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【哪吒】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【哪吒】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=604;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1537;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【哪吒】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【哪吒】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==91) {
$map01="诛仙台（魔尊六层）";//地名
$map03="诛仙台（魔尊六层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttpdid1=602;
$tttpdid2=603;
$tttpdid3=604;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔尊七层】</font></a>"."<br>";
} else{	
} 
$tttid=605;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1538;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【李靖】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【李靖】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==92) {
$map01="诛仙台（魔尊七层）";//地名
$map03="";//出口上
$map04="诛仙台（魔尊七层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=606;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1539;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【卷帘大将】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【卷帘大将】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=607;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1540;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【卷帘大将】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【卷帘大将】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==93) {
$map01="诛仙台（魔尊七层）";//地名
$map03="诛仙台（魔尊七层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttpdid1=605;
$tttpdid2=606;
$tttpdid3=607;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔尊八层】</font></a>"."<br>";
} else{	
} 
$tttid=608;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1541;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【天蓬元帅】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【天蓬元帅】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==94) {
$map01="诛仙台（魔尊八层）";//地名
$map03="";//出口上
$map04="诛仙台（魔尊八层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=609;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1542;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【五炁真君】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【五炁真君】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=610;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1543;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【五炁真君】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【五炁真君】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==95) {
$map01="诛仙台（魔尊八层）";//地名
$map03="诛仙台（魔尊八层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttpdid1=608;
$tttpdid2=609;
$tttpdid3=610;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔尊九层】</font></a>"."<br>";
} else{	
} 
$tttid=611;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1544;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【太上老君】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【太上老君】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==96) {
$map01="诛仙台（魔尊九层）";//地名
$map03="";//出口上
$map04="诛仙台（魔尊九层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=612;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1545;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【南极星君】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【南极星君】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=613;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1546;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【南极星君】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【南极星君】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==97) {
$map01="诛仙台（魔尊九层）";//地名
$map03="诛仙台（魔尊九层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttpdid1=611;
$tttpdid2=612;
$tttpdid3=613;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台魔尊十层】</font></a>"."<br>";
} else{	
} 
$tttid=614;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1547;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金顶大仙】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【金顶大仙】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==98) {
$map01="诛仙台（魔尊十层）";//地名
$map03="";//出口上
$map04="诛仙台（魔尊十层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=615;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1548;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金蝉子】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【金蝉子】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=616;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1549;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金蝉子】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【金蝉子】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} elseif ($dty==99) {
$map01="诛仙台（魔尊十层）";//地名
$map03="诛仙台（魔尊十层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttpdid1=614;
$tttpdid2=615;
$tttpdid3=616;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
	echo "<font color=red>进入【诛仙台混沌魔尊一层】（封印中）</font></a>"."<br>";
// $cmid=$cmid+1;
// $cdid[]=$cmid;
// $clj[]=34;
// $npc[]=0;
// echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【诛仙台混沌魔尊一层】（封印中）</font></a>"."<br>";
} else{	
} 
$tttid=617;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1550;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【如来佛祖】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【如来佛祖】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口
} else {
  echo "错误地图,编号：".$dty."<br>";
}
?>