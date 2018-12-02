<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if($_REQUEST['name'] && $_REQUEST['surname']){
      echo 'Jūsų vardas yra ' . $_REQUEST['name'] . ', o pavardė ' . $_REQUEST['surname'];
    } elseif($_REQUEST['name'] || $_REQUEST['surname']){
      echo "Neviskas įvesta";
    } else{
  ?>
    <form action="<?php $_PHP_SELF; ?>" method="POST">
      Vardas: <input type="text" name="name">
      Pavardė: <input type="text" name="surname">
      <input type="submit">
    </form>
    <?php
  }
  ?>
  </body>
</html>
