<?php


//装备套装显示
$tzidd3 = explode("_",$strr3);
$arr1[]=$tzidd3[0];
$tzidd4 = explode("_",$strr4);
$arr1[]=$tzidd4[0];
$tzidd5 = explode("_",$strr5);
$arr1[]=$tzidd5[0];
$tzidd6 = explode("_",$strr6);
$arr1[]=$tzidd6[0];
$tzidd7 = explode("_",$strr7);
$arr1[]=$tzidd7[0];
$tzidd8 = explode("_",$strr8);
$arr1[]=$tzidd8[0];
//装备套装显示
//婚饰套装显示
$tzidd9 = explode("_",$strr9);
$arr1[]=$tzidd9[0];
$tzidd10 = explode("_",$strr10);
$arr1[]=$tzidd10[0];



/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=14;
$arr2[]=28;
$arr2[]=42;
$arr2[]=56;
$arr2[]=70;

$arr2[]=101;
$arr2[]=133;
$arr2[]=165;
$arr2[]=196;
$arr2[]=234;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=5;//套装id
    echo "<font color=red>【幻想套（灵级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=6;//套装id
    echo "<font color=red>【幻想套（灵级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=7;//套装id
    echo "<font color=red>【幻想套（灵级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=8;//套装id
    echo "<font color=red>【幻想套（灵级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=9;//套装id
    echo "<font color=red>【幻想套（灵级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////



/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=400;
$arr2[]=412;
$arr2[]=413;
$arr2[]=414;
$arr2[]=415;

$arr2[]=401;
$arr2[]=402;
$arr2[]=403;
$arr2[]=404;
$arr2[]=405;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=10;//套装id
    echo "<font color=red>【幻想套（仙级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=11;//套装id
    echo "<font color=red>【幻想套（仙级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=12;//套装id
    echo "<font color=red>【幻想套（仙级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=13;//套装id
    echo "<font color=red>【幻想套（仙级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=14;//套装id
    echo "<font color=red>【幻想套（仙级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////


/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=421;
$arr2[]=422;
$arr2[]=423;
$arr2[]=424;
$arr2[]=425;

$arr2[]=407;
$arr2[]=408;
$arr2[]=409;
$arr2[]=410;
$arr2[]=411;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=15;//套装id
    echo "<font color=red>【幻想套（神级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=16;//套装id
    echo "<font color=red>【幻想套（神级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=17;//套装id
    echo "<font color=red>【幻想套（神级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=18;//套装id
    echo "<font color=red>【幻想套（神级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=19;//套装id
    echo "<font color=red>【幻想套（神级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////










/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=438;
$arr2[]=439;
$arr2[]=440;
$arr2[]=441;
$arr2[]=442;

$arr2[]=443;
$arr2[]=444;
$arr2[]=445;
$arr2[]=446;
$arr2[]=447;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=20;//套装id
    echo "<font color=red>【幻想套（圣级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=21;//套装id
    echo "<font color=red>【幻想套（圣级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=22;//套装id
    echo "<font color=red>【幻想套（圣级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=23;//套装id
    echo "<font color=red>【幻想套（圣级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=24;//套装id
    echo "<font color=red>【幻想套（圣级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////




/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=453;
$arr2[]=454;
$arr2[]=455;
$arr2[]=456;
$arr2[]=457;

$arr2[]=448;
$arr2[]=449;
$arr2[]=450;
$arr2[]=451;
$arr2[]=452;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=25;//套装id
    echo "<font color=red>【诛仙】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=26;//套装id
    echo "<font color=red>【诛仙】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=27;//套装id
    echo "<font color=red>【诛仙】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=28;//套装id
    echo "<font color=red>【诛仙】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=29;//套装id
    echo "<font color=red>【诛仙】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////











/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=504;
$arr2[]=505;
$arr2[]=506;
$arr2[]=507;
$arr2[]=508;

