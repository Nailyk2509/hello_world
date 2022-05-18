<?php

public class HelloWorld() {
    string $word = "Hello Wolrd";
    function page() {
        echo '<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
   <strong>' $word '</strong>
</body>
</html>';
    }
} 
    ?>

