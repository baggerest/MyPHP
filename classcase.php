<?php
class zz {
    var $ss = array(
        's1' => '123',
        's2' => '15'
    );
}

$copy = new zz;
echo $copy->ss['s2'];
?>