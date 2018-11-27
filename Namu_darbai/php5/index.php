<?php
$cities3=[
  'Tokijas' => [13.6, 1868, 'Japonija'],
  'Vasingtonas' => [0.6, 1790, 'Anglija'],
  'Maskva' => [8.6, 43, 'Anglija']
];
$cities3['Londonas'] = [8.6, 43, 'Anglija'];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li><?php echo 'Gyventojų skaičius: ' . $cities3['Londonas'][0] . ' mln.'; ?></li>
      <li><?php echo 'Įkurtas: ' . $cities3['Londonas'][1] . ' m.'; ?></li>
      <li><?php echo 'Šalis: ' . $cities3['Londonas'][2] ; ?></li>
    </ul>
  </body>
</html>
