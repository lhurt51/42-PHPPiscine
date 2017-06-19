<header>
	<a href="http://localhost:8080/StarCraftRemake/"><img id="logo" src="imgs/starlogo.jpeg" alt="our star fleet logo"></a>
	<i id="moto">Making all your Star Fleet dreams a reality!</i>
	<?php
	if ($_SESSION['loggued_on_user'] != "")
		echo '<div class="usr-auth-btns"><a href="logout.php">Sign out</a> / <a href="modifyPage.php">Modify acount</a></div>';
	else
		echo '<div class="usr-auth-btns"><a href="loginPage.php">Sign in</a> / <a href="createPage.php">Create an acount</a></div>'
	?>
	<div class="dropdown" id="main-drop">
		<button class="dropbtn" id="mainbtn"><h2>Menu</h2></button>
		<div class="dropdown-content" id="main-content">
			<a href="http://localhost:8080/StarCraftRemake/">Home</a>
			<a href="#">Factions</a>
			<a href="#">Ships</a>
			<a href="#">Guides</a>
		</div>
	</div>
</header>
