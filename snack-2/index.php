<!-- Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  // echo strlen($name) . "<br>";
  // echo strpos($mail, '.') . "<br>";
  // echo strpos($mail, '@') . "<br>";
  // echo is_numeric($age) . "<br>";

  if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') && is_numeric($age)) {
    echo "<div style='color: green; font-weight: 600;''>Accesso RIUSCITO!</div>";
  } else {
    echo "<div style='color: red; font-weight: 600;''>Accesso NEGATO!</div>";
  }

 ?>
