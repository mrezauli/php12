<?php

session_start();
var_dump($_SESSION);
$_SESSION['information'] = 'facebook.com';
$_SESSION['info'] = 'google';
var_dump($_SESSION);

session_destroy();
var_dump($_SESSION);
var_dump($_SESSION['info']);

//var_dump($je_kono_kicsu);