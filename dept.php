<!DOCTYPE html>
<html>

<head>
    <title>部门数据</title>
</head>

<body>
    <?php
    include("conn.php");
    mysqli_set_charset($conn, "utf8");
    echo "下面是所有部门数据:<br>";
    $query = "select * from DEPT2019152048";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
    ?>
    <table style='text-align:left;' border='1'>
        <tr>
            <th>deptno</th>
            <th>dname</th>
            <th>loc</th>
        </tr>
        <?php
        if ($row) {
            for ($i = 0; $i < $row; $i++)            //这里用一个FOR 语句查询显示多条结果
            {
                $dbrow = mysqli_fetch_array($res);
                $deptno = $dbrow['deptno'];
                $dname = $dbrow['dname'];
                $loc = $dbrow['loc'];

                echo "<tr><td>$deptno</td><td>$dname</td><td>$loc</td> <td><a href='edit_dept.php?deptno=$deptno'>修改</a></td>  <td><a href='del_dept.php?deptno=$deptno'><font color='red'>删除</font></td></tr>";
            }
        } else {
            echo "无相关数据";
        }
        ?>
    </table>
</body>

</html>