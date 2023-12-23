<?php

//$_COOKIE
setcookie("name", "Alex");
setcookie("name2", "Oleksii", time() + 3600 * 24 * 7, '/');
// setcookie("name2", "Oleksii", time() - 3600); //видаляє куку



var_dump($_COOKIE);
