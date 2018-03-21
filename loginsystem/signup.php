<?php
	include_once 'header.php';
?>
	<section class="main-container"> 
		<div class="main-wrapper"> 
			<h2>Inschrijven</h2>
			<form class="signup-form" action="includes/signup.inc.php" method="POST"> <!--om geen gevoelige data in de url te krijgen moet er met post gezonden worden-->
				<input type="text" class="input" name="first" placeholder="Voornaam">
				<input type="text" class="input" name="last" placeholder="Achternaam">
				<input type="text" class="input" name="email" placeholder="E-mail">
				<input type="text" class="input" name="uid" placeholder="Gebruikersnaam">
				<input type="text" class="input" name="pwd" placeholder="Wachtwoord">
				<button type="submit" class="button" name="submit">Inschrijven</button>
			</form>
		</div>
	</section>
    </body>
</html>	