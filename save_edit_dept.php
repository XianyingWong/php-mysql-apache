<?php
include("conn.php");
//mysql_query("set names gb2312");
mysqli_set_charset($conn, "utf8");
//先接收传过来的数据.
$oldDeptno = $_POST['oldDeptno'];
$deptno = $_POST['deptno'];
$dname = $_POST['dname'];
$loc = $_POST['loc'];

$query = "Update DEPT2019152048 set deptno=$deptno,dname='$dname',loc='$loc' where deptno=$oldDeptno";
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