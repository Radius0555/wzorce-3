<?php

/*
Stan - umożliwia zmianę zachowania obiektu, kiedy zmianie ulegnie jego
wewnętrzny stan. Wzorzec ten jest bardzo użyteczny i występuje
praktycznie wszędzie.
Przykładem z życia może być np:
przełącznik światła, który posiada dwa stany: włączony(ON) i wyłączony (OFF)
*/

spl_autoload_register(function($class_name){
  include $class_name.'.php';
});

$state = new Off();
$context = new Context($state);

$context->Run();
$context->Run();
$context->Run();
$context->Run();

?>
