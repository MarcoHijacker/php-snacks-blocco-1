<!-- Snack 4:
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php

    $newArray = [];

    while (count($newArray) < 15) {
      $number = rand(1, 100);
      if (!in_array($number, $newArray)) {
        $newArray[] = $number;
      }
    }

    for ($i=0; $i < count($newArray); $i++) {
      echo "[$i] " . $newArray[$i] . "<br>";
    }

 ?>
