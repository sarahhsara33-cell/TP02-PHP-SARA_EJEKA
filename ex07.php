<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - TP PHP</title>
</head>
<body>
  <h1>Exercice 7 - Tests multiples</h1>
   <?php
   $nombre = 7;
   for ($i = 1; $i <= 10; $i++) {
        echo "$nombre x $i = " . ($nombre * $i) . "<br>";
    }
    for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>
    