<?php

if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$SESSION['usuID'] = 0;

if (!isset($mensagem)){
    $mensagem = '';
}

require_once 'login.php';