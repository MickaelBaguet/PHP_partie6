<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 5</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 5 - PHP</h1>
        <h3>Partie 6</h3>
        <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
            existent et les afficher: index.php?week=12</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
    <a href="index.php?week=12" class="btn btn-primary">Afficher info</a>
    <p>
        <?php
            if (isset($_GET['week'])) {
                echo 'Week : ' . $_GET['week'] . ' !';
            } else {
                // Il manque des paramètres, on avertit le visiteur
                echo 'Info manquante !';
            }
        ?>
    </p>
  </div>
</body>
</html>