$arr2[]=509;
$arr2[]=510;
$arr2[]=511;
$arr2[]=512;
$arr2[]=513;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=30;//套装id
    echo "<font color=red>【圣灵套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=31;//套装id
    echo "<font color=red>【圣灵套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=32;//套装id
    echo "<font color=red>【圣灵套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=33;//套装id
    echo "<font color=red>【圣灵套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=34;//套装id
    echo "<font color=red>【圣灵套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////



/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=514;
$arr2[]=515;
$arr2[]=516;
$arr2[]=517;
$arr2[]=518;

$arr2[]=519;
$arr2[]=520;
$arr2[]=521;
$arr2[]=522;
$arr2[]=523;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=35;//套装id
    echo "<font color=red>【圣灵套（灵级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=36;//套装id
    echo "<font color=red>【圣灵套（灵级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=37;//套装id
    echo "<font color=red>【圣灵套（灵级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=38;//套装id
    echo "<font color=red>【圣灵套（灵级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=39;//套装id
    echo "<font color=red>【圣灵套（灵级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////


/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=524;
$arr2[]=525;
$arr2[]=526;
$arr2[]=527;
$arr2[]=528;

$arr2[]=529;
$arr2[]=530;
$arr2[]=531;
$arr2[]=532;
$arr2[]=533;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=40;//套装id
    echo "<font color=red>【圣灵套（仙级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=41;//套装id
    echo "<font color=red>【圣灵套（仙级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=42;//套装id
    echo "<font color=red>【圣灵套（仙级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=43;//套装id
    echo "<font color=red>【圣灵套（仙级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=44;//套装id
    echo "<font color=red>【圣灵套（仙级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////


/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=534;
$arr2[]=535;
$arr2[]=536;
$arr2[]=537;
$arr2[]=538;

$arr2[]=539;
$arr2[]=540;
$arr2[]=541;
$arr2[]=542;
$arr2[]=543;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=45;//套装id
    echo "<font color=red>【圣灵套（神级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=46;//套装id
    echo "<font color=red>【圣灵套（神级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=47;//套装id
    echo "<font color=red>【圣灵套（神级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=48;//套装id
    echo "<font color=red>【圣灵套（神级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=49;//套装id
    echo "<font color=red>【圣灵套（神级）】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////







/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=544;
$arr2[]=545;
$arr2[]=546;
$arr2[]=547;
$arr2[]=548;

$arr2[]=549;
$arr2[]=550;
$arr2[]=551;
$arr2[]=552;
$arr2[]=553;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=50;//套装id
    echo "<font color=red>【圣灵☯天元套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=51;//套装id
    echo "<font color=red>【圣灵☯天元套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=52;//套装id
    echo "<font color=red>【圣灵☯天元套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=53;//套装id
    echo "<font color=red>【圣灵☯天元套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=54;//套装id
    echo "<font color=red>【圣灵☯天元套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////



















/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=578;
$arr2[]=579;
$arr2[]=580;
$arr2[]=581;
$arr2[]=582;

$arr2[]=583;
$arr2[]=584;
$arr2[]=585;
$arr2[]=586;
$arr2[]=587;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=59;//套装id
    echo "<font color=red>【噬魂套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=60;//套装id
    echo "<font color=red>【噬魂套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=61;//套装id
    echo "<font color=red>【噬魂套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=62;//套装id
    echo "<font color=red>【噬魂套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=63;//套装id
    echo "<font color=red>【噬魂套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////






/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=593;
$arr2[]=594;
$arr2[]=595;
$arr2[]=596;
$arr2[]=597;

$arr2[]=598;
$arr2[]=599;
$arr2[]=600;
$arr2[]=601;
$arr2[]=602;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=66;//套装id
    echo "<font color=red>【帝王套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=67;//套装id
    echo "<font color=red>【帝王套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=68;//套装id
    echo "<font color=red>【帝王套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=69;//套装id
    echo "<font color=red>【帝王套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=70;//套装id
    echo "<font color=red>【帝王套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";



} else{
}
/////////套装//////////










