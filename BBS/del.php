<html>  
<head>  
    <title>BBS</title>  
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>  
<body>  
    <center>  
    <h2  class="display-1">BBS</h2>
    <a href = "BulletinBoardSystem.php">添加留言</a>  
    <a href = "show.php" >查看留言</a>  
    <hr width = "90%">  
    <h5>删除留言</h5>  
    
    <?php  
    //1. 获取要删除留言号  
    $id = $_GET["id"];  
    // 2.从留言message.txt中获取留言信息  
    $info = file_get_contents("message.txt");  
    
    //3.（将留言信息以@@@符号拆分成留言数组）  
    $lylist = explode("@@@",$info);  
    //4.使用unset删除指定的id留言  
    unset($lylist[$id]);  
    //还原留言信息为字串，并写回留言文件  
    $newinfo = implode("@@@",$lylist);  
    file_put_contents("message.txt",$newinfo);  
    echo "删除成功！";  
    
    
        
    ?>  
    </center>  
  
</body>  
</html>  
