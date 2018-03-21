<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="makeUp.css">
	
</head>
<body>
    <header>
        
            <div class="main-wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
                <div class="nav-login">
                    <div class="loginInput">
                    <?php	//in deze php wordt er in de loginpagina gekeken of de gebruiker al is ingelogd door de session u_id te checken
                            if (isset($_SESSION['u_id'])) {                                     //form action geeft de url aan waar de verzonden info heen gaat
                                    echo '<form action="includes/logout.inc.php" method="POST">      
                                          <button type="submit" class="button" name="submit">Uitloggen</button></form>'; //submit zorgt ervoor dat de gebruiker naar de logout.inc.php gaat en daar worden de sessions leeg gemaakt en de gebruiker gaat terug naar de indez
                            }else{
                                    echo '<form action="includes/login.inc.php" method="POST">      
                                          <input type="text" class="input" name="uid" placeholder="Gebruikersnaam/e-mail">
                                          <input type="text" class="input" name="pwd" placeholder="Wachtwoord">
                                          <button type="submit" class="button" name="submit">Inloggen</button></form>
                                          <a href="signup.php">Sign up</a>'; //submit stuurt de logingegevens naar de login.inc.php waar ze worden gecheckt en opgeslagen in de session
                            }           //hierboven staat een link om aan te melden als je nog geen gebruiker bent
                    ?>
                     </div>   
                </div>
            </div>
        
    </header>

