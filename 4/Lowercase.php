<?php

class Lowercase implements Strategy
{
  private $text;

  public function format($text)
  {
    $this->text = $text;
    echo strtolower($this->text);
  }
}

?>
