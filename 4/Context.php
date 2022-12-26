<?php

class Context
{
  private $strategy;
  private $text;

  public function __construct(Strategy $strategy)
  {
    $this->strategy = $strategy;
  }

  public function format($text)
  {
    $this->text = $text;
    $this->strategy->format($this->text);
  }
}

?>
