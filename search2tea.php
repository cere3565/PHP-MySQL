<html>
    <head>
        <title>老師資料查詢</title>
        <meta charset="utf8">
        <style>
           body{
                background-size:100%;
                margin: 0; /*設定距離網頁邊界的寬度*/
                padding: 0; /*設定網頁留白的空間大小*/
                border: 0; /*設定邊框的大小*/
                overflow: hidden; /*將卷軸設定為隱藏*/
                height: 100%; /*設定網頁高度*/
                max-height: 100%; /*設定網頁最大高度*/                
                background-image:url("image/searchTea.jpg") ;
            }
             </style>
    </head>
    <body>
         <h2><a href="index.php">首頁</a></h2>
        <h1 style="font-family: 標楷體">老師資料查詢</h1><br><br>
        <form name="search" action="<?php $_SERVER['PHP_SELF'] ?>" method="post"  style="font-family: 標楷體; font-size: 25px;">
            輸入老師的姓氏：<input name="search" type="text">
            <input type="submit" value="確定">
        </form>
        <br>老師資料查詢結果：<br>
        <?php
			if(isset($_POST['search'])){
                $searchlname = $_POST['search'];
                echo '<table border=1>';
                echo '<tr><th>老師編號</th><th>老師姓氏</th><th>老師名字</th><th>老師生日</th><th>老師電話</th><th>老師薪水</th></tr>';
                $link = mysqli_connect('localhost','root','','cramschoolsystem');
				mysqli_set_charset($link,"utf8");
				$result = mysqli_query($link,"SELECT * FROM teacher WHERE lname like '%{$searchlname}%'");
                while($obj = $result->fetch_object()){
                    print_r('<tr><td>'.$obj->tssn.'</td><td>'.$obj->lname.'</td><td>'.$obj->fname.'</td><td>'.$obj->tphone.'</td><td>'.$obj->t_bdate.'</td><td>'.$obj->tsalary.'</td><tr>');
                }
                mysqli_close($link);
                echo '</table>';
            }
        ?>
    </body>
</html>

