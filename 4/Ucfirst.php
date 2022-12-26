<?php

class Ucfirst implements Strategy
{
  private $text;

  public function format($text)
  {
    $this->text = $text;
    echo ucfirst($this->text);
  }
}

?>
