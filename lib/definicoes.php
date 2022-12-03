<?php

header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

require ('./vendor/autoload.php');

define("DS", DIRECTORY_SEPARATOR);
define("APP_VERSION", '2022.12.03-001');

define ("STATUS", array(
    '1' => 'Ativo',
    '2' => 'Inativo'
));

define ("STATUS_ATIVO", 1);
define ("STATUS_INATIVO", 2);