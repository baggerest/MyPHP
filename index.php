<?php
    include("message.php");
    include("config.php");
    include("connect.php");
    include("function.php");
    include("allclass.php");
?>

<html>
    <head>
        <link rel=stylesheet type="text/css" href="style.css">
        <link rel='shortcut icon' href='index.ico' type='image/ico'>
        <title><?php echo $server['title'];?></title>
    </head>
    <body>
        <div class="mainbtn">
            <a href=<?php echo($_SERVER['PHP_SELF']);?>><img src=index.ico>
            <div class="btn"><?php echo $server['main'];?></div></a>
        </div>
    </body>
</html>