<!DOCTYPE html>
<html>
<head>
  <title>Calcul du binaire d'un entier</title>
</head>
<body>

  <h1>Calcul du binaire d'un entier</h1>

  <form action="" method="post">
    <label for="numberN">Entrez un nombre entier :</label>
    <input type="number" id="numberN" name="numberN">

    <button type="submit">Calculer</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $N = $_POST["numberN"];

    if (!is_numeric($N) || $N < 0 || $N != (int)$N) {
      echo "<p>Veuillez entrer un nombre entier positif valide.</p>";
    } else {
      $binary = "";

      while ($N > 0) {
        $remainder = $N % 2;
        $binary = $remainder . $binary;
        $N = (int)($N / 2);
      }

      echo "<p>Le binaire de $N est : $binary</p>";
    }
  }
  ?>

</body>
</html>
