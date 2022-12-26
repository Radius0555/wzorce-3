<?php

class Off extends State
{
  public function change(Context $context)
  {
    echo '<p> OFF </p>';
    $context->setState(new On());
  }
}

?>
