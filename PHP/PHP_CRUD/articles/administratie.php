<?php
    function getAdministratie($con)   {
        if(empty($_SESSION["sessie1"]) || empty($_SESSION["profiel"]) || $_SESSION["profiel"] < 2)   
        {
            header("Location: index.php?action=default&message= U heeft geen rechten om de pagina te bezoeken");
        }

        $adminresult ="<h2>administratie</h2>";
        if (isset($_GET["type"]))
        {
            if($_GET["type"] == "delete")
            {
                $id = $_GET["id"];
                $dbquery = "DELETE FROM `classes` WHERE `id` = $id";  
                mysqli_query($con, $dbquery);
                
            }
            elseif ($_GET["type"] == "edit" || $_GET["type"] == "add")
            {
                if(isset($_POST["voegofwijzig"]))
                {
                    if ($_GET["type"] == "edit") 
                    {
                        $id = $_GET["id"];
                        $dbquery = "UPDATE `classes` SET `naam` = '" . $_POST["naam"] . "', `image` = '". $_POST["image"] . "' WHERE `id` = $id";  
                        mysqli_query($con, $dbquery);
                    }
                    elseif ($_GET["type"] == "add") 
                    {
                        $dbquery = "INSERT INTO `classes` (`naam`, `image`) VALUES ('" . $_POST["naam"] ."', '" . $_POST["image"] . "')";  
                        mysqli_query($con, $dbquery);
                    }
                }
                $name = null;
                $image = null;

                if ($_GET["type"] == "edit")    
                {
                    $id = $_GET["id"];
                    $dbquery = "SELECT * FROM `classes` WHERE `id` = $id";  
                    $classes = mysqli_query($con, $dbquery);
                    $class = mysqli_fetch_assoc($classes);
                    if($class != "");
                    {
                        $name= $class["naam"];
                        $image= $class["image"];
                    }
                }

                $adminresult .= "<div id='form'>";
                $adminresult .= "<form method='post'>";
                $adminresult .= "Naam: <input type='text' name='naam' value ='" . $name . "'><br/>";
                $adminresult .= "foto: <input type='text' name='image' value ='" . $image . "'><br/>";
                $adminresult .= "<input type='submit' name='voegofwijzig'></br>";
                $adminresult .= "</form>";
                $adminresult .= "</div><br/>";
            }
        }
        $dbquery = "SELECT * FROM `classes` ORDER BY `naam`";  
        $classes = mysqli_query($con, $dbquery);
        $adminresult .= "<table>";
        $adminresult .= "<tr><th>Naam</th><th>Afbeelding</th><th></th><th></th>";
        while ($class = mysqli_fetch_assoc($classes))  {
            
            $adminresult .= "<tr><td>" . $class["naam"] . "</td><td>" . $class["image"] . "</td><td><a href='?action=administratie&type=edit&id=" . $class["id"] . "'>bewerken</a></td><td><a href='?action=administratie&type=delete&id=" . $class["id"] . "'>verwijderen</a></td></tr>";
        }
        $adminresult .= "<tr><td colspan='4'><a href='?action=administratie&type=add'>Voeg een nieuwe class toe</a></td></tr>";
        $adminresult .= "</table>";
        return $adminresult;
    }
?>