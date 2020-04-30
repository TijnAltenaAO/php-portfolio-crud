<?php
    function getLogin($con)   
{
        $loginresult = "<h1>Inloggen</h1>";
        if(!empty($_POST['login']) && (isset($_POST['login']))) 
        {
            $gebruikersnaam = $_POST["gebruikersnaam"];
            $wachtwoord = $_POST["wachtwoord"];

        $dbquery = "SELECT * FROM `gebruikers` WHERE `gebruikersnaam` = '" . $gebruikersnaam . "' AND `wachtwoord` = '" . $wachtwoord . "'";  
        $gebruikers = mysqli_query($con, $dbquery);
        $gebruiker = mysqli_fetch_assoc($gebruikers);  

            if  ($gebruiker != null)   
            {
                echo "Welkom!";
                $_SESSION["sessie1"] = $gebruiker["gebruikersnaam"];
                $_SESSION["profiel"] = $gebruiker["profiel"];
                
            }
            else
            {
                echo "Uw wachtwoord of gebruikersnaam klopt niet!";
            }
        }   
        elseif (isset($_POST["uitlog"]))
        {
            $_SESSION = array();
        }
        
        if (empty($_SESSION["sessie1"]))
        {
            $loginresult .= '<div id="login">
                <form method="post">
                <h3>Gebruikersnaam</h3>
                <input type="text" name="gebruikersnaam" placeholder="voer gebruikersnaam in!">
                <h3>Wachtwoord</h3>
                <input type="password" name="wachtwoord" placeholder="voer wachtwoord in!">
                <input type="submit" value="inloggen" name="login">
            </form>
        </div>';    
        }
        else
        {
            $loginresult .= '<div id="logout">
                <form method="post">
                    <input type="submit" name="uitlog" value="uitloggen">
                </form>
            </div>';
        }
        return $loginresult;
    }
?>