<?php 
include ("conn.php");
//mysql_query("set names gb2312");
mysqli_set_charset($conn,"utf8");
echo "下面为查询标题中有信工学院四个字的的新闻数据.<br>";
$query = "select * from news where title like '%信工学院%'";    //这样可能有很多标题包含有这四个字的新闻都会显示出来. 大家可以添加多几条新闻试试.还可以用OR 或AND 限制更多查询条件.
$res = mysqli_query($conn, $query) or die(mysql_error());
$row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
if($row)
{
for($i=0;$i<$row;$i++)            //这里用一个FOR 语句查询显示多条结果
{ 
$dbrow=mysqli_fetch_array($res);
$id=$dbrow['id']; 
$title=$dbrow['title']; 
$content=$dbrow['content']; 
$add_time=$dbrow['add_time'];
$content = str_replace("\r", "<br>", $content);   //用替换函数据新闻内容中的空格与换行符换回html语法输出.
$content= str_replace(" ", "&nbsp;", $content);

echo $id;       //PHP的输出用 echo 
echo "  ";
echo $title."<br>";   //<br>为换行
echo $add_time;
echo "<br>";
echo $content;
echo "<br>";
echo "--------------------------------";
echo "<br>";
}
}
else
{
echo "无相关数据";
}

?>// 到此就结束了数据查询的学习.