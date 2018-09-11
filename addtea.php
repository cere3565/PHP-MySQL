<html>
    <head>
        <title>新增老師基本資料</title>
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
                background-image:url("image/addtea.jpg") ;
            }
        </style>
    </head>
    <body>
        <h2><a href="index.php">首頁</a></h2>
        <h1  style="font-family: 標楷體">新增老師資本資料</h1>
        <h3  style="font-family: 標楷體; font-size: 25px;">輸入相關資訊</h3>
        <?php
            $link = mysqli_connect('localhost','root','','cramschoolsystem');
            mysqli_set_charset($link,"utf8");			
            if(isset($_POST) && $_POST != NULL){
                $result = mysqli_query($link,"INSERT INTO teacher (tssn, lname, fname, tphone, t_bdate, tsalary) "
                        . "VALUES ('{$_POST['tssn']}', '{$_POST['lname']}', '{$_POST['fname']}', '{$_POST['tphone']}', '{$_POST['t_bdate']}', '{$_POST['tsalary']}')");
            }
        ?>
        <form name="search" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <table id="addtable"  style="font-family: 標楷體; font-size: 25px;">
                <tr>
                    <td>老師編號(tssn)：</td>
                    <td><input name="tssn" type="text"></td>
                </tr>
                <tr>
                    <td>老師姓氏(lname)：</td>
                    <td><input name="lname" type="text"></td>
                </tr>
                <tr>
                    <td>老師名字(fname)：</td>
                    <td><input name="fname" type="text"></td>
                </tr>
                <tr>
                    <td>老師電話(tphone)：</td>
                    <td><input name="tphone" type="text"></td>                   
                </tr>
                <tr>
                     <td>老師生日(t_bdate)：</td>
                    <td><input name="t_bdate" type="text"></td>
                </tr>
                <tr>
                    <td>老師薪水(tsalary)：</td>
                    <td><input name="tsalary" type="text"></td>
                </tr>	
            </table>
            <br>
            <input type="submit" value="新增">
        </form>
        <br>查詢結果：<br>
        <?php            
            echo '<table border=1>';
            echo '<tr><th>老師編號</th><th>老師姓氏</th><th>老師名字</th><th>老師生日</th><th>老師電話</th><th>老師薪水</th></tr>';
            $result = mysqli_query($link,"SELECT * FROM teacher");
            while($obj = $result->fetch_object()){
                print_r('<tr><td>'.$obj->tssn.'</td><td>'.$obj->lname.'</td><td>'.$obj->fname.'</td><td>'.$obj->tphone.'</td><td>'.$obj->t_bdate.'</td><td>'.$obj->tsalary.'</td><tr>');
            }
            mysqli_close($link);
            echo '</table>';            
        ?>
    </body>
</html>

