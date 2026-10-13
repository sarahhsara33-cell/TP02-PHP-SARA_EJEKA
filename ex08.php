<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 8</title></head>
<body>
<h1>Exercice 8 - Tests multiples</h1>

<h2>1. Pairs 0 à 20</h2>
<?php
$i=0;
while($i<=20){
  echo ($i==10) ? "<b>$i</b> " : "$i ";
  $i+=2;
}
?>

<h2>2. While vs Do-While</h2>
<?php
$compteur=5; $c1=0;
while($compteur<5){ $c1++; $compteur++; }
echo "WHILE: $c1 execution(s)<br>";

$compteur=5; $c2=0;
do{ $c2++; $compteur++; }while($compteur<5);
echo "DO-WHILE: $c2 execution(s)<br>";
?>

<h2>3. Continue et Break</h2>
<?php
for($i=1;$i<=20;$i++){
  if($i==16) break;
  if($i%3==0) continue;
  echo "$i ";
}
?>
</body>
</html>