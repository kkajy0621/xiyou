<?php




//调用大数运算
include("./wp/func1.php");
if ($jnidd==1) {
//////////////////////////////////////////////////普攻///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1;		
include("./wj/sh06.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////

//////////////////////////////////////////////////普攻///////////////////////////////////////////////////	

} elseif ($jnidd==2) {
//////////////////////////////////////////////////挥砍///////////////////////////////////////////////////	
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
	if ($wjxx['蓝']>=$kcmp) {
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);

$mppppd=2;	
$shxs=1.3;	
$shxss=1.3;
include("./wj/sh06.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}



//////////////////////////////////////////////////挥砍///////////////////////////////////////////////////

echo "<font color=red>你对".$nname."使用了一招挥砍</font>"."<br>";	
} elseif ($jnidd==3) {
	
	
	
	

	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
//////////////////////////////////////////////////排山倒海///////////////////////////////////////////////////	
if ($wjxx['蓝']>=$kcmp) {	
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);
	


$mppppd=2;	
$shxs=1.3;
include("./wj/sh06.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}
//////////////////////////////////////////////////排山倒海///////////////////////////////////////////////////
	
	
} elseif ($jnidd==4) {
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
//////////////////////////////////////////////////排山倒海///////////////////////////////////////////////////	
if ($wjxx['蓝']>=$kcmp) {	
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);
	


$mppppd=2;	
$shxs=1.3;	
include("./wj/sh06.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}
echo "<font color=red>你对".$nname."使用了一招排山倒海</font>"."<br>";	

//////////////////////////////////////////////////排山倒海///////////////////////////////////////////////////
	
	
	
	//////////////////////////////////////////////////举火烧天势///////////////////////////////////////////////////
} elseif ($jnidd==5) {
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
	if ($wjxx['蓝']>=$kcmp) {	
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);

$mppppd=2;	
$shxs=1.5;
$shxss=1.5;
include("./wj/sh06.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}

echo "<font color=red>你对".$nname."使用了一招举火烧天势</font>"."<br>";	

		//////////////////////////////////////////////////举火烧天势///////////////////////////////////////////////////


		
		
		//////////////////////////////////////////////////霸王枪///////////////////////////////////////////////////
} elseif ($jnidd==6) {
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
	if ($wjxx['蓝']>=$kcmp) {	
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);

$mppppd=2;	
$shxs=1.5;
$shxss=1.5;
include("./wj/sh06.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}
echo "<font color=red>你对".$nname."使用了一招霸王枪</font>"."<br>";	

		//////////////////////////////////////////////////霸王枪///////////////////////////////////////////////////
	

	
	//////////////////////////////////////////////////风波未宁///////////////////////////////////////////////////
} elseif ($jnidd==7) {
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
	if ($wjxx['蓝']>=$kcmp) {	
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);

$mppppd=2;	
$shxs=1.5;
$shxss=1.5;

include("./wj/sh06.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}
echo "<font color=red>你对".$nname."使用了一招风波未宁</font>"."<br>";	
		//////////////////////////////////////////////////风波未宁///////////////////////////////////////////////////

		
		
		//////////////////////////////////////////////////风波十二叉///////////////////////////////////////////////////
} elseif ($jnidd==8) {
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
	if ($wjxx['蓝']>=$kcmp) {
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);

$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/sh06.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}

echo "<font color=red>你对".$nname."使用了一招风波十二叉</font>"."<br>";	
		//////////////////////////////////////////////////风波十二叉///////////////////////////////////////////////////
	

	
	//////////////////////////////////////////////////佛光普度///////////////////////////////////////////////////
} elseif ($jnidd==9) {
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
	if ($wjxx['蓝']>=$kcmp) {	
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);

$mppppd=2;	
$shxs=1.5;
$shxss=1.5;
include("./wj/sh07.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}

echo "<font color=red>你对".$nname."使用了一招佛光普度</font>"."<br>";
		//////////////////////////////////////////////////佛光普度///////////////////////////////////////////////////

		
		
		//////////////////////////////////////////////////如来神掌///////////////////////////////////////////////////
} elseif ($jnidd==10) {
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
	if ($wjxx['蓝']>=$kcmp) {	
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);

$mppppd=2;	
$shxs=1.5;
$shxss=1.5;
include("./wj/sh07.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}

echo "<font color=red>你对".$nname."使用了一招如来神掌</font>"."<br>";
		//////////////////////////////////////////////////如来神掌///////////////////////////////////////////////////
	
			
		
		
	//////////////////////////////////////////////////天师正道///////////////////////////////////////////////////
} elseif ($jnidd==11) {
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
	if ($wjxx['蓝']>=$kcmp) {	
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);

$mppppd=2;	
$shxs=1.5;
$shxss=1.5;
include("./wj/sh07.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}
echo "<font color=red>你对".$nname."使用了一招天师正道</font>"."<br>";
		//////////////////////////////////////////////////天师正道///////////////////////////////////////////////////

		
		
		//////////////////////////////////////////////////五雷咒///////////////////////////////////////////////////
} elseif ($jnidd==12) {
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
	if ($wjxx['蓝']>=$kcmp) {	
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);

$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/sh07.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}

echo "<font color=red>你对".$nname."使用了一招五雷咒</font>"."<br>";
		//////////////////////////////////////////////////五雷咒///////////////////////////////////////////////////
	
				
		
	
	
	
	
	
	
		//////////////////////////////////////////////////迷魂心法///////////////////////////////////////////////////
} elseif ($jnidd==13) {
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
	if ($wjxx['蓝']>=$kcmp) {	
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);

$mppppd=2;	
$shxs=1.5;
$shxss=1.5;
include("./wj/sh07.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}


echo "<font color=red>你对".$nname."使用了一招迷魂心法</font>"."<br>";
		//////////////////////////////////////////////////迷魂心法///////////////////////////////////////////////////

		
		
		//////////////////////////////////////////////////回梦心法///////////////////////////////////////////////////
} elseif ($jnidd==14) {
	//扣除mp

include("./wj/sh05.php");//调用技能消耗mp
	if ($wjxx['蓝']>=$kcmp) {	
$ckmpr=$wjxx['蓝']-$kcmp;
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['蓝' => $ckmpr]);

$mppppd=2;	
$shxs=1.5;
$shxss=1.5;
include("./wj/sh07.php");//造成对象伤害运算
include("./wj/sh04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
}else {	
$wjsh=0;
$dxsh=0;
$mppppd=1;
}

echo "<font color=red>你对".$nname."使用了一招回梦心法</font>"."<br>";
		//////////////////////////////////////////////////回梦心法///////////////////////////////////////////////////
	
				
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
} else{	

} 


?>


