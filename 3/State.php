<?php

abstract class State
{
  abstract public function change(Context $context);
}

?>
