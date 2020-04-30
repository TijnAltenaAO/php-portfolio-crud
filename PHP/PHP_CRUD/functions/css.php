<?php
    function css($path, $ext) 
    {
        $css = glob($path.'/*.{'.$ext.'}', GLOB_BRACE);

        $out1 = "";

        foreach($css as $cssfile)  

        {

            $out1 .= '<link rel="stylesheet" type="text/css" href="'.$cssfile.'" />';

        }   

        return $out1;
    }
    
?>