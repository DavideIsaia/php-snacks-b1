<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snack 3</title>
</head>

<body>
  <!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
  Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->
  <?php
  $posts = [
    '10/01/2019' => [
      [
        'title' => 'Post 1',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 1'
      ],
      [
        'title' => 'Post 2',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 2'
      ],
    ],
    '10/02/2019' => [
      [
        'title' => 'Post 3',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 3'
      ]
    ],
    '15/05/2019' => [
      [
        'title' => 'Post 4',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 4'
      ],
      [
        'title' => 'Post 5',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 5'
      ],
      [
        'title' => 'Post 6',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 6'
      ]
    ],
  ];
  ?>
  <ul>
    <?php
    for ($i = 0; $i < count(array_keys($posts)); $i++) {
      $current_date = array_keys($posts)[$i]; ?>
      <li>
        <h2>Post pubblicati il <?php echo $current_date; ?></h2>
        <?php
        for ($j = 0; $j < count($posts[$current_date]); $j++) {
          $current_post = $posts[$current_date][$j];
        ?>
          <ul>
            <li>
              <h3><?php echo $current_post['title']; ?></h3>
              <h4><?php echo $current_post['author']; ?></h4>
              <p><?php echo $current_post['text']; ?></p>
            </li>
          </ul>
        <?php } ?>
      </li>
    <?php
    }
    ?>
  </ul>
</body>

</html>