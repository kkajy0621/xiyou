<?php

if($sll!=0){
if($sl>=1000000){
if($sl<=10000000000){

include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));


if($yl>=$sl){
include("./sql/mysql.php");//调用数据库连接 
   
include("./ini/bp_ini.php");
# 获取一个分类下所有数据$
$bp=($iniFile->getCategory('国家信息'));	
$yl1=$sl+$bp['国家资金'];
$q2="all_bp";
$strsql = "update $q2 set bpyl=$yl1 where bpid=$bpid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/bp_ini.php");
$iniFile->updItem('国家信息', ['国家资金' => $yl1]);

$yl2=$yl-$sl;

$q2="all_yl";
$strsql = "update $q2 set bbyl=$yl2 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $yl2]);
	
include("./ini/bpp_ini.php");
	
$xl=($iniFile->getItem('序列',$wjid));
$gx1=($iniFile->getItem('贡献',$xl));
$gx2=($iniFile->getItem('历史贡献',$xl));
$gxx=(int)($sl/1000000);
$gx=$gxx+$gx1;
$lsgx=$gxx+$gx2;
$iniFile->updItem('贡献', [$xl => $gx]);
$iniFile->updItem('历史贡献', [$xl => $gx]);
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gx,lsgx=$lsgx where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);







	
	

	
	
	
/*

$b=mb_strlen($sl,'UTF8'); 

if ($b==1||$b==2||$b==3||$b==4) {
//将数据分割为两
$y=0;
$w=0;
$yy=$sl;
} elseif ($b==5||$b==6||$b==7||$b==8) {
//将数据分割为万两

if ($b==5) {
$array = str_split($sl, 1);
$y=0;
$w=$array[0]*1;
$yy=$array[1]*1000+$array[2]*100+$array[3]*10+$array[4]*1;

}

if ($b==6) {
$array = str_split($sl, 1);
$y=0;
$w=$array[0]*10+$array[1]*1;
$yy=$array[2]*1000+$array[3]*100+$array[4]*10+$array[5]*1;

}
if ($b==7) {
$array = str_split($sl, 1);
$y=0;
$w=$array[0]*100+$array[1]*10+$array[2]*1;
$yy=$array[3]*1000+$array[4]*100+$array[5]*10+$array[6]*1;

}

if ($b==8) {
$array = str_split($sl, 1);
$y=0;

$w=$array[0]*1000+$array[1]*100+$array[2]*10+$array[3]*1;
$yy=$array[4]*1000+$array[5]*100+$array[6]*10+$array[7]*1;

}

} elseif ($b>=9) {
//将数据分割为亿万两
if ($b==9) {
$array = str_split($sl, 1);
$y=$array[0]*1;
$w=$array[1]*1000+$array[2]*100+$array[3]*10+$array[4]*1;
$yy=$array[5]*1000+$array[6]*100+$array[7]*10+$array[8]*1;
}

if ($b==10) {
$array = str_split($sl, 1);
$y=$array[0]*10+$array[1]*1;
$w=$array[2]*1000+$array[3]*100+$array[4]*10+$array[5]*1;
$yy=$array[6]*1000+$array[7]*100+$array[8]*10+$array[9]*1;
}

if ($b==11) {
$array = str_split($sl, 1);
$y=$array[0]*100+$array[1]*10+$array[2]*1;
$w=$array[3]*1000+$array[4]*100+$array[5]*10+$array[6]*1;
$yy=$array[7]*1000+$array[8]*100+$array[9]*10+$array[10]*1;
}
if ($b==12) {
$array = str_split($sl, 1);
$y=999;
$w=999;
$yy=999;
}




}






if ($y>0) {


$jxyl=$y."亿";

}


if ($w>0) {

$jxyl=$jxyl.$w."万";

}
if ($yy>0) {
$jxyl=$jxyl.$yy;
}
$jxyl=$jxyl."银两";

*/

	
	

$yl=$sl;


	
echo "<font color=red>恭喜你!为国家捐赠了";
include("./wp/ylxx.php");


echo ",获得国家贡献".$gxx."点</font>"."<br>";





include("template/xy172.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");



break;








} else {
echo "<font color=red>你的银两不足不能进行捐献</font>"."<br>";
}
} else {
echo "<font color=red>每次最多捐献100亿以下银两哦</font>"."<br>";
}
} else {
echo "<font color=red>每次最少捐献100万以上的银两哦</font>"."<br>";
}
} else {
echo "<font color=red>输入有误请重新输入</font>"."<br>";
}
?>


