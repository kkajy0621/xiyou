<?php


if ($m==1) {
	
	
$rwstr=$xrwidd."_".$xrwfl;
$rid=$rw2[$rwstr];

if ($rid==23||$rid==24||$rid==25||$rid==27||$rid==50||$rid==51||$rid==65) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='./pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
}

if ($rid==26||$rid==29||$rid==52) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='./pic/ts/ts2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>？</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
}

} else {
	  //////////////////////////////////////一个npc多项任务直接上感叹号//////////////////////////
if ($m>=2) {
if ($tpbl==1) {
$img='./pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<font color=black>！</font>"; 
}		
} else {
} 
	  //////////////////////////////////////一个npc多项任务直接上感叹号//////////////////////////	
	
}









?>







