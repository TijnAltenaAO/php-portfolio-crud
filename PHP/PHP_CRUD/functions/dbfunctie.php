<?php
    function db_connect()   
    {
        $con = mysqli_connect(CONFIGURATIE["database"]["host"],CONFIGURATIE["database"]["username"], CONFIGURATIE["database"]["password"], CONFIGURATIE["database"]["name"]);
        if (mysqli_connect_error()) 
        {
            echo "database connectie error!";
        }
        return $con;
    }
?>