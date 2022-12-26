<?php

class Web
{
  private $browser;

  public function __construct(Browser $browser)
  {
    $this->browser = $browser;
  }

  public function redirect()
  {
    header('Location: https://example.com/'.$this->browser->getLang());
    exit;
  }
}

?>
