<?php
    function getGallery()
    {
        $img = glob('articles/fotos/*.{jpg,png}', GLOB_BRACE);
        $out = "hier kan u uw gallerij zien!";
        
        foreach($img as $foto)  
        {
            $out .= '<img src="'.$foto.'" /></br>';
        }

        return $out;
    }
?>