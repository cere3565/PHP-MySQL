<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>資料庫管理期末Project</title>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width">
        <style>
            body{
                margin: 0; /*設定距離網頁邊界的寬度*/
                padding: 0; /*設定網頁留白的空間大小*/
                border: 0; /*設定邊框的大小*/
                overflow: hidden; /*將卷軸設定為隱藏*/
                height: 100%; /*設定網頁高度*/
                max-height: 100%; /*設定網頁最大高度*/
            }

            #framecontent{    /*設定左邊網頁的id*/
                position: absolute; /*將左邊網頁的位置設為固定*/
                top: 0; /*將左邊網頁上方的留白寬度設定為0*/
                bottom: 0; /*將左邊網頁下方的留白寬度設定為0*/
                left: 0; /*將左邊網頁左方的留白寬度設定為0*/
                width: 300px; /*將左邊的網頁寬度設為200*/
                height: 100%; /*將左邊的網頁高度設為100%*/
                overflow: hidden; /*將卷軸設定為隱藏*/
                background-image:  url("image/home2.gif") ; /*設定左邊網頁的背景*/
                color: black; /*設定左邊網頁的字體顏色*/
            }

            #maincontent{  /*設定右邊的id*/
                position: absolute; /*將右邊的位置設為固定*/
                top: 0; /*將右邊網頁上方的留白寬度設定為0*/
                left: 300px;  /*設定左邊網頁的寬度數值*/
                right: 0; /*將右邊網頁上方的留白寬度設定為0*/
                bottom: 0;  /*將右邊網頁上方的留白寬度設定為0*/
                overflow: auto;  /*設定為卷軸*/
                background-image:  url("image/home1.jpg");  /*設定右邊網頁的背景*/
                background-repeat: no-repeat;  /*設定右邊網頁背景為不重複*/
                background-size: 100% 100%;  /*設定左邊網頁背景的高度和寬度為 100%*/
            }

            .innertube{
                margin: 15px; /*設定距離網頁邊界的寬度*/
            }
            table,th,td
                {
                border:6px solid violet; /*設定表格邊框的寬度、粗細、顏色*/
                border-collapse:collapse; /*將邊框合併成單一線條的邊框*/
                }
        </style>
          
    </head>
    <body>
        
        <div id="framecontent">  <!--設定div 的 id名稱為 framecontent-->
            <div class="innertube"> <!--設定div 的 class 屬性名稱為 innertube-->
                <h1 style="font-family: 標楷體">二專補習班</h1>  <!--設定標題名稱和字型-->
                
                <h2 style="font-family: 標楷體"> <!--設定超連結字體的字型-->
                    <a href="search1stu.php">學生名單查詢</a><!--建立超連結和設定超連結名稱-->
                </h2>
                
                <h2 style="font-family: 標楷體"> <!--設定超連結字體的字型-->
                    <a href="search2tea.php">老師名單查詢</a><!--建立超連結和設定超連結名稱-->
                </h2>
                
                <h2 style="font-family: 標楷體"> <!--設定超連結字體的字型-->
                    <a href="updateclass.php">課程資料修改</a><!--建立超連結和設定超連結名稱-->
                </h2>
                
                <h2 style="font-family: 標楷體"> <!--設定超連結字體的字型-->
                    <a href="addstu.php">學生名單新增</a><!--建立超連結和設定超連結名稱-->
                </h2>
                
                 <h2 style="font-family: 標楷體"> <!--設定超連結字體的字型-->
                     <a href="addtea.php">老師名單新增</a><!--建立超連結和設定超連結名稱-->
                </h2>
                
                <h2 style="font-family: 標楷體"> <!--設定超連結字體的字型-->
                    <a href="delete1class.php">課程資料刪除</a><!--建立超連結和設定超連結名稱-->
                </h2>
            </div>
        </div>

        <div id="maincontent">   <!--設定div 的 id名稱為 maincontent-->
            <div class="innertube">  <!--設定div 的 class 屬性名稱為 innertube-->
                 <p style="text-align: center; font-family:標楷體; font-size: 45px;"><strong>二專補習班</strong></p>
                 <p style="text-align: center; font-family:標楷體; font-size: 20px;">
                    我相信大家看到我們補習班的名稱時一定會感到好奇何謂"二專補習班"?<br>
                    我們"二專補習班"其實真正的名稱是"第二專長補習班"<br>
                    我們這家補習班其實就是要建立每個人的第二專長的所在之處<br>
                    每個人除了擁有第一專長之外<br>
                    培養第二專長也是一件很重要的事情<br>
                    所以!!!!!~~~~~~~~~加入我們"二專補習班"吧!!!!!!!!!!!!!<br>
                    培養自己的第二專長<br>
                    為自己的世界創造出另外一片天空吧!!~~~~~~~~</p>
                 <center><img src="image/home3.jpg"  align="center" style="width:400px; height:250px;"></center>
            </div>
        </div>
    </body>
</html>
