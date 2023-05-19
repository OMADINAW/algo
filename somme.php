<!DOCTYPE html>
<html>
<head>
  <title>Calcul de la somme des N premiers nombres entiers</title>
</head>
<body>

  <h1>Calcul de la somme des N premiers nombres entiers</h1>

  <form action="" method="post">
    <label for="number">Entrez un nombre N :</label>
    <input type="number" id="number" name="number">
    <button type="submit">Calculer</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $N = $_POST["number"];

    if (!is_numeric($N) || $N < 1 || floor($N) != $N) {
      echo "<p>Veuillez entrer un nombre entier positif valide.</p>";
    } else {
      $sum = 0;
      for ($i = 1; $i <= $N; $i++) {
        $sum += $i;
      }

      echo "<p>La somme des $N premiers nombres entiers est : $sum</p>";
    }
  }
  ?>

</body>
</html>

