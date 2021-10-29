<?php
include("conn.php");
//mysql_query("set names gb2312");
mysqli_set_charset($conn, "utf8");
$empno = $_GET['empno'];
$sql = "delete from EMP2019152048 where empno=$empno;";
$result1 = @mysqli_multi_query($conn, $sql) or die(mysqli_error($conn));
if ($result1) {
?>
    echo "<script language=javascript>
        window.alert('成功删除,请返回');
        history.back(1);
    </script>";
<?php
} //result1==true
?>