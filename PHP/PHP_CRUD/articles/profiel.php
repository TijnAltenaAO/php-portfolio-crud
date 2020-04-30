<?php
    function getProfiel()   {
        if(empty($_SESSION["sessie1"]) || empty($_SESSION["profiel"]) || $_SESSION["profiel"] < 1)   
        {
            
            header("Location: index.php?action=default&message= U heeft geen rechten om de pagina te bezoeken");
        }
        return "<h2>profiel</h2>";
        
    }
?>