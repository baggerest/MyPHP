<?php
    include("config.php");
?>

<html>
    <head>
        <link rel=stylesheet type="text/css" href="style.css">
        <link rel='shortcut icon' href='index.ico' type='image/ico'>
        <script type="text/javascript" src="myscript.js"></script>
        <title><?php echo $showmsg['title'];?></title>
    </head>
    <body>
    <div align="center">
    </div>
        <div class="mainbtn">
            <a href=<?php echo($_SERVER['PHP_SELF']);?>><img src=index.ico style="width: 128px;height: 128px">
            <div class="btn"><?php echo $showmsg['main'];?></div></a>
        </div>
        <div class="language">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <select name="language_select">
                    <?php
                        foreach ($language as $value => $key){
                            $value = strtoupper($value);
                            $selectd = ($value==$server['language'])?" selected='selected'":"";
                            echo "<option value='{$value}' title='[ {$value} ] {$key}'{$selectd}>{$key}</option>";
                        }
                    ?>
                </select>
                <select name="timezone_select">
                    <?php
                        foreach ($timezone as $value){
                            foreach ($value as $key => $item){
                                $key = strtoupper($key);
                                if($key=='LABEL'){
                                    $timeset = $item;
                                    echo "<optgroup label='".$item."'>";
                                }else{
                                    $selectd =($key=='ASIA/TAIPEI')?" selected='selected'":"";
                                    echo "<option title='[ {$timeset} ] {$item}' value='{$key}'{$selectd}>{$item}</option>";
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