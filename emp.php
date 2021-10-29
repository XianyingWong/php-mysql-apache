<!DOCTYPE html>
<html>

<head>
    <title>员工数据</title>
</head>

<body>
    <?php
    include("conn.php");
    mysqli_set_charset($conn, "utf8");
    echo "下面是所有员工数据:<br>";
    $query = "select * from EMP2019152048";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
    ?>
    <table style='text-align:left;' border='1'>
        <tr>
            <th>empno</th>
            <th>ename</th>
            <th>job</th>
            <th>mgr</th>
            <th>hiredate</th>
            <th>sal</th>
            <th>comm</th>
            <th>deptno</th>
        </tr>
        <?php
        //查询数据表中的数据
        if ($row) {
            for ($i = 0; $i < $row; $i++)            //这里用一个FOR 语句查询显示多条结果
            {
                $dbrow = mysqli_fetch_array($res);
                $empno = $dbrow['empno'];
                $ename = $dbrow['ename'];
                $job = $dbrow['job'];
                $mgr = $dbrow['mgr'];
                $hiredate = $dbrow['hiredate'];
                $sal = $dbrow['sal'];
                $comm = $dbrow['comm'];
                $deptno = $dbrow['deptno'];

                echo "<tr><td>$empno</td><td>$ename</td><td>$job</td><td>$mgr</td><td>$hiredate</td><td>$sal</td><td>$comm</td><td>$deptno</td><td><a href='edit_emp.php?empno=$empno'>修改</a></td><td><a href='del_emp.php?empno=$empno'><font color='red'>删除</font></td></tr>";
            }
        } else {
            echo "无相关数据";
        }
        ?>
    </table>
</body>

</html>