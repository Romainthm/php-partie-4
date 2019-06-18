<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Partie 4 Exercice 3</title>
  </head>
  <body>
    <main>
      <?php
      function concatStrings($stringun,$stringdeux){
      $resulte="$stringun $stringdeux";
      return $resulte;
      }
      echo "Ma fonction returnString retourne <b>",concatStrings("Bonjour","Romain"),"</b>";
       ?>
    </main>
  </body>
</html>
