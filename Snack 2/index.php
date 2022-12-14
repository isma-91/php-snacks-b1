<?php 
/*
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */
?>

<?php 
$name = isset($_GET['name']) ? $_GET['name'] : '';
$mail = isset($_GET['mail']) ? $_GET['mail'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';

$pos_at = strpos($mail, '@');
$pos_dot = strpos($mail, '.', $pos_at);

		if (strlen(trim($name)) > 3 && $pos_at && $pos_dot && is_numeric($age)) {
			$message = 'Accesso riuscito';
		} else {
			$message = 'Accesso negato';
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="get">
		<label for="name">Nome da controllare</label>
		<input type="text" name="name" id="name">

		<label for="mail">Email da controllare</label>
		<input type="mail" name="mail" id="mail">

		<label for="age">Età da controllare</label>
		<input type="text" name="age" id="age">

		<button>Controlla</button>
	</form>

  <h2><?= $message ?></h2>

</body>
</html>