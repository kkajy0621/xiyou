<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="gz04.ini";
$path='acher/guoz';
$file = $path."/".$inina;
if(file_exists($file)) {


} else {
    $inina="gz04.ini";
    $path='acher/guoz';
    $file = $path."/".$inina;
    file_put_contents($file,"[国战信息]");
    $iniFile = new iniFile($file);
    $iniFile->addItem('id',['初始' => 0]);
    $iniFile->addItem('玩家名字',['初始' => 0]);
    $iniFile->addItem('玩家id',['初始' => 0]);
    $iniFile->addItem('个人积分',['初始' => 0]);
    $iniFile->addItem('领取情况',['初始' => 0]);

    $q2="gz04";
    $str="select * from $q2";
    $result=mysql_query($str) or die('SQL语句有误');
    while(!!$row=mysql_fetch_array($result)){
        $iniFile->addCategory('id', [$row['id']=>$row['id']]);
        $iniFile->addCategory('玩家名字', [$row['wjid']=>$row['wjname']]);
        $iniFile->addCategory('玩家id', [$row['wjid']=>$row['wjid']]);
        $iniFile->addCategory('个人积分', [$row['wjid']=>$row['wjgzjf']]);
        $iniFile->addCategory('领取情况', [$row['wjid']=>$row['wjlq']]);
    }
}

$iniFile = new iniFile($file);
