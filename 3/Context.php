<?php

class Context
{
  private $state;

  public function __construct(State $object)
  {
    $this->state = $object;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function Run()
  {
    $this->state->change($this);
  }
}

?>
