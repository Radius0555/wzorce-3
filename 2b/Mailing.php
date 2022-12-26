<?php

class Mailing implements SplSubject
{
  private $_observers;
  public $state;

  public function __construct()
  {
    $this->_observers = new SplObjectStorage();
  }

  public function attach(SplObserver $observer)
  {
    $this->_observers->attach($observer);
  }

  public function detach(SplObserver $observer)
  {
    $this->_observers->detach($observer);
  }

  public function notify()
  {
    foreach($this->_observers as $observer)
    {
      $observer->update($this);
    }
  }

  public function add()
  {
    $this->state = true;
    $this->notify();
  }
}

?>
