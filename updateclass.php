<html>
    <head>
        <title>
            課程資料修改
        </title>
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
                background-image:url("image/upclass.jpg") ;
            }
             </style>
    </head>
    <body>
        <h2><a href="index.php">首頁</a></h2>
        <h1 style="font-family: 標楷體">課程資料修改</h1>
        <h3 style="font-family: 標楷體; font-size: 25px;">點選表格裡的修改按鈕進行資料的修改</h3>
        <?php
           $link = mysqli_connect('localhost','root','','cramschoolsystem');
            mysqli_set_charset($link,"utf8");
			if(isset($_POST['classnum']) && $_POST != NULL){
                $result = mysqli_query($link,"UPDATE class SET cname='{$_POST['classname']}', chour='{$_POST['classhour']}', tuition='{$_POST['classtuition']}' WHERE cno = '{$_POST['classnum']}'");
            }
        ?>
        <br>學生資料的查詢結果：<br>
        <?php            
            echo '<table border=1>';
            echo '<tr><th>課程編號</th><th>課程名稱</th><th>課程總時數</th><th>課程學費</th><th>授課老師</th><th>上課教室</th><th>按鈕</th></tr>';
            $result = mysqli_query($link,"SELECT * FROM class");
            while($obj = $result->fetch_object()){
                if(isset($_POST['cnum'])){
                    if($_POST['cnum'] == $obj->cno){
                        print_r('<tr><form name=search action='.$_SERVER['PHP_SELF'].' method=post>'
                                . '<td>'.$obj->cno.'</td>'
                                . '<td><input name=classname type=text value="'.$obj->cname.'"></td>'
                                . '<td><input name=classhour type=text value='.$obj->chour.'></td>'					
                                . '<td><input name=classtuition type=text value='.$obj->tuition.'></td>'
                                . '<td>'.$obj->tssn.'</td>'
                                . '<td>'.$obj->roomno.'</td>'								
                            .'<td>'
                                . '<input name=classnum type=hidden value='.$obj->cno.'>'
                            . '<input type=submit value=確定>'
                            .'</td>'
                                . '</form></td><tr>');
                    }                
                }
                print_r('<tr><td>'.$obj->cno.'</td><td>'.$obj->cname.'</td><td>'.$obj->chour.'</td><td>'.$obj->tuition.'</td><td>'.$obj->tssn.'</td><td>'.$obj->roomno.'</td><td>'
                        . '<form name=search action='.$_SERVER['PHP_SELF'].' method=post>'
                        . '<input name=cnum type=hidden value='.$obj->cno.'>'
                        . '<input type=submit value=修改>'
                        . '</form></td><tr>');
            }
            mysqli_close($link);
            echo '</table>';            
        ?>
    </body>
</html>

