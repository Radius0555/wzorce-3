<?php

/*

Metoda szblonowa - definuje konkretną metodę templateMethod(), która
implementuje metody abstrakcyjne w określonej kolejności.
Sekwencja operacji stanowi szkielet danego algorytmu.
Konkretna klasa (ConcreteClass) dziedziczy po klasie abstrakcyjnej i nadaje im
konkretne funkcjonalności.
*/

spl_autoload_register(function($class_name){
  include $class_name.'.php';
});

$logo = 'https://geekster.pl/wp-content/uploads/2018/03/ant-19473.png';
$content = 'Hello World!';
$copyright = 'Copyright 2022';

$site = new OneColumnTpl();
$site->getTemplate($logo, $content, $copyright);

?>
