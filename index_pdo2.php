<?php 

require_once 'vendor/autoload.php';
ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username','root');
ORM::configure('password','root');
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


		<?php 

		$tab = ORM::for_table('mes_chaussettes')->find_many();
		foreach ($tab as $tableau) {

			echo $tableau->id.'</br>';
			
		}

	
	 ?>
	
	</table> 

</body>
</html>