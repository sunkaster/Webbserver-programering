<!DOCTYPE html>

<html lang="sv">

  <head>
     <meta charset="utf-8">
     <title>Logga in</title>
		 <link rel="stylesheet" href="css/stilmall.css">
	</head>
  <body id="login">
    <div id="wrapper">
	
      
		<?php
			require "masthead.php";	
			require "menu.php";
		?>
		
			<main> <!--Huvudinnehåll-->
				<section>
					 <form action="createUser.php" method="post">
						<p><label for="fname">Förnamn:</label>
						<input type="text" id="fname" name="fname"></p>
						<p><label for="ename">Efternamn:</label>
						<input type="text" id="fname" name="ename"></p>
						<p><label for="ename">Epost:</label>
						<input type="text" id="email" name="email"></p>
						<p><label for="ename">Adress:</label>
						<input type="text" id="adress" name="adress"></p>
						<p><label for="ename">Postnummer:</label>
						<input type="text" id="pnummer" name="pnummer"></p>
						<p><label for="ename">Ort:</label>
						<input type="text" id="ort" name="ort"></p>
						<p><label for="ename">Telefonummer:</label>
						<input type="text" id="tnummer" name="tnummer"></p>

            <p>
            <input type="submit" value="Logga in">
            </p>
          </form>
          <p class="create"><a href="#">Skapa användare</a></p>
				</section>
			</main>

    </div>
		<?php
			require "footer.php";
		?>

	</body>
</html>
