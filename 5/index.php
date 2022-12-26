<?php

/*
Wstrzykiwanie zależności - to wzorzec projektowy, który pozwala tworzyć
luźne powiązania między klasami. Dzięki temu program staje się bardziej
rozszerzalny, elastyczny i można go łatwo testować.
preferowanym sposobem jest wstrzykiwanie zależności poprzez konstruktor.
*/

spl_autoload_register(function($class){
  include $class.'.php';
});

$browser = new Browser();
$url = new Web($browser);
$url->redirect();
?>
