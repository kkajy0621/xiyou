<?php

echo "<font color=red>【幻想西游升级攻略】</font>"."<br>";
echo "<font color=biue>【新手升级攻略】</font>"."<br>";
echo "<font color=black>打开村长赠送的【新手礼包】，里面有你所需的初级装备和药品。换上装备。就是时候开启你的西游征程了。</font>"."<br>";
echo "<font color=black>（1-5级）完成好村长交给你的任务，拿到船票前往南城客栈找店小二。</font>"."<br>";
echo "<font color=black>（5-50级）跟着主线任务一直走，记得把新手礼包送的蟠桃吃了升级更快速</font>"."<br>";
echo "<font color=black>（60-300级）</font>"."<br>";
echo "<font color=black>玄武大街-VIP如意传送员传送进VIP练级场挂机升级</font>"."<br>";
echo "<font color=black>白虎大街做每日任务</font>"."<br>";
echo "<font color=black>挑战各大副本可获得高额银两道具奖励跟经验</font>"."<br>";
echo "<font color=blue>【老玩家升级攻略】</font>"."<br>";
echo "<font color=black>白虎大街挑战伏羲阵可获得高额经验</font>"."<br>";
echo "<font color=black>福利大厅-商城购买财宝箱获得银两直接去许愿池用许愿可获得高额经验</font>"."<br>";
echo "<br>";
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
