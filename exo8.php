<!DOCTYPE html>
<html>
<head>
  <title>Déterminer si un nombre est premier</title>
</head>
<body>

  <h1>Déterminer si un nombre est premier</h1>

  <form action="" method="post">
    <label for="numberX">Entrez un nombre entier :</label>
    <input type="number" id="numberX" name="numberX">

    <button type="submit">Vérifier</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $X = $_POST["numberX"];

    if (!is_numeric($X) || $X != (int)$X || $X <= 1) {
      echo "<p>Veuillez entrer un nombre entier positif supérieur à 1.</p>";
    } else {
      $isPrime = true;

      for ($i = 2; $i <= sqrt($X); $i++) {
        if ($X % $i == 0) {
          $isPrime = false;
          break;
        }
      }

      if ($isPrime) {
        echo "<p>$X est un nombre premier.</p>";
      } else {
        echo "<p>$X n'est pas un nombre premier.</p>";
      }
    }
  }
  ?>

</body>
</html>
