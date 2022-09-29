
<form  action="<?echo "gm.php?gid=6&&user=$wjid";?>" method="post">
物品&nbsp&nbspI&nbsp&nbspD：<input type="tel" name="wp" placeholder="请输入物品ID"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
物品数量：<input type="tel" name="sl" placeholder="请输入物品数量"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="发送道具" id="search1"><br>
</form>


<html>
<!-- stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,700,700i" rel="stylesheet">
<!-- //stylesheet -->

<body class="bg agileinfo">
<h1 class="agile_head text-center">西游物品ID搜索</h1>

<div class="container w3">
<form action="#" method="post" class="agile_form">

<input type='text' value='' id='searchipt' class="name agileits" placeholder='请输入物品名字'>
<div class="list_agileits_w3layouts">
<div class="section_class_agileits sec-left">
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
</select>
</div>
<div class="clear"></div>
</div>


<?php
echo "<br>";
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
$('#mailid').html('<option value="0">未找到</option>');
}
},

});
});
</script>
</body>
</html>