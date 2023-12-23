<?php
//$_SESSION

// $_SESSION['myName'] = "Oleksii";

// $_SESSION['mySettings'] = ["test", 342, true];

// unset($_SESSION['myName']); //видалити змінну

//session_unset(); //не приймає аргументів, видаляє все що було в
// в змінній $_SESSION, але не видаляє файл, лише очищуючи його


//session_destroy(); //видаляє файл сесії

// echo serialize($_SESSION);
//unserialize

// var_dump($_SESSION);



session_start();

define("ADMINPASS", "123123");


if (!empty($_POST['password'])) {
  if ($_POST['password'] === ADMINPASS) {
    $_SESSION['access'] = true;
    $_SESSION['errors'] = "You are authorized";
  } else {

    $_SESSION['errors'] = 'Wrong password';
  }
}


if (isset($_GET['logout']) && $_GET['logout'] == 1) {
  session_unset();
  header(("Location: index.php"));
}

if (isset($_SESSION['access'])) {
  echo $_SESSION['errors'];
  echo '<a href="index.php?logout=1">LogOut</a>';
} else if (isset($_SESSION['errors'])) {
  echo $_SESSION['errors'];
} else {
?>

  <form action='' method="POST">
    <input type="password" name="password" placeholder='password'>
    <button>LogIn</button>
  </form>
<?php } ?>