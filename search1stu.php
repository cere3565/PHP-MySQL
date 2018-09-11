<html>
    <head>
        <title>學生資料查詢</title>
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
                background-image:url("image/searchstu.jpg") ;
            }
             </style>
    </head>
    <body>
         <h2><a href="index.php">首頁</a></h2>
        <h1 style="font-family: 標楷體">學生資料查詢</h1><br><br>
        <form name="search" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" style="font-family: 標楷體; font-size: 25px;">
            輸入學生的姓氏：<input name="search" type="text">
            <input type="submit" value="確定">
        </form>
        <br>學生資料查詢結果：<br>
        <?php
		if(isset($_POST['search'])){
                $searchlname = $_POST['search'];
                echo '<table border=1>';
                echo '<tr><th>學生編號</th><th>學生姓氏</th><th>學生名字</th><th>學生電話</th><th>學生生日</th></tr>';
                $link = mysqli_connect('localhost','root','','cramschoolsystem');
				mysqli_set_charset($link,"utf8");
				$result = mysqli_query($link,"SELECT * FROM student WHERE lname like '%{$searchlname}%'");
                while($obj = $result->fetch_object()){
                    print_r('<tr><td>'.$obj->sno.'</td><td>'.$obj->lname.'</td><td>'.$obj->fname.'</td><td>'.$obj->sphone.'</td><td>'.$obj->s_bdate.'</td><tr>');
                }
                mysqli_close($link);
                echo '</table>';
            }
        ?>
    </body>
</html>

