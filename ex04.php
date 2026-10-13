<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice4 - TP PHP</title>
</head>
<body>
  <h1>Exercice 4</h1>
  
  <?php
   $var1 = 42;       
   $var2 = "42";     
   $var3 = 15.8;     
   $var4 = true;     
   $var5 = false;    
   $var6 = null;  
  ?>
   
   <pre><?php var_dump($var1); ?></pre> 
   <pre><?php var_dump($var2); ?></pre> 
   <pre><?php var_dump($var3); ?></pre> 
   <pre><?php var_dump($var4); ?></pre> 
   <pre><?php var_dump($var5); ?></pre> 
   <pre><?php var_dump($var6); ?></pre> 

  <?php
   $val1 = (int) "42";
   $val2 = (int) 15.8;
   $val3 = (string) 42;
   
   echo "Affichage apres Conversions <br>";
   var_dump($val1); 
   echo "<br>";
   var_dump($val2);
   echo "<br>";
   var_dump($val3);

   echo "Affichage avec echo :<br>";
   echo "true : ";
   echo $var4;
   echo "<br>";
   echo "false : ";
   echo $var5; 
   echo "<br><br>";
   echo "Affichage avec var_dump() :<br>";
   var_dump($var4); 
   echo "<br>";
   var_dump($var5);
   $s1 = (bool) 0;
   $s2 = (bool) "0";
   $s3 = (bool) "PHP";
   $s4 = (bool) [];

echo "Conversion en bool :<br>";
var_dump($s1); 
echo "<br>";
var_dump($s2); 
echo "<br>";
var_dump($s3); 
echo "<br>";

var_dump($s4); 
?>

  
</body>
</html>