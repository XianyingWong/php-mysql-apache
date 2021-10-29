<?php
include("conn.php");
//mysql_query("set names gb2312");
mysqli_set_charset($conn, "utf8");
//先接收传过来的数据.
$oldEmpno = $_POST['oldEmpno'];
$empno = $_POST['empno'];
$ename = $_POST['ename'];
$job = $_POST['job'];
$mgr = $_POST['mgr'];
$hiredate = $_POST['hiredate'];
$sal = $_POST['sal'];
$comm = $_POST['comm'];
$deptno = $_POST['deptno'];

$query = "Update EMP2019152048 set empno=$empno,ename='$ename',job='$job',mgr='$mgr',hiredate='$hiredate',sal='$sal',comm='$comm',deptno='$deptno' where empno=$oldEmpno";
echo $query;
$res = mysqli_query($conn, $query) or die(mysqli_error($conn));
//echo "修改成功";
if ($res) {
?>
<?php
    echo "<script language=javascript>window.alert('修改成功,请返回');history.back(1);</script>";
} else {
?>
    echo "<script language=javascript>
        window.alert('修改失败,请返回');
        history.back(1);
    </script>";
<?php
}
?>