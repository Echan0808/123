<html>

<head>
    <title>BBS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel"stylesheet" href="bbs.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>

<body>
    <center>
        <h2  class="display-1">BBS</h2>
        <a href="BulletinBoardSystem.php" ><kbd>添加留言</kbd></a>
        <a href="show.php"><kbd>查看留言</kbd></a>
        <hr width="90%">
        <h5>添加留言</h3>
        <form action="doAdd.php" method="post">
            <table width="450" border="0" cellpadding="30">
                <tr class="box">
                    <td align="right">标题：</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td align="right">留言者：</td>
                    <td><input type="text" name="author"></td>
                </tr>
                <tr>
                    <td align="right" valign="top">留言内容：</td>
                    <td><textarea name="content" row="5" cols="30"></textarea></td>
                </tr>
                <tr>

                    <td colspan="2" align="center"><input type="submit" value="提交">
                        <input type="reset" value="重置"></td>
                </tr>
            </table>
        </form>
    </center>

</body>

</html>