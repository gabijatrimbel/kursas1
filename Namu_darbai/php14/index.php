<?php

function copyrightText ($year){
  $currentYear = date('Y');
  if ($year >= $currentYear){
    echo '&copy; '. $currentYear;
  } else {
    echo '&copy; ' . $year . ' - ' . $currentYear;
  }
}
copyrightText(2030);

?>
