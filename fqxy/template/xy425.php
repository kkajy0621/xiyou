<?php





$wpid=$npcc;
//调用物品信息
include("./wp/wpxx.php");
if($wpbd==0){
$wpbd="是";
} else{
$wpbd="否";

}
echo "<font color=red>".$wpmz."</font>"."<br>";
echo "<font color=black>描述：".$wpms."</font>"."<br>"; 	
	





echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=424;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";






echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");






?>