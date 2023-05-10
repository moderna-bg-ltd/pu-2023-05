<?php
  $str = 'Hello programmer!';
  $points = [
    'Tools',
    'Environments',
    'Programming languages'
  ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $str; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      width: 100%;
      margin:auto;
    }
    h1: {
      text-align: center;
    }
  </style>
  <link rel="stylesheet" href="css/w3.css">
</head>
<body>
  <h1><?php echo $str; ?></h1>
  <ul>
  <?php
  foreach ($points as $point) {
    echo '<li>' . $point . '</li>';
  }
  ?>
  </ul>
</body>
</html>
