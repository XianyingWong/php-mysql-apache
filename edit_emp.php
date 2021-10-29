<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>修改员工数据</title>
    <style>
        form {
            padding: 0px;
            margin: 0px;
        }
    </style>
</head>

<body>
    <?php
    include("conn.php");
    //mysql_query("set names gb2312");
    mysqli_set_charset($conn, "utf8");
    $oldEmpno = $_GET['empno'];   //先接收从news.php传过来的ID值以确定要修改的新闻
    //接着查出该新闻有关数据.
    $query = "select * from EMP2019152048 where empno=$oldEmpno";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
    $dbrow = mysqli_fetch_array($res);

    $empno = $dbrow['empno'];
    $ename = $dbrow['ename'];
    $job = $dbrow['job'];
    $mgr = $dbrow['mgr'];
    $hiredate = $dbrow['hiredate'];
    $sal = $dbrow['sal'];
    $comm = $dbrow['comm'];
    $deptno = $dbrow['deptno'];
    ?>
    <table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">请填写要修改员工的信息</td>
        </tr>
    </table>
    <form action="save_edit_emp.php" method="post">
        <!---把内容传到save_edit_dept.php 保存-->
        <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="30%" align="right">deptno</td>
                <td width="70%" align="left"><input type="text" name="empno" size="30" value="<?php echo $empno; ?>" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">dname</td>
                <td width="70%" align="left"><input type="text" name="ename" size="30" value="<?php echo $ename; ?>" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">job</td>
                <td width="70%" align="left"><input type="text" name="job" size="30" value="<?php echo $job; ?>" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">mgr</td>
                <td width="70%" align="left"><input type="text" name="mgr" size="30" value="<?php echo $mgr; ?>" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">hiredate</td>
                <td width="70%" align="left"><input type="text" name="hiredate" size="30" value="<?php echo $hiredate; ?>" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">sal</td>
                <td width="70%" align="left"><input type="text" name="sal" size="30" value="<?php echo $sal; ?>" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">comm</td>
                <td width="70%" align="left"><input type="text" name="comm" size="30" value="<?php echo $comm; ?>" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">deptno</td>
                <td width="70%" align="left"><input type="text" name="deptno" size="30" value="<?php echo $deptno; ?>" /></td>
            </tr>
        </table>
        <table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center">
                    <input type="hidden" name="oldEmpno" value="<?php echo $oldEmpno; ?>" />
                    <!----这里很重要,以隐藏方式把ID值也传到save_edit_news.php文,以确定更新的具体是哪条新闻--->
                    <input type="submit" name="submit1" value="确定修改" />
                </td>
            </tr>
        </table>
    </form>

</body>

</html>