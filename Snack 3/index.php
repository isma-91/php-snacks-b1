<?php 
/*
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 */
?>
<?php 
  $num_array = [];
      while (count($num_array) < 15) {
        $random_number = rand(1, 100);

        if (!in_array($random_number, $num_array)){
          $num_array[] = $random_number;
        } 
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
  <ul>
    <?php for( $i = 0; $i < count($num_array); $i++) { ?>
      <li><?= $num_array[$i] ?></li>
    <?php } ?>
	</ul>
  <?php print_r($num_array[14]) ?>
</body>
<?php
/*
<?php
  $num_array = [];
  $i = 0;
  while (count($num_array) < 15) {
    
    $random_number = rand(1, 100);

    if (!in_array($random_number, $num_array)){
      $num_array[] = $random_number;
    }
    
  ?>
    <pre>
      <?php print_r($num_array[$i]); ?>
    </pre>
<?php
  $i++;
}?>
*/
?>
</html>