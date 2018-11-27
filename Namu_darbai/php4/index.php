<?php
$cities=['Berlynas', 'Roma', 'Londonas'];
$cities[] = 'Tokijas';
print_r($cities);

$cities2= [
  'tokijas' => 13.6,
  'vasingtonas' => 0.6,
  'maskva' => 11.5
];
$cities2['londonas']= 8.6;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li> <?php echo $cities[1]; ?></li>
    </ul>

    <ul>
      <li><?php echo $cities[3] ." - gyventojų skaičius: " . $cities2['tokijas'] ; ?></li>
      <li><?php echo "Vasingtonas - gyventojų skaičius: " . $cities2['vasingtonas'] ; ?></li>
      <li><?php echo "Maskva - gyventojų skaičius: " . $cities2['maskva'] ; ?></li>
      <li><?php echo $cities[2] ." - gyventojų skaičius: " . $cities2['londonas'] ; ?></li>
    </ul>
  </body>
</html>
