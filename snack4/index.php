<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snack 4</title>
</head>

<body>
  <!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
  <?php
  $randoms = [];
  while (count($randoms) < 15) {
    $element = rand(1, 50);
    if (!in_array($element, $randoms)) {
      $randoms[] = $element;
    }
  }
  ?>
  <h3><?php echo join(", ",$randoms); ?></h3>
</body>

</html>