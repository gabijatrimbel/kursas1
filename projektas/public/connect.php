<?php
require __DIR__ . '/../app/src/app.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../app/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../app/css/master.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  </head>
  <body>
    
    <?php
    include('../app/views/header.php');
    include('../app/views/connect-content.php');
    include('../app/views/footer.php');
    ?>

    <script type="text/javascript" src="../app/js/jquery-3.3.1.js"></script>

    <script type="text/javascript" src="../app/js/materialize.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.sidenav').sidenav();
      });
      $(document).ready(function(){
        $('.parallax').parallax();
      });
    </script>
  </body>
</html>
