
<?php

  $aprilTemp = [-4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];

  foreach ($aprilTemp as $dayTemp){
    $sum += $dayTemp;
  }

  echo 'Vidutinė temperatūra yra ' . round(($sum/count($aprilTemp))) . "<br>";

  // del rsort visos temperaturos yra isvardintos mazejimo tvarka

  rsort($aprilTemp);

  // array_slice panaudojimas bei rezultato pateikimas nebuvo pilnai aiskus, tad isbandziau skirtingus budus, kaip tai pateikti. Antras budas man atrodo geriausiai, nebent reikejo visa masyva isspausdinti.


  //pirmas budas

  echo 'Šalčiausios temperatūros: ';
  foreach (array_slice($aprilTemp, -5, 5) as $dayTemp => $actualTemp) {
    echo $actualTemp . ' ';
  }
  echo '<br>';

  echo 'Šilčiausios temperatūros: ';
  foreach (array_slice($aprilTemp, 0, 5) as $dayTemp => $actualTemp) {
    echo $actualTemp . ' ';
  }
  echo '<br><br>';

  //antras budas

  echo 'Šalčiausios temperatūros: ' . implode(', ', array_slice($aprilTemp, -5, 5)) . '<br>';
  echo 'Šilčiausios temperatūros: ' . implode(', ', array_slice($aprilTemp, 0, 5)) . '<br>';
  echo '<br>';

  // trecias budas

  echo 'Šilčiauios temperatūros: ';
  print_r(array_slice($aprilTemp, 0, 5, true));
  echo '<br>';

  echo 'Šalčiauios temperatūros: ';
  print_r(array_slice($aprilTemp, -5, 5, true));
  echo '<br>';

?>
