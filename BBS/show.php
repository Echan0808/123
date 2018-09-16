<html>  
<head>  
    <title>BBS</title>  
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script>  
    function dodel(id){  
        if(confirm("确定要删除么？"))  
    {  
        window.location ='del.php?id='+id;   
    }  
    }  
    </script>  
</head>  

    <body>  
    <center>  
    <h2  class="display-1">BBS</h2>
    <a href="BulletinBoardSystem.php" ><kbd>添加留言</kbd></a>
    <a href="show.php"><kbd>查看留言</kbd></a>  
    <hr width = "90%">  
    <h5>查看留言</h5>  

    <table border = "1" width = "700" >  
        <tr>  
        <th>留言标题</th>  
            <th>留言人</th>  
            <th>留言内容</th>  
        <th>IP地址</th>  
    <th>留言时间</th>  
    <th>操作</th>  
        </tr>  
<?php  
  // 获取留言信息，解析后输出到表格中  
// 1.从留言message.txt中获取留言信息  
  $info = file_get_contents("message.txt");  
  // 2.去除留言内容最后的三个@@@符号  
  $info = rtrim($info,"@");  
  if(strlen($info)>=8){  
  // 3.以@@@符号拆分留言信息为一条一条的（将留言信息以@@@符号拆分成留言数组）  
  $lylist = explode("@@@",$info);  
     
  // 4.遍历留言信息数组，对每条留言做再次解析；  
  foreach($lylist as $k=>$v){  
   $ly = explode("##",$v);  
   echo "<tr>";  
   echo "<td>{$ly[0]}</td>";  
   echo "<td>{$ly[1]}</td>";  
   echo "<td>{$ly[2]}</td>";  
   echo "<td>{$ly[3]}</td>";  
   echo "<td>".date("Y-m-d H:i:s",$ly[4])."</td>";  
     echo "<td><a href = 'javascript:dodel({$k})'>删除</a></td>";  
   
  }  
  }  
     
?>  
    </center>  
    
    </body>  
</html>  
