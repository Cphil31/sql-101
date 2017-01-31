<?php 
$bdd = new PDO('mysql:host=localhost;dbname=mon_armoire;charset=utf8','root','root');
$reponse = $bdd ->query("SELECT * FROM mes_chaussettes;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Mes Données </h1>

	<table>

		<?php while($donnees = $reponse->fetch()):?>

			<tr>
				<td><?php echo $donnees['id']; ?></td>
				<td><?php echo $donnees['pointure']; ?></td>
				<td><?php echo $donnees['temp_lavage']; ?></td>
				<td><?php echo $donnees['description']; ?></td>
				<td><?php echo $donnees['couleur']; ?></td>
				<td><?php echo $donnees['date_lavage']; ?></td>
				
			</tr>

		<?php endwhile; ?>

	</table> 

</body>
</html>