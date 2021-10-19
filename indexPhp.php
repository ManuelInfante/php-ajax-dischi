<?php 
require 'database/database.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Php-Dischi</title>
</head>
<body>
  
<header class="header-container d-flex justify-content-between">
    <div class="logo d-flex align-items-center px-3">
      <img src="./img/logo.png" alt="">
    </div>
</header>

<div class="container mt-5">
  <div class="d-flex flex-wrap">
  <?php foreach ($db as $key => $album) {?>
    <div class="album p-3 text-center">
      <div class="img-container">
        <img src="<?php echo $album['poster'] ?>" alt="">
      </div>
      <h2>
        <?php echo $album['title'] ?>
      </h2>
      <span>
        <?php echo $album['author'] ?>
      </span>
    </div>
  <?php } ?>
  </div>
</div>
</body>
</html>