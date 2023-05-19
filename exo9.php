<!DOCTYPE html>
<html>
<head>
  <title>Calcul de la somme des chiffres d'un entier</title>
</head>
<body>

  <h1>Calcul de la somme des chiffres d'un entier</h1>

  <form action="" method="post">
    <label for="numberN">Entrez un nombre entier :</label>
    <input type="number" id="numberN" name="numberN">

    <button type="submit">Calculer</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $N = $_POST["numberN"];

    if (!is_numeric($N) || $N != (int)$N || $N < 0) {
      echo "<p>Veuillez entrer un nombre entier positif valide.</p>";
    } else {
      $sum = 0;

      $digits = str_split($N);

      foreach ($digits as $digit) {
        $sum += (int)$digit;
      }

      echo "<p>La somme des chiffres de $N est : $sum</p>";
    }
  }
  ?>

</body>
</html>

