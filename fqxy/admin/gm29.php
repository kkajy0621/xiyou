<?php
$ppczzs=10;       //充值赠送的
$ppwpsl=100;//最终充值所得〖金豆〗
$vipjf=10;
$ppwpsl1=1;//赠送〖紫星币〗
$ppwpsl2=1;//赠送〖点石成金卷〗
$ppwpsl3=1;//赠送〖背包扩容卷〗
$ppwpsl4=1;//赠送〖仓库扩容卷〗
$ppwpsl5=10;//赠送〖万能字〗
$ppwpsl6=50;//赠送〖七夕万能字〗
$ppwpsl7=15;//赠送【喜鹊蛋】
$ppwpsl8=50;//赠送【小宇宙】
$ppwpsl9=1;//赠送〖嫦娥月饼礼盒〗
$ppwps20=100;//赠送【糯米粉】
$ppwps21=5;//赠送【桂花糕】
$ppwps22=4;//赠送〖云梯石〗
$ppwps23=5;//赠送【国庆金铲】
$ppwps24=20;//赠送〖国庆万能字〗
// $ppwps25=1;//赠送〖如意の称号宝箱〗
$ppwps26=100;//赠送〖小公主の材料票〗
// $ppwps27=1;//赠送〖比翼双飞〗（典藏版）
// $ppwps28=1;//赠送【喜鹊令】
// $ppwps29=1;//赠送【七夕令】
$ppwps30=100;//赠送〖万圣节万能字〗
// $ppwps31=1;//赠送〖神の陨升星符〗
$ppwps32=1;//赠送〖万圣节极品糖果箱〗
$ppwps33=1;//赠送〖感恩小羊礼包〗
$ppwps34=1;//赠送〖金锭〗
$ppwps35=1;//赠送〖八倍掉宝符〗
$ppwps36=100;//赠送〖感恩票〗

include("czcode.php");//充值代码
include("./ini/zt_ini.php");

echo "<font color=red>【充值成功】</font>"."<br>";
echo "<font color=red>---------------------</font>"."<br>";
echo "<font color=black>ID：".$wjid."</font>"."<br>";
echo "<font color=black>玩家：".$usermzxx."</font>"."<br>";
echo "<font color=black>价格：10元</font>"."<br>";
echo "<font color=black>道具1：〖金豆〗x".$ppwpsl."</font>"."<br>";
echo "<font color=black>道具2：〖紫星币〗x".$ppwpsl1."</font>"."<br>";
echo "<font color=black>道具3：〖点石成金卷〗x".$ppwpsl2."</font>"."<br>";
echo "<font color=black>道具4：〖背包扩容卷〗x".$ppwpsl3."</font>"."<br>";
echo "<font color=black>道具5：〖仓库扩容卷〗x".$ppwpsl4."</font>"."<br>";
echo "<font color=black>道具6：〖万能字〗x".$ppwpsl5."</font>"."<br>";
echo "<font color=black>道具7：〖七夕万能字〗x".$ppwpsl6."</font>"."<br>";
echo "<font color=black>道具8：【喜鹊蛋】x".$ppwpsl7."</font>"."<br>";
echo "<font color=black>道具9：【小宇宙】x".$ppwpsl8."</font>"."<br>";
echo "<font color=black>道具10：〖嫦娥月饼礼盒〗x".$ppwpsl9."</font>"."<br>";
echo "<font color=black>道具11：【糯米粉】x".$ppwps20."</font>"."<br>";
echo "<font color=black>道具12：【桂花糕】x".$ppwps21."</font>"."<br>";
echo "<font color=black>道具13：〖云梯石〗x".$ppwps22."</font>"."<br>";
echo "<font color=black>道具14：【国庆金铲】x".$ppwps23."</font>"."<br>";
echo "<font color=black>道具15：〖国庆万能字〗x".$ppwps24."</font>"."<br>";
// echo "<font color=black>道具16：〖如意の称号宝箱〗x".$ppwps25."</font>"."<br>";
echo "<font color=black>道具17：〖小公主の材料票〗x".$ppwps26."</font>"."<br>";
// echo "<font color=black>道具18：〖比翼双飞〗（典藏版）x".$ppwps27."</font>"."<br>";
// echo "<font color=black>道具19：【喜鹊令】x".$ppwps28."</font>"."<br>";
// echo "<font color=black>道具20：【七夕令】x".$ppwps29."</font>"."<br>";
echo "<font color=black>道具21：〖万圣节万能字〗x".$ppwps30."</font>"."<br>";
// echo "<font color=black>道具22：〖神の陨升星符〗x".$ppwps31."</font>"."<br>";
echo "<font color=black>道具23：〖万圣节极品糖果箱〗x".$ppwps32."</font>"."<br>";
echo "<font color=black>道具24：〖感恩小羊礼包〗x".$ppwps33."</font>"."<br>";
echo "<font color=black>道具25：〖金锭〗x".$ppwps34."</font>"."<br>";
echo "<font color=black>道具26：〖八倍掉宝符〗x".$ppwps35."</font>"."<br>";
echo "<font color=black>道具27：〖感恩票〗x".$ppwps36."</font>"."<br>";
echo "<font color=black>VIP积分：".$vipjf."点</font>"."<br>";

echo "<font color=red>---------------------</font>"."<br>";
echo "<br>";

echo "<a href='gm.php?gid=4'><font color=blue>返回查询玩家</font></a>"."<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";
echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href=".$xxjyurl."/admin/index.php><font color=blue>返回GM管理平台</font></a>"."<br>";
?>