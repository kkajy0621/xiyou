<?php


if($npcc ==999){


} elseif($npcc ==905){//〖生日甜品礼盒〗
include("./box/srtpbx.php");//调用箱子使用代码

} elseif($npcc ==906){//〖半周岁10元消费礼宝箱〗
include("./box/10xfbx.php");//调用箱子使用代码
} elseif($npcc ==907){//〖半周岁20元消费礼宝箱〗
include("./box/20xfbx.php");//调用箱子使用代码
} elseif($npcc ==908){//〖半周岁50元消费礼宝箱〗
include("./box/50xfbx.php");//调用箱子使用代码
} elseif($npcc ==909){//〖半周岁100元消费礼宝箱〗
include("./box/100xfbx.php");//调用箱子使用代码
} elseif($npcc ==910){//〖半周岁200元消费礼宝箱〗
include("./box/200xfbx.php");//调用箱子使用代码
} elseif($npcc ==911){//〖半周岁500元消费礼宝箱〗
include("./box/500xfbx.php");//调用箱子使用代码
} elseif($npcc ==912){//〖半周岁1000元消费礼宝箱〗
include("./box/1000xfbx.php");//调用箱子使用代码
} elseif($npcc ==913){//〖半周岁2000元消费礼宝箱〗
include("./box/2000xfbx.php");//调用箱子使用代码

} elseif ($npcc==927) {//【极品3位ID号（111）】
$lh=111;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==928) {//【极品3位ID号（222）】
$lh=222;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==929) {//【极品3位ID号（333）】
$lh=333;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==930) {//【极品3位ID号（444）】
$lh=444;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==931) {//【极品3位ID号（555）】
$lh=555;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==932) {//【极品3位ID号（666）】
$lh=666;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==933) {//【极品3位ID号（777）】
$lh=777;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==934) {//【极品3位ID号（888）】
$lh=888;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==935) {//【极品3位ID号（999）】
$lh=999;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==936) {//【极品3位ID号（123）】
$lh=123;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置
} elseif ($npcc==937) {//【极品3位ID号（1）】
$lh=1;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置



} elseif($npcc >=914&&$npcc <=921){//称号
include("./pz/ini_pz10.php");//调用ini缓存位置




} elseif($npcc ==940){//〖帝王宝石〗1个
$bsid1=31;//宝石id
$jjmz="〖帝王宝石〗";
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
include("./sql/mysql.php");//调用数据库连接 
//背包容量变更
include("./pz/ini_pzz05.php");
//这里是得到宝石代码
$kcrl=0;
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."x".$bssl."</font>"."<br>";
$wpsy=2;//使用成功

} elseif($npcc >=954&&$npcc <=964){//重阳节称号
include("./pz/ini_pz10.php");//调用ini缓存位置


} elseif($npcc ==965){//〖圣灵白板套装〗



$wpsy=2;//使用成功


//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$mpp1=($iniFile->getItem('玩家信息','门派'));


	if($mpp1==1){
//---------------------------------------------------
$zbid=509;//得到装备的id//【圣灵枪】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==2){
//---------------------------------------------------
$zbid=510;//得到装备的id//【圣灵叉】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==3){

//---------------------------------------------------
$zbid=513;//得到装备的id//【圣灵剑】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==4){
//---------------------------------------------------
$zbid=511;//得到装备的id//【圣灵棍】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==5){
//---------------------------------------------------
$zbid=512;//得到装备的id//【圣灵仗】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


} else{


}
//---------------------------------------------------
$zbid=504;//得到装备的id//【圣灵战甲】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


//---------------------------------------------------
$zbid=505;//得到装备的id//【圣灵战盔】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
//---------------------------------------------------
$zbid=506;//得到装备的id//【圣灵战靴】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=507;//得到装备的id//【圣灵项链】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=508;//得到装备的id//【圣灵手镯】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------




} elseif($npcc ==966){//〖圣灵Ⅰ套装〗



$wpsy=2;//使用成功


//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$mpp1=($iniFile->getItem('玩家信息','门派'));


	if($mpp1==1){
//---------------------------------------------------
$zbid=519;//得到装备的id//【圣灵枪Ⅰ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==2){
//---------------------------------------------------
$zbid=520;//得到装备的id//【圣灵叉Ⅰ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==3){

//---------------------------------------------------
$zbid=523;//得到装备的id//【圣灵剑Ⅰ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==4){
//---------------------------------------------------
$zbid=521;//得到装备的id//【圣灵棍Ⅰ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==5){
//---------------------------------------------------
$zbid=522;//得到装备的id//【圣灵仗Ⅰ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


} else{


}
//---------------------------------------------------
$zbid=514;//得到装备的id//【圣灵战甲Ⅰ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


//---------------------------------------------------
$zbid=515;//得到装备的id//【圣灵战盔Ⅰ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
//---------------------------------------------------
$zbid=516;//得到装备的id//【圣灵战靴Ⅰ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=517;//得到装备的id//【圣灵项链Ⅰ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=518;//得到装备的id//【圣灵手镯Ⅰ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------



} elseif($npcc ==967){//〖圣灵ⅠⅠ套装〗



$wpsy=2;//使用成功


//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$mpp1=($iniFile->getItem('玩家信息','门派'));


	if($mpp1==1){
//---------------------------------------------------
$zbid=529;//得到装备的id//【圣灵枪ⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==2){
//---------------------------------------------------
$zbid=530;//得到装备的id//【圣灵叉ⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==3){

//---------------------------------------------------
$zbid=533;//得到装备的id//【圣灵剑ⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==4){
//---------------------------------------------------
$zbid=531;//得到装备的id//【圣灵棍ⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==5){
//---------------------------------------------------
$zbid=532;//得到装备的id//【圣灵仗ⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


} else{


}
//---------------------------------------------------
$zbid=524;//得到装备的id//【圣灵战甲ⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


//---------------------------------------------------
$zbid=525;//得到装备的id//【圣灵战盔ⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
//---------------------------------------------------
$zbid=526;//得到装备的id//【圣灵战靴ⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=527;//得到装备的id//【圣灵项链ⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=528;//得到装备的id//【圣灵手镯ⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------




} elseif($npcc ==968){//〖圣灵ⅠⅠⅠ套装〗



$wpsy=2;//使用成功


//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$mpp1=($iniFile->getItem('玩家信息','门派'));


	if($mpp1==1){
//---------------------------------------------------
$zbid=539;//得到装备的id//【圣灵枪ⅠⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==2){
//---------------------------------------------------
$zbid=540;//得到装备的id//【圣灵叉ⅠⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==3){

//---------------------------------------------------
$zbid=543;//得到装备的id//【圣灵剑ⅠⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==4){
//---------------------------------------------------
$zbid=541;//得到装备的id//【圣灵棍ⅠⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==5){
//---------------------------------------------------
$zbid=542;//得到装备的id//【圣灵仗ⅠⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


} else{


}
//---------------------------------------------------
$zbid=534;//得到装备的id//【圣灵战甲ⅠⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


//---------------------------------------------------
$zbid=535;//得到装备的id//【圣灵战盔ⅠⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
//---------------------------------------------------
$zbid=536;//得到装备的id//【圣灵战靴ⅠⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=537;//得到装备的id//【圣灵项链ⅠⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=538;//得到装备的id//【圣灵手镯ⅠⅠⅠ】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------





} elseif($npcc ==969){//〖圣灵☯天元套装〗



$wpsy=2;//使用成功


//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$mpp1=($iniFile->getItem('玩家信息','门派'));


	if($mpp1==1){
//---------------------------------------------------
$zbid=549;//得到装备的id//【圣灵枪天元】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==2){
//---------------------------------------------------
$zbid=550;//得到装备的id//【圣灵叉天元】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==3){

//---------------------------------------------------
$zbid=553;//得到装备的id//【圣灵剑天元】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==4){
//---------------------------------------------------
$zbid=551;//得到装备的id//【圣灵棍天元】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==5){
//---------------------------------------------------
$zbid=552;//得到装备的id//【圣灵仗天元】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


} else{

}
//---------------------------------------------------
$zbid=544;//得到装备的id//【圣灵战甲天元】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


//---------------------------------------------------
$zbid=545;//得到装备的id//【圣灵战盔天元】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
//---------------------------------------------------
$zbid=546;//得到装备的id//【圣灵战靴天元】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=547;//得到装备的id//【圣灵项链天元】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=548;//得到装备的id//【圣灵手镯天元】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------






} elseif($npcc ==970){//【噬魂套装】



$wpsy=2;//使用成功


//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$mpp1=($iniFile->getItem('玩家信息','门派'));


	if($mpp1==1){
//---------------------------------------------------
$zbid=583;//得到装备的id//【噬魂仙枪】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==2){
//---------------------------------------------------
$zbid=584;//得到装备的id//【噬魂仙叉】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==3){

//---------------------------------------------------
$zbid=587;//得到装备的id//【噬魂仙剑】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==4){
//---------------------------------------------------
$zbid=585;//得到装备的id//【噬魂仙棍】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==5){
//---------------------------------------------------
$zbid=586;//得到装备的id//【噬魂仙杖】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


} else{

}
//---------------------------------------------------
$zbid=578;//得到装备的id//【噬魂仙甲】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


//---------------------------------------------------
$zbid=579;//得到装备的id//【噬魂仙盔】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
//---------------------------------------------------
$zbid=580;//得到装备的id//【噬魂仙靴】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=581;//得到装备的id//【噬魂仙链】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=582;//得到装备的id//【噬魂仙镯】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


} elseif($npcc ==971){//【帝王套装】



$wpsy=2;//使用成功


//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$mpp1=($iniFile->getItem('玩家信息','门派'));


	if($mpp1==1){
//---------------------------------------------------
$zbid=598;//得到装备的id//【帝王仙枪】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==2){
//---------------------------------------------------
$zbid=599;//得到装备的id//【帝王仙叉】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==3){

//---------------------------------------------------
$zbid=602;//得到装备的id//【帝王仙剑】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==4){
//---------------------------------------------------
$zbid=600;//得到装备的id//【帝王仙棍】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==5){
//---------------------------------------------------
$zbid=601;//得到装备的id//【帝王仙杖】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


} else{

}
//---------------------------------------------------
$zbid=593;//得到装备的id//【帝王仙甲】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


//---------------------------------------------------
$zbid=594;//得到装备的id//【帝王仙盔】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
//---------------------------------------------------
$zbid=595;//得到装备的id//【帝王仙靴】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=596;//得到装备的id//【帝王仙链】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

//---------------------------------------------------
$zbid=597;//得到装备的id//【帝王仙镯】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------





} elseif($npcc ==972){//【比翼双飞】
$wpsy=2;//使用成功
//---------------------------------------------------
$zbid=436;//得到装备的id//【比翼双飞の婚戒】（典藏版）
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
//---------------------------------------------------
$zbid=437;//得到装备的id//【比翼双飞の婚链】（典藏版）
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------




} elseif($npcc ==973){//【伏羲仙丹】
$wpsy=2;//使用成功
$wpjfdj=220;//解封到多少级
include("./pz/ini_pzz038.php");//调用ini缓存位置












} else{
$wpsy=1;//使用失败
include("wpsyts.php");

}











	

?>




