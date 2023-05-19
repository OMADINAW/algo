<!DOCTYPE html>
<html>
<head>
  <title>Déterminer les diviseurs d'un entier</title>
</head>
<body>

  <h1>Déterminer les diviseurs d'un entier</h1>

  <form action="" method="post">
    <label for="numberX">Entrez un nombre entier :</label>
    <input type="number" id="numberX" name="numberX">

    <button type="submit">Calculer</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $X = $_POST["numberX"];

    if (!is_numeric($X) || $X != (int)$X) {
      echo "<p>Veuillez entrer un nombre entier valide.</p>";
    } else {
      echo "<p>Les diviseurs de $X sont :</p>";

      for ($i = 1; $i <= $X; $i++) {
        if ($X % $i == 0) {
          echo "<p>$i</p>";
        }
      }
    }
  }
  ?>

</body>
</html>

