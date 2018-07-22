<?php
session_start();

$_SESSION['login'] = false;
header('Location: ../view/login.php', true, 301);