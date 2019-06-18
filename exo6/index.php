<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie 4 Exercice 6</title>
</head>
<body>
  <main>
    <?php
    $firstName="Romain";
    $lastName="Thomine";
    $age=20;
    function welcomeSentence($firstName,$lastName,$age){
      $sentence="Bonjour $firstName $lastName, tu as $age ans.";
      return $sentence;
    }
    echo "Prénom: ",$firstName,"<br>";
    echo "Nom: ",$lastName,"<br>";
    echo "Age: ",$age,"<br>";
    echo welcomeSentence($firstName,$lastName,$age);
    ?>
  </main>
</body>
</html>
