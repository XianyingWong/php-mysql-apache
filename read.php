<?php 
include ("conn.php");
//mysql_query("set names gb2312");
mysqli_set_charset($conn,"utf8");
echo "下面为查询id=1的新闻数据.<br>";
$query = "select * from news where id=1";    //查询条件id类型为int 型所以直接写1就行了,如果是字符或是字符串型则用"'",单引号引起
$res = mysqli_query($conn, $query) or die(mysql_error());
$row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
if($row)
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

}
else
{
echo "无相关数据";
}

?>