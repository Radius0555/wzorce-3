<?php

/*
Obserwator używany jest do powiadamiania wybranych obiektów o zmianie stanu
innych obiektów.
Dzięki temu zastosowaniu tego wzorca można odizolować od siebie obiekty tak, że
nie są one ze sobą sztywno powiązane.
Zgodnie z poniższym diagrem we wzorcu występują dwa podstawowe typy obiektów:

*obserwowany - obiekt, który jest śledzony, kiedy zmieni się jego stan wywołuje
metodę powiadomObserwatorow() i informuje o tym wszystkich obserwatorow.
Obiekt obserwowany dodaje i usuwa obserwatorow korzystajac z dwoch metod:
dodajObserwatora(), usunObserwatora().

*obserwator - obiekt oczekujacy na powiaomienie o zmianie stanu obiektu
obserwowanego.Obserwator otrzymuje referencje do obiektu obserwowanego.
*/

spl_autoload_register(function($class_name){
  include $class_name.'.php';
});

$observer1 = new Observer1();
$observer2 = new Observer2();

$subject = new Subject();

$subject->attach($observer1);
$subject->attach($observer2);

$subject->detach($observer2);

$subject->notify();

?>
