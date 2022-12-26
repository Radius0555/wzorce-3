<?php

abstract class Template
{
  protected $logo;
  protected $content;
  protected $copyright;

  abstract protected function getHeader($logo);
  abstract protected function getSection($content);
  abstract protected function getFooter($copyright);

  public function getTemplate($img, $text, $copy)
  {
    $this->logo = $img;
    $this->content = $text;
    $this->copyright = $copy;

    $this->getHeader($this->logo);
    $this->getSection($this->content);
    $this->getFooter($this->copyright);
  }
}

?>
