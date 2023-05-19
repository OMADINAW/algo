<!DOCTYPE html>
<html>
<head>
  <title>Déterminer si A est divisible par B</title>
</head>
<body>

  <h1>Déterminer si A est divisible par B</h1>

  <form action="" method="post">
    <label for="numberA">Entrez le nombre A :</label>
    <input type="number" id="numberA" name="numberA">

    <label for="numberB">Entrez le nombre B :</label>
    <input type="number" id="numberB" name="numberB">

    <button type="submit">Vérifier</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $A = $_POST["numberA"];
    $B = $_POST["numberB"];

    if (!is_numeric($A) || !is_numeric($B)) {
      echo "<p>Veuillez entrer des nombres valides pour A et B.</p>";
    } elseif ($B == 0) {
      echo "<p>Division par zéro n'est pas autorisée.</p>";
    } elseif ($A % $B == 0) {
      echo "<p>$A est divisible par $B.</p>";
    } else {
      echo "<p>$A n'est pas divisible par $B.</p>";
    }
  }
  ?>

</body>
</html>

