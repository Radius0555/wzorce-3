<?php

class Lcfirst implements Strategy
{
  private $text;

  public function format($text)
  {
    $this->text = $text;
    echo lcfirst($this->text);
  }
}

?>
