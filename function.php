<?php
    function TestIpPortState($IP,$Port,$ERROR_NO,$ERROR_STR)
    {
        if($fp=fsockopen($IP,$Port,$ERROR_NO,$ERROR_STR,(float)0.5))
        {
            return true;
        }else{
            echo $ERROR_NO.":".$ERROR_STR;
            return false;
        }
        return false;
    }
?>