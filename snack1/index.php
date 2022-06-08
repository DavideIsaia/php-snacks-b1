<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snack 1</title>
</head>

<body>
  <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  Olimpia Milano - Cantù | 55-60 -->

  <?php
    $partite = [
      [
        "casa" => "Lakers",
        "ospite" => "Bulls",
        "pt-casa" => 80,
        "pt-ospite" => 86
      ],
      [
        "casa" => "Celtics",
        "ospite" => "Warriors",
        "pt-casa" => 120,
        "pt-ospite" => 100
      ],
      [
        "casa" => "Heat",
        "ospite" => "Cavaliers",
        "pt-casa" => 99,
        "pt-ospite" => 107
      ],
      [
        "casa" => "Knicks",
        "ospite" => "Pistons",
        "pt-casa" => 68,
        "pt-ospite" => 93
      ]
  ];
  ?>

  <ul>
    <?php for ($i = 0; $i < count($partite); $i++) {
      $partita = $partite[$i];
    ?>
      <li>
        <h3>Partita N° <?php echo $i+1?>:
          <?php echo $partita["casa"]; ?> - 
          <?php echo $partita["ospite"]; ?> | 
          <?php echo $partita["pt-casa"]; ?> -
          <?php echo $partita["pt-ospite"]; ?>
        </h3>
      </li>
    <?php } ?>
  </ul>
</body>

</html>