<?php

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    return logout();
}

function logout()
{
    session_start();
    unset($_SESSION['auth']);
    unset($_SESSION['id']);
    unset($_SESSION['right']);
    session_destroy();
}

 ?>
