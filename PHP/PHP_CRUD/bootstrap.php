<?php
    function bootstrap($path)   
    {
        $phpfiles = glob($path ."/*.php"); // Zoek alle bestanden met een .php extension en sla deze op in een variabele (array)

        foreach ($phpfiles as $phpfile) // Loop door de array heen 
        {
            include($phpfile); //include elk bestand dat er in staat
        }
        
        return true;
    }
?>