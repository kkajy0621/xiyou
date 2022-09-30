<?php

//〖金豆〗
include("./sql/mysql.php");//调用数据库连接
$czid=127;
$wpfl=4;
//查询如果没有则添加
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid == "") {
    //获取最大值
    //$q2="zzck".$wjid;
    //$sql1=mysql_query("select MAX(id) from $q2");
    //$abc=mysql_fetch_array($sql1);
    //$maxid=$abc[0];
    //if($maxid ==""){
//    $maxid=0;
//    $maxidd=$maxid+1;
    //} else{
//    $maxidd=$maxid+1;
    //}
    $ckwpsl=$ppwpsl;
    //$npcc=$czid;
    //调用物品信息
    //include("./wp/wpxx.php");
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwpsl;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";//物品id号必改值
    $result = mysql_query($strsql);
}

//〖紫星币〗
$czid=944;
$wpfl=4;
//查询如果没有则添加
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    //获取最大值
    $ckwpsl=$ppwpsl1;
    //$npcc=$czid;
    //调用物品信息
    //include("./wp/wpxx.php");
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwpsl1;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";//物品id号必改值
    $result = mysql_query($strsql);
}

//〖点石成金卷〗
$czid=1098;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwpsl2;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwpsl2;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//〖背包扩容卷〗
$czid=400;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwpsl3;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwpsl3;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//〖仓库扩容卷〗
$czid=175;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwpsl4;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwpsl4;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}


/*
//〖万能字〗
$czid=563;
$wpfl=6;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwpsl5;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps15;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//〖七夕万能字〗
$czid=657;
$wpfl=6;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwpsl6;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwpsl6;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//【喜鹊蛋】
$czid=591;
$wpfl=6;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwpsl7;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwpsl7;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}
*/


//【小宇宙】
$czid=729;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwpsl8;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwpsl8;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}


/*
//〖嫦娥月饼礼盒〗
$czid=776;
$wpfl=8;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwpsl9;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwpsl9;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//【糯米粉】
$czid=741;
$wpfl=6;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps20;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps20;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//【桂花糕】
$czid=740;
$wpfl=6;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps21;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps21;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}
*/


//〖云梯石〗
$czid=821;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps22;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps22;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}


//【国庆金铲】
$czid=837;
$wpfl=6;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps23;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps23;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//〖国庆万能字〗
$czid=836;
$wpfl=6;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps24;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps24;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}


//〖如意の称号宝箱〗
$czid=822;
$wpfl=8;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps25;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps25;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

/*
//〖小公主の材料票〗
$czid=950;
$wpfl=6;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps26;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps26;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}


//〖比翼双飞〗（典藏套装）
$czid=972;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps27;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps27;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//【喜鹊令】
$czid=600;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps28;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps28;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//【七夕令】
$czid=638;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps29;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps29;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}


//〖万圣节万能字〗
$czid=1009;
$wpfl=6;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps30;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps30;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}


//〖神の陨升星符〗
$czid=1011;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps31;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps31;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}


//〖万圣节极品糖果箱〗
$czid=1033;
$wpfl=8;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps32;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps32;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//〖感恩小羊礼包〗
$czid=1085;
$wpfl=8;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps33;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps33;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//〖金锭〗
$czid=663;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps34;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps34;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//〖八倍掉宝符〗
$czid=456;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps35;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps35;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}

//〖感恩票〗
$czid=1064;
$wpfl=6;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps36;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps36;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}
*/

//〖圣贤宝石包〗（1个）
$czid=791;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps37;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps37;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}


