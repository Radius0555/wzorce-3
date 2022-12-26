<?php

class Uppercase implements Strategy
{
  private $text;

  public function format($text)
  {
    $this->text = $text;
    echo strtoupper($this->text);
  }
}

?>
