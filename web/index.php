<?php
session_start();
$username = $_SESSION['username'] ?? '';
if ($username !== '') {
    echo <<<"TAG"
    <div>Привет, $username</div>
    <a href="exit.php">Выход</a>
    TAG;
} else {
    include 'greeting.html';
}
