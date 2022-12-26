<?php

class On extends State
{
  public function change(Context $context)
  {
    echo '<p> ON </p>';
    $context->setSate(new Off());
  }
}

?>
