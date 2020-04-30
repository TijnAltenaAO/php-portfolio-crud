<?php
    function getDefault()   {
        if(isset($_GET["message"]))
        {
            echo $_GET["message"];
        }
        return "<h2>test</h2>";
    }
?>

