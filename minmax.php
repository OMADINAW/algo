<!DOCTYPE html>
<html>
<head>
  <title>Recherche du minimum et du maximum</title>
</head>
<body>

  <h1>Recherche du minimum et du maximum</h1>

  <form action="" method="post">
    <label for="numbers">Entrez les nombres séparés par des virgules :</label>
    <input type="text" id="numbers" name="numbers">
    <button type="submit">Rechercher</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numbersString = $_POST["numbers"];

    // Vérification que la chaîne de nombres n'est pas vide
    if (empty($numbersString)) {
      echo "<p>Veuillez entrer au moins un nombre.</p>";
    } else {
      $numbers = explode(",", $numbersString);
      $numbers = array_map("trim", $numbers); // Supprime les espaces autour des nombres

      // Conversion des nombres en entiers
      $numbers = array_map("intval", $numbers);

      // Recherche du minimum et du maximum
      $min = $numbers[0];
      $max = $numbers[0];

      foreach ($numbers as $number) {
        if ($number < $min) {
          $min = $number;
        }
        if ($number > $max) {
          $max = $number;
        }
      }

      echo "<p>Le minimum est : $min</p>";
      echo "<p>Le maximum est : $max</p>";
    }
  }
  ?>

</body>
</html>
