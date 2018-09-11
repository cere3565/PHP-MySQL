<html>
    <head>
        <title>新增學生基本資料</title>
        <meta charset="utf8">
        <style type="text/css">
            #addtable tr td:sex-child{
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
                background-image:url("image/addstu.jpg") ;
            }
           
        </style>             
    </head>
    <body>
         <h2><a href="index.php">首頁</a></h2>
        <h1  style="font-family: 標楷體">新增學生資本資料</h1>
        <h3  style="font-family: 標楷體; font-size: 25px;">輸入相關資訊</h3>
        <?php                  
            $link = mysqli_connect('localhost','root','','cramschoolsystem');
            mysqli_set_charset($link,"utf8");			
            if(isset($_POST) && $_POST != NULL){
                $result = mysqli_query($link,"INSERT INTO student (sno, lname, fname, sphone, s_bdate) "
                        . "VALUES ('{$_POST['sno']}', '{$_POST['lname']}', '{$_POST['fname']}', '{$_POST['sphone']}', '{$_POST['s_bdate']}')");
            }
        ?>
        <form name="search" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <table id="addtable"  style="font-family: 標楷體; font-size: 25px;">
                <tr>
                    <td>學生編號(sno)：</td>
                    <td><input name="sno" type="text"></td>
                </tr>
                <tr>
                    <td>學生姓氏(lname)：</td>
                    <td><input name="lname" type="text"></td>
                </tr>
                <tr>
                    <td>學生名字(fname)：</td>
                    <td><input name="fname" type="text"></td>
                </tr>
                <tr>
                    <td>學生電話(sphone)：</td>
                    <td><input name="sphone" type="text"></td>
                </tr>
                <tr>
                    <td>學生生日(s_bdate)：</td>
                    <td><input name="s_bdate" type="text"></td>
                </tr>	
            </table>
            <br>
            <input type="submit" value="新增">
        </form>
        <br>查詢結果：<br>
        <?php            
            echo '<table border=1>';
            echo '<tr><th>學生編號</th><th>學生姓氏</th><th>學生名字</th><th>學生電話</th><th>學生生日</th></tr>';
            $result = mysqli_query($link,"SELECT * FROM student");
            while($obj = $result->fetch_object()){
                print_r('<tr><td>'.$obj->sno.'</td><td>'.$obj->lname.'</td><td>'.$obj->fname.'</td><td>'.$obj->sphone.'</td><td>'.$obj->s_bdate.'</td><tr>');
            }
            mysqli_close($link);
            echo '</table>';            
        ?>
    </body>
</html>
