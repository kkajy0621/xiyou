<?php

include("./ini/phb13_ini.php");
$phbzz2=($iniFile->getCategory('排行榜值2'));
$phbzz4=($iniFile->getCategory('排行榜值4'));
$hm=0;

$ik=0;
$hm=count($phbzz2, 0);
echo "<font color=black>【国庆节活动积分排名前10名玩家】</font></a>"."<br>";
echo "<font color=black>活动时间：2022.10.01至2022.10.08晚24点</font></a>"."<br>";
if ($hm>=1) {
    foreach (array_keys($phbzz2) as $key) {
        $keyphbzz2[]=$phbzz2[$key];
    }

    foreach (array_keys($phbzz4) as $key) {
        $keyphbzz4[]=$phbzz4[$key];
    }

    $mt=0;
    for ($b=0;$b<$hm;$b++) {
        $xb[]=$keyphbzz2[$mt]*10000+$keyphbzz4[$mt];
        $fb[]=$keyphbzz2[$mt]*10000;


        $mt=$mt+1;
    }

    if ($hm>0) {
        rsort($fb);
        rsort($xb);
    } else {
    }


    $mt=0;
    for ($b=0;$b<$hm;$b++) {
        $xbb[]=$xb[$mt]-$fb[$mt];
        $mt=$mt+1;
    }
    $mm=0;
    $i=-1;
    for ($b=0;$b<$hm;$b++) {
        $i=$i+1;
        $xbbb=$xbb[$i];

        $phmz[]=($iniFile->getItem('排行榜名字', $xbbb));
        $phidd[]=($iniFile->getItem('排行榜值1', $xbbb));
        $phsx[]=($iniFile->getItem('排行榜值2', $xbbb));
        $vvip[]=($iniFile->getItem('排行榜值3', $xbbb));
    }














    $i=-1;
    for ($d=0;$d<$hm-1;$d++) {
        $i=$i+1;

        $ik=$ik+1;


        echo "<font color=black>".$ik.".</font>";

        $img='pic/vip/'."vip".$vvip[$i].'.png';
        echo '<img src="'.$img.' "alt="图片"/〉';
        echo "<br>";


        if ($wjid==$phidd[$i]) {
            //cmd及超链接值
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=93;
            $npc[]=$phidd[$i];
            echo "<font color=red>".$phmz[$i]."</font></a>";
            echo "<font color=red>&nbsp&nbsp&nbsp[".$phsx[$i]."]</font>";
        } else {
            //cmd及超链接值
            $cmid=$cmid+1;
            $cdid[]=$cmid;
            $clj[]=93;
            $npc[]=$phidd[$i];
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$phmz[$i]."</font></a>";
            echo "<font color=black>&nbsp&nbsp&nbsp[".$phsx[$i]."]</font>";
            echo $phidd[$i];
        }
        /*
    if ($ik==1){
    echo "<font color=red>[奖励8888金豆]</font>";
    } elseif($ik==2){
    echo "<font color=red>[奖励3000金豆]</font>";
    } elseif($ik==3){
    echo "<font color=red>[奖励1200金豆]</font>";
    } elseif($ik==4){
    echo "<font color=red>[奖励500金豆]</font>";
    } elseif($ik==5){
    echo "<font color=red>[奖励360金豆]</font>";
    } elseif($ik==6){
    echo "<font color=red>[奖励300金豆]</font>";
    } elseif($ik==7){
    echo "<font color=red>[奖励220金豆]</font>";
    } elseif($ik==8){
    echo "<font color=red>[奖励160金豆]</font>";
    } elseif($ik==9){
    echo "<font color=red>[奖励100金豆]</font>";
    } elseif($ik==10){
    echo "<font color=red>[奖励50金豆]</font>";
    } else{
    }

    */


        echo "</br>";
        if ($ik>=10) {
            break;
        }
    }
} else {
    echo "<font color=black>目前还无人上榜</font>"."<br>";
}



echo "</br>";







//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=57;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回排行</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";






echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");
