<!DOCTYPE html>
<html>
<head>
  <title>Calcul du quotient et du reste</title>
</head>
<body>

  <h1>Calcul du quotient et du reste</h1>

  <form action="" method="post">
    <label for="numberA">Entrez le nombre A :</label>
    <input type="number" id="numberA" name="numberA">

    <label for="numberB">Entrez le nombre B :</label>
    <input type="number" id="numberB" name="numberB">

    <button type="submit">Calculer</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $A = $_POST["numberA"];
    $B = $_POST["numberB"];

    if (!is_numeric($A) || !is_numeric($B)) {
      echo "<p>Veuillez entrer des nombres valides pour A et B.</p>";
    } elseif ($B == 0) {
      echo "<p>Division par zéro n'est pas autorisée.</p>";
    } else {
      $quotient = (int)($A / $B);
      $reste = $A % $B;

      echo "<p>Le quotient de la division de $A par $B est : $quotient</p>";
      echo "<p>Le reste de la division de $A par $B est : $reste</p>";
    }
  }
  ?>

</body>
</html>
