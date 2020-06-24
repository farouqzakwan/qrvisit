<?php
    if(!function_exists('template_url')){
        function template_url($template,$path = null){
            return base_url('template/'.$template.'/'.$path);
        }
    }

    
?>