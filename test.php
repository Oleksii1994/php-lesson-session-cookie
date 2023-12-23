<?php session_start();
if (!isset($_SESSION['access'])) die('you are not an admin');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  // echo $_SESSION['myName'];
  // var_dump($_SESSION['mySettings']);






  echo "Admin Page"
  ?>

</body>

</html>