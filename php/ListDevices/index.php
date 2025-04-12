<html>
    <head>
        <meta http-equiv="Content-Type" charset="UTF-8">
        <title>DANH SÁCH SẢN PHẨM</title>
        <style>
            body{margin:0px;}
            #container{width:1000px;}
            #banner{height: 150px; background-color: #39c;}
            #menu{height: 30px; background-color: red;}
            #lmenu{height: 400px; width: 200px; background-color: #fc6; float:left;}
            #content{height: 400px; width: 800px; background-color: #9f3; float:left;}
            #footer{height: 200px; background-color: #096;}

            .nav_bar{
                padding: 3px 5px;
                background-color: #036;
                color: white;
                font-weight: bold;
                margin-top: 5px;
            }
            .prd_item{
                width: 160px;
                height: 30px;
                background-color: #336;
                border: solid 1px white;
                color: white;
                text-align: center;
                padding: 10px 0px;
                margin: 0px 3px 3px 3px;
                float: left;
            }
        </style>
    </head>
    <body>
        <div id ="container">
            <div id ="banner"></div>
            <div id ="menu"></div>
            <div id ="lmenu">
                <?php include "lmenu.php";?>
            </div>
            <div id ="content">
                <?php include "content.php";?>
            </div>
            <br style ="clear:both;">
            <div id ="footer"></div>
        </div>
        
    </body>
</html>