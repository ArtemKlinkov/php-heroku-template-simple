<?php

$username = $_POST['login'];

if ($username) {
    session_start();
    $_SESSION['username'] = $username;
}

header("Location: index.php");
exit;

