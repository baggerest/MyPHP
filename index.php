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
        <script type="text/javascript" src="myscript.js"></script>
        <title><?php echo $server['title'];?></title>
    </head>
    <body>
        <div class="mainbtn">
            <a href=<?php echo($_SERVER['PHP_SELF']);?>><img src=index.ico style="width: 128px;height: 128px">
            <div class="btn"><?php echo $server['main'];?></div></a>
        </div>
        <div class="view">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <select name="YourLocation" onChange="changed(this);">
                    <?php
                        foreach ($language as $value => $key){
                            $upper = strtoupper($value);
                            if($upper=='ZH-TW'){
                                echo "<option value={$upper} SELECTED>{$key} / {$upper}</option>";
                            }else{
                                echo "<option value={$upper}>{$key} / {$upper}</option>";
                            }
                        }
                    ?>
                </select>
            </form>
        </div>
    </body>
</html>