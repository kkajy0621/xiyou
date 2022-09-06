<?php

$zspd=0;
$zsspd=0;
//路径
$path='acher/map';
$gglockname=$path."/".$ininalock;

for($x=0;$x<=30;$x++){
	$fp = fopen($gglockname, "w+");
	if(flock($fp,LOCK_EX | LOCK_NB)){
		$zsspd=1;
		//flock($fp, LOCK_NB);
		break;
	}else{
		//排队等待
		//延时200毫秒
		usleep(800);
		$zspd=$zspd+1;
		if($zspd>=25){
			$zsspd=2;
			break;
		} else{
		}
	}
}

if($zsspd==1){
	//路径
	$path='acher/map';
	if (!file_exists($path)){
		mkdir ($path,0777,true);
	}
	$ininame = $path."/".$inina;
	$filename = $ininame;
	if(!file_exists($filename)){
		$counter_file=$ininame;//文件名及路径,在当前目录下新建aa.txt文件
		$fopen=fopen($counter_file,   'wb ');//新建文件命令
		fputs($fopen,   '[地图信息]');//向文件中写入内容;
		$iniFile = new iniFile($ininame);
		fclose($fopen);
	} else {
		$iniFile = new iniFile($ininame);
	}

	////////玩家id值
	$dt=($iniFile->getCategory('玩家id值'.$dtx.'x'.$dty));
	if($dt['初始']==""){
		$iniFile->addCategory('玩家id值'.$dtx.'x'.$dty, ['初始' => 888]);
		$iniFile->addCategory('玩家id值'.$dtx.'x'.$dty, [$wjid => $wjid]);
	}else{
		$iniFile->addItem('玩家id值'.$dtx.'x'.$dty,[$wjid => $wjid]);
	}

	////////玩家名字值暂时用id代替后期更新
	$dt=($iniFile->getCategory('玩家名字值'.$dtx.'x'.$dty));
	if($dt['初始']==""){
		$iniFile->addCategory('玩家名字值'.$dtx.'x'.$dty, ['初始' => 888]);
		$iniFile->addCategory('玩家名字值'.$dtx.'x'.$dty, [$wjid => $wjxx['玩家名字']]);
	}else{
		$iniFile->addItem('玩家名字值'.$dtx.'x'.$dty,[$wjid => $wjxx['玩家名字']]);
	}

	////////玩家vip值暂时用id代替后期更新
	$dt=($iniFile->getCategory('玩家vip值'.$dtx.'x'.$dty));
	if($dt['初始']==""){
		$iniFile->addCategory('玩家vip值'.$dtx.'x'.$dty, ['初始' => 888]);
		$iniFile->addCategory('玩家vip值'.$dtx.'x'.$dty, [$wjid => $wjxx['vip等级']]);
	}else{
		$iniFile->addItem('玩家vip值'.$dtx.'x'.$dty,[$wjid => $wjxx['vip等级']]);
	}

	////////玩家时间值
	$y= date('Y')*1;
	$m= date('m')*1;
	$d= date('d')*1;
	$h= date('H')*1;
	$i= date('i')*1;
	$s= date('s')*1;
	$wjdate=$y*60*60*24*365+$m*60*60*24*30+$d*60*60*24+$h*60*60+$i*60+$s;
	$dt=($iniFile->getCategory('玩家时间值'.$dtx.'x'.$dty));


	if($dt['初始']==""){
		$iniFile->addCategory('玩家时间值'.$dtx.'x'.$dty, ['初始' => 888]);
		$iniFile->addCategory('玩家时间值'.$dtx.'x'.$dty, [$wjid => $wjdate]);
	}else{
		$iniFile->addItem('玩家时间值'.$dtx.'x'.$dty,[$wjid => $wjdate]);
	}

	$dt=($iniFile->getCategory('国家名字值'.$dtx.'x'.$dty));
	if($dt['初始']==""){
		$iniFile->addCategory('国家名字值'.$dtx.'x'.$dty, ['初始' => 888]);
		$iniFile->addCategory('国家名字值'.$dtx.'x'.$dty, [$wjid => $bpmz]);
	}else{
		$iniFile->addItem('国家名字值'.$dtx.'x'.$dty,[$wjid => $bpmz]);
	}
	$dt=($iniFile->getCategory('国家职务名字值'.$dtx.'x'.$dty));

	if($dt['初始']==""){
		$iniFile->addCategory('国家职务名字值'.$dtx.'x'.$dty, ['初始' => 888]);
		$iniFile->addCategory('国家职务名字值'.$dtx.'x'.$dty, [$wjid => $bpzw]);
	}else{
		$iniFile->addItem('国家职务名字值'.$dtx.'x'.$dty,[$wjid => $bpzw]);
	}

	/*

    # 获取一个分类下所有数据$
    $dt=($iniFile->getCategory('玩家国家名字值'.$dtx.'x'.$dty));
        if($dt['初始']==""){
    # 添加一个分类并直接添加子项
    $iniFile->addCategory('玩家国家名字值'.$dtx.'x'.$dty, ['初始' => 888]);
    # 添加一个分类并直接添加子项
    $iniFile->addCategory('玩家国家名字值'.$dtx.'x'.$dty, [$wjid => $wjxx['玩家名字']]);
    }else{
    # 添加一个子项(如果子项存在，则覆盖;)
    $iniFile->addItem('玩家国家名字值'.$dtx.'x'.$dty,[$wjid => $wjxx['玩家名字']]);
    }

    */

	//删除过期
	# 获取一玩家时间分类下所有数据
	$array1=($iniFile->getCategory('玩家时间值'.$dtx.'x'.$dty));
	$y= date('Y')*1;
	$m= date('m')*1;
	$d= date('d')*1;
	$h= date('H')*1;
	$i= date('i')*1;
	$s= date('s')*1;
	$wjdate1=$y*60*60*24*365+$m*60*60*24*30+$d*60*60*24+$h*60*60+$i*60+$s;
	foreach($array1 as $k=>$v) {
		if ($k!="初始") {
			$v=$wjdate1-$v;
			if ($v>=1200) {
				$iniFile->delItem('玩家时间值'.$dtx.'x'.$dty, $k);
				$iniFile->delItem('玩家vip值'.$dtx.'x'.$dty, $k);
				$iniFile->delItem('玩家id值'.$dtx.'x'.$dty, $k);
				$iniFile->delItem('玩家名字值'.$dtx.'x'.$dty, $k);
				$iniFile->delItem('国家名字值'.$dtx.'x'.$dty, $k);
				$iniFile->delItem('国家职务名字值'.$dtx.'x'.$dty, $k);
			}
		}
	}

	# 获取一名字分类下所有数据
	$array2=($iniFile->getCategory('玩家id值'.$dtx.'x'.$dty));
	$array3=($iniFile->getCategory('玩家名字值'.$dtx.'x'.$dty));
	$array4=($iniFile->getCategory('国家名字值'.$dtx.'x'.$dty));
	$array5=($iniFile->getCategory('国家职务名字值'.$dtx.'x'.$dty));
	$i=0;

//if($dtx!=71||$dtx!=72||$dtx!=73){
	//不在住宅

	foreach( $array2 as $v ) {
		if ($v!=888&&$wjid!=$v) {
			$i=$i+1;
			if ($i==1) {
				echo "你看到：";
			}
			if ($wjid!=$v) {
				if ($i>=1&&$i<=3) {
					$wjmz=($iniFile->getItem('玩家名字值'.$dtx.'x'.$dty,$v));
					$wjvip=($iniFile->getItem('玩家vip值'.$dtx.'x'.$dty,$v));
					$wjgjmz=($iniFile->getItem('国家名字值'.$dtx.'x'.$dty,$v));
					$wjgjzw=($iniFile->getItem('国家职务名字值'.$dtx.'x'.$dty,$v));
					if ($i==1) {
					} else{
						echo "<font color=black>,</font>";
					}

					if ($wjvip!="") {
						$img='pic/vip/'."vip".$wjvip.'.png';
						echo '<img src="'.$img.' "alt="图片"/〉';
						echo "<br>";
					}
					$cmid=$cmid+1;
					$cdid[]=$cmid;
					$clj[]=389;
					$npc[]=$v;
					if ($wjgjmz!="") {
						echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$wjmz."【".$wjgjmz."】（".$wjgjzw."）</font></a>";

					} else{
						echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$wjmz."</font></a>";
					}
					// echo "<font color=black>".$wjmz."</font>";
				}

				if ($i==20) {
					echo "<font color=black>,</font>";
					$cmid=$cmid+1;
					$cdid[]=$cmid;
					$clj[]=92;
					$npc[]=0;
					echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>更多....</font></a>";
					break;
				}
			}
		}
	}
	if ($i>=1) {
		echo "</br>";
	}
//} else{
// }

	//移动清除掉上次地图坐标
	if($ydtx==$dtx&&$ydty==$dty){
	} else {
		if($ydtx!=""&&$dtx!=""&&$ydtx!=$dtx||$ydtx!=""&&$dtx!=""&&$ydty!=$dty){
			$path='acher/map';
			include("mapid.php");
			$ininames = $path."/".$inina;
			$iniFile = new iniFile($ininames);
			$iniFile->delItem('玩家id值'.$ydtx.'x'.$ydty, $wjid);
			$iniFile = new iniFile($ininame);
		}else{
			$iniFile->delItem('玩家id值'.$ydtx.'x'.$ydty, $wjid);
		}

		if($ydtx!=""&&$dtx!=""&&$ydtx!=$dtx||$ydtx!=""&&$dtx!=""&&$ydty!=$dty){
			$path='acher/map';
			include("mapid.php");
			$ininames = $path."/".$inina;
			$iniFile = new iniFile($ininames);
			$iniFile->delItem('玩家名字值'.$ydtx.'x'.$ydty, $wjid);
			$iniFile = new iniFile($ininame);
		}else{
			$iniFile->delItem('玩家名字值'.$ydtx.'x'.$ydty, $wjid);
		}

		////////玩家名字值暂时用id代替后期更新
		//移动清除掉上次地图坐标
		if($ydtx!=""&&$dtx!=""&&$ydtx!=$dtx||$ydtx!=""&&$dtx!=""&&$ydty!=$dty){
			$path='acher/map';
			include("mapid.php");
			$ininames = $path."/".$inina;
			$iniFile = new iniFile($ininames);
			$iniFile->delItem('玩家vip值'.$ydtx.'x'.$ydty, $wjid);
			$iniFile = new iniFile($ininame);
		}else{
			$iniFile->delItem('玩家vip值'.$ydtx.'x'.$ydty, $wjid);
		}

		if($ydtx!=""&&$dtx!=""&&$ydtx!=$dtx||$ydtx!=""&&$dtx!=""&&$ydty!=$dty){
			$path='acher/map';
			include("mapid.php");
			$ininames = $path."/".$inina;
			$iniFile = new iniFile($ininames);
			$iniFile->delItem('国家名字值'.$ydtx.'x'.$ydty, $wjid);
			$iniFile = new iniFile($ininame);
		}else{
			$iniFile->delItem('国家名字值'.$ydtx.'x'.$ydty, $wjid);
		}

		if($ydtx!=""&&$dtx!=""&&$ydtx!=$dtx||$ydtx!=""&&$dtx!=""&&$ydty!=$dty){
			$path='acher/map';
			include("mapid.php");
			$ininames = $path."/".$inina;
			$iniFile = new iniFile($ininames);
			$iniFile->delItem('国家职务名字值'.$ydtx.'x'.$ydty, $wjid);
			$iniFile = new iniFile($ininame);
		}else{
			$iniFile->delItem('国家职务名字值'.$ydtx.'x'.$ydty, $wjid);
		}

		if($ydtx!=""&&$dtx!=""&&$ydtx!=$dtx||$ydtx!=""&&$dtx!=""&&$ydty!=$dty){
			$path='acher/map';
			include("mapid.php");
			$ininames = $path."/".$inina;
			$iniFile = new iniFile($ininames);
			$iniFile->delItem('玩家时间值'.$ydtx.'x'.$ydty, $wjid);
			$iniFile = new iniFile($ininame);
		}else{
			$iniFile->delItem('玩家时间值'.$ydtx.'x'.$ydty, $wjid);
		}
		////////玩家时间值
	}
	flock($fp,LOCK_UN);
} else{
	echo "fm";
}