//〖凤凰圣祖〗（宠物蛋）
$czid=846;
$wpfl=4;
$q2="zzck";
$sql1=mysql_query("select * from $q2 where wjid=$wjid and wpid=$czid", $conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if ($ckwpid=="") {
    $ckwpsl=$ppwps38;
    $q2="zzck";
    $sql = "insert into $q2 (wjid,wpid,wpsl,wpfl)  values('$wjid','$czid','$ckwpsl','$wpfl')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $q2="zzck";
    $ckwpsl=$ckwpsl+$ppwps38;
    $strsql = "update $q2 set wpsl=$ckwpsl where wjid=$wjid and wpid=$ckwpid";
    $result = mysql_query($strsql);
}


//更新vip
include("./ini/zt_ini.php");
$vipjy=($iniFile->getItem('玩家信息', 'vip经验'));
$usermzxx=($iniFile->getItem('玩家信息', '玩家名字'));
$vipjy=$vipjf+$vipjy;
if ($vipjy>=10&&$vipjy<=49) {//vip1
    $vip=1;
} elseif ($vipjy>=50&&$vipjy<=99) {//vip2
    $vip=2;
} elseif ($vipjy>=100&&$vipjy<=199) {//vip3
    $vip=3;
} elseif ($vipjy>=200&&$vipjy<=399) {//vip4
    $vip=4;
} elseif ($vipjy>=400&&$vipjy<=499) {//vip5
    $vip=5;
} elseif ($vipjy>=500&&$vipjy<=599) {//vip6
    $vip=6;
} elseif ($vipjy>=600&&$vipjy<=999) {//vip7
    $vip=7;
} elseif ($vipjy>=1000&&$vipjy<=1499) {//vip8
    $vip=8;
} elseif ($vipjy>=1500&&$vipjy<=1999) {//vip9
    $vip=9;
} elseif ($vipjy>=2000&&$vipjy<=2999) {//vip10
    $vip=10;
} elseif ($vipjy>=3000&&$vipjy<=4999) {//vip11
    $vip=11;
} elseif ($vipjy>=5000&&$vipjy<=6999) {//vip12
    $vip=12;
} elseif ($vipjy>=7000&&$vipjy<=8999) {//vip13
    $vip=13;
} elseif ($vipjy>=9000&&$vipjy<=10999) {//vip14
    $vip=14;
} elseif ($vipjy>=11000&&$vipjy<=12999) {//vip15
    $vip=15;
} elseif ($vipjy>=13000&&$vipjy<=14999) {//vip16
    $vip=16;
} elseif ($vipjy>=15000&&$vipjy<=16999) {//vip17
    $vip=17;
} elseif ($vipjy>=17000&&$vipjy<=18999) {//vip18
    $vip=18;
} elseif ($vipjy>=19000&&$vipjy<=24999) {//vip19
    $vip=19;
} elseif ($vipjy>=25000&&$vipjy<=9999999) {//vip20
    $vip=20;
} else {
    $vip=0;
}
$q2="all_zt";
$strsql = "update $q2 set vipjy=$vipjy,vip=$vip where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('玩家信息', ['vip经验' => $vipjy,'vip等级' => $vip]);
$xysw1=$vipjf;
$q2="all_hdph02";
$sql1=mysql_query("select ds01 from $q2 where wjid=$wjid", $conn);
$info1=@mysql_fetch_array($sql1);
$ds01=$info1['ds01'];
if ($ds01 =="") {
    //获取最大值
    $q2="all_hdph02";
    $sql1=mysql_query("select MAX(id) from $q2");
    $abc=mysql_fetch_array($sql1);
    $maxid=$abc[0];
    if ($maxid =="") {
        $maxidd=$maxid+1;
    } else {
        $maxidd=$maxid+1;
    }
    mysql_query("set names utf8");
    $sql = "insert into $q2 (id,wjid,wjmz,vip,ds01)  values('$maxidd','$wjid','$usermzxx','$vip','$xysw1')";
    if (!mysql_query($sql, $conn)) {
        die('Error: ' . mysql_error());
    }
} else {
    $xysw1=$xysw1+$ds01;
    $q2="all_hdph02";
    mysql_query("set names utf8");
    $strsql = "update $q2 set ds01=$xysw1 where wjid=$wjid";//物品id号必改值
    $result = mysql_query($strsql);
}
//路径
$inina="phb14.ini";
$path='acher/phb';
//判断ini文件是否存在
$ininame = $path."/".$inina;
_unlink($ininame); //删除文件
//更新vip
//调用msg.ini是否存在
$wjtake="恭喜你！！充值已经到账请在首页的增值仓库领取，感谢您对幻想西游的大力支持！";
include(XY_DIR . "/ini/msg_ini.php");
$inina="msg.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在
$ininame = $path."/".$inina;
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$hkeyltpx1[]="";
$hltpx1="";
$arr3="";
# 获取一个分类下所有数据
$hltpx1=($iniFile->getCategory('玩家排序'));
foreach (array_keys($hltpx1) as $key) {
    $hkeyltpx1[]=$hltpx1[$key];
}
$tmp1="排序";
$arr3=$hkeyltpx1;
foreach ($arr3 as $k=>$v) {
    if ($tmp1 == $v) {
        unset($arr3[$k]);
    }
}
$ltmax1=empty($arr3) ? 0 : (int)max($arr3);
if ($ltmax1=="排序") {
    $ltmax1=0;
} else {
}
$ltbl2=-1;
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序', [$zbidd2 => $ltmax1]);
$iniFile->addItem('玩家id', [$ltmax1 => $wjid1]);
$iniFile->addItem('玩家vip', [$ltmax1 => $ltbl2]);
$iniFile->addItem('玩家名字', [$ltmax1 => $ltbl1]);
$iniFile->addItem('玩家发言', [$ltmax1 => $wjtake]);
include("./ini/czjf_ini.php");
$czjf=($iniFile->getItem('充值积分', '初始'));
$czjf=$czjf+$vipjf*2;
$iniFile->updItem('充值积分', ['初始' => $czjf]);
