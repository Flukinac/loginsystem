<?php
	include_once 'header.php';
?>
	<section class="main-container"> 
		<div class="main-wrapper"> 
			<h2>Sign up</h2>
			<form class="signup-form" action="includes/signup.inc.php" method="POST"> <!--om geen gevoelige data in de url te krijgen moet er met post gezonden worden-->
				<input type="text" name="first" placeholder="Voornaam">
				<input type="text" name="last" placeholder="Achternaam">
				<input type="text" name="email" placeholder="E-mail">
				<input type="text" name="uid" placeholder="Gebruikersnaam">
				<input type="text" name="pwd" placeholder="Wachtwoord">
				<button type="submit" name="submit">Sign up</button>
			</form>
		</div>
	</section>
<?php
	include_once 'footer.php';
?>
	