<?php
    include("config.php");
    include("connect.php");
    include("function.php");
    include("message.php");
    include("allclass.php");
?>

<html>
    <head>
        <link rel='shortcut icon' href='index.ico' type='image/ico'>
        <title><?php echo $language['zh-tw'];?></title>
    </head>
    <body>
        <div align=center>
            <a href=<?php echo($_SERVER['PHP_SELF']);?>><img src=index.ico></a>
            <div><?php echo $server['language'];?></div>
        </div>
    </body>
</html>