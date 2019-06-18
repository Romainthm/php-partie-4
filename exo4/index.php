<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Partie 4 Exercice 3</title>
  </head>
  <body>
    <main>
      <?php
      function cmp($num1,$num2){
        if ($num1>$num2) {
          return "num1 et plus grand que num2.";
        }elseif ($num1<$num2) {
          return "num1 et plus petit que num2.";
        }else {
          return "num1 et num2 sont egaux.";
        }
      }
      //premier test
      $num1=20; $num2=10;
        echo "<p>Nombre1 = ",$num1,"<br>","Nombre2 = ",$num2,"<br>","<b>",cmp($num1,$num2),"</b></p>";
      //deuxieme test
      $num1=70; $num2=80;
        echo "<p>Nombre1 = ",$num1,"<br>","Number2 = ",$num2,"<br>","<b>",cmp($num1,$num2),"</b></p>";
      //troisieme test
      $num1=20; $num2=20;
        echo "<p>Nombre1 = ",$num1,"<br>","Number2 = ",$num2,"<br>","<b>",cmp($num1,$num2),"</b></p>";
       ?>
    </main>
  </body>
</html>
