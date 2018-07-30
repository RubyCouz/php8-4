
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4</title>
</head>
<body>
  <p>
  <?php

    echo 'Salut ' . $_COOKIE['pseudo'] . ', ton mot de passe est : ' . $_COOKIE['password'];
  ?>
</p>
</body>
</html>
