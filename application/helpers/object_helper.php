<?php

    if(!function_exists('object_to_array'))
    {
        function object_to_array($obj,$single=false) 
        {
            return (!empty($obj)) ? json_decode(json_encode(($single)?$obj[0]:$obj),true) : NULL;
        } 
    }

    
    
?>