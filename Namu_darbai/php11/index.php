<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if($_REQUEST['aukstis'] && $_REQUEST['plotis']){
        echo 'Stačiakampio plotas: ' . ($_REQUEST['aukstis'] * $_REQUEST['plotis']) ;
      } elseif($_REQUEST['aukstis'] || $_REQUEST['plotis']) {
        echo "Nevisi laukeliai įvesti";
      } else{ ?>
        <form action="<?php $_PHP_SELF; ?>" method="POST">
          Stačiakampio aukštis: <input type="number" name="aukstis"><br>
          Stačiakampio plotis: <input type="number" name="plotis"><br>
          <input type="submit">
        </form>
        <?php
      }
    ?>

  </body>
</html>
