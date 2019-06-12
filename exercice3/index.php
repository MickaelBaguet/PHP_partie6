<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 3</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 3 - PHP</h1>
        <h3>Partie 6</h3>
        <p class="lead">Faire une page index.php. Tester sur cette page que tous 
        les paramètres de cette URL existent et les afficher</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
    <a href="index.php?startDate=2/05/2016&endDate=27/11/2016" class="btn btn-primary">Afficher dates</a>
    <p>
        <?php
            if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
                echo 'Date début : ' . $_GET['startDate'] . ', Date fin : ' . $_GET['endDate'] . ' !';
            } else {
                // Il manque des paramètres, on avertit le visiteur
                echo 'Dates manquantes !';
            }
        ?>
    </p>
  </div>
</body>
</html>

