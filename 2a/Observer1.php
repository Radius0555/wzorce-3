<?php

class Observer1 implements SplObserver
{
  public function update(SplSubject $subject)
  {
    echo '<p>Test 1</p>';
  }
}
