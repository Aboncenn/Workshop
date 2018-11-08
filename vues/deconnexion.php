<?php
unset($_COOKIE['user']);
unset($_COOKIE['id']);
setcookie('user', null, -1, '/');
setcookie('id', null, -1, '/');
?>
