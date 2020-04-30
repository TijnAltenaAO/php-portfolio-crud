<?php
    function dropdownnav($con)  
    {
        $outmenu = null;

        if(empty($_SESSION["profiel"]))  
        {
            $profiel = 0;
        }
        else
        {
            $profiel = $_SESSION["profiel"];
        }
        
        $dbquery = "SELECT * FROM `phpsqlmenu` WHERE `profiel` <= $profiel ORDER BY `order`";  
        $navItems = mysqli_query($con, $dbquery);

        while ($navItem = mysqli_fetch_assoc($navItems))  {
            
            $outmenu .= '<li><a href="' . $navItem["href"] . '">' . $navItem["label"] . '</a></li>';
        }
    
      
        return $outmenu;
    }
?>