///////////========================================////////////////////

/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=337;
$arr2[]=338;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){ $tzid=1;//套装id
    echo "<font color=red>【心心】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////


/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=432;
$arr2[]=433;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=2;//套装id
    echo "<font color=red>【灵犀】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////

/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=434;
$arr2[]=435;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=3;//套装id
    echo "<font color=red>【海誓】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////


/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=436;
$arr2[]=437;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=4;//套装id
    echo "<font color=red>【比翼】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////


/////////套装//////////
//$arr2=[];
//$arr3=[];
//$tzms=[];
//$arr2[]=337;
//$arr2[]=338;
//$arr3=array_intersect($arr1,$arr2);
//if(count($arr3)==1){
//} elseif(count($arr3)==2){
//    $tzid=1;//套装id
//    echo "<font color=red>【心心】(".count($arr3)."/2)</font></a>"."<br>";
//    include("./wj/tzmzxx.php");
//    include("./wj/tzmzxx01.php");
//    echo "<font color=black>".$tzms."</font></a>";
//} else{
//}
/////////套装//////////


/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=554;
$arr2[]=555;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=55;//套装id
    echo "<font color=red>【海枯】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////




/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=556;
$arr2[]=557;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=56;//套装id
    echo "<font color=red>【天作】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////



/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=558;
$arr2[]=559;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=57;//套装id
    echo "<font color=red>【一生所爱】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////

/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=560;
$arr2[]=561;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=58;//套装id
    echo "<font color=red>【恋人未满】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////


/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=588;
$arr2[]=589;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=64;//套装id
    echo "<font color=red>【缘定今生】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////


/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=590;
$arr2[]=591;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=65;//套装id
    echo "<font color=red>【天赐良缘】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////




/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=615;
$arr2[]=616;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=71;//套装id
    echo "<font color=red>【天仙之恋】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////



/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=617;
$arr2[]=618;
$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=72;//套装id
    echo "<font color=red>【天尊之恋】(".count($arr3)."/2)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////



//以下代码为2022年9月22号新增

/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=671;
$arr2[]=672;
$arr2[]=673;
$arr2[]=674;
$arr2[]=675;

$arr2[]=676;
$arr2[]=677;
$arr2[]=678;
$arr2[]=679;
$arr2[]=680;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=73;//套装id
    echo "<font color=red>【仙尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=74;//套装id
    echo "<font color=red>【仙尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=75;//套装id
    echo "<font color=red>【仙尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=76;//套装id
    echo "<font color=red>【仙尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=77;//套装id
    echo "<font color=red>【仙尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////




/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=681;
$arr2[]=682;
$arr2[]=683;
$arr2[]=684;
$arr2[]=685;

$arr2[]=686;
$arr2[]=687;
$arr2[]=688;
$arr2[]=689;
$arr2[]=690;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=78;//套装id
    echo "<font color=red>【神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=79;//套装id
    echo "<font color=red>【神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=80;//套装id
    echo "<font color=red>【神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=81;//套装id
    echo "<font color=red>【神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=82;//套装id
    echo "<font color=red>【神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////




/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=691;
$arr2[]=692;
$arr2[]=693;
$arr2[]=694;
$arr2[]=695;

$arr2[]=696;
$arr2[]=697;
$arr2[]=698;
$arr2[]=699;
$arr2[]=700;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=83;//套装id
    echo "<font color=red>【圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=84;//套装id
    echo "<font color=red>【圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=85;//套装id
    echo "<font color=red>【圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=86;//套装id
    echo "<font color=red>【圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=87;//套装id
    echo "<font color=red>【圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////



/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=701;
$arr2[]=702;
$arr2[]=703;
$arr2[]=704;
$arr2[]=705;

$arr2[]=706;
$arr2[]=707;
$arr2[]=708;
$arr2[]=709;
$arr2[]=710;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=88;//套装id
    echo "<font color=red>【混沌天尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=89;//套装id
    echo "<font color=red>【混沌天尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=90;//套装id
    echo "<font color=red>【混沌天尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=91;//套装id
    echo "<font color=red>【混沌天尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=92;//套装id
    echo "<font color=red>【混沌天尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////


/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=711;
$arr2[]=712;
$arr2[]=713;
$arr2[]=714;
$arr2[]=715;

$arr2[]=716;
$arr2[]=717;
$arr2[]=718;
$arr2[]=719;
$arr2[]=720;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=93;//套装id
    echo "<font color=red>【混沌神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=94;//套装id
    echo "<font color=red>【混沌神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=95;//套装id
    echo "<font color=red>【混沌神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=96;//套装id
    echo "<font color=red>【混沌神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=97;//套装id
    echo "<font color=red>【混沌神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////



/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=721;
$arr2[]=722;
$arr2[]=723;
$arr2[]=724;
$arr2[]=725;

$arr2[]=726;
$arr2[]=727;
$arr2[]=728;
$arr2[]=729;
$arr2[]=730;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=98;//套装id
    echo "<font color=red>【混沌圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=99;//套装id
    echo "<font color=red>【混沌圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=100;//套装id
    echo "<font color=red>【混沌圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=101;//套装id
    echo "<font color=red>【混沌圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=102;//套装id
    echo "<font color=red>【混沌圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////



/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=731;
$arr2[]=732;
$arr2[]=733;
$arr2[]=734;
$arr2[]=735;

$arr2[]=736;
$arr2[]=737;
$arr2[]=738;
$arr2[]=739;
$arr2[]=740;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=103;//套装id
    echo "<font color=red>【鸿蒙天尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=104;//套装id
    echo "<font color=red>【鸿蒙天尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=105;//套装id
    echo "<font color=red>【鸿蒙天尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=106;//套装id
    echo "<font color=red>【鸿蒙天尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=107;//套装id
    echo "<font color=red>【鸿蒙天尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////



/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=741;
$arr2[]=742;
$arr2[]=743;
$arr2[]=744;
$arr2[]=745;

$arr2[]=746;
$arr2[]=747;
$arr2[]=748;
$arr2[]=749;
$arr2[]=750;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=108;//套装id
    echo "<font color=red>【鸿蒙神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=109;//套装id
    echo "<font color=red>【鸿蒙神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=110;//套装id
    echo "<font color=red>【鸿蒙神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=111;//套装id
    echo "<font color=red>【鸿蒙神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=112;//套装id
    echo "<font color=red>【鸿蒙神尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////



/////////套装//////////
$arr2=[];
$arr3=[];
$tzms=[];
$arr2[]=751;
$arr2[]=752;
$arr2[]=753;
$arr2[]=754;
$arr2[]=755;

$arr2[]=756;
$arr2[]=757;
$arr2[]=758;
$arr2[]=759;
$arr2[]=760;


$arr3=array_intersect($arr1,$arr2);
if(count($arr3)==1){
} elseif(count($arr3)==2){
    $tzid=113;//套装id
    echo "<font color=red>【鸿蒙圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==3){
    $tzid=114;//套装id
    echo "<font color=red>【鸿蒙圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==4){
    $tzid=115;//套装id
    echo "<font color=red>【鸿蒙圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==5){
    $tzid=116;//套装id
    echo "<font color=red>【鸿蒙圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} elseif(count($arr3)==6){
    $tzid=117;//套装id
    echo "<font color=red>【鸿蒙圣尊套】(".count($arr3)."/6)</font></a>"."<br>";
    include("./wj/tzmzxx.php");
    include("./wj/tzmzxx01.php");
    echo "<font color=black>".$tzms."</font></a>";
} else{
}
/////////套装//////////