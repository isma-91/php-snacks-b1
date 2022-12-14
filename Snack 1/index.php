<?php 
/*
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 */
?>
<?php 
$calendar = [
  [
    "home" => [
      "name" => "Cantu",
      "score" => 55,
    ],
    "away" => [
      "name" => "Olimpia Milano",
      "score" => 97,
    ]
  ],
  [
    "home" => [
      "name" => "Virtus Bologna",
      "score" => 87,
    ],
    "away" => [
      "name" => "Pall. Varese",
      "score" => 98,
    ]
  ],
  [
    "home" => [
      "name" => "Venezia",
      "score" => 101,
    ],
    "away" => [
      "name" => "Virtus Roma",
      "score" => 90,
    ]
  ],
  [
    "home" => [
      "name" => "Treviso",
      "score" => 84,
    ],
    "away" => [
      "name" => "Reggiana",
      "score" => 43,
    ]
  ],
]



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
  <ul>
    <?php
      $calendar_length = count($calendar);
      for ($i = 0; $i < $calendar_length; $i++) { ?>
      <?php 
      $team_home = $calendar[$i]['home']['name'];
      $team_away = $calendar[$i]['away']['name'];
      $score_home = $calendar[$i]['home']['score'];
      $score_away = $calendar[$i]['away']['score'];
    ?>
      <li><?php echo "${team_home} - ${team_away} | ${score_home} - ${score_away}" ?></li>
    <?php
    }?>
	</ul>
</body>
</html>