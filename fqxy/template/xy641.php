<?php

echo "<font color=red>【诛仙台】四海八荒，你在何方？</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=203;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【开始挑战】</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=692;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【诛仙台奖励说明】</font></a>"."<br>";

	echo "<br>";
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";
echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");

 






?>