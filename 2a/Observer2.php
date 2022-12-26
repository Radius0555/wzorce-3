<?php

class Observer2 implements SplObserver
{
  public function update(SplSubject $subject)
  {
    echo '<p>Test 2</p>';
  }
}

?>
