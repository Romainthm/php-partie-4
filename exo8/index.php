<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie 4 Exercice 8</title>
</head>
<body>
  <main>
    <?php
    //declaration des valeurs
    $n1=45;
    $n2=10;
    $n3=55;
    //fonction qui calcule la somme
    function sum($n1=1,$n2=1,$n3=1){
      return $n1+$n2+$n3;
    }
    echo "Si j'appelle ma fonction sans parametre le résultat est égal à <b>",sum(),"</b><br>";
    echo "Si j'appelle ma fonction avec parametre, elle me donne le somme des 3 valeurs:<br>";
    echo $n1," + ",$n2," + ",$n3," = <b>",sum($n1,$n2,$n3),"</b>";
    ?>
  </main>
</body>
</html>
