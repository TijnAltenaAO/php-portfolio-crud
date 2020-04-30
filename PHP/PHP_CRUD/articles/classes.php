<?php
    function getClasses($con)   {
        $classresult = "Hier kan u uw toegevoegde classes vinden!";
        $dbquery = "SELECT * FROM `classes` ORDER BY `naam`";  
        $classes = mysqli_query($con, $dbquery);
        while ($class = mysqli_fetch_assoc($classes))  {
            
            $classresult .= $class["naam"] . "<br><img src='articles/classes/" . $class["image"] . "' width='200px'><br>";
        }
        
        return $classresult;
    }
?>