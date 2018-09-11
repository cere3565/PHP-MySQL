<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>課程資料刪除</title>
        <meta charset="utf8">
        <style type="text/css">
            #addtable tr td:first-child{
                text-align: right;
            }            
            body{
                background-size:100%;
                margin: 0; /*設定距離網頁邊界的寬度*/
                padding: 0; /*設定網頁留白的空間大小*/
                border: 0; /*設定邊框的大小*/
                overflow: hidden; /*將卷軸設定為隱藏*/
                height: 100%; /*設定網頁高度*/
                max-height: 100%; /*設定網頁最大高度*/                
                background-image:url("image/delclass.jpg") ;
            }
        </style>
    </head>
   <body>
        <h2><a href="index.php">首頁</a></h2>
        <h1 style="font-family: 標楷體">課程資料刪除</h1>
        <h3 style="font-family: 標楷體; font-size: 25px;">點選表格裡的刪除按鈕進行資料的刪除</h3>
        <?php
            $link = mysqli_connect('localhost','root','','cramschoolsystem');
			mysqli_set_charset($link,"utf8");
            if(isset($_POST) && $_POST != NULL){
                $result = mysqli_query($link,"DELETE FROM class WHERE cno = '{$_POST['cnum']}'");
            }
        ?>
        <br>老師資料的查詢結果：<br>
        <?php            
            echo '<table border=1>';
            echo '<tr><th>課程編號</th><th>課程名稱</th><th>課程總時數</th><th>課程學費</th><th>授課老師</th><th>上課教室</th><th>按鈕</th></tr>';
            $result = mysqli_query($link,"SELECT * FROM class");
            while($obj = $result->fetch_object()){
                print_r('<tr><td>'.$obj->cno.'</td><td>'.$obj->cname.'</td><td>'.$obj->chour.'</td><td>'.$obj->tuition.'</td><td>'.$obj->tssn.'</td><td>'.$obj->roomno.'</td><td>'    
			. '<form name=search action='.$_SERVER['PHP_SELF'].' method=post>'
                        . '<input name=cnum type=hidden value='.$obj->cno.'>'
                        . '<input type=submit value=刪除>'
                        . '</form></td></tr>');
            }
            mysqli_close($link);
            echo '</table>';            
        ?>
    </body>
</html>
