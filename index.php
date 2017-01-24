<?php
    include("config.php");
    include("connect.php");
    include("function.php");
    include("message.php");
    include("allclass.php");
?>

<html>
    <head>
        <link rel=stylesheet type="text/css" href="style.css">
        <link rel='shortcut icon' href='index.ico' type='image/ico'>
        <title><?php echo $language['zh-tw'];?></title>
    </head>
    <body>
        <div align=center class="fixed">
            <a href=<?php echo($_SERVER['PHP_SELF']);?>><img src=index.ico></a>
            <div class="btn"><?php echo $server['language'];?></div>
        </div>
    </body>
</html>