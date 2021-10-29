<?php
include("conn.php");
//mysql_query("set names gb2312");
mysqli_set_charset($conn, "utf8");
error_reporting(0);
//下面先接收从add_news.php传过来的新闻标题与新闻内容.
//PHP变量是以$开头的,如$a,$b 变量,与C,C++一样都是以";"分号结果一句子;注释也与C,C++一样.
// 因为add_news.php表单定义的传输方式为POST所以这里要对应用POST接收,如果定义为GET则要用GET接收.
$empno = $_POST['empno'];
$ename = $_POST['ename'];
$job = $_POST['job'];
$mgr = $_POST['mgr'];
$hiredate = $_POST['hiredate'];
$sal = $_POST['sal'];
$comm = $_POST['comm'];
$deptno = $_POST['deptno'];

$sql = "INSERT INTO EMP2019152048 (empno,ename,job,mgr,hiredate,sal,comm,deptno)

VALUES ($empno,'$ename','$job','$mgr','$hiredate','$sal','$comm','$deptno')";

$result = @mysqli_query($conn, $sql) or die(mysqli_error($conn));  //如果添加成功,返回真给$result ,否则为false.

if ($result) {
    echo "添加员工成功,<a href='add_emp.php'>返回继续</a>";
} else {
    echo "添加员工失败,<a href='add_emp.php'>请返回</a>";
}
