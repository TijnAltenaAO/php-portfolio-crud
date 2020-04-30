<?php
function inhoud($con)   
{
    $inhoud = null;
    if( empty($_GET["action"])) {

        $_GET["action"] = "default";
            
        }
    $path = "./articles/" . $_GET["action"] . ".php";
    include($path);
    $functie = "get" . ucfirst($_GET["action"]);
    $inhoud = $functie($con);
    return $inhoud;
}
