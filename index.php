<?php
include("config.php");
include("connect.php");
include("function.php");
include("message.php");

    echo "<html>";
    echo "<head>";
    echo "<link rel='shortcut icon' href='index.ico' type='image/ico'>";
    echo "</head>";
    echo "<body>";

    echo "</body>";
    echo "</html>";

    class zz {
        var $ss = array(
            's1' => '123',
            's2' => '15'
        );
    }

    $copy = new zz;
    echo $copy->ss['s2'];
?>