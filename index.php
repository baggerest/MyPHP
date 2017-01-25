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
    <div align="center">
    </div>
        <div class="mainbtn">
            <a href=<?php echo($_SERVER['PHP_SELF']);?>><img src=index.ico style="width: 128px;height: 128px">
            <div class="btn"><?php echo $server['main'];?></div></a>
        </div>
        <div class="language">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <select name="language_select" onChange="changed(this);">
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
                <select name="timezone_select">
                    <?php
                        $timeset = '';
                        foreach ($timezone as $value){
                            foreach ($value as $key => $item){
                                if($key=='label'){
                                    $timeset = $item;
                                    echo "<optgroup label='".$item."'>";
                                }else{
                                    echo "<option title='".$timeset." - ".$item."' value='".$key."'>".$item."</option>";
                                }
                            }
                            echo "</optgroup>";
                        }
                    ?>
                </select>
            </form>
        </div>
    </body>
</html>