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
    <h5>添加留言</h5>  

<?php  
    //执行留言信息添加操作  
    //1.获取要添加的留言信息，并补上其他辅助信息（ip地址、添加时间）  
    $title = $_POST["title"];  
    $author = $_POST["author"];  
    $content = $_POST["content"];  
    $ip = $_SERVER["REMOTE_ADDR"];  
    $addtime = time(); 

    //2.拼装留言信息  
    $ly = "{$title}##{$author}##{$content}##{$ip}##{$addtime}@@@";  
    //echo $ly; 

    //3. 将留言添加到message.txt文件中  
    $info = file_get_contents("message.txt");  
    file_put_contents("message.txt",$info.$ly);   
    //file_put_contents("message.txt",$ly); 直接输出会覆盖上一条留言！  
   
    //4.输出留言成功！
    echo "</br>" 
    echo "留言成功！";  

 ?>  
</center>  
  
</body>  
</html>  
