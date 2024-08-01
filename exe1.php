<?php
    
        $string ='banana';
        $vogais = array('a','A','e','E','i','I','o','O','u','U');
        $res = str_replace($vogais,'*',$string);

        echo $res;

?>