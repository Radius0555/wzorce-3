<?php

/*
Strategia - definiuje grupę algorytmów, które mogą być stosowane wymiennie
w trakcie działania programu. Interfejs wzorca określa zadania (operacyjne),
które implementują konkretne strategie(KonkretnaStrategiaA, KonkretnaStrategiaB).
Klasa Kontekst ustawia referencję do interfejsu Strategia oraz implementuje
metodę kontekstu, która umożliwia dynamiczną zmianę używanej strategii.
*/

spl_autoload_register(function($class_name){
  include $class_name.'.php';
});

$text = 'example string';

$context = new Context(new Uppercase());
$context->format($text);

echo '<hr/>';

$context = new Context(new Lowercase());
$context->format($text);

echo '<hr/>';

$context = new Context(new Ucfirst());
$context->format($text);

echo '<hr>';

$context = new Context(new Lcfirst());
$context->format($text);

?>
