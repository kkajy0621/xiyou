<?php

echo "<font color=red>【GM得到代码】</font>"."<br>";

include("gmcode1.php");



echo "<br>";

?>
<button id="copy">复制代码</button>


<article id="article">



<?php
include("gmcode.php");
?>


</article>




<?php
echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=24'><font color=blue>【返回上页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=".$xxjyurl."/admin/index.php?wjid=$wjiddd&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";

?>



<script>
function copyArticle(event){
const range = document.createRange();
range.selectNode(document.getElementById('article'));
const selection = window.getSelection();
if(selection.rangeCount > 0) selection.removeAllRanges();
selection.addRange(range);
document.execCommand('copy');
}
document.getElementById('copy').addEventListener('click', copyArticle, false);
</script>

