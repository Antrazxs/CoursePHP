<?php require '../app/functions/pages.php'?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Curso em PHP </title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
</head>
<body>
  <div class='container'>
    <?php 
      try{
        require loadPages();
      }catch(Exception $error){
        echo $error->getMessage();
      }
      ?>
  </div>
</body>
</html>