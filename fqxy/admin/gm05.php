
<form action="<?echo "gm.php?gid=6&&user=$wjid";?>" method="post">
物品搜索:<input type='text' value='' id='searchipt' placeholder='请输入物品名字'>
<select id='mailid'><option value=0>物品列表</option>

<?php
$file = fopen("wp.txt", "r");
while (!feof($file)) {
    $line=fgets($file);
    $txts=explode(';', $line);
    if (count($txts)==2) {
        echo '<option value="'.$txts[0].'">'.$txts[1].'</option>';
    }
}
fclose($file);
?>

<input type="tel" name="wp" placeholder="请输入物品ID"id='search'>
<input type="tel" name="sl" placeholder="请输入物品数量"id='search'>
<input  type="submit" name="submit"  value="发送道具" id="search1">

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<a href='gm.php?gid=4'><font color=red>【返回查询玩家】</font></a>"."<br>";
echo "<br>";
echo "<br>";
echo "<a href='gm.php?gid=1'><font color=red>【返回GM管理首页】</font></a>"."<br>";
echo "<br>";
echo "<br>";
?>

<script src='css/jquery-1.7.2.min.js'></script>

<script>
$('#searchipt').on('change',function(){
var keyword=$(this).val();
$.ajax({
url:'sspz.php',
type:'post',
'data':{keyword:keyword},
'cache':false,
'dataType':'json',
success:function(data){
if(data){
$('#mailid').html('');
for (var i in data){
$('#mailid').append('<option value="'+data[i].key+'">'+data[i].val+'</option>');
}
}else{
$('#mailid').html('<option value="0">请选择</option>');
}
},

});
});
</script>
