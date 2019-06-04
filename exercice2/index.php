<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 2</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 2 - PHP</h1>
        <h3>Partie 6</h3>
        <p class="lead">Faire une page index.php. Tester sur cette page que le paramètre age existe 
        et si c'est le cas l'afficher sinon le signaler</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
    <a href="index.php?lastname=Nemare&firstname=Jean&age=16" class="btn btn-primary">Afficher Age</a>
    <!-- Balise signifiant que la suite est en PHP -->
    <p>
        <?php
            $age = 16;
            //if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
            if (isset($_GET['age'])) {
                echo 'Tu as ' . $_GET['age'].' !';
            } else {
                // Il manque des paramètres, on avertit le visiteur
                echo 'Age manquant !';
            }
        ?>
    </p>
  </div>
</body>
</html>

