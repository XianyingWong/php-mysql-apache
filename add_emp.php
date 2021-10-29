<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>添加员工</title>
    <style>
        form {
            padding: 0px;
            margin: 0px;
        }
    </style>
</head>

<body>
    <table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">请填写要添加员工的信息</td>
        </tr>
    </table>
    <form action="save_emp.php" method="post">
        <!--这里是一个表单,意思是以post方式把下面输入的数据传到save_news.php页面. ,表单以</form>结束-->
        <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="30%" align="right">empno</td>
                <td width="70%" align="left"><input type="text" name="empno" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">ename</td>
                <td width="70%" align="left"><input type="text" name="ename" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">job</td>
                <td width="70%" align="left"><input type="text" name="job" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">mgr</td>
                <td width="70%" align="left"><input type="text" name="mgr" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">hiredate</td>
                <td width="70%" align="left"><input type="text" name="hiredate" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">sal</td>
                <td width="70%" align="left"><input type="text" name="sal" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">comm</td>
                <td width="70%" align="left"><input type="text" name="comm" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">deptno</td>
                <td width="70%" align="left"><input type="text" name="deptno" size="30" /></td>
            </tr>
        </table>
        <table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center"><input type="submit" name="submit1" value="确定添加" /></td>
            </tr>
        </table>
    </form>
</body>

</html>