<!DOCTYPE html>
<html>
<head>
  <title>Calcul du produit de deux entiers</title>
</head>
<body>

  <h1>Calcul du produit de deux entiers</h1>

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
    } else {
      $product = 0;

      if ($B < 0) {
        $A = -$A;
        $B = -$B;
      }

      for ($i = 0; $i < $B; $i++) {
        $product += $A;
      }

      echo "<p>Le produit de $A par $B est : $product</p>";
    }
  }
  ?>

</body>
</html>
