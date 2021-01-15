<!DOCTYPE html>
<html lang="sv">
  <head>
     <meta charset="utf-8">
     <title>Produkter</title>
		 <link rel="stylesheet" href="css/stilmall.css">
  </head>
  <body id="produkter">
    <div id="wrapper">
      
		<?php
			require "masthead.php";	
			require "menu.php";
			require "varor.php";
		?>
		
		<main> <!--Huvudinnehåll-->
			<section id="content">
				<h2>Varor</h2>
				<table>
					<thead>
						<tr>
							<th>Namn</th>
							<th>Beskrivning</th>
							<th>Bild</th>
							<th>Pris</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($varor as $vara){
							echo "<tr><td>";
							echo $vara[0];
							echo "</td><td>";
							echo $vara[1];
							echo "</td><td><img src='";
							echo $vara[3];
							echo "' alt='";
							echo $svara[1];
							echo "'></td><td>";
							echo $vara[2];
							echo "</td></tr>";
						}
						?>
						<!--<tr>
							<td>Äpple</td>
							<td>Grönt surt</td>
							<td><img src="bilder/apple.jpg" alt="Grönt surt"></td>
							<td>50</td>
							<td><a href="#">Köp</a></td>
						</tr>
						<tr>
							<td>Apelsin</td>
							<td>Orange söt</td>
							<td><img src="bilder/orange.jpg" alt="Orange söt"></td>
							<td>38</td>
							<td><a href="#">Köp</a></td>
						</tr>
						<tr>
							<td>Päron</td>
							<td>Gult saftigt</td>
							<td><img src="bilder/pear.jpg" alt="Gult saftigt"></td>
							<td>100</td>
							<td><a href="#">Köp</a></td>
						</tr>
						<tr>
							<td>Banan</td>
							<td>Gul böjd</td>
							<td><img src="bilder/banana.jpg" alt="Gul böjd"></td>
							<td>30</td>
							<td><a href="#">Köp</a></td>
						</tr>-->
					</tbody>
				</table>

			</section>
		</main>
		<?php
			require "footer.php";
		?>
	</div>
  </body>
</html>