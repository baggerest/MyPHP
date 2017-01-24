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
            <a href=<?php echo($_SERVER['PHP_SELF']);?>><img src=index.ico style="width: 128px;height: 128px">
            <div class="btn"><?php echo $server['main'];?></div></a>
        </div>
        <div class="view">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <select name="YourLocation">
                    <?php
                        foreach ($language as $value => $key){
                            if(strtolower($value)=='zh-tw'){
                                echo "<option value={$value} SELECTED>{$key} / {$value}</option>";
                            }else{
                                echo "<option value={$value}>{$key} / {$value}</option>";
                            }
                        }
                    ?>
                </select>
            </form>
        </div>
    </body>
</html>