<?php

var_dump($_COOKIE);
setcookie('book1', 'brain games');
setcookie('book2', 'hand games');
setcookie('book3', 'foot games');
setcookie('book1', 'head games');
setcookie('book1', null);
var_dump($_COOKIE);