<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie 4 Exercice 7</title>
</head>
<body>
  <main>
    <?php
    $gender="homme";
    $age=20;
    //ma fonction
    function genderAge($gender,$age){
      $sentence="Vous êtes ";
      if ($gender == "homme"){
        $sentence.="un homme et vous êtes ";
        if($age>=18){
          $sentence.="majeur.";
        }else{
          $sentence.="mineur.";
        }
      }else{
        $sentence.="une femme et vous êtes ";
        if($age>=18){
          $sentence.="majeure.";
        }else{
          $sentence.="mineure.";
        }
      }
      return $sentence;
    }
    // echo
    echo    "genre= ",$gender,"<br>",
    "age= ",$age,"<br>",
    genderAge($gender,$age);
    ?>
  </main>
</body>
</html>
