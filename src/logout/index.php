<?php
session_start();

if (isset($_COOKIE['auth_token'])) {
    setcookie("auth_token", "", time() - 3600, "/", "", true, true);
}

session_unset();

session_destroy();

header("Location: /login");
exit;
?>