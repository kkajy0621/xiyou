<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if ($zsspd==1) {
    //ini文件名字
    $inina="user.ini";
    //路径
    $path='ache/'.$wjid;
    //判断ini文件是否存在
    $ininame = $path."/".$inina;
    # 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($ininame);
    # 获取一个分类下某个子项的值
    $dtx=($iniFile->getItem('地图坐标', 'x'));


    if ($dtx==78||$dtx==79|$dtx==91) {
        echo "<font color=black>对不起！！你正在挑战内请先离开</font><br>";
    } else {
        echo "<font color=red>日常副本：</font>"."<br>";
        echo "<font color=black>1.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=401;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【通天塔】</font></a>"."<br>";
        echo "<font color=black>2.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=451;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【阴曹地府】</font></a>"."<br>";
        echo "<font color=black>3.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=641;
        $npc[]=0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【诛仙台】</font></a>"."<br>";

        echo "<font color=red>区域副本：</font>"."<br>";
        echo "<font color=black>1.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="49_0";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【冰晶塔】</font></a>"."<br>";
        echo "<font color=black>2.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="14_12";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【变异竹林】</font></a>"."<br>";
        echo "<font color=black>3.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="38_0";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【白骨陵墓】</font></a>"."<br>";

        echo "<font color=black>4.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="22_18";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【枉死城】</font></a>"."<br>";
        echo "<font color=black>5.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="24_22";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【水帘洞天】</font></a>"."<br>";
        echo "<font color=black>6.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="23_23";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【天宫瑶池】</font></a>"."<br>";

        echo "<font color=black>7.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="37_0";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【波月洞】</font></a>"."<br>";
        echo "<font color=black>8.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="23_24";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【老君炉】</font></a>"."<br>";
        echo "<font color=black>9.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="41_0";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【压龙洞】</font></a>"."<br>";

        echo "<font color=black>10.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="39_3";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【莲花洞】</font></a>"."<br>";
        echo "<font color=black>11.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="23_29";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【斩妖台】</font></a>"."<br>";
        echo "<font color=black>12.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="54_12";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金兜洞】</font></a>"."<br>";

        echo "<font color=black>13.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="81_0";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【通天水府】</font></a>"."<br>";
        echo "<font color=black>14.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="80_0";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【芭蕉洞】</font></a>"."<br>";
        echo "<font color=black>15.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="56_0";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小雷音寺】</font></a>"."<br>";

        echo "<font color=black>16.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="82_0";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【盘丝洞】</font></a>"."<br>";
        echo "<font color=black>17.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="83_0";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【狮驼洞】</font></a>"."<br>";
        echo "<font color=black>18.</font>";
        //cmd及超链接值
        $cmid=$cmid+1;
        $cdid[]=$cmid;
        $clj[]=691;
        $npc[]="84_0";
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【无底洞】</font></a>"."<br>";

        echo "<br>";
        echo "<br>";
    }

    echo "<br>";

    //cmd及超链接值
    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=2;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

    echo "----------------------"."<br>";

    //cmd及超链接值
    include("fhgame.php");
} else {
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的i
