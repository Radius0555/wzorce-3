<?php

class Browser
{
  public function getLang()
  {
    return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  }
}

?>
