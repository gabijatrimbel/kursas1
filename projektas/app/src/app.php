<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if(!empty($name) && !empty($email) && !empty($message)) {
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $from = '$email';
      $to = 'gabija.trimbel@gmail.com';
      $subject = 'Nauja žinutė';
      $autorius = 'Nuo: ' . $name . ', ' . $email;
      $zinute = htmlspecialchars($message);
      mail($to, $subject, $autorius, $zinute, $from);
      echo "<script>alert('Dėkojame. Jūsų žinutė gauta. Netrukus susisieksime');</script>";
    }
  }
  include('db.php');
 ?>
